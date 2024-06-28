<html>        
<body>
<h1>決済画面</h1>
<?php
    $text = $_GET["input1"];
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