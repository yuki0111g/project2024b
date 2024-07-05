<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>決済完了</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    h1 {
      color: #333;
    }
    .message {
      margin-top: 50px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .message p {
      font-size: 18px;
      line-height: 1.6;
    }
    .return-link {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background-color: #007bff;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }
    .return-link:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h1>決済完了</h1>
  <div class="message">
    <?php
      echo "<p>ご注文ありがとうございました。</p>";
      echo "<p>またのご利用をお待ちしております。</p>";
    ?>
  </div>
  <a href="/project2024b/home_smtylist.php" class="return-link">ホーム画面に戻る</a>
</body>
</html>
