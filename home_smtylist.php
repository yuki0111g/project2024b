<?php
session_start();
$search = "";
$oAmount = "";
$ioAmount = 1;
$wtb = "";

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
    if (isset($_POST["delete_item"]) && isset($_POST["delete_index"])) {
        $delete_index = $_POST["delete_index"];
        if (isset($_SESSION["cart"][$delete_index])) {
            unset($_SESSION["cart"][$delete_index]);
            $_SESSION["cart"] = array_values($_SESSION["cart"]); 
        }
    }
}

if ($ioAmount <= 0) {
    $ioAmount = 1;
}
$oAmount = strval($ioAmount);

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

require("libDB.php");
$db = new libDB();
$pdo = $db->getPDO();

if ($search != "") {
    $sql = $pdo->prepare("SELECT orderId, productName, value ,stock FROM order_history as oh LEFT OUTER JOIN product as p ON oh.productId = p.productId WHERE p.productName LIKE :search");
    $searchParam = $search . '%';
    $sql->bindParam(':search', $searchParam);
} elseif ($wtb != "") {
    $sql = $pdo->prepare("SELECT productName, value FROM order_history as oh LEFT OUTER JOIN product as p ON oh.productID = p.productId WHERE oh.orderId = :wtb");
    $sql->bindParam(':wtb', $wtb);
} else {
    $sql = $pdo->prepare("SELECT orderId, productName, value ,stock FROM order_history as oh LEFT OUTER JOIN product as p ON oh.productId = p.productId");
}

//SQL文の実行
$sql->execute();
//結果の取得
$result = $sql->fetchAll();

require_once("pnwsmarty.php");
$pnw = new pnwsmarty();
$smarty = $pnw->getTpl();

if (($wtb != "") && ($search == "")) {
    $dump = array($result[0][0], $result[0][1], $oAmount);
    array_push($_SESSION["cart"], $dump);
    $smarty->assign("product", $_SESSION["cart"]);
    $smarty->display("cart/cart.tpl");
} else {
    $smarty->assign("resultMarc", $result); 
    $smarty->display("home/list.tpl");
}
?>