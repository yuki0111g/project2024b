<?php
/* Smarty version 3.1.39, created on 2024-07-05 15:38:00
  from 'C:\xampp\htdocs\2024b\templates\wishList\wishList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6687f738e0e980_16551289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db3472018c43d2e07016e46f246ac44f3f4c23f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\templates\\wishList\\wishList.tpl',
      1 => 1720167821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6687f738e0e980_16551289 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お気に入りページ</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 15px 20px;
        }
        header h1 {
            margin: 0;
        }
        header .search-bar {
            display: flex;
            align-items: center;
        }
        header .search-bar input {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        header .search-bar button {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        header .search-bar button:hover {
            background-color: #1e8449;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .item img {
            width: 60px;
            height: 60px;
            margin-right: 15px;
            border-radius: 50%;
        }
        .item label {
            flex: 1;
            font-size: 18px;
        }
        .result {
            margin-top: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .result ul {
            list-style-type: none;
            padding: 0;
        }
        .result li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .result button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .result button:hover {
            background-color: #c0392b;
        }
        button[type="button"] {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        button[type="button"]:hover {
            background-color: #27ae60;
        }
        @media (max-width: 600px) {
            .item img {
                width: 50px;
                height: 50px;
            }
        }
    </style>
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
            <div class="item">
                <input type="checkbox" id="apple" name="item" value="<?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
">
                <label for="apple">
                    <img src=<?php echo ("./productImages/").($_smarty_tpl->tpl_vars['loop']->value['image']);?>
 alt=<?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
>
                    <?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>

                </label>
                    <input type="hidden" name="delete_index" value=<?php echo $_smarty_tpl->tpl_vars['loop']->value['wishlist_id'];?>
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
