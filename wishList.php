<?php

//欲しいものリスト

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

session_start();
$userid = $_SESSION['userid'];

//自分の欲しいものリストを表示
$sqlMerc = $pdo->prepare('SELECT * FROM wish_list 
INNER JOIN product ON wish_list.productId = product.productId
INNER JOIN users ON wish_list.userId = users.userid
WHERE wish_list.userId = '.$userid);

//$sqlMerc = $pdo->prepare('SELECT * FROM wish_list WHERE userId = '.$userid);

$sqlMerc->execute();
$resultMarc = $sqlMerc->fetchAll();



//Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("wishList/wishList.tpl");

?>