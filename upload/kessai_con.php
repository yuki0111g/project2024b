<html>        
<body>
<h1>決済画面</h1>
<?php
    $select_store = $_GET["store"];
    echo "コンビニ支払い:" . $select_store . "<br>";
            
    echo '<a href="kessai_con.html">もう一度選択する</a>' . "<br>";
    echo '<a href="kanryo.php">支払いを確定する</a>' . "<br>";
    
?>
</body>
</html>