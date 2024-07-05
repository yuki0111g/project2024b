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
    <td>商品名</td>
    <td>1つあたりの価格</td>
    <td>ブランド</td>
    <td>残りの在庫数</td>
</tr>


{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.wishlist_id}</td>
    <td> {$loop.userId}</td>
    <td> {$loop.username}</td>
    <td> {$loop.productId}</td>
    <td> {$loop.productName}</td>
    <td> {$loop.value}</td>
    <td> {$loop.brand}</td>
    <td> {$loop.stock}</td>
    <td> <form action="wishList.php" method="post">
    {$wid = $loop.wishlist_id}
    <input type="hidden" name="delete_index" value="{$wid}">
    <input type="submit" class="delete-btn" name="delete_item" value="削除"></form>
    </td>
    
    </tr>
{/foreach}

<br>



</table>
</body>
</html>