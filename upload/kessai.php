<html>        
<body>
<h1>決済画面</h1>
<?php
    if(isset($_GET["grade"])){
        $radio_grade = $_GET["grade"];
        if($radio_grade == "クレジットカード"){
            echo '<a href="kessai_credit.html">番号入力</a>' . "<br>";
        }
        else if($radio_grade == "コンビニ支払い"){
            echo '<a href="kessai_con.html">コンビニ選択</a>' . "<br>";
        }    
    }
    
?>
</body>
</html>