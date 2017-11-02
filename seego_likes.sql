-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 11 月 02 日 13:18
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
-- テーブルの構造 `seego_likes`
--

CREATE TABLE `seego_likes` (
  `id` int(11) NOT NULL,
  `seego_pictures_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `seego_likes`
--

INSERT INTO `seego_likes` (`id`, `seego_pictures_id`, `user_id`, `created`) VALUES
(1, 16, 8, '2017-10-23 06:31:13'),
(3, 19, 6, '2017-10-24 09:52:39'),
(4, 26, 6, '2017-10-24 09:52:53'),
(5, 16, 6, '2017-10-24 09:53:06'),
(6, 20, 6, '2017-10-24 09:53:21'),
(7, 22, 6, '2017-10-24 09:53:40'),
(8, 21, 6, '2017-10-24 09:53:58'),
(9, 17, 6, '2017-10-24 09:54:21'),
(10, 18, 6, '2017-10-24 09:54:35'),
(11, 15, 6, '2017-10-24 09:54:52'),
(12, 23, 6, '2017-10-24 09:55:03'),
(13, 19, 7, '2017-10-24 09:55:50'),
(14, 26, 7, '2017-10-24 09:56:02'),
(15, 20, 7, '2017-10-24 09:56:13'),
(16, 16, 7, '2017-10-24 09:56:25'),
(17, 22, 7, '2017-10-24 09:56:37'),
(18, 23, 7, '2017-10-24 09:56:56'),
(19, 21, 7, '2017-10-24 09:57:07'),
(20, 17, 7, '2017-10-24 09:57:19'),
(21, 18, 7, '2017-10-24 09:57:32'),
(22, 15, 7, '2017-10-24 09:57:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seego_likes`
--
ALTER TABLE `seego_likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seego_likes`
--
ALTER TABLE `seego_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
