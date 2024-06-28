<?php
session_start();
$search = "";
$oAmount = "";
$ioAmount = 1;
$wtb = "";
$goCart = 0;
$remove;
//postで情報を取得。その後初期値を設定する
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["input1"];
    $ioAmount = $_POST["orderAmount"];
    if(isset($_POST["wtb"])){$wtb = $_POST["wtb"];}
    if(isset($_POST["goCart"])){$goCart = $_POST["goCart"];}
}
if($ioAmount <= 0){
    $ioAmount = 1;
}
$oAmount = strval($ioAmount);
//SESSIONにcartが存在しない場合作成する
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();
//条件をつけて検索条件を変える
//検索->カートに入れる->初期画面の順で実行しようとする。
if($search != ""){
    $sql = $pdo->prepare("SELECT orderId, productName, value ,stock FROM order_history as oh LEFT OUTER JOIN product as p ON oh.productId = p.productId WHERE p.productName LIKE '{$search}%'");
}
elseif($wtb!= ""){
    $sql = $pdo->prepare("SELECT productName, value FROM order_history as oh LEFT OUTER JOIN product as p ON oh.productID = p.productId WHERE oh.orderId = {$wtb}");
}
else{
    $sql = $pdo->prepare("SELECT orderId, productName, value ,stock FROM order_history as oh LEFT OUTER JOIN product as p ON oh.productId = p.productId");
}
//SQL文の実行
$sql->execute();
//結果の取得
$result = $sql->fetchAll();
require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();
//カートに送るデータ
if(($wtb != "")&&($search == "")){
    $dump = array($result[0][0],$result[0][1],$oAmount);
    array_push($_SESSION["cart"],$dump);
    $smarty->assign("product",$_SESSION["cart"]);
    $smarty->display("cart/cart.tpl");
}
elseif($goCart){
    $smarty->assign("product",$_SESSION["cart"]);
    $goCart = 0;
    $smarty->display("cart/cart.tpl");
}
//検索に送るデータ
else{
    $smarty->assign("resultMarc", $result);
    $smarty->display("home/list.tpl");
}
?>
