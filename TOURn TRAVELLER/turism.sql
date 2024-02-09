-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 11:48 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turism`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobail` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `mobail`, `subject`, `message`) VALUES
(1, 'Dipak', 'dipakkadam7499@gmail.com', '7499521157', 'turist place', 'Awasome..............'),
(3, 'AARTI', 'yuggfkjgd@gfsgf', '744467477', 'dytrtr', 'trituyruyryuryu');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `tid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobail` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `how_many_peoples` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `leaving_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`tid`, `name`, `mobail`, `address`, `destination`, `how_many_peoples`, `start_date`, `leaving_date`) VALUES
(4, 'Dipak', '7499521157', 'biloni', 'pune', '2', '2023-03-16', '2023-03-24'),
(12, 'Sakshi', '9689876548', ' vAIJAPUR', 'Goa', '2', '2023-04-10', '2023-04-14'),
(13, 'AARTI', '8693477497', ' yeola', 'paris', '5', '2023-04-18', '2023-04-28'),
(14, 'Anosh', '8769846788', ' Vaijapur', 'Chenai', '6', '2023-04-10', '2023-04-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
