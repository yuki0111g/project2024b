<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container img{
            width: 60px;
            height: 60px;
            margin-right: 15px;
            border-radius: 50%;
            object-fit: cover;
        }

        h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        .order-button {
        display: inline-block;
        background-color: #ff69b4; /* ピンク色 */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
        width: 100%;
        }
        .order-button a {
            color: white;
            text-decoration: none;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }

        @media (min-width: 600px) {
            .order-button {
                width: auto;
            }
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>カート</h1>
        <button class="order-button"><a href="./templates/kessai/kessai.html">注文画面へ進む</a></button>
        <table>
            <tr>
                <th>名前</th>
                <th>価格</th>
                <th>数量</th>
                <th>小計</th>
                <th><form method="post" action="home_smtylist.php">
                <input type="submit" class="delete-btn" name="isClear" value="全削除">
                </form></th>
            </tr>
            {assign var="total" value=0}

            {$key = -1}
            {foreach $product as $p}
            <form method="post" action="home_smtylist.php">
            {assign var="subtotal" value=$p[1]*$p[4]}
            {$p[] = $key}
            <tr>
                <td><a href={"./product_detail.php?product_id="|cat:$p[3]}><img src={"./productImages/"|cat:$p[2]} />{$p[0]}</a></td>
                <td>&yen;{$p[1]}</td>
                <td>{$p[4]}</td>
                <td>&yen;{$subtotal}</td>
                <td>
                        <input type="hidden" name="delete_index" value={$p[5]}>
                        <input type="submit" class="delete-btn" name="delete_item" value="削除">
                    
                </td>
                {$key=$key + 1}

            </tr>
            {assign var="total" value=$total+$subtotal}
            </form>
            {/foreach}
        </table>
        <div class="total-amount">
            合計金額: &yen;{$total}
        </div>
        <a href="home_smtylist.php" class="back-link">戻る</a>
    </div>
</body>
</html>
