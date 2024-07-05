<!-- user_list.tpl -->

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
    <p><a href="{$account_management_link}">アカウント管理ページへ</a></p>
    <a href="login.php">ログインページへ戻る</a>
    
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        {foreach $users as $user}
        <tr>
            <td>{$user.username}</td>
            <td>{$user.password}</td>
        </tr>
        {/foreach}
    </table>

</body>
</html>
