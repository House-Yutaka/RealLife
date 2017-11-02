-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 11 月 02 日 13:17
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
-- テーブルの構造 `seego_users`
--

CREATE TABLE `seego_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_icon` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `seego_users`
--

INSERT INTO `seego_users` (`id`, `username`, `email`, `password`, `user_icon`, `created`, `modified`) VALUES
(6, 'saki', 'saki@saki', 'c22a095fbaf85897500e2998089ed84f2c698072', '6__IMG_0724.JPG', '2017-10-17 15:37:42', '2017-10-18 07:10:24'),
(7, 'yosuke', 'yosuke@yosuke', '48f0c7b91b23334f10bd550d920e8ae445f787ee', NULL, '2017-10-17 15:39:21', '2017-10-17 07:39:21'),
(8, 'yutaka', 'yutaka@yutaka', '7612bb607ca56c16aef5283f3dcb33c9e0ce8262', '8__14__img_0308_360.jpg', '2017-10-17 15:40:10', '2017-10-17 07:47:25'),
(9, 'zawa', 'zawa@zawa', '64decc06c78f49b2223464fc8e3959230337f3b5', '9__S_6856351511890.jpg', '2017-10-17 15:41:41', '2017-10-20 07:20:55'),
(10, 'eiri', 'eiri@eiri', 'abcdbfe206faa162a77c18d8447acc810b23bc4f', '10__S_6859033589607.jpg', '2017-10-17 15:42:09', '2017-10-20 07:30:13'),
(11, 'ai', 'ai@ai', '0dba2b0b87282424ac9c64c96150cf2e94a4dc5d', '11__S_6857293621065.jpg', '2017-10-17 15:42:40', '2017-10-20 07:21:42'),
(12, 'ryuji', 'ryuji@ryuji', '5ce2f1e5bc7f0c5955bc163ece332c787f078428', '12__IMG_0142.JPG', '2017-10-17 15:50:12', '2017-10-18 07:11:36'),
(13, 'ryosuke', 'ryosuke@ryosuke', '66827b318276e69445d8496853a58998e91aa306', '13__S_6858093469877.jpg', '2017-10-20 15:26:48', '2017-10-20 07:28:25'),
(14, 'takei', 'takei@takei', 'db9cc2cb62565de59e3cede252ae14a72c475c61', '14__S_6859877684377.jpg', '2017-10-20 15:32:43', '2017-10-20 07:33:22'),
(15, 'yun', 'yun@yun', '93ea99574ba237e1f3f86323981f803f41b279ce', '15__S_6854803890454.jpg', '2017-10-20 15:42:46', '2017-10-20 07:43:54'),
(16, 'erika', 'erika@erika', 'be8f83636d153a231ead8081066725cd142fae32', '16__S__14524418.jpg', '2017-10-23 17:57:31', '2017-10-23 09:58:14'),
(17, 'tatsuki', 'tatsuki@tatsuki', '6996244e71cb93d44f20d634e903626db13c8809', '17__S_6862017317276.jpg', '2017-10-24 14:16:38', '2017-10-24 06:18:41'),
(18, 'くそたいき', 'kusotaiki@kuso', '727056f4ec9d72890f60086c93ce05a482e87c29', '18__images.jpg', '2017-10-24 14:20:20', '2017-10-24 06:23:28'),
(19, 'NexSeed', 'nexseed@nexseed', 'a3058bbc69b8ea7dfdc4e6ec0f344d39142bf7b2', '19__S__14606338.jpg', '2017-10-24 15:18:37', '2017-10-24 07:21:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seego_users`
--
ALTER TABLE `seego_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seego_users`
--
ALTER TABLE `seego_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
