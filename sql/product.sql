-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-14 17:24:27
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
  `seller` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`productId`, `productName`, `value`, `isCool`, `expTime`, `seller`, `amount`) VALUES
(1, 'りんご', 100, 0, '2024-06-27', 'スマイルshop', '100g'),
(2, '牛肉', 2980, 1, '2024-06-13', 'スマイルshopUnofficial', '1000kg'),
(3, 'さんま', 10000, 1, '2024-06-27', 'BottomValue', ''),
(4, 'いちご', 100, 0, '2024-06-30', 'low損', '1t'),
(5, '柔あげポテト', 198, 0, '2033-06-28', 'あいうえお', '72g');

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
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
