<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品の詳細</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .image-section, .info-section {
            flex: 1 1 45%;
            margin: 10px;
        }

        .image-section img {
            width: 100%;
            max-width: 400px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .info-section h1 {
            font-size: 24px;
            color: #333;
        }

        .info-section .price {
            font-size: 32px;
            color: #ff4500;
            margin: 10px 0;
        }

        .info-section .tax-included {
            font-size: 18px;
            color: #555;
        }

        .info-section table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .info-section th, .info-section td {
            padding: 10px;
            text-align: left;
        }

        .info-section th {
            background-color: #f8f8f8;
        }

        .info-section .buttons {
            display: flex;
            align-items: center;
        }

        .info-section .buttons form {
            margin-right: 10px;
        }

        .info-section .buttons input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-right: 10px;
        }

        .info-section .buttons button, .info-section .buttons input[type="submit"] {
            padding: 10px 20px;
            background-color: #ff4500;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .info-section .buttons button:hover, .info-section .buttons input[type="submit"]:hover {
            background-color: #e43900;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    {foreach $resultMarc as $loop}
    <div class="container">
        <div class="image-section">
            <img src={"./productImages/"|cat:$loop.image} alt="商品画像">
        </div>
        <div class="info-section">
            <h1>{$loop.productName}</h1>
            <p class="price">{$loop.value}円</p>
            <table>
                <tr>
                    <th>ブランド</th>
                    <td>{$loop.brand}</td>
                </tr>
                <tr>
                    <th>商品ID</th>
                    <td>{$loop.productId}</td>
                </tr>
                <tr>
                    <th>要冷凍</th>
                    <td>{if $loop.isCool == 1}必要{else}不要{/if}</td>
                </tr>
                <tr>
                    <th>消費期限</th>
                    <td>{$loop.expTime}</td>
                </tr>
                <tr>
                    <th>量</th>
                    <td>{$loop.amount}</td>
                </tr>
                <tr>
                    <th>残りの在庫数</th>
                    <td>{$loop.stock}</td>
                </tr>
            </table>
            <div class="buttons">
                <form action="home_smtylist.php" method="POST">
                    <input type="number" name="orderAmount" value="1" min="1">
                    <input type="hidden" name="wtb" value="{$loop.productId}">
                    <button type="submit" class="add-to-cart-button">カートに追加</button>
                </form>
                <form action="wishList.php" method="POST">
                    <input type="hidden" name="productId" value="{$loop.productId}">
                    <input type="submit" name="add-wishList" value="欲しいものリストに追加">
                </form>
            </div>
        </div>
    </div>
    {/foreach}
    <a href="home_smtylist.php" class="back-link">戻る</a>
</body>
</html>
