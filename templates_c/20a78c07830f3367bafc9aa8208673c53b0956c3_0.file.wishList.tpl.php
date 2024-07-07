<?php
/* Smarty version 3.1.39, created on 2024-07-05 10:50:27
  from 'C:\xampp\htdocs\project2024b\templates\wishList\wishList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6687b3d3d33db1_62728205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a78c07830f3367bafc9aa8208673c53b0956c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\wishList\\wishList.tpl',
      1 => 1720169424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6687b3d3d33db1_62728205 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入りページ</title>
    
</head>
<body>
    <header>
        <h1>お気に入りページ</h1>
        
    </header>
    <main>
        <h2>欲しいものリスト</h2>
        <form id="wishlistForm" action="wishList.php" method="post">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
        <?php echo array_push($_smarty_tpl->tpl_vars['loop']->value,$_smarty_tpl->tpl_vars['key']->value);?>

            <div class="item">
                <input type="checkbox" id="apple" name="item" value="<?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
">
                <label for="apple">
                    <img src=<?php echo ("./productImages/").($_smarty_tpl->tpl_vars['loop']->value['image']);?>
 alt=<?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
>
                    <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>

                </label>
                    <input type="hidden" name="delete_index" value=<?php echo $_smarty_tpl->tpl_vars['loop']->value['whitelist_id'];?>
>
                    <input type="submit" class="cart-btn" name="add_cart" value="カートに追加(まだできない)">
                    <input type="submit" class="delete-btn" name="delete_item" value="削除">
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <button type="button" onclick="showSelectedItems()">購入したものをお気に入りに追加</button>
        </form>
       
    </main>
    <?php echo '<script'; ?>
>
        function showSelectedItems() {
            const form = document.getElementById('wishlistForm');
            const selectedItems = [];
            const checkboxes = form.querySelectorAll('input[name="item"]:checked');

            checkboxes.forEach(checkbox => {
                selectedItems.push(checkbox.value);
            });

            const selectedItemsList = document.getElementById('selectedItems');
            selectedItemsList.innerHTML = '';
            
            if (selectedItems.length > 0) {
                selectedItems.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.textContent = item;

                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = '削除';
                    deleteButton.onclick = function() {
                        listItem.remove();
                    };

                    listItem.appendChild(deleteButton);
                    selectedItemsList.appendChild(listItem);
                });
            } else {
                selectedItemsList.textContent = 'お気に入り商品がありません。';
            }
        }

        function searchFavoriteItems() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const items = document.querySelectorAll('.result li');

            items.forEach(item => {
                const label = item.textContent.toLowerCase();
                if (label.includes(searchInput)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function updateItemsList() {
            const itemLimit = document.getElementById('itemLimit').value;
            const items = document.querySelectorAll('.result li');
            let count = 0;

            items.forEach(item => {
                if (count < itemLimit) {
                    item.style.display = 'flex';
                    count++;
                } else {
                    item.style.display = 'none';
                }
            });
        }

        document.getElementById('itemLimit').addEventListener('input', updateItemsList);
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
