-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 06:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_email`, `user_pass`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', 'nayangondaliya157@gmail.com', '203'),
(12, '', 'nayangondaliya157@gmail.com', '203'),
(13, '', 'nayangondaliya157@gmail.com', '2003@nayan'),
(14, '', 'nayangondaliya157@gmail.com', '2003@nayan');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_size` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_qty` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_details` text NOT NULL,
  `product_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_category`, `product_type`, `product_name`, `product_brand`, `product_size`, `product_color`, `product_qty`, `product_price`, `product_details`, `product_image`) VALUES
(1, 'Traditional', 'Sherwani', 'Cotton Kurta', 'Raymond', '40', 'white', 10, 15000, 'Udhar bandh chhe									', '51lSAb39+eL._UY741_.webp'),
(7, 'Formal', 'Sherwani', 'Cotton Kurta', 'Raymond', '40', 'white', 10, 15000, 'Udhar bandh chhe																				', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(50) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_gender` varchar(100) NOT NULL,
  `staff_contact` decimal(65,0) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_qualification` varchar(100) NOT NULL,
  `staff_experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_name`, `staff_gender`, `staff_contact`, `staff_email`, `staff_address`, `staff_qualification`, `staff_experience`) VALUES
(1, 'Nayan Gondaliya', 'Male', '7572951997', 'nayangondaliya157@gmail.com', 'post office road,\r\ndarbar seri,\r\nverad - 360515', 'B.c.a', '1 Year'),
(2, 'Nayan Gondaliya', 'Male', '7572951997', 'nayangondaliya157@gmail.com', 'post office road,\r\ndarbar seri,\r\nverad - 360515											', 'b.c.a', '1 Year'),
(3, 'Keyur Vaghela', 'Male', '9145267854', 'keyurvaghela62@gmail.com', 'Sardar Chowk,', 'b.c.a', '4 Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
