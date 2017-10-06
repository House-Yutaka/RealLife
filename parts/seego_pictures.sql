-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 10 朁E06 日 09:11
-- サーバのバージョン： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seego`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `seego_pictures`
--

CREATE TABLE `seego_pictures` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture_path` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `seego_pictures`
--

INSERT INTO `seego_pictures` (`id`, `user_id`, `picture_path`, `address`, `text`, `created`, `modified`) VALUES
(2, 1, 'tomtom.jpg', '大阪府', '綺麗です。', '2017-10-05 21:23:27', '2017-10-05 12:23:27'),
(3, 2, 'images.png', '北海道札幌市中央区', 'とても寒いです。', '2017-10-06 14:38:10', '2017-10-06 05:38:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seego_pictures`
--
ALTER TABLE `seego_pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seego_pictures`
--
ALTER TABLE `seego_pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
