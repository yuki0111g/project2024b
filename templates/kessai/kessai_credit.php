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
    .error-message {
      color: #ff0000;
      font-weight: bold;
    }
    .action-link {
      display: inline-block;
      margin-top: 20px;
      margin-right: 5px;
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
      $text = $_GET["input1"];
      if(isset($_GET["useUserdata"])){
            require("../../libDB.php");
            $db = new libDB();
            $pdo = $db->getPDO();
            session_start();
            $sql = $pdo->prepare("SELECT creditnumber FROM users WHERE users.userId = {$_SESSION['userid']}");
            $sql->execute();
            $result = $sql->fetchAll();
            $text = $result[0][0];
    }
      $mozi_count = mb_strlen($text); 
      if ($mozi_count != 16) {
        echo '<p class="error-message">カード番号が不正です</p>';
        echo '<a href="kessai.html">戻る</a>';
      } else {
        $mozi_replace = substr_replace($text, '############', 0, 12);
        echo "<p>カード番号: " . htmlspecialchars($mozi_replace) . "</p>";
        echo "<br>";
        echo "<br>";
        echo '<a href="kessai_credit.html" class="action-link">もう一度選択する</a>';
        echo '<a href="kanryo.php" class="action-link">支払いを確定する</a>';
      }
    ?>
  </div>
</body>
</html>
