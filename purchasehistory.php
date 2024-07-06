<?php

//購入履歴

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();
session_start();
$userid = $_SESSION["userid"];//仮のuserid

//購入履歴と商品情報を内部結合
//合計金額算出済み
$sqlMerc = $pdo->prepare('SELECT * , order_history.num*product.value as sumValue FROM order_history 
INNER JOIN product ON order_history.productId = product.productId
WHERE userId = '.$userid);
$sqlMerc->execute();
$resultMarc = $sqlMerc->fetchAll();



//Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("purchaseHistory/list.tpl");

?>
