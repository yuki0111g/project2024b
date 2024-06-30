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
            position:absolute;	
            top:10%;
            right:11%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container input[name="accountInfo"] {
            padding: 10px 30px;
            font-size: 16px;
            position:absolute;	
            top:10%;
            left:11%;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        .search-container input[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }

        .back-link {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
            margin-top: 20px;
        }

        .add-to-cart-button {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .add-to-cart-button:hover {
            background-color: #218838;
        }

        .account-link {
            text-decoration: none;
            color: #007bff;
            display: inline-block;
            margin-top: 20px;
            margin-left: 10px;
        }
        img{
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>
<body>
</form>
    <div class="container">
        <h1>商品一覧</h1>   
        <div class="search-container">
            <form action="home_smtylist.php" method="POST">
                <input type="submit" name="accountInfo" value="登録情報">
                <input type="submit" name="goCart" value = "カートへ進む">
                <input type="text" name="input1" placeholder="商品を検索">
                <input type="submit" value="検索">
            </form>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫</th>
                    <th>数量</th>
                    <th>カートに追加</th>
                </tr>
            </thead>
            <tbody>
                {foreach $resultMarc as $loop}
                <tr>
               
                    <td><a href=""><img src={"./productImages/"|cat:$loop.image} />{$loop.productName}</a></td>
                    <td>￥{$loop.value}</td>
                    <td>{$loop.stock}</td>
                    <td>
                        <form action="home_smtylist.php" method="POST" style="display: inline;">
                            <input type="number" name="orderAmount" value="1" min="1" style="width: 60px; padding: 5px;">
                            <input type="hidden" name="wtb" value="{$loop.orderId}">
                    </td>
                    <td>
                        <button type="submit" class="add-to-cart-button">追加</button>
                        </form>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</body>
</html>
