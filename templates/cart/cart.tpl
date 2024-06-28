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
    </style>
</head>
<body>
<form method="post" action="home_smtylist.php">
    <div class="container">
        <h1>カート</h1>
        <table>
            <tr>
                <th>名前</th>
                <th>価格</th>
                <th>数量</th>
                <th>小計</th>
                <th><input type="submit" class="delete-btn" name="isClear" value="全削除"></th>
            </tr>
            {assign var="total" value=0}
            {$key = 0}
            {foreach $product as $p}
            {assign var="subtotal" value=$p[1]*$p[2]}

            <tr>
                <td>{$p[0]}</td>
                <td>&yen;{$p[1]}</td>
                <td>{$p[2]}</td>
                <td>&yen;{$subtotal}</td>
                <td>
                        <input type="hidden" name="delete_index" value="{$key}">
                        <input type="submit" class="delete-btn" name="delete_item" value="削除">
                    </form>
                </td>
                {$key=$key + 1}

            </tr>
            {assign var="total" value=$total+$subtotal}
            {/foreach}
        </table>
        <div class="total-amount">
            合計金額: &yen;{$total}
        </div>
        <a href="home_smtylist.php" class="back-link">戻る</a>
    </div>
</body>
</html>
