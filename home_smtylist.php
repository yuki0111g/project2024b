<?php
session_start(); // セッションの開始

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

$sqlMerc = $pdo->prepare("SELECT * FROM foods");
$sqlUsers = $pdo->prepare("SELECT * FROM users");

// SQL文の実行
$sqlUsers->execute();
$sqlMerc->execute();

// 結果の取得
$users = $sqlUsers->fetchAll(PDO::FETCH_ASSOC);
$foods = $sqlMerc->fetchAll(PDO::FETCH_ASSOC);

// Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwSmarty = new pnwsmarty();
$smarty = $pnwSmarty->getTpl();
$smarty->assign("users", $users); // 取得したユーザー一覧をSmartyに割り当てる
$smarty->assign("foods", $foods);
$smarty->assign("account_management_link", "account_management.php"); // アカウント管理ページへのリンクを割り当てる
$smarty->display("user_list.tpl"); // テンプレートの表示（user_list.tplは実際のテンプレートファイル名に置き換えてください）
?>

