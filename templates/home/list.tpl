
<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<form action="home_smtylist.php" method="POST">


<h1>一覧</h1><table border="1">
商品検索：<input type="text" size=20 maxlength="30" name="input1"><br>
<tr>
    <td>name</td>
    <td>stock</td>
    <td>price</td>
</tr>
<form action="form2.php" method="POST">

{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.productId}</td>
    <td> {$loop.productName}</td>
    </tr>
{/foreach}

</table>
</body>
</html>