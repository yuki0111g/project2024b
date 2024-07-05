<html>  
<head>
    <meta charset="UTF-8">
    <title>商品の詳細</title>
</head>      
<body>
<h1>詳細情報</h1><table border="1">
<tr>
    <td>商品名</td>
    <td>1つあたりの価格</td>
    <td>ブランド</td>
    <td>商品ID</td>
    <td>要冷凍</td>
    <td>消費期限</td>
    <td>量<td>
    <td>残りの在庫数(テスト)</td>
    <td>画像</td>
    

</tr>
{foreach $resultMarc as $loop}
{$tmp = $loop.productId}
    <tr>
    <td> {$loop.productName}</td>
    <td> {$loop.value}</td>
    <td> {$loop.brand}</td>
    <td> {$loop.productId}</td>
    <td> {$loop.isCool}</td>
    <td> {$loop.expTime}</td>
    <td> {$loop.amount}<td>
    <td> {$loop.stock}</td>
    <td><img src={"./productImages/"|cat:$loop.image} /></td>
    </tr>
{/foreach}
<form action="home_smtylist.php" method="POST" style="display: inline;">
<input type="number" name="orderAmount" value="1" min="1" style="width: 60px; padding: 5px;">
<input type="hidden" name="wtb" value="{$loop.productId}">
<button type="submit" class="add-to-cart-button">カートに追加</button>


</form>
<form action="wishList.php" method="POST">
<input type="hidden" name="productId" value={$tmp}>
<input type="submit" name="add-wishList" value = "欲しいものリストに追加">


</form>
<br>



</table>
<a href="home_smtylist.php" class="back-link">戻る</a>
</body>
</html>