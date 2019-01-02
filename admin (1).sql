-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: ינואר 02, 2019 בזמן 08:11 AM
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
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(15) NOT NULL,
  `username` text NOT NULL,
  `time` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `barcode` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `size` varchar(3) NOT NULL,
  `quantity` int(15) NOT NULL,
  `price` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `orders`
--

INSERT INTO `orders` (`id`, `username`, `time`, `year`, `month`, `day`, `barcode`, `name`, `image`, `size`, `quantity`, `price`) VALUES
(0, 'liran', '09:09:27', 2019, 1, 1, 62641, 'Topless51', 'pic1.png', 'XS', 1, 140),
(0, 'liran', '09:11:51', 2019, 1, 1, 21551, 'Topless2', 'pic1.png', 'XS', 1, 140),
(132, 'liran', '09:13:34', 2019, 1, 1, 21551, 'Topless2', 'pic1.png', 'XS', 1, 140),
(132, 'liran', '09:13:34', 2019, 1, 1, 62641, 'Topless51', 'pic1.png', 'XS', 1, 140),
(132, 'liran', '09:13:34', 2019, 1, 1, 62641, 'Topless51', 'pic1.png', 'XS', 1, 140),
(133, 'liran', '02:10:19', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 3, 120),
(134, 'liran', '03:14:14', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'M', 1, 120),
(135, 'liran', '03:59:55', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 40, 120),
(135, 'liran', '03:59:55', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 40, 120),
(136, 'liran', '04:01:41', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120),
(137, 'liran', '04:03:28', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 25, 120),
(138, 'liran', '04:09:14', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120),
(139, 'liran', '07:40:25', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120),
(139, 'liran', '07:40:25', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120),
(139, 'liran', '07:40:25', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120),
(140, 'liran', '07:45:29', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120),
(140, 'liran', '07:45:29', 2019, 1, 2, 21551, 'Topless2', 'pic1.png', 'XS', 1, 120);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `time` varchar(60) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `card` varchar(40) NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `tprice` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `shippments`
--

DROP TABLE IF EXISTS `shippments`;
CREATE TABLE IF NOT EXISTS `shippments` (
  `id` int(15) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(4) NOT NULL,
  `day` int(4) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zip` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `shippments`
--

INSERT INTO `shippments` (`id`, `full_name`, `year`, `month`, `day`, `city`, `state`, `address`, `zip`) VALUES
(140, 'liran balilti', 2019, 1, 2, 'beer sheva', '12415', 'irus anegev 6', 51515),
(139, 'liran balilti', 2019, 1, 2, 'beer sheva', '12415', 'irus anegev 6', 51515);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `support`
--

DROP TABLE IF EXISTS `support`;
CREATE TABLE IF NOT EXISTS `support` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
