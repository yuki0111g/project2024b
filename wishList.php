<?php

//欲しいものリスト

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

$userid = "'yuki'";//仮のuserid

//商品を検索せずに表示
$sqlMerc = $pdo->prepare('SELECT * FROM wish_list 
INNER JOIN product ON wish_list.productId = product.productId
WHERE userId = '.$userid);

$sqlMerc->execute();
$resultMarc = $sqlMerc->fetchAll();



//Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("wishList/wishList.tpl");

?>