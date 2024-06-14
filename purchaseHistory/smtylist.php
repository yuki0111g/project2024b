<?php

//購入履歴_福山

require("../libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

$userid = "'tanuki'";//仮のuserid

$sqlMerc = $pdo->prepare("SELECT * FROM order_history where userId = $userid");


//SQL文の実行
$sqlMerc->execute();
//結果の取得
$resultMarc = $sqlMerc->fetchAll();

$product_array = [];

foreach($resultMarc as $row){
    //array_push($product_array,"productId = ".$row["productId"]);
    array_push($product_array,"productId = 2");
}

$keyProduct = implode(' OR ', $product_array);
var_dump("SELECT * FROM product where " ."$keyProduct");
$sqlMerc = $pdo->prepare("SELECT * FROM product where" ."$keyProduct");
$sqlMerc->execute();
$resultProduct = $sqlMerc->fetchAll();


//Smartyのテンプレート設定
require_once("../pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->assign("resultProduct", $resultProduct);
$smartyMerc->display("list.tpl");

?>