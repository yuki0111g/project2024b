<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<form "action="option.php" method="POST">
<table>
<tr>
    <td>name</td>
    <td>price</td>
    <td>amount</td>
    <td>削除</td>
</tr>
{$i = 0}
{foreach $product as $p}
    <tr>
    <td>{$p[0]}</td>
    <td>{$p[1]}</td>
    <td>{$p[2]}</td>
    <td>{$i}<a href option.php><input type="submit" name="removeCart" value {$i}></td>
    </tr>
    {$i= $i+1}
{/foreach}
</table>
<a href="home_smtylist.php">戻る</a>
</form>
</body>
</html>