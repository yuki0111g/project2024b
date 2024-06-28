<?php
/* Smarty version 3.1.39, created on 2024-06-28 06:10:19
  from 'C:\xampp\htdocs\project2024b\templates\home\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_667e37abb7bf75_14626558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5854aac951fb83306b06dfed7368bcf006073c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\home\\list.tpl',
      1 => 1719547805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667e37abb7bf75_14626558 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
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

        .search-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        .back-link {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
            margin-top: 20px;
        }

        .add-to-cart-button {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .add-to-cart-button:hover {
            background-color: #218838;
        }

        .account-link {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
            margin-top: 20px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
<form "action="home_smtylist.php" method="POST">
<input type="submit" name="goCart" value = <?php echo 1;?>
>

<h1>一覧</h1><table border="1">


<tr>
    <td>カートに追加</td>
    <td>name</td>
    <td>price</td>
    <td>stock</td>
</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultMarc']->value, 'loop');
$_smarty_tpl->tpl_vars['loop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loop']->value) {
$_smarty_tpl->tpl_vars['loop']->do_else = false;
?>
    <tr>
    <td> <input type="number" size=20 maxlength="30" name="orderAmount">
    <input type="submit" name="wtb" value = <?php echo $_smarty_tpl->tpl_vars['loop']->value['orderId'];?>
></td>
    <td><?php echo $_smarty_tpl->tpl_vars['loop']->value['productName'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['value'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['loop']->value['stock'];?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
商品検索：<input type="text" size=20 maxlength="30" name="input1" value ""><br>
</table>
</form>
</body>
</html>
<?php }
}
