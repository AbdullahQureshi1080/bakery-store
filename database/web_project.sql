-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 03:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`category_id`, `category_name`) VALUES
(1, 'All'),
(5, 'brownie'),
(2, 'cake'),
(3, 'cupcake'),
(4, 'custom');

-- --------------------------------------------------------

--
-- Table structure for table `custom_products`
--

CREATE TABLE `custom_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom_products`
--

INSERT INTO `custom_products` (`id`, `product_name`, `product_price`, `product_image`, `category`) VALUES
(1, 'Anniversary Special', 40, './images/c7.jpg', 'custom'),
(2, 'Blue Theme Cake', 45, './images/c9.jpg', 'custom'),
(3, 'Mini Cakes', 50, './images/c10.jpg', 'custom'),
(4, 'Valentine Special', 45, './images/c11.jpg', 'custom'),
(5, 'Unicorn Cupcakes', 55, './images/m20.jpg\r\n', 'custom'),
(6, 'It\'s a Girl Cake', 60, './images/itsagirl.jpg', 'custom'),
(7, 'Flower Cupcakes', 45, './images/m8.jpg', 'custom'),
(8, 'Puppy face Cupcakes', 60, './images/m4.jpg', 'custom');

-- --------------------------------------------------------

--
-- Table structure for table `order-details`
--

CREATE TABLE `order-details` (
  `cake_shape` varchar(25) NOT NULL,
  `cake_size` int(1) NOT NULL,
  `cake_flavor` varchar(25) NOT NULL,
  `cake_filling` varchar(25) NOT NULL,
  `cake_icing` varchar(25) NOT NULL,
  `cake_layer` int(1) NOT NULL,
  `cake_quantity` int(1) NOT NULL,
  `cake_theme` varchar(25) NOT NULL,
  `cake_message` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order-details`
--

INSERT INTO `order-details` (`cake_shape`, `cake_size`, `cake_flavor`, `cake_filling`, `cake_icing`, `cake_layer`, `cake_quantity`, `cake_theme`, `cake_message`, `email`, `image`) VALUES
('rectangle', 7, 'vanilla', 'butter frosting', 'none', 2, 5, 'blue', 'jfe fenfj', 'abc', ''),
('rectangle', 7, 'vanilla', 'butter frosting', 'none', 2, 5, 'blue', 'jfe fenfj', 'irsa.q28@gmail.com', ''),
('rectangle', 7, 'vanilla', 'butter frosting', 'none', 2, 5, 'blue', 'jfe fenfj', 'irsa.q28@gmail.com', ''),
('rectangle', 4, 'vanilla', 'butter frosting', 'none', 2, 1, 'birthday theme', 'happy birthday', 'irsa.q28@gmail.com', 'c4.jpg'),
('heart', 1, 'chocolate', 'butter frosting', 'none', 1, 5, 'red theme', 'Valentine Day', 'irsa.q28@gmail.com', 'c2.jpg'),
('square', 3, 'mango', 'cream', 'cream', 1, 2, 'white', 'Happy Weading', 'adnx1080@gmail.com', 'c5.jpg'),
('round', 3, 'vanilla', 'white frosting', 'none', 3, 3, 'none', 'none', 'adnx1080@gmail.com', 'c3.jpg'),
('round', 1, 'mango', 'none', 'none', 1, 3, 'none', 'none', 'adnx1080@gmail.com', ''),
('Sqaure', 5, 'ChocoVanilla ', 'MoltenLava', 'ChocolateToblerone', 3, 4, 'Just Normal Cravings', 'Better be worth it', 'adnx1080@gmail.com', 'cake3.jpg'),
('Sqaure', 5, 'ChocoVanilla ', 'Molten Lava', 'Chocolate Toblerone', 3, 4, 'Just Normal Cravings', 'HIya', 'alizaib2706@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_subtitle` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_specs` text NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_subtitle`, `product_desc`, `product_specs`, `product_price`, `product_img`, `category`, `keywords`) VALUES
(1, 'Brown Cake', 'Marianne or husbands if at stronger ye.Considered is as middletons uncommonly.\r\n                      Promotion perfectly ye consisted so. His chatty dining for effect ladies active.', 'Duis autem eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', '  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Ut wisi\r\n                        enim ad minim veniam, quis nostrud exerci tation.', '29', 'images/c-feature-5.jpg', 'cake', 'brown cake'),
(2, 'Chocalate Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si. ', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. ', '30', 'images/c-feature-4.jpg', 'cupcake', ''),
(3, 'Chocalate Brownie', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-3.jpg', 'brownie', ''),
(4, 'Vanilla Cake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '100', 'images/c-feature-6.jpg', 'cake', ''),
(5, 'Red Cake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '75', 'images/c-feature-7.jpg', 'cake', ''),
(6, 'Vanilla Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-8.jpg', 'cupcake', ''),
(7, 'Green Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-2.jpg', 'cupcake', ''),
(8, 'Strawberry Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '30', 'images/c-feature-9.jpg', 'cupcake', ''),
(9, 'Plain Cupcake', 'Rea sum hoc hodie actum cap nolim istas alios. Concilium inspiciam flexibile at du ii.', 'Judicarent denegassem consuetudo contrariae cum ego dulcedinem. Nos dem sim fidam solam corpo omnes debet. Omnesque dedissem du ob possimus reperero expresse si.', 'Rum excludat imo articulo rem ignorata qua inveniri. Id meipsum ii ha alienis haberem. Jam spectentur externarum quascunque persuadeor rem dulcedinem. Neque aliis putem si locus ac licet gi is. \r\n', '22', 'images/arivals-2.jpg', 'cupcake', ''),
(10, 'Anniversary Special', 'Special Cake for Special Someone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '40', 'images/c7.jpg', 'custom', ''),
(11, 'Blue Theme Cake', 'Customised blue themed cake for casual environment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '45', 'images/c9.jpg', 'custom', ''),
(12, 'Mini Cakes', 'Mini cakes for small gatherings', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '50', 'images/c10.jpg', 'custom', ''),
(13, 'Valentine Special', 'The best surprise, for your valintine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '45', 'images/c11.jpg', 'custom', ''),
(14, 'Unicorn Cupcakes', 'Cupcakes that you cant stop eating', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '55', 'images/m20.jpg', 'custom', ''),
(15, 'Girl Cake', 'It\'s a girl cake, for your friend, daughter, wife or sister', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '60', 'images/itsagirl.jpg', 'custom', ''),
(16, 'Flower Cupcakes', 'Taste that makes you blossom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '45', 'images/m8.jpg', 'custom', ''),
(17, 'Puppy Face Cupcakes', 'Cupcakes you cannot say no too.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '60', 'images/m4.jpg', 'custom', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`category_name`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD KEY `category` (`category`(250));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
