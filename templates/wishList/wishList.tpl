<html>  
<head>
    <meta charset="UTF-8">
    <title>欲しいものリスト</title>
</head>      
<body>
<h1>欲しいものリスト</h1><table border="1">
<tr>
    <td>欲しいものリストID</td>
    <td>ユーザID</td>
    <td>ユーザーネーム</td>
    <td>商品ID</td>
</tr>

{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.wishlist_id}</td>
    <td> {$loop.userId}</td>
    <td> {$loop.userName}</td>
    <td> {$loop.productId}</td>
    </tr>
{/foreach}

<br>



</table>
</body>
</html>