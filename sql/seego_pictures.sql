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
(15, 9, 'S_6856305808439.jpg', '埼玉県入間市鍵山３−５−', '「我が家のてるてる坊主。我が家では伝統的に雨が降って欲しくない場合てるてる坊主を作ります。勝率は３割。いつか地元の人気ゆるキャラになることを目指して日々改良されています。', '2017-10-20 15:20:18', '2017-10-20 07:20:18'),
(16, 11, 'S_6857296597530.jpg', 'インド パトナ', 'パトナから車で5時間。ピロタ村でホームステイを体験できます。 \r\n水道もガスもない村で、現地の人の生活を体験できます。 \r\n生きてること自体が幸せに感じることができます。 \r\n日々の生活に疲れた人にオススメです！', '2017-10-20 15:23:00', '2017-10-20 07:39:55'),
(17, 13, 'S_6857294575569.jpg', '京都府京都市東山区清水１丁目２９４', '京都に行ったら鉄板の観光スポット♡', '2017-10-20 15:29:32', '2017-10-20 07:29:32'),
(18, 10, 'S_6858894408222.jpg', '千葉県長生郡 長柄町味庄東台1067', 'アドベンチャー好きには、たまらないアスレチック！ \r\n山一体をアスレチックにしているから、自然をそのまま味わえる所が特徴　ﾟ+.☆ \r\n', '2017-10-20 15:31:43', '2017-10-20 07:31:43'),
(19, 14, 'S_6853330833427.jpg', 'Fort San Pedro A. Pigafetta Street, Cebu City, 6000 Cebu\r\n', '歴史を感じたい！！ \r\nスペイン統治時代の名残があり、施設の中にマゼランの写真があることや、マゼランが乗船していた船の帆が実在します。大砲もある！ \r\n施設の規模は小さいので１０分で見回ることができます！ \r\n入場料は30ペソ！ \r\n近場にマゼランクロスという観光スポットもあります。', '2017-10-20 15:36:32', '2017-10-24 07:34:51'),
(20, 15, 'S_6854803929285.jpg', 'Civita do Bagnoregio,Itary', '\"天空の城ラピュタ\"のモデルとなった、死にゆく街。 \r\n行くのにかなり時間がかかりますが、それ以上に訪れる価値がある場所です！とにかく絶景！', '2017-10-20 15:44:52', '2017-10-20 07:44:52'),
(21, 16, 'S__47800325.jpg', '愛媛松山市道後町1-7', '愛媛県の道後温泉です！\r\n写真で見るより少しこじんまりしてますよ！', '2017-10-23 17:59:21', '2017-10-23 09:59:21'),
(22, 12, 'DSC04296.JPG', 'ボリビア ウユニ塩湖', 'きれいすぎやばすぎ', '2017-10-23 18:02:59', '2017-10-23 10:02:59'),
(23, 17, 'S_6862017072466.jpg', '山形県山形市蔵王', '蔵王はスキーや、スノーボードで有名ですが、 \r\n夜は樹氷がライトアップされ、とってもステキなスポットです！ \r\n\r\n日中は温泉街を楽しんで、夜は樹氷を楽しむプランもおススメ♡', '2017-10-24 14:19:32', '2017-10-24 06:19:32'),
(26, 19, 'S__14606342.jpg', 'Cardinal Rosales Ave, Cebu City, Cebu', '三ヶ月お世話になりました！\r\n良き講師、良き友達、良き環境、\r\n\"新しい種を持ち将来綺麗な花を咲かせるでしょう\"\r\n\r\n略してNexSeed!!!', '2017-10-24 15:28:17', '2017-10-24 07:28:17');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
