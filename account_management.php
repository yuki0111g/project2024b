<?php
session_start(); // セッションの開始

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

// ユーザーIDをセッションから取得
if (!isset($_SESSION['userid'])) {
    // ログインしていない場合はログインページにリダイレクト
    header('Location: login.php');
    exit();
}

$userid = $_SESSION['userid'];

// ユーザー情報を取得するSQL文を準備
$sqlUser = $pdo->prepare("SELECT * FROM users WHERE userid = :userid");
$sqlUser->bindParam(':userid', $userid);
$sqlUser->execute();
$user = $sqlUser->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "ユーザーが見つかりません。";
    exit();
}

// ユーザー名とパスワードをフォームの初期値として設定する
$username = $user['username'];
$password_placeholder = "********"; // パスワードのプレースホルダー

// フォームが送信された場合の処理
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // フォームから送信されたデータを取得
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $number = $_POST['number'];

    // パスワードが入力された場合はハッシュ化する
    if (!empty($new_password)) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

        // パスワードを更新するSQL文を準備・実行
        $updatePasswordStmt = $pdo->prepare("UPDATE users SET password = :password WHERE userid = :userid");
        $updatePasswordStmt->bindParam(':password', $hashed_password);
        $updatePasswordStmt->bindParam(':userid', $userid);
        $updatePasswordStmt->execute();
    }

    // メール、住所、電話番号を更新するSQL文を準備・実行
    $updateUserStmt = $pdo->prepare("UPDATE users SET username = :username, mail = :mail, address = :address, number = :number WHERE userid = :userid");
    $updateUserStmt->bindParam(':username', $username);
    $updateUserStmt->bindParam(':mail', $mail);
    $updateUserStmt->bindParam(':address', $address);
    $updateUserStmt->bindParam(':number', $number);
    $updateUserStmt->bindParam(':userid', $userid);
    $updateUserStmt->execute();

    // 更新後に自身のページをリロードする
    header('Location: account_management.php');
    exit();
}

// Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwSmarty = new pnwsmarty();
$smarty = $pnwSmarty->getTpl();
$smarty->assign("user", $user); // 取得したユーザー情報をSmartyに割り当てる
$smarty->assign("username", $username); // ユーザー名をSmartyに割り当てる
$smarty->assign("password_placeholder", $password_placeholder); // パスワードのプレースホルダーをSmartyに割り当てる
$smarty->assign("home_link", "home_smtylist.php");
$smarty->display("account_management/account_management.tpl"); // テンプレートの表示（account_management.tplは実際のテンプレートファイル名に置き換えてください）
?>
