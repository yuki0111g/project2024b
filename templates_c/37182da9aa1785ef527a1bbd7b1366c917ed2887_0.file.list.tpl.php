<?php
/* Smarty version 3.1.39, created on 2024-07-19 03:38:47
  from 'C:\xampp\htdocs\project2024b_alpfa\templates\home_smtylist\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6699c3a7ef08c7_55929319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37182da9aa1785ef527a1bbd7b1366c917ed2887' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b_alpfa\\templates\\home_smtylist\\list.tpl',
      1 => 1721353073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6699c3a7ef08c7_55929319 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./templates/home_smtylist/list.css">
    <title>商品一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-container input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[name="goCart"] {
            padding: 10px 30px;
            font-size: 16px;
            position: absolute;
            top: 10%;
            right: 11%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[name="accountInfo"] {
            padding: 10px 30px;
            font-size: 16px;
            position: absolute;
            top: 10%;
            left: 11%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .product-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            height: auto;
        }

        .product-item img {
            width: 90px;
            height: 90px;
            object-fit: contain;
            margin-bottom: 10px;
            border-radius: 8px;
        }

        .product-item h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-item p {
            margin: 5px 0;
        }

        .product-item input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-top: 10px;
        }

        .product-item button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .product-item button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>商品一覧</h1>
        <div class="search-container">
            <form action="home_smtylist.php" method="POST">
                <input type="submit" name="accountInfo" value="登録情報">
                <input type="submit" name="goCart" value = "カートへ進む">
                <input type="submit" name="goPurchaseHistory" value = "購入履歴">
                <input type="submit" name="goWishlist" value="ほしいものリストへ進む">
                <input type="text" name="input1" placeholder="商品を検索">
                <input type="submit" value="検索">
            </form>
        </div>
        <div class="product-grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
            <div class="product-item">
                <a href=<?php echo ("./product_detail.php?product_id=").($_smarty_tpl->tpl_vars['loop']->value['productId']);?>
>
                    <img src=<?php echo ("./productImages/").($_smarty_tpl->tpl_vars['loop']->value['image']);?>
 alt="<?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
の画像">
                    <h3><?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</h3>
                    <p>￥<?php echo $_smarty_tpl->tpl_vars['loop']->value['value'];?>
</p>
                    <form action="home_smtylist.php" method="POST" style="display: inline;">
                        <input type="number" name="orderAmount" value="1" min="1" style="width: 60px; padding: 5px;">
                        <input type="hidden" name="wtb" value="<?php echo $_smarty_tpl->tpl_vars['loop']->value['productId'];?>
">
                        <button type="submit" class="add-to-cart-button">追加</button>
                    </form>
                </a>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</body>
</html>
<?php }
}
