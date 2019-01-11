-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: ינואר 11, 2019 בזמן 10:56 AM
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
  `username` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_size` varchar(3) NOT NULL,
  `p_quantity` int(10) NOT NULL,
  `p_catagory` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `cart`
--

INSERT INTO `cart` (`id`, `barcode`, `username`, `p_name`, `p_image`, `p_price`, `p_size`, `p_quantity`, `p_catagory`) VALUES
(1, 1122, 'noy', 'flower dress', '2029218330_1_1_1.jpg', 199, 'XS', 1, 'dresses'),
(13, 1100, 'liran', 'white shirt', '0881213712_1_1_1.jpg', 129, 'XS', 1, 'tops');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `barcode` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `product`
--

INSERT INTO `product` (`id`, `barcode`, `name`, `image`, `price`, `catagory`, `size`, `quantity`) VALUES
(1, 1100, 'white shirt', '0881213712_1_1_1.jpg', 129, 'tops', 'All', 1),
(2, 1111, 'basic brown', '1660802700_2_1_1.jpg', 150, 'tops', 'All', 1),
(3, 1122, 'flower dress', '2029218330_1_1_1.jpg', 199, 'dresses', 'All', 1),
(4, 1144, 'red dress', '5644151600_1_1_1.jpg', 129, 'dresses', 'All', 1),
(5, 1155, 'snake dress', '5643324040_1_1_1.jpg', 199, 'dresses', 'All', 1),
(6, 1166, 'snake bag', '1601004201_1_1_1.jpg', 129, 'bags', 'All', 1),
(7, 1188, 'leopard bag', '3312004195_1_1_1.jpg', 149, 'bags', 'All', 1),
(8, 1199, 'black bag', '6326304040_1_1_1.jpg', 139, 'bags', 'All', 1),
(9, 2200, 'snake pants', '2398231800_2_1_1.jpg', 129, 'bottoms', 'All', 1),
(10, 2211, 'black skirt', '6840258800_2_1_1.jpg', 149, 'bottoms', 'All', 1),
(11, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 199, 'bottoms', 'All', 1),
(12, 2233, 'gucci', '7590301040_2_1_1.jpg', 199, 'flats', 'All', 1),
(13, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 149, 'flats', 'All', 1),
(14, 2255, 'black heels', '2200001040_2_1_1.jpg', 199, 'heels', 'All', 1),
(15, 2266, 'red heels', '5202301056_1_1_1.jpg', 149, 'heels', 'All', 1),
(16, 2277, 'cat eye ', '4646201760_1_1_1.jpg', 59, 'sunglasses', 'All', 1),
(17, 2288, 'cat eye 2', '4431203800_1_1_1.jpg', 49, 'sunglasses', 'All', 1),
(18, 2299, 'black jeans', '8246257800_2_3_1.jpg', 149, 'bottoms', 'All', 1);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `barcode` int(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `stock`
--

INSERT INTO `stock` (`id`, `barcode`, `name`, `image`, `price`, `catagory`, `size`, `quantity`) VALUES
(1, 1100, 'white shirt', '0881213712_1_1_1.jpg', 129, 'tops', 'XS', 77),
(2, 1100, 'white shirt', '0881213712_1_1_1.jpg', 129, 'tops', 'S', 70),
(3, 1100, 'white shirt', '0881213712_1_1_1.jpg', 129, 'tops', 'M', 70),
(4, 1100, 'white shirt', '0881213712_1_1_1.jpg', 129, 'tops', 'L', 70),
(5, 1100, 'white shirt', '0881213712_1_1_1.jpg', 129, 'tops', 'XL', 70),
(6, 1111, 'basic brown', '1660802700_2_1_1.jpg', 150, 'tops', 'XS', 70),
(7, 1111, 'basic brown', '1660802700_2_1_1.jpg', 150, 'tops', 'S', 68),
(8, 1111, 'basic brown', '1660802700_2_1_1.jpg', 150, 'tops', 'M', 70),
(9, 1111, 'basic brown', '1660802700_2_1_1.jpg', 150, 'tops', 'L', 70),
(10, 1111, 'basic brown', '1660802700_2_1_1.jpg', 150, 'tops', 'XL', 70),
(11, 1122, 'flower dress', '2029218330_1_1_1.jpg', 199, 'dresses', 'XS', 32),
(12, 1122, 'flower dress', '2029218330_1_1_1.jpg', 199, 'dresses', 'S', 35),
(13, 1122, 'flower dress', '2029218330_1_1_1.jpg', 199, 'dresses', 'M', 35),
(14, 1122, 'flower dress', '2029218330_1_1_1.jpg', 199, 'dresses', 'L', 35),
(15, 1122, 'flower dress', '2029218330_1_1_1.jpg', 199, 'dresses', 'XL', 35),
(16, 1144, 'red dress', '5644151600_1_1_1.jpg', 129, 'dresses', 'XS', 32),
(17, 1144, 'red dress', '5644151600_1_1_1.jpg', 129, 'dresses', 'S', 33),
(18, 1144, 'red dress', '5644151600_1_1_1.jpg', 129, 'dresses', 'M', 35),
(19, 1144, 'red dress', '5644151600_1_1_1.jpg', 129, 'dresses', 'L', 35),
(20, 1144, 'red dress', '5644151600_1_1_1.jpg', 129, 'dresses', 'XL', 35),
(21, 1155, 'snake dress', '5643324040_1_1_1.jpg', 199, 'dresses', 'XS', 55),
(22, 1155, 'snake dress', '5643324040_1_1_1.jpg', 199, 'dresses', 'S', 55),
(23, 1155, 'snake dress', '5643324040_1_1_1.jpg', 199, 'dresses', 'M', 55),
(24, 1155, 'snake dress', '5643324040_1_1_1.jpg', 199, 'dresses', 'L', 55),
(25, 1155, 'snake dress', '5643324040_1_1_1.jpg', 199, 'dresses', 'XL', 55),
(26, 1166, 'snake bag', '1601004201_1_1_1.jpg', 129, 'bags', 'XS', 99),
(33, 2200, 'snake pants', '2398231800_2_1_1.jpg', 129, 'bottoms', 'XS', 100),
(32, 1199, 'black bag', '6326304040_1_1_1.jpg', 139, 'bags', 'XS', 50),
(31, 1188, 'leopard bag', '3312004195_1_1_1.jpg', 149, 'bags', 'XS', 35),
(34, 2200, 'snake pants', '2398231800_2_1_1.jpg', 129, 'bottoms', 'S', 100),
(35, 2200, 'snake pants', '2398231800_2_1_1.jpg', 129, 'bottoms', 'M', 99),
(36, 2200, 'snake pants', '2398231800_2_1_1.jpg', 129, 'bottoms', 'L', 100),
(37, 2200, 'snake pants', '2398231800_2_1_1.jpg', 129, 'bottoms', 'XL', 100),
(38, 2211, 'black skirt', '6840258800_2_1_1.jpg', 149, 'bottoms', 'XS', 55),
(39, 2211, 'black skirt', '6840258800_2_1_1.jpg', 149, 'bottoms', 'S', 55),
(40, 2211, 'black skirt', '6840258800_2_1_1.jpg', 149, 'bottoms', 'M', 54),
(41, 2211, 'black skirt', '6840258800_2_1_1.jpg', 149, 'bottoms', 'L', 55),
(42, 2211, 'black skirt', '6840258800_2_1_1.jpg', 149, 'bottoms', 'XL', 55),
(43, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 199, 'bottoms', 'XS', 199),
(44, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 199, 'bottoms', 'S', 200),
(45, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 199, 'bottoms', 'M', 200),
(46, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 199, 'bottoms', 'L', 200),
(47, 2222, 'brown skirt', '7275103305_2_3_1.jpg', 199, 'bottoms', 'XL', 200),
(48, 2233, 'gucci', '7590301040_2_1_1.jpg', 199, 'flats', 'XS', 99),
(49, 2233, 'gucci', '7590301040_2_1_1.jpg', 199, 'flats', 'S', 100),
(50, 2233, 'gucci', '7590301040_2_1_1.jpg', 199, 'flats', 'M', 100),
(51, 2233, 'gucci', '7590301040_2_1_1.jpg', 199, 'flats', 'L', 100),
(52, 2233, 'gucci', '7590301040_2_1_1.jpg', 199, 'flats', 'XL', 100),
(53, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 149, 'flats', 'XS', 99),
(54, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 149, 'flats', 'S', 100),
(55, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 149, 'flats', 'M', 100),
(56, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 149, 'flats', 'L', 100),
(57, 2244, 'leopard shoes', '7572301201_2_1_1.jpg', 149, 'flats', 'XL', 100),
(58, 2255, 'black heels', '2200001040_2_1_1.jpg', 199, 'heels', 'XS', 54),
(59, 2255, 'black heels', '2200001040_2_1_1.jpg', 199, 'heels', 'S', 55),
(60, 2255, 'black heels', '2200001040_2_1_1.jpg', 199, 'heels', 'M', 55),
(61, 2255, 'black heels', '2200001040_2_1_1.jpg', 199, 'heels', 'L', 55),
(62, 2255, 'black heels', '2200001040_2_1_1.jpg', 199, 'heels', 'XL', 55),
(63, 2266, 'red heels', '5202301056_1_1_1.jpg', 149, 'heels', 'XS', 68),
(64, 2266, 'red heels', '5202301056_1_1_1.jpg', 149, 'heels', 'S', 70),
(65, 2266, 'red heels', '5202301056_1_1_1.jpg', 149, 'heels', 'M', 70),
(66, 2266, 'red heels', '5202301056_1_1_1.jpg', 149, 'heels', 'L', 70),
(67, 2266, 'red heels', '5202301056_1_1_1.jpg', 149, 'heels', 'XL', 70),
(68, 2277, 'cat eye ', '4646201760_1_1_1.jpg', 59, 'sunglasses', 'XS', 33),
(69, 2288, 'cat eye 2', '4431203800_1_1_1.jpg', 49, 'sunglasses', 'XS', 70),
(70, 2299, 'black jeans', '8246257800_2_3_1.jpg', 149, 'bottoms', 'XS', 200),
(71, 2299, 'black jeans', '8246257800_2_3_1.jpg', 149, 'bottoms', 'S', 199),
(72, 2299, 'black jeans', '8246257800_2_3_1.jpg', 149, 'bottoms', 'M', 200),
(73, 2299, 'black jeans', '8246257800_2_3_1.jpg', 149, 'bottoms', 'L', 200),
(74, 2299, 'black jeans', '8246257800_2_3_1.jpg', 149, 'bottoms', 'XL', 200);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `barcode` int(15) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `wishlist`
--

INSERT INTO `wishlist` (`id`, `username`, `name`, `barcode`, `price`, `quantity`, `catagory`, `image`) VALUES
(1, 'noa', 'snake dress', 1155, 199, 1, 'dresses', '5643324040_1_1_1.jpg'),
(2, 'noa', 'gucci', 2233, 199, 1, 'flats', '7590301040_2_1_1.jpg'),
(3, 'noa', 'snake bag', 1166, 129, 1, 'bags', '1601004201_1_1_1.jpg'),
(4, 'bar', 'black skirt', 2211, 149, 1, 'bottoms', '6840258800_2_1_1.jpg'),
(5, 'lior', 'leopard shoes', 2244, 149, 1, 'flats', '7572301201_2_1_1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
