-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3300
-- Generation Time: Apr 30, 2024 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evani`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(8) NOT NULL,
  `fullname` varchar(200) NOT NULL DEFAULT 'null',
  `email` varchar(200) NOT NULL DEFAULT 'abc@gmail.com',
  `password` varchar(200) NOT NULL DEFAULT 'null',
  `securepassword` varchar(200) NOT NULL DEFAULT 'null',
  `token` varchar(500) NOT NULL DEFAULT 'null',
  `ip` varchar(32) NOT NULL DEFAULT '127.0.0.1',
  `refference` varchar(50) NOT NULL DEFAULT '00000000_00000000',
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `fullname`, `email`, `password`, `securepassword`, `token`, `ip`, `refference`, `updatedon`) VALUES
(1, 'Maroof', 'maroofsultan17@gmail.com', '12345', '827ccb0eea8a706c4c34a16891f84e7b', '3JuZbthTvfKCo9sj$pQzAHaG!lESe5gM', '::1', '20240430_00000001', '2024-04-30 13:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL DEFAULT 'null',
  `email` varchar(200) NOT NULL DEFAULT 'null',
  `contact` varchar(32) NOT NULL DEFAULT 'null',
  `password` varchar(200) NOT NULL DEFAULT 'null',
  `securepassword` varchar(200) NOT NULL DEFAULT 'null',
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0,
  `ipaddress` varchar(50) NOT NULL DEFAULT '127.0.0.1',
  `token` varchar(200) NOT NULL DEFAULT 'null',
  `refference` varchar(32) NOT NULL DEFAULT '00000000_00000001'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fullname`, `email`, `contact`, `password`, `securepassword`, `updatedon`, `status`, `ipaddress`, `token`, `refference`) VALUES
