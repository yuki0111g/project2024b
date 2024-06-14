<?php

//Point: 学籍番号:xxxxxx   氏名:xxxxxxxxx

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

$sqlMerc = $pdo->prepare("SELECT * FROM foods");

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