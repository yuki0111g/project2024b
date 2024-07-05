<html>        
<body>
<h1>決済完了</h1>
<?php

    session_start();
    print_r($_SESSION["cart"]);
    require("../../libDB.php");
    $db = new libDB();
    $pdo = $db->getPDO();
    for($i = 0; $i<count($_SESSION['cart']);$i++){
        $sql = $pdo->prepare("INSERT INTO order_history (productId, userId, num)VALUES({$_SESSION['cart'][$i][3]},{$_SESSION['userid']},{$_SESSION['cart'][$i][4]})");
        $sql->execute();
    }
    $_SESSION["cart"] = array();
    echo "ご注文ありがとうございました。" . "<br>";
    echo "またのご利用をお待ちしております。" . "<br>";
    echo "<br>";
    echo "<br>";
    echo '<a href="/project2024b/home_smtylist.php">ホーム画面に戻る</a>' . "<br>";

?>
</body>
</html>