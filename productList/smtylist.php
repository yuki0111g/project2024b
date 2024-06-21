<?php

//商品一覧表示

require("../libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

//商品を検索せずに表示
$sqlMerc = $pdo->prepare('SELECT * FROM product;');
$sqlMerc->execute();
$resultMarc = $sqlMerc->fetchAll();



//Smartyのテンプレート設定
require_once("../pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("list.tpl");

?>