<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>決済画面</title>
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
    .payment-details {
      margin-top: 50px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .payment-details p {
      font-size: 18px;
      line-height: 1.6;
    }
    .action-link {
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
    .action-link:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <h1>決済画面</h1>
  <div class="payment-details">
    <?php
      $select_store = $_GET["store"];
      echo "<p>コンビニ支払い: " . htmlspecialchars($select_store) . "</p>";
      echo "<p>支払い期限は3日以内です。</p>";
    ?>
  </div>
  <a href="kessai_con.html" class="action-link">もう一度選択する</a>
  <a href="kanryo.php" class="action-link">支払いを確定する</a>
</body>
</html>
