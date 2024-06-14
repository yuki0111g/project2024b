<?php
/* Smarty version 3.1.39, created on 2024-06-14 09:11:03
  from 'C:\xampp\htdocs\project2024b\account_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_666bed070fc356_88165576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824eae0eb6bf89693f10c109f48fee62c4611db6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\account_management.tpl',
      1 => 1718348467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666bed070fc356_88165576 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アカウント管理</title>
</head>
<body>
    <h1>アカウント管理</h1>
    <a href="<?php echo $_smarty_tpl->tpl_vars['home_link']->value;?>
" class="back-link">ホームに戻る</a>
    <form action="account_management.php" method="post">
        <label for="username">ユーザー名:</label>
        <input type="text" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" required><br>
        <label for="password">新しいパスワード:</label>
        <input type="password" id="password" name="new_password" placeholder="新しいパスワードを入力"><br>
        <label for="mail">メール:</label>
        <input type="email" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
" required><br>
        <label for="address">住所:</label>
        <input type="text" id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
" required><br>
        <label for="number">電話番号:</label>
        <input type="text" id="number" name="number" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['number'];?>
" required><br>
        <input type="submit" value="更新">
    </form>
</body>
</html>
<?php }
}
