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
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `barcode` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_size` varchar(3) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_catagory` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `barcode` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL,
  `quantity` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `product`
--

INSERT INTO `product` (`id`, `barcode`, `name`, `image`, `price`, `catagory`, `size`, `quantity`) VALUES
(15, 21551, 'Topless2', 'pic1.png', 120, 'tops', 'All', 1);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `barcode` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL,
  `quantity` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `stock`
--

INSERT INTO `stock` (`id`, `barcode`, `name`, `image`, `price`, `catagory`, `size`, `quantity`) VALUES
(19, 21551, 'Topless2', 'pic1.png', 120, 'tops', 'XS', 12),
(18, 62641, 'Topless51', 'pic1.png', 140, 'tops', 'XS', 191);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `barcode` int(20) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
