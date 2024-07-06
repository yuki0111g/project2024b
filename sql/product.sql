-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-07-06 16:32:24
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `2024b`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `value` int(11) NOT NULL,
  `isCool` tinyint(1) NOT NULL,
  `expTime` date NOT NULL,
  `brand` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`productId`, `productName`, `value`, `isCool`, `expTime`, `brand`, `amount`, `stock`, `image`) VALUES
(1, 'りんご', 100, 0, '2024-06-27', 'スマイルshop', '100g', 0, 'apple.jpg'),
(2, '牛肉', 2980, 1, '2024-06-13', 'スマイルshopUnofficial', '1000kg', 0, 'beef.jpg'),
(3, 'さんま', 10000, 1, '2024-06-27', 'BottomValue', '', 0, 'sanma.webp'),
(4, 'いちご', 100, 0, '2024-06-30', 'low損', '1t', 0, 'strawberry.jpg'),
(5, '柔あげポテト', 198, 0, '2033-06-28', 'あいうえお', '72g', 0, 'potechi.png'),
(6, 'ヨーグルト', 350, 0, '2024-07-31', 'スマイルshop', '300g', 50, 'yo-guruto.png'),
(7, 'たい焼き', 120, 0, '2024-07-11', 'スマイルshop', '120g', 200, 'taiyaki.png\r\n'),
(8, 'オレンジ', 150, 0, '2024-07-24', 'スマイルshop', '150g', 300, 'orange.png'),
(9, '卵', 99, 0, '2024-07-24', 'スマイルshop', '12個', 100, 'egg.png'),
(10, 'ひき肉', 500, 1, '2024-07-11', 'スマイルshop', '300g', 200, 'hikiniku.png'),
(11, 'ソーセージ', 450, 0, '2024-07-10', 'スマイルshop', '20本', 100, 'so-se-ji.png\r\n'),
(12, 'トマト', 200, 0, '2024-07-10', 'スマイルshop', '100g', 1000, 'tomato.png'),
(13, 'ジャガイモ', 50, 0, '2024-07-31', 'スマイルshop', '80g', 1000, 'potato.png'),
(14, 'パン', 230, 0, '2024-07-10', 'スマイルshop', '250g', 1000, 'pan.png'),
(15, '玉ねぎ', 90, 0, '2024-07-17', 'スマイルshop', '150g', 1000, 'onion.png\r\n');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
