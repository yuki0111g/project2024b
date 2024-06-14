
<html>  
<head>
    <meta charset="UTF-8">
    <title>一覧</title>
</head>      
<body>
<h1>一覧</h1><table border="1">
<tr>
    <td>name</td>
    <td>stock</td>
</tr>

{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.productId}</td>
    <td> {$loop.productName}</td>
    </tr>
{/foreach}

</table>
</body>
</html>