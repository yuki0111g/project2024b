<html>  
<head>
    <meta charset="UTF-8">
    <title>購入履歴</title>
</head>      
<body>
<h1>購入履歴</h1><table border="1">
<tr>
    <td>注文番号</td>
    <td>商品名</td>
    <td>商品画像</td>
    <td>1つあたりの価格</td>
    <td>ブランド</td>
    <td>注文日時</td>
    <td>商品ID</td>
    <td>個数</td>
    <td>合計金額</td>
    <td>ユーザID(テスト)</td>
    <td>残りの在庫数</td>
    <td>カートに追加</td>
    <td>欲しいものリストに追加</td>
</tr>

{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.orderId}</td>
    <td> <a href={"./product_detail.php?product_id="|cat:$loop.productId}>{$loop.productName}</a></td>
    <td> <img src={"./productImages/"|cat:$loop.image} /></td>
    <td> {$loop.value}</td>
    <td> {$loop.brand}</td>
    <td> {$loop.timestamp}</td>
    <td> {$loop.productId}</td>
    <td> {$loop.num}</td>
    <td> {$loop.sumValue}</td>
    <td> {$loop.userId}</td>
    <td> {$loop.stock}</td>
    <td> <form action="home_smtylist.php" method="POST" style="display: inline;">
                <input type="number" name="orderAmount" value="1" min="1" style="width: 60px; padding: 5px;">
                <input type="hidden" name="wtb" value="{$loop.productId}">
                <button type="submit" class="add-to-cart-button">カートに追加</button>
                </form></td>
    <td>
</form>
<form action="wishList.php" method="POST">
<input type="hidden" name="productId" value={$loop.productId}>
<input type="submit" name="add-wishList" value = "欲しいものリストに追加">
</form>
</td>
    </tr>
{/foreach}

<br>



</table>
</body>
<a href="home_smtylist.php" class="back-link">戻る</a>
</html>