<?php
session_start(); // 新しいセッションを開始または既存のセッションを再開

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

// フォームが送信されたかどうかを確認
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password']; // フォームから送信されたパスワード
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);


    // ユーザーデータを取得するためのSQL文を準備
    $stmt = $pdo->prepare("SELECT userid, password FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();


    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // パスワードが正しい場合、セッションを開始
        $_SESSION['userid'] = $user['userid'];
        $_SESSION['username'] = $username;

        // ログイン後に指定のページにリダイレクト
        header('Location: home_smtylist.php');
        exit();
    } elseif (!$user) {
        // ユーザーが存在しない場合、新しいアカウントを作成する
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // ユーザーをデータベースに追加
        $insert_stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $insert_stmt->bindParam(':username', $username);
        $insert_stmt->bindParam(':password', $hashed_password);
        $insert_stmt->execute();


        // 新しいアカウントでログイン
        $_SESSION['userid'] = $pdo->lastInsertId(); // 新規ユーザーのIDをセッションに保存
        $_SESSION['username'] = $username;

        // ログイン後に指定のページにリダイレクト
        header('Location: home_smtylist.php');
        exit();
    } else {
        // 無効な資格情報
        echo "ユーザー名またはパスワードが間違っています。";
    }
} else {
    // フォームが送信されていない場合、ログインフォームを表示
    require_once("pnwsmarty.php");
    $pnwSmarty = new pnwsmarty();
    $smarty = $pnwSmarty->getTpl();
    $smarty->display("login.tpl");
}
?>
