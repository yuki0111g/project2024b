
$text = $_GET["input1"];
if(strlen($text != 16)){
echo "カード番号が不正です". "<br>";
echo '<a href="kessai.html">戻る</a>';
}
//プルダウン
if(isset($_GET["grade"])){
    $radio_grade = $_GET["grade"];
$select_store = $_GET["store"];
echo "コンビニ支払い:" . $select_store . "<br>";
}