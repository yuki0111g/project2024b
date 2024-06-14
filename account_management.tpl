<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アカウント管理</title>
</head>
<body>
    <h1>アカウント管理</h1>
    <a href="{$home_link}" class="back-link">ホームに戻る</a>
    <form action="account_management.php" method="post">
        <label for="username">ユーザー名:</label>
        <input type="text" id="username" name="username" value="{$username}" required><br>
        <label for="password">新しいパスワード:</label>
        <input type="password" id="password" name="new_password" placeholder="新しいパスワードを入力"><br>
        <label for="mail">メール:</label>
        <input type="email" id="mail" name="mail" value="{$user.mail}" required><br>
        <label for="address">住所:</label>
        <input type="text" id="address" name="address" value="{$user.address}" required><br>
        <label for="number">電話番号:</label>
        <input type="text" id="number" name="number" value="{$user.number}" required><br>
        <input type="submit" value="更新">
    </form>
</body>
</html>
