-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-21 06:45:53
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
-- テーブルの構造 `order_history`
--

CREATE TABLE `order_history` (
  `orderId` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `productId` int(11) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `order_history`
--

INSERT INTO `order_history` (`orderId`, `userId`, `timestamp`, `productId`, `num`) VALUES
(1, 'yuki', '2000-06-23 15:00:00', 1, 1),
(2, 'tanuki', '2024-06-14 07:32:25', 2, 10),
(3, 'tanuki', '2024-06-14 14:47:22', 5, 5),
(4, '774', '2024-06-14 14:45:55', 3, 1),
(5, 'dynabook', '2024-06-14 14:46:30', 5, 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`orderId`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `order_history`
--
ALTER TABLE `order_history`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
