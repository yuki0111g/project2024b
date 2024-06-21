<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<table>
<tr>
    <td>name</td>
    <td>price</td>
    <td>amount</td>
</tr>

{foreach $product as $p}
    <tr>
    <td>{$p[0]}</td>
    <td>{$p[1]}</td>
    <td>{$p[2]}</td>
    </tr>
{/foreach}
</table>
<a href="home_smtylist.php">戻る</a>
</body>
</html>