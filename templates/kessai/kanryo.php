<html>        
<body>
<h1>決済完了</h1>
<?php

    session_start();
    $_SESSION["bought"] = true;
    echo "ご注文ありがとうございました。" . "<br>";
    echo "またのご利用をお待ちしております。" . "<br>";
    echo "<br>";
    echo "<br>";
    echo '<a href="/project2024b/home_smtylist.php">ホーム画面に戻る</a>' . "<br>";

?>
</body>
</html>