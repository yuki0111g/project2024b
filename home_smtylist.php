<?php
require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

$sqlMerc = $pdo->prepare("SELECT product_id, stock, productName FROM merchandise LEFT OUTER JOIN food ON merchandise.product_id = food.productId");

//SQL文の実行
$sqlMerc->execute();
//結果の取得
$resultMarc = $sqlMerc->fetchAll();

// Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwSmarty = new pnwsmarty();
$smarty = $pnwSmarty->getTpl();
$smarty->assign("users", $users); // 取得したユーザー一覧をSmartyに割り当てる
$smarty->assign("account_management_link", "account_management.php"); // アカウント管理ページへのリンクを割り当てる
$smarty->display("user_list.tpl"); // テンプレートの表示（user_list.tplは実際のテンプレートファイル名に置き換えてください）
?>
