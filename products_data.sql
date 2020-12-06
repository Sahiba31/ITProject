-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2020 at 12:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myitproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_data`
--

DROP TABLE IF EXISTS `products_data`;
CREATE TABLE IF NOT EXISTS `products_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Purchased_Year` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Uploaded_Date` date NOT NULL,
  `Additional_Information` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_data`
--

INSERT INTO `products_data` (`id`, `Title`, `Category`, `Purchased_Year`, `Price`, `Contact`, `Image`, `Uploaded_Date`, `Additional_Information`) VALUES
(1, 'Sofa Set For Sale', 'Furniture', '2015', '6000', '9034883976', 'sofa.jpg', '2020-12-06', 'Good Condition'),
(2, 'Fridge For Sale', 'Appliances', '2014', '5000', '9874563258', 'Fridge.jpg', '2020-12-06', 'Working fine'),
(3, 'Activa For Sale', 'Vehicles', '2010', '20000', '8054498114', 'activa.jpg', '2020-12-06', 'Brown Colour, Needs Service'),
(4, 'Washing Machine For Sale', 'Appliances', '2013', '8000', '9813183976', 'Washing Machine.png', '2020-12-06', 'Semi Automatic, good condition'),
(5, 'Almirah For Sale', 'Furniture', '2014', '10000', '8523697415', 'Alimrah.jpg', '2020-12-06', 'Godrej, Maroon Colour'),
(6, 'Car For Sale', 'Vehicles', '2010', '50000', '8521479635', 'car.jpg', '2020-12-06', 'Fine Condition'),
(7, 'AC For Sale', 'Vehicles', '2015', '15000', '9874563215', 'AC.jpg', '2020-12-06', 'Perfectly fine, Split AC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
