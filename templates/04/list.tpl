
<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<h1>一覧</h1><table border="1">
<tr>
    <td>ID</td>
    <td>stock</td>
    <td>name</td>
</tr>

{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.product_id}</td>
    <td> {$loop.stock}</td>
    <td> {$loop.productName}</td>
    </tr>
{/foreach}

</table>
</body>
</html>