<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<form "action="home_smtylist.php" method="POST">
<input type="submit" name="goCart" value = {1}>

<h1>一覧</h1><table border="1">


<tr>
    <td>カートに追加</td>
    <td>name</td>
    <td>price</td>
    <td>stock</td>
</tr>

{foreach $resultMarc as $loop}
    <tr>
    <td> <input type="number" size=20 maxlength="30" name="orderAmount">
    <input type="submit" name="wtb" value = {$loop.orderId}></td>
    <td>{$loop.productName}</td>
    <td> {$loop.value}</td>
    <td> {$loop.stock}</td>
    </tr>
{/foreach}
商品検索：<input type="text" size=20 maxlength="30" name="input1" value ""><br>
</table>
</form>
</body>
</html>