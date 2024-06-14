<?php
$search = $_POST["input1"];

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();
if($search == NULL){
    $sqlMerc = $pdo->prepare("SELECT product_id, stock, productName FROM merchandise LEFT OUTER JOIN food ON merchandise.product_id = food.productId");
}
else{
    $sqlMerc = $pdo->prepare("SELECT product_id, stock, productName FROM merchandise LEFT OUTER JOIN food ON merchandise.product_id = food.productId WHERE productName LIKE '{$search}'");
}
//SQL文の実行
$sqlMerc->execute();
//結果の取得
$resultMarc = $sqlMerc->fetchAll();

//Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("home/list.tpl");

?>