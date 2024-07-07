<?php

//欲しいものリスト

require ("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

session_start();
$userid = $_SESSION['userid'];

//自分の欲しいものリストを表示
$sqlMerc = $pdo->prepare('SELECT wishlist_id, productName, image FROM wish_list 
INNER JOIN product ON wish_list.productId = product.productId
INNER JOIN users ON wish_list.userId = users.userid
WHERE wish_list.userId = ' . $userid);

//$sqlMerc = $pdo->prepare('SELECT * FROM wish_list WHERE userId = '.$userid);

$sqlMerc->execute();
$resultMarc = $sqlMerc->fetchAll();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $_POST["delete_index"];
    $delete_index = $_POST["delete_index"];
}
$delete_index = $delete_index-1;
#echo $delete_index;
$sql = $pdo->prepare("DELETE FROM wish_list WHERE wishlist_id = {$delete_index}");
$delete_index = -1;
$sql->execute();
#print_r("削除ボタンが押されました\n");


print_r($resultMarc);
//Smartyのテンプレート設定
require_once ("pnwsmarty.php");
$pnwMerc = new pnwsmarty();
$smartyMerc = $pnwMerc->getTpl();
$smartyMerc->assign("resultMarc", $resultMarc);
$smartyMerc->display("wishList/wishList.tpl");

?>