(1, 'Maroof Sultan', 'maroofsultan17@gmail.com', '03106510421', '1234567', 'null', '2024-03-28 10:51:12', 0, '::1', 'HfPDA3l1qiFWCpV2GcoU7ujX4vyLh*ra', '20240328_00000001'),
(2, 'Ali', 'maroofsultan11@gmail.com', '03106510422', '12345678', 'null', '2024-03-28 10:52:11', 0, '::1', 'kvV7wdxb6PWrZ)GzmULEn$j0Sq5K28HI', '20240328_00000002'),
(3, 'abbas', 'maroofsultan20@gmail.com', '03090742546', '123456789', 'null', '2024-03-28 10:55:45', 0, '::1', 'eXkitJAGKr$m2njW4dqVbah*uPZpcDQ6', '20240328_00000003'),
(4, 'Asbaat', 'asbaat@gmail.com', '03090742542', 'asbaat', 'null', '2024-03-28 11:45:11', 0, '::1', 'djqmxls2zpFUEG5u!M$C(gaO0fNVvJy3', '20240328_00000004'),
(5, 'Ahmed', 'maroofsultan123@gmail.com', '03090742541', 'qwerty', 'null', '2024-03-28 17:34:59', 0, '::1', 'DEtW1ULFZ)VnwzM3!bN8lJXQp$iRsqPS', '20240328_00000005'),
(6, 'Sohail', 'maroofsultan176@gmail.com', '03090742512', 'sohail', 'null', '2024-03-28 17:46:12', 0, '::1', 'swT28B)IaVyGScORYCrNXolH*q1!K70j', '20240328_00000006'),
(7, 'ghuffran', 'ghuffran@gmail.com', '0322987654', '12345678', '25d55ad283aa400af464c76d713c07ad', '2024-04-24 13:10:46', 0, '::1', 'IS29BbtVs3hcAT0LwMUONzWefKJxDyu8', '20240424_00000007');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(8) NOT NULL,
  `cid` int(8) DEFAULT NULL,
  `quoteimage` varchar(300) NOT NULL DEFAULT 'null',
  `authorimage` varchar(300) NOT NULL DEFAULT 'null',
  `subject` varchar(100) NOT NULL DEFAULT 'null',
  `description` varchar(1000) DEFAULT NULL,
  `reference` varchar(32) NOT NULL DEFAULT 'null',
  `status` int(2) NOT NULL DEFAULT 0,
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `cid`, `quoteimage`, `authorimage`, `subject`, `description`, `reference`, `status`, `updatedon`) VALUES
(1, 3, 'images/index-1/testimonial/quot/shape-2.png', 'images/index-1/testimonial/author-1.png', 'First Comment', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ming\r\n                                        elit, sed do eiusmod tempor incididunt\r\n                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '31/03/2024_00000001', 1, '2024-03-31 16:36:11'),
(2, 1, 'images/index-1/testimonial/quot/shape-2.png', 'images/index-1/testimonial/author-2.png', 'Second Comment', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ming\r\n                                        elit, sed do eiusmod tempor incididunt\r\n                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '31/03/2024_00000002', 1, '2024-03-31 16:36:11'),
(3, 6, 'images/index-1/testimonial/quot/shape-3.png', 'images/index-1/testimonial/author-3.png', 'Third Comment', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ming\r\n                                        elit, sed do eiusmod tempor incididunt\r\n                                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '31/03/2024_00000003', 1, '2024-03-31 16:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `id` int(8) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'upload/No Image Found',
  `title` varchar(50) NOT NULL DEFAULT 'null',
  `refference` varchar(32) NOT NULL DEFAULT '00000000_00000000',
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `catageory` varchar(50) NOT NULL DEFAULT 'null',
  `status` int(2) NOT NULL DEFAULT 0,
  `ip` varchar(50) NOT NULL,
  `totalprice` double(8,2) NOT NULL DEFAULT 0.00,
  `percentoff` int(8) NOT NULL DEFAULT 0,
  `priceonoff` double(8,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`id`, `image`, `title`, `refference`, `updatedon`, `catageory`, `status`, `ip`, `totalprice`, `percentoff`, `priceonoff`) VALUES
(1, './assets/images/sale/recent/poloshirtmen.png', 'polo shirt for men', '28032024_00000001', '2024-03-28 18:58:00', 'recent', 1, '', 200.00, 51, 99.00),
(2, './assets/images/sale/recent/Girlsnightgown.png', 'Girls night gown', '28032024_00000002', '2024-03-28 18:58:07', 'recent', 1, '', 200.00, 51, 99.00),
(3, './assets/images/sale/recent/MensT-shirt.png', 'Mens stylish T-shirt', '28032024_00000003', '2024-03-28 18:49:46', 'recent', 1, '', 99.00, 0, 99.00),
(4, './assets/images/sale/recent/towel.png', 'Simple soft towel', '28032024_00000004', '2024-03-28 18:49:46', 'recent', 1, '', 99.00, 0, 99.00),
(5, './assets/images/sale/recent/Womanfashiondress.png', 'Woman fashion dress', '28032024_00000005', '2024-03-28 18:49:46', 'recent', 1, '', 99.00, 0, 99.00),
(6, './assets/images/sale/recent/OriginaldesiDog.png', 'Original desi Dog', '28032024_00000006', '2024-03-28 18:57:32', 'recent', 1, '', 200.00, 51, 99.00),
(7, './assets/images/sale/recent/poloshirtmen.png', 'polo shirt for men', '28032024_00000007', '2024-03-28 19:20:02', 'popular', 1, '', 200.00, 51, 99.00),
(8, './assets/images/sale/recent/Girlsnightgown.png', 'Girls night gown', '28032024_00000008', '2024-03-28 19:20:02', 'popular', 1, '', 200.00, 51, 99.00),
(9, './assets/images/sale/recent/MensT-shirt.png', 'Mens stylish T-shirt', '28032024_00000009', '2024-03-28 19:20:02', 'popular', 1, '', 99.00, 0, 99.00),
(10, './assets/images/sale/recent/towel.png', 'Simple soft towel', '28032024_00000010', '2024-03-28 19:20:02', 'popular', 1, '', 99.00, 0, 99.00),
(11, './assets/images/sale/recent/Womanfashiondress.png', 'Woman fashion dress', '28032024_00000011', '2024-03-28 19:20:02', 'popular', 1, '', 99.00, 0, 99.00),
(12, './assets/images/sale/recent/OriginaldesiDog.png', 'Original desi Dog', '28032024_00000012', '2024-03-28 19:20:02', 'popular', 1, '', 200.00, 51, 99.00),
(13, './assets/images/sale/recent/poloshirtmen.png', 'polo shirt for men (TOP Catageory)', '28032024_00000013', '2024-03-28 18:58:00', 'top', 1, '', 200.00, 51, 99.00),
(14, './assets/images/sale/recent/Girlsnightgown.png', 'Girls night gown (Top)', '28032024_00000014', '2024-03-28 18:58:07', 'top', 1, '', 200.00, 51, 99.00),
(15, './assets/images/sale/recent/MensT-shirt.png', 'Mens stylish T-shirt (Top)', '28032024_00000015', '2024-03-28 18:49:46', 'top', 1, '', 99.00, 0, 99.00),
(16, './assets/images/sale/recent/towel.png', 'Simple soft towel(Top)', '28032024_00000016', '2024-03-28 18:49:46', 'top', 1, '', 99.00, 0, 99.00),
(17, './assets/images/sale/recent/Womanfashiondress.png', 'Woman fashion dress', '28032024_00000017', '2024-03-28 18:49:46', 'top', 1, '', 99.00, 0, 99.00),
(18, './assets/images/sale/recent/OriginaldesiDog.png', 'Original desi Dog(Top)', '28032024_00000018', '2024-03-28 18:57:32', 'top', 1, '', 200.00, 51, 99.00),
(19, './upload/profile_1714484796.png', 'Test', '20240430_00000019', '2024-04-30 13:46:36', 'recent', 0, '::1', 12345.00, 21, 9752.55);

-- --------------------------------------------------------

--
-- Table structure for table `topcategories1`
--

CREATE TABLE `topcategories1` (
  `id` int(8) NOT NULL,
  `categories` varchar(200) NOT NULL DEFAULT 'null',
  `items` int(8) NOT NULL DEFAULT 0,
  `refference` varchar(32) NOT NULL DEFAULT '00000000_000000',
  `image` varchar(200) NOT NULL DEFAULT 'upload/Not Found',
  `updatedon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topcategories1`
--

INSERT INTO `topcategories1` (`id`, `categories`, `items`, `refference`, `image`, `updatedon`, `status`) VALUES
(1, 'Men', 1234, '26032024_000001', './assets/images/top-categeories/men.png', '2024-03-26 14:05:09', 1),
(2, 'Women', 5234, '26032024_000002', './assets/images/top-categeories/women.png', '2024-03-26 14:05:09', 1),
(3, 'Kids', 2132, '26032024_000003', './assets/images/top-categeories/kids.png', '2024-03-26 14:05:09', 1),
(4, 'Accessories', 5432, '26032024_000004', './assets/images/top-categeories/accessories.png', '2024-03-26 14:05:09', 1),
(5, 'Cloths', 6754, '26032024_000005', './assets/images/top-categeories/cloths.png', '2024-03-26 14:05:09', 1),
(6, 'Beauty', 5234, '26032024_000006', './assets/images/top-categeories/beauty.png', '2024-03-26 14:05:09', 1),
(7, 'Showes', 9876, '26032024_000007', './assets/images/top-categeories/showes.png', '2024-03-26 14:05:09', 1),
(8, 'Jewellery', 6547, '26032024_000008', './assets/images/top-categeories/jewellery.png', '2024-03-26 14:05:09', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topcategories1`
--
ALTER TABLE `topcategories1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories` (`categories`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
