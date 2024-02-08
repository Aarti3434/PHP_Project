-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 01:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `feedback`) VALUES
(5, 'Sayali Kale', '8937869487', 'Nice.........'),
(6, 'Komal Ushir', '9921311528', 'Hello!'),
(7, '', '45232697860322', ''),
(8, 'rajendra bhau', '9168163938', 'helo javascript');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `dtime` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `final_total` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobile` varchar(1000) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `dtime`, `product`, `price`, `quantity`, `total`, `discount`, `delivery`, `final_total`, `cname`, `mobile`, `address`, `mode`, `status`) VALUES
(15, '04/10/2023 04:25:53 pm', 'Custard Ice Cream', '100', '2', '200', '1', '40', '237.6', 'RAJU BHAU', '', 'VAIJAPUR', 'Online', 'g'),
(16, '04/10/2023 04:27:29 pm', 'Custard Ice Cream', '100', '1', '100', '1', '40', '138.6', 'RAJU BHAU', '', 'VAIJAPUR', 'Online', 'g'),
(17, '04/10/2023 04:28:38 pm', 'Custard Ice Cream', '100', '2', '200', '1', '40', '237.6', 'ABC', '8956768716', 'VAIJAPUR', 'Cash', 'p'),
(18, '04/10/2023 04:52:31 pm', 'STRWABERRY', '140', '1', '140', '4', '40', '172.8', 'PANKAJ TRIBHUVAN', '9168163839', 'VAIJAPUR', 'Online', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `mobile`, `username`, `password`) VALUES
(1, 'DIPAK KADAM', '9874563210', 'DK321', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `price` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `name`, `photo`, `discount`, `price`) VALUES
(2, 'FRUITS', 'STRWABERRY', 'strwaberry.jpg', '4', '140'),
(4, 'CONE', 'CHOCOLATE', 'chocolate-cone-ice-cream-500x500.jpg', '1', '60'),
(6, 'CONE', 'Strawberry', 'Strawberry_ice_cream_cone_(5076899310).jpg', '0', '60'),
(9, 'FRUITS', 'Custard Ice Cream', 'sitaphal-ice-cream-1574322210-5164609.jpeg', '1', '100'),
(10, 'FRUITS', 'Mango Ice Cream', 'Mango-ice-cream.jpg', '3', '150'),
(11, 'NO SUGAR', 'Vanilla', 'no sugar1.jpg', '0', '80'),
(12, 'CHOCOLATE', 'Chocolate Ice Cream', '100.jpg', '1', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
