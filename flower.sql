-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 08:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flower`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `or_id` int(11) NOT NULL,
  `or_name` text NOT NULL,
  `or_price` text NOT NULL,
  `or_num` text NOT NULL,
  `or_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(300) NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_num` text NOT NULL,
  `pro_image` text NOT NULL,
  `pro_type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_num`, `pro_image`, `pro_type`) VALUES
(1, 'tiny size', 890, '350', 'http://127.0.0.1/miniproject2/flower_image1/tinysize.jpg', '1'),
(2, 'mini size', 999, '600', 'http://127.0.0.1/miniproject2/flower_image1/minisize.jpg', '1'),
(3, 'glass dome ', 950, '800', 'http://127.0.0.1/miniproject2/flower_image1/glassdome.jpg', '2'),
(4, 'petite', 899, '271', 'http://127.0.0.1/miniproject2/flower_image1/petite.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `typee`
--

CREATE TABLE `typee` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(300) NOT NULL,
  `type_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typee`
--

INSERT INTO `typee` (`type_id`, `type_name`, `type_image`) VALUES
(1, 'Class Edition', 'http://127.0.0.1/minippang/img/Class Edition.jpg'),
(2, 'Glass Edition', 'http://127.0.0.1/minippang/img/Glass Edition.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `typee`
--
ALTER TABLE `typee`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `typee`
--
ALTER TABLE `typee`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
