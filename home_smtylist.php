<?php
session_start(); // セッションの開始

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

// ユーザーのusernameとpassword一覧を取得するSQL文を準備
$sqlUsers = $pdo->prepare("SELECT username, password FROM users");

// SQL文の実行
$sqlUsers->execute();

// 結果の取得
$users = $sqlUsers->fetchAll(PDO::FETCH_ASSOC);

// Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwSmarty = new pnwsmarty();
$smarty = $pnwSmarty->getTpl();
$smarty->assign("users", $users); // 取得したユーザー一覧をSmartyに割り当てる
$smarty->assign("account_management_link", "account_management.php"); // アカウント管理ページへのリンクを割り当てる
$smarty->display("user_list.tpl"); // テンプレートの表示（user_list.tplは実際のテンプレートファイル名に置き換えてください）
?>

