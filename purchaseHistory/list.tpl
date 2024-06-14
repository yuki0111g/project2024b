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
    <td>1つあたりの価格</td>
    <td>販売業者</td>
    <td>注文日時</td>
    <td>商品ID</td>
    <td>個数</td>
    <td>合計金額</td>
    <td>ユーザID(テスト)</td>

</tr>

{foreach $resultMarc as $loop}
    <tr>
    <td> {$loop.orderId}</td>
    <td> {$loop.productName}</td>
    <td> {$loop.value}</td>
    <td> {$loop.seller}</td>
    <td> {$loop.timestamp}</td>
    <td> {$loop.productId}</td>
    <td> {$loop.num}</td>
    <td> {$loop.sumValue}</td>
    <td> {$loop.userId}</td>
    </tr>
{/foreach}

<br>



</table>
</body>
</html>