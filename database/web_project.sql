-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 31, 2020 at 06:05 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_subtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_specs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_subtitle`, `product_desc`, `product_specs`, `product_price`, `product_img`) VALUES
(1, 'Brown Cake', 'Marianne or husbands if at stronger ye.Considered is as middletons uncommonly.\r\n                      Promotion perfectly ye consisted so. His chatty dining for effect ladies active.', 'Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', '  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi\r\n                        enim ad minim veniam, quis nostrud exerci tation.', '29', 'images/c-feature-5.jpg'),
(2, 'Chocalate Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si. ', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. ', '30', 'images/c-feature-4.jpg'),
(3, 'Chocalate Brownie', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-3.jpg'),
(4, 'Vanilla Cake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '100', 'images/c-feature-6.jpg'),
(5, 'Red Cake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '75', 'images/c-feature-7.jpg'),
(6, 'Vanilla Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-8.jpg'),
(7, 'Green Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-2.jpg'),
(8, 'Strawberry Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-9.jpg'),
(9, 'Plain Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '22', 'images/arivals-2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
