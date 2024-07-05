<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./templates/home_smtylist/list.css">
    <title>商品一覧</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-container input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[name="goCart"] {
            padding: 10px 30px;
            font-size: 16px;
            position: absolute;
            top: 10%;
            right: 11%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[name="accountInfo"] {
            padding: 10px 30px;
            font-size: 16px;
            position: absolute;
            top: 10%;
            left: 11%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .product-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .product-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .product-item h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-item p {
            margin: 5px 0;
        }

        .product-item input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-top: 10px;
        }

        .product-item button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        .product-item button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>商品一覧</h1>
        <div class="search-container">
            <form action="home_smtylist.php" method="POST">
                <input type="submit" name="accountInfo" value="登録情報">
                <input type="submit" name="goCart" value = "カートへ進む">
                <input type="submit" name="goWishlist" value = "ほしいものリストへ進む">
                <input type="text" name="input1" placeholder="商品を検索">
                <input type="submit" value="検索">
            </form>
        </div>

        <div class="product-grid">
            {foreach $resultMarc as $loop}
            <div class="product-item">
                <a href=""><img src={"./productImages/"|cat:$loop.image} /></a>
                <h3>{$loop.productName}</h3>
                <p>￥{$loop.value}</p>
                <p>在庫: {$loop.stock}</p>
                <form action="home_smtylist.php" method="POST">
                    <input type="number" name="orderAmount" value="1" min="1">
                    <input type="hidden" name="wtb" value="{$loop.orderId}">
                    <button type="submit">追加</button>
                </form>
            </div>
            {/foreach}
        </div>
    </div>
</body>
</html>
