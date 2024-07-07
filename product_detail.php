<?php

//商品一覧表示

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

$product_id = $_GET['product_id'];

//受け取ったproduct_idで絞り込み
$sqlMerc = $pdo->prepare('SELECT * FROM product WHERE productId = ' . $product_id);
$sqlMerc->execute();
$resultMarc = $sqlMerc->fetchAll();



//Smartyのテンプレート設定
require_once("pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("product_detail/productDetail.tpl");

?>