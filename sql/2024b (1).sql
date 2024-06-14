-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-14 06:54:06
-- サーバのバージョン： 10.4.18-MariaDB
-- PHP のバージョン: 8.0.3

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
-- テーブルの構造 `foods`
--

CREATE TABLE `foods` (
  `productId` int(11) DEFAULT NULL,
  `productName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `foods`
--

INSERT INTO `foods` (`productId`, `productName`) VALUES
(1, '牛乳'),
(2, '卵'),
(3, 'もやし');

-- --------------------------------------------------------

--
-- テーブルの構造 `merchandise`
--

CREATE TABLE `merchandise` (
  `productId` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `merchandise`
--

INSERT INTO `merchandise` (`productId`, `stock`) VALUES
(1, 3),
(2, 4),
(3, 10);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`productId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
