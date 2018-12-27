-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: דצמבר 27, 2018 בזמן 10:59 AM
-- גרסת שרת: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registarion`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `cat`
--

DROP TABLE IF EXISTS `cat`;
CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `cat`
--

INSERT INTO `cat` (`id`, `name`) VALUES
(2, 'JEANS'),
(3, 'SHIRTS | BLOUSES'),
(4, 'DRESSES'),
(5, 'SKRITS'),
(6, 'COATS'),
(7, 'noy'),
(8, 'noy');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sizes` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `items`
--

INSERT INTO `items` (`id`, `cid`, `name`, `price`, `sizes`, `url`) VALUES
(1, 3, 'SOFT-TOUCH OVERSIZED SWEATER', '169', 'L,M,S,XS', 'https://static.zara.net/photos///2018/I/0/1/p/9667/108/800/2/w/1920/9667108800_2_4_1.jpg?ts=1540903442157'),
(2, 3, 'SOFT-TOUCH SWEATSHIRT', '119', 'L,M,S', 'https://static.zara.net/photos///2018/I/0/1/p/3431/801/803/2/w/1024/3431801803_1_1_1.jpg?ts=1537959232717'),
(3, 3, 'FLORAL PRINT BLOUSE', '169', 'L,M,S,XS', 'https://static.zara.net/photos///2019/V/0/1/p/1971/051/083/2/w/1024/1971051083_1_1_1.jpg?ts=1542364370287'),
(4, 2, 'ZW PREMIUM NEW MOM STONE BLUE JEANS', '199', 'L,M,S,XS', 'https://static.zara.net/photos///2018/I/0/1/p/3175/242/400/2/w/1024/3175242400_2_1_1.jpg?ts=1532513745010'),
(5, 2, 'JEANS ZW PREMIUM CROPPED SNAKE PRINT', '269', 'M,XS', 'https://static.zara.net/photos///2018/I/0/1/p/9632/249/250/3/w/1024/9632249250_2_1_1.jpg?ts=1534949070926'),
(6, 2, 'HI-RISE VINTAGE SKINNY JEGGINGS', '149', 'L,M,S,XS', 'https://static.zara.net/photos///2019/V/0/1/p/9374/220/800/2/w/1920/9374220800_2_6_1.jpg?ts=1544787147049'),
(7, 4, 'TEXTURED WEAVE DRESS', '119', 'L,M,S,XS', 'https://static.zara.net/photos///2018/I/0/1/p/5643/324/040/3/w/1024/5643324040_2_4_1.jpg?ts=1540393711996'),
(8, 4, 'TEXTURED DRESS WITH BELT', '169', 'L,M,S,XS', 'https://static.zara.net/photos///2019/V/0/1/p/0219/303/835/2/w/1024/0219303835_2_1_1.jpg?ts=1544183887867'),
(9, 4, 'ANIMAL PRINT DRESS', '129', 'L,M,S,XS', 'https://static.zara.net/photos///2019/V/0/1/p/5039/301/021/2/w/1920/5039301021_2_1_1.jpg?ts=1543424185203'),
(10, 5, 'MIDI SKIRT', '59', 'L,M,S,XS', 'https://static.zara.net/photos///2018/I/0/1/p/5644/376/051/3/w/1920/5644376051_2_5_1.jpg?ts=1540224094413'),
(11, 5, 'CHECK MIDI SKIRT', '169', 'M,XS', 'https://static.zara.net/photos///2019/V/0/1/p/7385/147/065/2/w/1920/7385147065_2_2_1.jpg?ts=1544013832706'),
(12, 5, 'FAUX LEATHER SKIRT WITH TIE BELT', '169', 'L,M,S,XS', 'https://static.zara.net/photos///2018/I/0/1/p/2398/228/800/2/w/1024/2398228800_2_1_1.jpg?ts=1536930532030'),
(13, 6, 'SOFT FAUX FUR COAT', '329', 'L,M,S,XS', 'https://static.zara.net/photos///2019/V/0/1/p/6318/023/800/2/w/1024/6318023800_1_1_1.jpg?ts=1544632392151'),
(14, 6, 'MASCULINE COAT', '599', 'L,M,S,XS', 'https://static.zara.net/photos///2019/V/0/1/p/8045/744/756/5/w/1024/8045744756_1_1_1.jpg?ts=1545044776930'),
(15, 6, 'https://static.zara.net/photos///2018/I/0/1/p/6318/233/712/2/w/1024/6318233712_1_1_1.jpg?ts=1543311609203', '269', 'L,M,S,XS', 'https://static.zara.net/photos///2018/I/0/1/p/6318/233/712/2/w/1024/6318233712_1_1_1.jpg?ts=1543311609203');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `rank`) VALUES
(2, 'raz', '123', 'razmedalsy@gmail.com', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
