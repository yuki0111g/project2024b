<?php
/* Smarty version 3.1.39, created on 2024-07-05 09:23:00
  from 'C:\xampp\htdocs\project2024b\templates\home_smtylist\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66879f54bd33e6_38976093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb29596e8a1b4b0fb5e9f5430840ac9ffc8c7c4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\home_smtylist\\cart.tpl',
      1 => 1720164178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66879f54bd33e6_38976093 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        .order-button {
        display: inline-block;
        background-color: #ff69b4; /* ピンク色 */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
        width: 100%;
        }
        .order-button a {
            color: white;
            text-decoration: none;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }

        @media (min-width: 600px) {
            .order-button {
                width: auto;
            }
        }

    </style>
</head>
<body>
<form method="post" action="home_smtylist.php">
    <div class="container">
        <h1>カート</h1>
        <button class="order-button"><a href="./templates/kessai/kessai.html">注文画面へ進む</a></button>
        <table>
            <tr>
                <th>名前</th>
                <th>価格</th>
                <th>数量</th>
                <th>小計</th>
                <th><input type="submit" class="delete-btn" name="isClear" value="全削除"></th>
            </tr>
            <?php $_smarty_tpl->_assignInScope('total', 0);?>
            <?php $_smarty_tpl->_assignInScope('key', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['p']->value[1]*$_smarty_tpl->tpl_vars['p']->value[4]);?>

            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value[0];?>
</td>
                <td>&yen;<?php echo $_smarty_tpl->tpl_vars['p']->value[1];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value[4];?>
</td>
                <td>&yen;<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                <td>
                        <input type="hidden" name="delete_index" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                        <input type="submit" class="delete-btn" name="delete_item" value="削除">
                    </form>
                </td>
                <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['key']->value+1);?>

            </tr>
            <?php $_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['subtotal']->value);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
        <div class="total-amount">
            合計金額: &yen;<?php echo $_smarty_tpl->tpl_vars['total']->value;?>

        </div>
        <a href="home_smtylist.php" class="back-link">戻る</a>
    </div>
</body>
</html>
<?php }
}
