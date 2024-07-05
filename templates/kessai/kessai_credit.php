<html>        
<body>
<h1>決済画面</h1>
<?php
    require("../../libDB.php");
    $db = new libDB();
    $pdo = $db->getPDO();
    if(isset($_GET["useUserdata"])){
    session_start();
        $sql = $pdo->prepare("SELECT creditnumber FROM users where users.userid = {$_SESSION['userid']}");
        //SQL文の実行
        $sql->execute();
        //結果の取得
        $result = $sql->fetchAll();
        $text = $result[0][0];
    }
    else{
        if(!isset($_GET["input1"])){
            $text = "1";
        }
        else{
            $text = $_GET["input1"];
        }
    }
    $mozi_count = mb_strlen($text);
    $mozi_replace = substr_replace($text, '############', 0, 12);

    if(mb_strlen($mozi_count != 16)){
    echo "カード番号が不正です". "<br>";
    echo '<a href="kessai.html">戻る</a>';
    }

    else{
        echo "カード番号:". $mozi_replace . "<br>";
        echo "<br>";
        echo "<br>";
        echo '<a href="kessai_credit.html">もう一度選択する</a>' . "<br>";
        echo '<a href="kanryo.php">支払いを確定する</a>';
    }
?>
</body>
</html>