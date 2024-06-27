<?php
/* Smarty version 3.1.39, created on 2024-06-27 09:21:41
  from 'C:\xampp\htdocs\project2024b\templates\cart\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_667d1305b0a202_19887121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b60fa3e74999ececb9fe75dc212938b317bf22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\cart\\cart.tpl',
      1 => 1719472896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d1305b0a202_19887121 (Smarty_Internal_Template $_smarty_tpl) {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>カート</h1>
        <table>
            <tr>
                <th>名前</th>
                <th>価格</th>
                <th>数量</th>
                <th>小計</th>
                <th>操作</th>
            </tr>
            <?php $_smarty_tpl->_assignInScope('total', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'p', false, 'key');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('subtotal', $_smarty_tpl->tpl_vars['p']->value[1]*$_smarty_tpl->tpl_vars['p']->value[2]);?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value[0];?>
</td>
                <td>&yen;<?php echo $_smarty_tpl->tpl_vars['p']->value[1];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['p']->value[2];?>
</td>
                <td>&yen;<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                <td>
                    <form method="post" action="home_smtylist.php">
                        <input type="hidden" name="delete_index" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                        <input type="submit" class="delete-btn" name="delete_item" value="削除">
                    </form>
                </td>
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
?>
