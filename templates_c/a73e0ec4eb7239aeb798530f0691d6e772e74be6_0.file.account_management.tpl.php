<?php
/* Smarty version 3.1.39, created on 2024-06-30 09:58:10
  from 'C:\xampp\htdocs\project2024b\templates\account_management\account_management.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_668110127b7b00_27619445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a73e0ec4eb7239aeb798530f0691d6e772e74be6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project2024b\\templates\\account_management\\account_management.tpl',
      1 => 1719734286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668110127b7b00_27619445 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アカウント管理</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
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
        
        .back-link {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007bff;
        }
        
        .account-form {
            margin-top: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            text-align: center; 
        }
        
        .form-group label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
            margin-right: 10px;
        }
        
        .form-group img {
            width: 32px;
            height: 32px;
            margin-right: 10px;
        }
        
        input[type=text],
        input[type=password],
        input[type=email] {
            width: calc(100% - 34px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease-in-out;
        }
        
        input[type=text]:focus,
        input[type=password]:focus,
        input[type=email]:focus {
            border-color: #007bff;
            outline: none;
        }
        
        input[type=submit] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
            margin-top: 20px; /* 上部にマージンを追加 */
        }
        
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            .form-group label {
                width: auto;
                margin-right: 5px;
            }
            
            .form-group img {
                margin-right: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>アカウント管理</h1>
        <a href="<?php echo $_smarty_tpl->tpl_vars['home_link']->value;?>
" class="back-link">ホームに戻る</a>
        <form action="account_management.php" method="post" class="account-form">
            <div class="form-group">
                <img src="./icon/human.svg" alt="ユーザー名">
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" required>
            </div>
            <div class="form-group">
                <img src="./icon/lock_24.svg" alt="パスワード">
                <label for="new_password">新しい<br>パスワード</label>
                <input type="password" id="new_password" name="new_password" placeholder="新しいパスワードを入力">
            </div>
            <div class="form-group">
                <img src="./icon/mail.svg" alt="メール">
                <label for="mail">メール</label>
                <input type="email" id="mail" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
" required>
            </div>
            <div class="form-group">
                <img src="./icon/house.svg" alt="住所">
                <label for="address">住所</label>
                <input type="text" id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
" required>
            </div>
            <div class="form-group">
                <img src="./icon/phone.svg" alt="電話番号">
                <label for="number">電話番号</label>
                <input type="text" id="number" name="number" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['number'];?>
" required>
            </div>
            <div class="form-group">
                <img src="./icon/credit.svg" alt="クレジットカード">
                <label for="credit">クレジットカード</label>
                <input type="password" id="new_credit" name="new_credit" maxlength="16" pattern="\d*" placeholder="クレジットカード番号（16桁）" required>
            </div>
            <div class="form-group">
                <input type="submit" value="更新">
            </div>
        </form>
    </div>
</body>
</html>
<?php }
}

