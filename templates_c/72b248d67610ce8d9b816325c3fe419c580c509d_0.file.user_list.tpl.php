<?php
/* Smarty version 3.1.39, created on 2024-06-14 10:35:38
  from 'C:\xampp\htdocs\project2024b\user_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_666c00da8c1be0_44865856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b248d67610ce8d9b816325c3fe419c580c509d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\user_list.tpl',
      1 => 1718354136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c00da8c1be0_44865856 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- user_list.tpl -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <style>
        /* CSSスタイルをここに記述 */
    </style>
</head>
<body>
    <h1>User List</h1>
    <p><a href="<?php echo $_smarty_tpl->tpl_vars['account_management_link']->value;?>
">アカウント管理ページへ</a></p>
    <a href="login.php">ログインページへ戻る</a>
    
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

</body>
</html>
<?php }
}
