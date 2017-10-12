-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 10 朁E12 日 08:46
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
(7, 5, 4, '2017-10-11 06:41:14'),
(9, 4, 4, '2017-10-11 06:52:24'),
(10, 3, 2, '2017-10-11 06:54:42'),
(11, 5, 2, '2017-10-11 06:54:52'),
(12, 3, 4, '2017-10-11 07:17:43'),
(14, 6, 6, '2017-10-12 05:46:32'),
(15, 3, 6, '2017-10-12 05:46:59'),
(20, 6, 4, '2017-10-12 06:34:10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
