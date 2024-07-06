<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>購入履歴</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f8f8f8;
            font-size: 12px;
            white-space: nowrap;
        }

        td {
            font-size: 10px;
            word-wrap: break-word;
            white-space: nowrap;
        }

        img {
            max-width: 60px;
            height: auto;
        }

        .add-to-cart-button, .add-to-wishlist-button {
            padding: 5px 10px;
            background-color: #ff4500;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 10px;
        }

        .add-to-cart-button:hover, .add-to-wishlist-button:hover {
            background-color: #e43900;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>購入履歴</h1>
        <table>
            <thead>
                <tr>
                    <th>注文番号</th>
                    <th>商品名</th>
                    <th>商品画像</th>
                    <th>価格</th>
                    <th>ブランド</th>
                    <th>日時</th>
                    <th>商品ID</th>
                    <th>個数</th>
                    <th>合計金額</th>
                    <th>ユーザID</th>
                    <th>在庫数</th>
                    <th>カート</th>
                    <th>ウィッシュリスト</th>
                </tr>
            </thead>
            <tbody>
                {foreach $resultMarc as $loop}
                <tr>
                    <td>{$loop.orderId}</td>
                    <td><a href={"./product_detail.php?product_id="|cat:$loop.productId}>{$loop.productName}</a></td>
                    <td><img src={"./productImages/"|cat:$loop.image} alt="商品画像"></td>
                    <td>{$loop.value}円</td>
                    <td>{$loop.brand}</td>
                    <td>{$loop.timestamp}</td>
                    <td>{$loop.productId}</td>
                    <td>{$loop.num}</td>
                    <td>{$loop.sumValue}円</td>
                    <td>{$loop.userId}</td>
                    <td>{$loop.stock}</td>
                    <td>
                        <form action="home_smtylist.php" method="POST">
                            <input type="number" name="orderAmount" value="1" min="1" style="width: 40px; padding: 2px;">
                            <input type="hidden" name="wtb" value="{$loop.productId}">
                            <button type="submit" class="add-to-cart-button">カートに追加</button>
                        </form>
                    </td>
                    <td>
                        <form action="wishList.php" method="POST">
                            <input type="hidden" name="productId" value="{$loop.productId}">
                            <button type="submit" class="add-to-wishlist-button">追加</button>
                        </form>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        <a href="home_smtylist.php" class="back-link">戻る</a>
    </div>
</body>
</html>
