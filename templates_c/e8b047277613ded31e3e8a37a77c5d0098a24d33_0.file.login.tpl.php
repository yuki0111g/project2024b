<?php
/* Smarty version 3.1.39, created on 2024-07-05 07:45:36
  from 'C:\xampp\htdocs\2024b\templates\login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66878880302fb9_99340873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b047277613ded31e3e8a37a77c5d0098a24d33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024b\\templates\\login\\login.tpl',
      1 => 1719557622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66878880302fb9_99340873 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .login-form {
            display: flex;
            flex-direction: column;
        }
        .login-form label {
            font-weight: bold;
            margin-bottom: 8px;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease-in-out;
            width: 100%;
            box-sizing: border-box;
        }
        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            outline: none;
            border-color: #6e9dff; /* フォーカス時の色 */
        }
        .login-form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .login-form input[type="submit"]:hover {
            background-color: #45a049; /* ホバー時の色 */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>ログイン</h1>
        <form class="login-form" action="login.php" method="post">
            <label for="username">ユーザー名:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="ログイン">
        </form>
    </div>
</body>
</html>
<?php }
}
