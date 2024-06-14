<!DOCTYPE html>
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
        <a href="{$home_link}" class="back-link">ホームに戻る</a>
        <form action="account_management.php" method="post" class="account-form">
            <div class="form-group">
                <img src="./icon/human.svg" alt="ユーザー名">
                <label for="username">ユーザー名</label>
                <input type="text" id="username" name="username" value="{$username}" required>
            </div>
            <div class="form-group">
                <img src="./icon/lock_24.svg" alt="パスワード">
                <label for="new_password">新しい<br>パスワード</label>
                <input type="password" id="new_password" name="new_password" placeholder="新しいパスワードを入力">
            </div>
            <div class="form-group">
                <img src="./icon/mail.svg" alt="メール">
                <label for="mail">メール</label>
                <input type="email" id="mail" name="mail" value="{$user.mail}" required>
            </div>
            <div class="form-group">
                <img src="./icon/house.svg" alt="住所">
                <label for="address">住所</label>
                <input type="text" id="address" name="address" value="{$user.address}" required>
            </div>
            <div class="form-group">
                <img src="./icon/phone.svg" alt="電話番号">
                <label for="number">電話番号</label>
                <input type="text" id="number" name="number" value="{$user.number}" required>
            </div>
            <div class="form-group">
                <input type="submit" value="更新">
            </div>
        </form>
    </div>
</body>
</html>
