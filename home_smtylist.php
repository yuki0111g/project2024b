<?php
session_start();
$search = "";
$oAmount = "";
$ioAmount = 1;
$wtb = "";
$islogin = "ログイン";
$goCart = 0;
$accountInfo = 0;
$remove;
//postで情報を取得。その後初期値を設定する


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["input1"])) {
        $search = $_POST["input1"];
    }
    if (isset($_POST["orderAmount"])) {
        $ioAmount = $_POST["orderAmount"];
    }
    if (isset($_POST["wtb"])) {
        $wtb = $_POST["wtb"];
    }
    if(isset($_POST["wtb"])){
        $wtb = $_POST["wtb"];
    }
    if(isset($_POST["goCart"])){
        $goCart = 1;
    }
    if (isset($_POST["accountInfo"])) {
        $accountInfo = 1;
    }
    if (isset($_POST["delete_item"]) && isset($_POST["delete_index"])) {
        if(count($_SESSION["cart"]) == 1){
            $_SESSION["cart"] =array();
        }
        $delete_index = $_POST["delete_index"];
        echo $delete_index;
        unset($_SESSION["cart"][$delete_index]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
    }
    if(isset($_POST["isClear"])){
        $_SESSION["cart"] = array();
    }
    if(isset($_POST["goWishlist"])){
        header('Location: wishList.php');
        exit();
    }
}


if ($ioAmount <= 0) {
    $ioAmount = 1;
}

$oAmount = strval($ioAmount);

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
if (isset($_SESSION["username"])){
    $islogin = $_SESSION["username"];
}

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

if ($search != "")//検索
{
    $sql = $pdo->prepare("SELECT productId, productName, value ,stock ,image FROM product WHERE productName LIKE :search");
    $searchParam = $search . '%';
    $sql->bindParam(':search', $searchParam);
} elseif ($wtb != "")//カート登録
{
    $sql = $pdo->prepare("SELECT productName, value, image, productId FROM product WHERE productId = :wtb");
    $sql->bindParam(':wtb', $wtb);
} else//デフォルト
{
    $sql = $pdo->prepare("SELECT productId, productName, value ,stock, image FROM product");
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
    array_push($result[0], $oAmount);
    array_push($_SESSION["cart"],$result[0]);
    $result = array();
    $smarty->assign("product",$_SESSION["cart"]);
    $smarty->display("home_smtylist/cart.tpl");
}
elseif($goCart){
    $smarty->assign("product",$_SESSION["cart"]);
    $goCart = 0;
    $smarty->display("home_smtylist/cart.tpl");
}
elseif($accountInfo) {
    header("Location: account_management.php");
    exit();
}
//検索に送るデータ
else {
    $smarty->assign("_account", $islogin);
    $smarty->assign("resultMarc", $result); 
    $smarty->display("home_smtylist/list.tpl");
}
?>