-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: ינואר 11, 2019 בזמן 10:54 AM
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
  `username` varchar(30) NOT NULL,
  `time` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `barcode` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `size` varchar(3) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `orders`
--

INSERT INTO `orders` (`id`, `username`, `time`, `year`, `month`, `day`, `barcode`, `name`, `image`, `size`, `quantity`, `price`) VALUES
(3, 'bar', '10:49:46', 2019, 1, 11, 1199, 'black bag', '6326304040_1_1_1.jpg', 'XS', 1, 139),
(3, 'bar', '10:49:46', 2019, 1, 11, 2277, 'cat eye ', '4646201760_1_1_1.jpg', 'XS', 1, 59),
(2, 'lior', '10:47:30', 2019, 1, 11, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 'XS', 1, 149),
(2, 'lior', '10:47:30', 2019, 1, 11, 1111, 'basic brown', '1660802700_2_1_1.jpg', 'S', 1, 150),
(1, 'noa', '10:45:04', 2019, 1, 11, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 'XS', 1, 199),
(1, 'noa', '10:45:04', 2019, 1, 11, 1144, 'red dress', '5644151600_1_1_1.jpg', 'XS', 1, 129),
(1, 'noa', '10:45:04', 2019, 1, 11, 2266, 'red heels', '5202301056_1_1_1.jpg', 'XS', 1, 149),
(1, 'noa', '10:45:04', 2019, 1, 11, 1199, 'black bag', '6326304040_1_1_1.jpg', 'XS', 1, 139),
(2, 'lior', '10:47:30', 2019, 1, 11, 1199, 'black bag', '6326304040_1_1_1.jpg', 'XS', 1, 139),
(2, 'lior', '10:47:30', 2019, 1, 11, 2211, 'black skirt', '6840258800_2_1_1.jpg', 'M', 1, 149),
(2, 'lior', '10:47:30', 2019, 1, 11, 2200, 'snake pants', '2398231800_2_1_1.jpg', 'M', 1, 129),
(3, 'bar', '10:49:46', 2019, 1, 11, 1144, 'red dress', '5644151600_1_1_1.jpg', 'S', 1, 129),
(3, 'bar', '10:49:46', 2019, 1, 11, 2233, 'gucci', '7590301040_2_1_1.jpg', 'XS', 1, 199),
(3, 'bar', '10:49:46', 2019, 1, 11, 1100, 'white shirt', '0881213712_1_1_1.jpg', 'XS', 1, 129);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `time` varchar(15) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `card` varchar(255) NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `tprice` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `payments`
--

INSERT INTO `payments` (`id`, `username`, `time`, `year`, `month`, `day`, `card`, `cvv`, `exp`, `tprice`) VALUES
(1, 'noa', '10:45:04', 2019, 1, 11, 'c79a506feb0a2f23b7c97bbb6168df2a', '123', '12-2020', '616'),
(2, 'lior', '10:47:30', 2019, 1, 11, '7a869028faf327e442397ebd99b04dfd', '543', '03-2023', '716'),
(3, 'bar', '10:49:46', 2019, 1, 11, '7a9659994525f1f4cebc3e361f3e9b6d', '123', '05-2025', '655');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `shippments`
--

DROP TABLE IF EXISTS `shippments`;
CREATE TABLE IF NOT EXISTS `shippments` (
  `id` int(15) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `zip` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `shippments`
--

INSERT INTO `shippments` (`id`, `full_name`, `year`, `month`, `day`, `city`, `state`, `address`, `zip`) VALUES
(3, 'bar levy', 2019, 1, 11, 'beer sheva', 'israel', 'ein gedi', 6547),
(2, 'lior dahan', 2019, 1, 11, 'eilat', 'israel', 'duvdevan', 6574),
(1, 'noa cohen', 2019, 1, 11, 'tel aviv', 'israel', 'dizingof', 1234);

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
  `year` int(5) NOT NULL,
  `month` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `time` varchar(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `support`
--

INSERT INTO `support` (`id`, `username`, `full_name`, `email`, `year`, `month`, `day`, `time`, `message`) VALUES
(1, 'noa', 'noa cohen', 'no@gmail.com', 2019, 1, 11, '09:32:38', 'hello, your website is awesome!'),
(2, 'bar', 'bar  levy', 'bar@gmail.com', 2019, 1, 11, '09:50:10', 'i love all of your clothes !'),
(3, 'lior', 'lior dahan', 'lior@gmail.com', 2019, 1, 11, '09:56:46', 'im very happy with my order , cant wait to buy from you again !\r\nplease send me an e-mail when the new collection will arrive.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
