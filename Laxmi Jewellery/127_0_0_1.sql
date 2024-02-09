-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 10:56 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--
CREATE DATABASE IF NOT EXISTS `attendance` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `cdate` varchar(50) NOT NULL,
  `rno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `cdate`, `rno`, `name`, `branch`, `sem`) VALUES
(1, '2023/04/07', 1, 'NIKITA RITTHE', 'CO', '6'),
(2, '2023/04/07', 2, 'KALYANI SURYAVANSHI', 'CO', '6'),
(3, '2023/04/07', 3, 'pratiksha navagire', 'CO', '6'),
(4, '2023/04/07', 4, 'ujjwala kute', 'CO', '6'),
(5, '2023/04/07', 5, 'sakshi Thorat', 'CO', '6'),
(6, '2023/04/07', 6, 'Bhagyashri Kawade', 'CO', '6'),
(7, '2023/04/07', 7, 'ujjwala Dhage', 'CO', '6'),
(8, '2023/04/07', 8, 'Mohit khabekar', 'CO', '6'),
(9, '2023/04/07', 9, 'Komal Matasagar', 'CO', '6'),
(10, '2023/04/07', 10, 'Rohit Pawar', 'CO', '6'),
(11, '2023/04/07', 1, 'kishor  tupe', 'ME', '6'),
(12, '2023/04/07', 2, 'vaibhav Raut', 'ME', '6'),
(13, '2023/04/07', 3, 'Mangesh Dhotre', 'ME', '6'),
(14, '2023/04/07', 4, 'Abhishek Pathe', 'ME', '6'),
(15, '2023/04/07', 5, 'Aakash pawar', 'ME', '6'),
(16, '2023/04/07', 6, 'Shekhar Maghade', 'ME', '6'),
(17, '2023/04/07', 7, 'Harshal Manal ', 'ME', '6'),
(18, '2023/04/07', 8, 'Rahul Kalamkar', 'ME', '6'),
(19, '2023/04/07', 9, 'Chaitanya jagatap', 'ME', '6'),
(20, '2023/04/07', 10, 'Tushar Bhande', 'ME', '6');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `enroll` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rno` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `enroll`, `name`, `rno`, `photo`, `branch`, `sem`) VALUES
(4, '1001', 'NIKITA RITTHE', '1', 'c - Copy.jpg', 'CO', '6'),
(5, '1002', 'KALYANI SURYAVANSHI', '2', 'Desert - Copy (3).jpg', 'CO', '6'),
(6, '1003', 'pratiksha navagire', '3', '45.jpg', 'CO', '6'),
(7, '1004', 'ujjwala kute', '4', 'a.jpg', 'CO', '6'),
(12, '1005', 'sakshi Thorat', '5', 'c - Copy.jpg', 'CO', '6'),
(13, '1006', 'Bhagyashri Kawade', '6', 'c.jpg', 'CO', '6'),
(14, '1007', 'ujjwala Dhage', '7', '', 'CO', '6'),
(15, '1008', 'Mohit khabekar', '8', 'a.jpg', 'CO', '6'),
(16, '1009', 'Komal Matasagar', '9', 'b.jpg', 'CO', '6'),
(17, '1010', 'Rohit Pawar', '10', 'b.jpg', 'CO', '6'),
(18, '2001', 'kishor  tupe', '1', 'a.jpg', 'ME', '6'),
(19, '2002', 'vaibhav Raut', '2', 'a.jpg', 'ME', '6'),
(20, '2003', 'Mangesh Dhotre', '3', '45.jpg', 'ME', '6'),
(21, '2004', 'Abhishek Pathe', '4', 'Lighthouse - Copy (5).jpg', 'ME', '6'),
(22, '2005', 'Aakash pawar', '5', 'Desert - Copy (3).jpg', 'ME', '6'),
(23, '2006', 'Shekhar Maghade', '6', '45.jpg', 'ME', '6'),
(24, '2007', 'Harshal Manal ', '7', 'b.jpg', 'ME', '6'),
(25, '2008', 'Rahul Kalamkar', '8', '45.jpg', 'ME', '6'),
(26, '2009', 'Chaitanya jagatap', '9', 'c - Copy.jpg', 'ME', '6'),
(27, '2010', 'Tushar Bhande', '10', 'c - Copy.jpg', 'ME', '6'),
(28, '3001', 'Vaishanvi shinde', '1', 'c - Copy.jpg', 'CE', '6'),
(29, '3002', 'Vaishanvi Chavhan', '2', 'a.jpg', 'CE', '6'),
(30, '3003', 'Rutuja pansare', '3', 'c - Copy.jpg', 'CE', '6'),
(31, '3004', 'Nikita Rajpur', '4', 'c - Copy.jpg', 'CE', '6'),
(32, '3005', 'Urmila Rajput', '5', '45.jpg', 'CE', '6'),
(33, '3006', 'Rohini Kale', '6', 'c - Copy.jpg', 'CE', '6'),
(34, '3007', 'Sonal Magar', '7', 'c - Copy.jpg', 'CE', '6'),
(35, '3008', 'Shunada Magar', '8', '45.jpg', 'CE', '6'),
(36, '3009', 'Pankaj Bhagvat', '9', 'c - Copy.jpg', 'CE', '6'),
(37, '3010', 'Chaitan Shelake', '10', 'c - Copy.jpg', 'CE', '6'),
(38, '1011', 'Aishwarya kuhile', '11', '', 'CO', '6');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user`, `uname`, `password`, `branch`, `sem`) VALUES
(1, 'Teacher', 'CO06', 'Pass@1234', 'CO', '6'),
(2, 'Teacher', 'ME06', 'Pass@123', 'ME', '6'),
(3, 'Admin', 'admin', 'admin', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;--
-- Database: `class`
--
CREATE DATABASE IF NOT EXISTS `class` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `class`;

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
(1, 'ADARSH CHAVAN', '9864654654', 'HELO WORLD'),
(2, 'AYUSH RAUT', '321321321', 'NAMASKAAR SIR');

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
  `product` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `final_total` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `price`, `quantity`, `total`, `discount`, `delivery`, `final_total`, `cname`, `mobile`, `address`, `mode`, `status`) VALUES
(1, 'VANILLA', '180', '1', '180', '2', '40', '222', 'PANKAJ TRIBHUVAN', '78542369', 'VAIJAPUR', 'Cash	', 1),
(2, 'STRWABERRY', '190', '2', '380', '3', '40', '423', 'MISAL RUSHIKESH', '9874563210', 'MHASOBA CHOWK ,\r\nVAIJAPUR', 'Cash	', 0),
(3, 'CHOCOLATE', '60', '3', '180', '1', '40', '221', 'SARTHAK GADHE', '894465132465', 'LAXMI NARAYAN NAGAR\r\nVAIJAUR', 'Cash	', 0);

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
(1, 'FRUITS', 'MANGO', 'Mango-Ice-Cream-Thumbnail.jpg', '5', '160'),
(3, 'CHOCOLATE', 'CHOCOLATE', 'homemade-chocolate-ice-cream-recipe-7.jpg', '2', '90'),
(4, 'CONE', 'CHOCOLATE', 'chocolate-cone-ice-cream-500x500.jpg', '1', '60'),
(5, 'NO SUGAR', 'VANILLA', 'Functional_NoSugarAdded_Tub-2D_V2-1.png', '2', '180'),
(6, 'CONE', 'Strawberry', 'Strawberry_ice_cream_cone_(5076899310).jpg', '', '60'),
(7, 'NO SUGAR', 'STRWABERRY', 'RS1902_OF_NSA_Strawberry_120715.jpg', '3', '190'),
(8, 'NO SUGAR', 'butter schotch', 'butter.jpg', '2', '230'),
(9, 'CONE', 'VANILLA CONE', 'Vanilla-Ice-Cream-cone-glass-sq.jpeg', '2', '160'),
(10, 'GOLD', 'EARRINGS', '1.jpg', '', '12450');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;--
-- Database: `infosys`
--
CREATE DATABASE IF NOT EXISTS `infosys` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `infosys`;

-- --------------------------------------------------------

--
-- Table structure for table `regit`
--

CREATE TABLE `regit` (
  `rid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `education` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regit`
--

INSERT INTO `regit` (`rid`, `name`, `mobile`, `address`, `dob`, `education`, `gender`) VALUES
(10, 'PANKAJ TRIBHUAN', '9168163938', 'VAIJAPUR \r\n                  \r\n                ', '1994-07-03', 'B.A', 'male'),
(12, 'sakshi', '90251436852', ' pune\r\n                  \r\n                ', '2002-04-03', 'B.A', 'female'),
(13, 'dipak', '9015251460', ' vaijapur\r\n                  \r\n                ', '2002-12-12', 'B.A', 'male'),
(15, 'saloni', '90524163521', ' pune\r\n                  \r\n                ', '2002-04-05', 'B.A', 'female'),
(16, 'Aarti', '8381064283', ' pune\r\n                  \r\n                ', '0000-00-00', 'B.A', 'female'),
(18, 'Pooja ', '7896541230', ' Ladgaon Road, vaijapur\r\n                  \r\n                ', '2000-11-07', 'B.SC', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regit`
--
ALTER TABLE `regit`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regit`
--
ALTER TABLE `regit`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;--
-- Database: `insta`
--
CREATE DATABASE IF NOT EXISTS `insta` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `insta`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `dob`, `number`) VALUES
('student1', '01-01-2001', '97874561'),
('student2', '01-01-2001', '97874562'),
('student3', '01-01-2001', '97874563'),
('student4', '01-01-2001', '97874564'),
('student5', '01-01-2001', '97874565'),
('student6', '01-01-2001', '97874566'),
('student7', '01-01-2001', '97874567'),
('student8', '01-01-2001', '97874568'),
('student9', '01-01-2001', '97874569'),
('student10', '01-01-2001', '978745610'),
('student11', '01-01-2001', '978745611'),
('student12', '01-01-2001', '978745612'),
('student13', '01-01-2001', '978745613'),
('student14', '01-01-2001', '978745614'),
('student15', '01-01-2001', '978745615'),
('student16', '01-01-2001', '978745616'),
('student17', '01-01-2001', '978745617'),
('student18', '01-01-2001', '978745618'),
('student19', '01-01-2001', '978745619'),
('student20', '01-01-2001', '978745620'),
('student21', '01-01-2001', '978745621'),
('student22', '01-01-2001', '978745622'),
('student23', '01-01-2001', '978745623'),
('student24', '01-01-2001', '978745624'),
('student25', '01-01-2001', '978745625'),
('student26', '01-01-2001', '978745626'),
('student27', '01-01-2001', '978745627'),
('student28', '01-01-2001', '978745628'),
('student29', '01-01-2001', '978745629'),
('student30', '01-01-2001', '978745630'),
('student31', '01-01-2001', '978745631'),
('student32', '01-01-2001', '978745632'),
('student33', '01-01-2001', '978745633'),
('student34', '01-01-2001', '978745634'),
('student35', '01-01-2001', '978745635'),
('student36', '01-01-2001', '978745636'),
('student37', '01-01-2001', '978745637'),
('student38', '01-01-2001', '978745638'),
('student39', '01-01-2001', '978745639'),
('student40', '01-01-2001', '978745640'),
('student41', '01-01-2001', '978745641'),
('student42', '01-01-2001', '978745642'),
('student43', '01-01-2001', '978745643'),
('student44', '01-01-2001', '978745644'),
('student45', '01-01-2001', '978745645'),
('student46', '01-01-2001', '978745646'),
('student47', '01-01-2001', '978745647'),
('student48', '01-01-2001', '978745648'),
('student49', '01-01-2001', '978745649'),
('student50', '01-01-2001', '978745650'),
('student51', '01-01-2001', '978745651'),
('student52', '01-01-2001', '978745652'),
('student53', '01-01-2001', '978745653'),
('student54', '01-01-2001', '978745654'),
('student55', '01-01-2001', '978745655'),
('student56', '01-01-2001', '978745656'),
('student57', '01-01-2001', '978745657'),
('student58', '01-01-2001', '978745658'),
('student59', '01-01-2001', '978745659'),
('student60', '01-01-2001', '978745660'),
('student61', '01-01-2001', '978745661'),
('student62', '01-01-2001', '978745662'),
('student63', '01-01-2001', '978745663'),
('student64', '01-01-2001', '978745664'),
('student65', '01-01-2001', '978745665'),
('student66', '01-01-2001', '978745666'),
('student67', '01-01-2001', '978745667'),
('student68', '01-01-2001', '978745668'),
('student69', '01-01-2001', '978745669'),
('student70', '01-01-2001', '978745670'),
('student71', '01-01-2001', '978745671'),
('student72', '01-01-2001', '978745672'),
('student73', '01-01-2001', '978745673'),
('student74', '01-01-2001', '978745674'),
('student75', '01-01-2001', '978745675'),
('student76', '01-01-2001', '978745676'),
('student77', '01-01-2001', '978745677'),
('student78', '01-01-2001', '978745678'),
('student79', '01-01-2001', '978745679'),
('student80', '01-01-2001', '978745680'),
('student81', '01-01-2001', '978745681'),
('student82', '01-01-2001', '978745682'),
('student83', '01-01-2001', '978745683'),
('student84', '01-01-2001', '978745684'),
('student85', '01-01-2001', '978745685'),
('student86', '01-01-2001', '978745686'),
('student87', '01-01-2001', '978745687'),
('student88', '01-01-2001', '978745688'),
('student89', '01-01-2001', '978745689'),
('student90', '01-01-2001', '978745690'),
('student91', '01-01-2001', '978745691'),
('student92', '01-01-2001', '978745692'),
('student93', '01-01-2001', '978745693'),
('student94', '01-01-2001', '978745694'),
('student95', '01-01-2001', '978745695'),
('student96', '01-01-2001', '978745696'),
('student97', '01-01-2001', '978745697'),
('student98', '01-01-2001', '978745698'),
('student99', '01-01-2001', '978745699'),
('student100', '01-01-2001', '9787456100');
--
-- Database: `laxmi`
--
CREATE DATABASE IF NOT EXISTS `laxmi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laxmi`;

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
(1, 'RAJENDRA THOMBARE', '7245652523', 'THIS IS RAJENDRA ,\r\nWHERE IS LOCATON'),
(2, 'DIPAK KADAM', '965656', 'VAIJAUR');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `final_total` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `price`, `quantity`, `total`, `delivery`, `final_total`, `cname`, `mobile`, `address`, `mode`, `status`) VALUES
(1, 'BANGLE ', '500', '1', '500', '300', '800', 'PANKAJ TRIBHUVAN', '9168163938', 'CODINGWALE,\r\nVAIJAPUR', 'Cash	', 1),
(2, 'EARRINGS', '1200', '1', '1200', '300', '1500', 'DIPAK KADAM', '7245652523', 'BILONI', 'Cash	', 0),
(3, 'BANGLE ', '500', '2', '1000', '300', '1300', 'bhagyshri kawde', '9405516871', 'Parsoda', 'Cash	', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat`, `name`, `photo`, `price`) VALUES
(1, 'GOLD', 'EARRINGS', '1.jpg', '12450'),
(3, 'GOLD', 'EARRINGS', '2.jpg', '9800'),
(4, 'PLATINUM', 'EARRINGS', 'p1.jpg', '1200'),
(5, 'GOLD', 'BANGLE ', 'g3.jpg', '1000'),
(6, 'GOLD', 'BANGLE ', 'g4.jpg', '1100'),
(7, 'GOLD', 'BANGLE ', 'g5.jpg', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;--
-- Database: `mnc`
--
CREATE DATABASE IF NOT EXISTS `mnc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mnc`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sid`, `name`, `mob`, `salary`) VALUES
(7, 'PANKAJ TRIBHUWAN', '8956768716', '60000'),
(9, 'PANKAJ TRIBHUAN', '9168163938', '15555'),
(10, 'RAJENDRA THOMBARE', '154451885654', '100'),
(14, 'dipak', '99524254125', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;--
-- Database: `owner`
--
CREATE DATABASE IF NOT EXISTS `owner` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `owner`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `product`, `price`, `date`) VALUES
('Aarti', 'smart tv', '500', '2023-03-10');
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'class', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":"student","table_structure[]":"student","table_data[]":"student","output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(3, 'root', 'database', 'class2', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["orders","student"],"table_structure[]":["orders","student"],"table_data[]":["orders","student"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(4, 'root', 'database', 'CLASS', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["feedback","inquiry","orders","products"],"table_structure[]":["feedback","inquiry","orders","products"],"table_data[]":["feedback","inquiry","orders","products"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(5, 'root', 'table', 'attendance', '{"quick_or_custom":"quick","what":"sql","allrows":"1","output_format":"sendit","filename_template":"@TABLE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"laxmi","table":"orders"},{"db":"class","table":"feedback"},{"db":"class","table":"orders"},{"db":"laxmi","table":"products"},{"db":"attendance","table":"attendance"},{"db":"attendance","table":"teachers"},{"db":"attendance","table":"students"},{"db":"rushi","table":"login"},{"db":"snapchatt","table":"login"},{"db":"vpc","table":"bcs"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'rushi', 'login', '[]', '2023-04-04 14:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-03-02 07:36:32', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `rushi`
--
CREATE DATABASE IF NOT EXISTS `rushi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rushi`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `dob`, `password`, `gender`) VALUES
('', '', '', ''),
('aaa', '', '', ''),
('adfaf', '', '', ''),
('sanket khaire', '61321-04-15', '651', 'male'),
('raj', '12315-04-15', '5212', 'male');
--
-- Database: `shopping`
--
CREATE DATABASE IF NOT EXISTS `shopping` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shopping`;
--
-- Database: `snapchatt`
--
CREATE DATABASE IF NOT EXISTS `snapchatt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `snapchatt`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `password`) VALUES
('Aarti ', '1234'),
('sakshi', '123'),
('saloni', '12345'),
('1', '1234567891'),
('2', '1234567892'),
('3', '1234567893'),
('4', '1234567894'),
('5', '1234567895'),
('6', '1234567896'),
('7', '1234567897'),
('8', '1234567898'),
('9', '1234567899'),
('10', '12345678910'),
('11', '12345678911'),
('12', '12345678912'),
('13', '12345678913'),
('14', '12345678914'),
('15', '12345678915'),
('16', '12345678916'),
('17', '12345678917'),
('18', '12345678918'),
('19', '12345678919'),
('20', '12345678920'),
('21', '12345678921'),
('22', '12345678922'),
('23', '12345678923'),
('24', '12345678924'),
('25', '12345678925'),
('26', '12345678926'),
('27', '12345678927'),
('28', '12345678928'),
('29', '12345678929'),
('30', '12345678930'),
('31', '12345678931'),
('32', '12345678932'),
('33', '12345678933'),
('34', '12345678934'),
('35', '12345678935'),
('36', '12345678936'),
('37', '12345678937'),
('38', '12345678938'),
('39', '12345678939'),
('40', '12345678940'),
('41', '12345678941'),
('42', '12345678942'),
('43', '12345678943'),
('44', '12345678944'),
('45', '12345678945'),
('46', '12345678946'),
('47', '12345678947'),
('48', '12345678948'),
('49', '12345678949'),
('50', '12345678950'),
('1', '1234567891'),
('2', '1234567892'),
('3', '1234567893'),
('4', '1234567894'),
('5', '1234567895'),
('6', '1234567896'),
('7', '1234567897'),
('8', '1234567898'),
('9', '1234567899'),
('10', '12345678910'),
('11', '12345678911'),
('12', '12345678912'),
('13', '12345678913'),
('14', '12345678914'),
('15', '12345678915'),
('16', '12345678916'),
('17', '12345678917'),
('18', '12345678918'),
('19', '12345678919'),
('20', '12345678920'),
('21', '12345678921'),
('22', '12345678922'),
('23', '12345678923'),
('24', '12345678924'),
('25', '12345678925'),
('26', '12345678926'),
('27', '12345678927'),
('28', '12345678928'),
('29', '12345678929'),
('30', '12345678930'),
('31', '12345678931'),
('32', '12345678932'),
('33', '12345678933'),
('34', '12345678934'),
('35', '12345678935'),
('36', '12345678936'),
('37', '12345678937'),
('38', '12345678938'),
('39', '12345678939'),
('40', '12345678940'),
('41', '12345678941'),
('42', '12345678942'),
('43', '12345678943'),
('44', '12345678944'),
('45', '12345678945'),
('46', '12345678946'),
('47', '12345678947'),
('48', '12345678948'),
('49', '12345678949'),
('50', '12345678950'),
('1', '1234567891'),
('2', '1234567892'),
('3', '1234567893'),
('4', '1234567894'),
('5', '1234567895'),
('6', '1234567896'),
('7', '1234567897'),
('8', '1234567898'),
('9', '1234567899'),
('10', '12345678910'),
('11', '12345678911'),
('12', '12345678912'),
('13', '12345678913'),
('14', '12345678914'),
('15', '12345678915'),
('16', '12345678916'),
('17', '12345678917'),
('18', '12345678918'),
('19', '12345678919'),
('20', '12345678920'),
('21', '12345678921'),
('22', '12345678922'),
('23', '12345678923'),
('24', '12345678924'),
('25', '12345678925'),
('26', '12345678926'),
('27', '12345678927'),
('28', '12345678928'),
('29', '12345678929'),
('30', '12345678930'),
('31', '12345678931'),
('32', '12345678932'),
('33', '12345678933'),
('34', '12345678934'),
('35', '12345678935'),
('36', '12345678936'),
('37', '12345678937'),
('38', '12345678938'),
('39', '12345678939'),
('40', '12345678940'),
('41', '12345678941'),
('42', '12345678942'),
('43', '12345678943'),
('44', '12345678944'),
('45', '12345678945'),
('46', '12345678946'),
('47', '12345678947'),
('48', '12345678948'),
('49', '12345678949'),
('50', '12345678950'),
('person1', '1234567891'),
('person2', '1234567892'),
('person3', '1234567893'),
('person4', '1234567894'),
('person5', '1234567895'),
('person6', '1234567896'),
('person7', '1234567897'),
('person8', '1234567898'),
('person9', '1234567899'),
('person10', '12345678910'),
('person11', '12345678911'),
('person12', '12345678912'),
('person13', '12345678913'),
('person14', '12345678914'),
('person15', '12345678915'),
('person16', '12345678916'),
('person17', '12345678917'),
('person18', '12345678918'),
('person19', '12345678919'),
('person20', '12345678920'),
('person21', '12345678921'),
('person22', '12345678922'),
('person23', '12345678923'),
('person24', '12345678924'),
('person25', '12345678925'),
('person26', '12345678926'),
('person27', '12345678927'),
('person28', '12345678928'),
('person29', '12345678929'),
('person30', '12345678930'),
('person31', '12345678931'),
('person32', '12345678932'),
('person33', '12345678933'),
('person34', '12345678934'),
('person35', '12345678935'),
('person36', '12345678936'),
('person37', '12345678937'),
('person38', '12345678938'),
('person39', '12345678939'),
('person40', '12345678940'),
('person41', '12345678941'),
('person42', '12345678942'),
('person43', '12345678943'),
('person44', '12345678944'),
('person45', '12345678945'),
('person46', '12345678946'),
('person47', '12345678947'),
('person48', '12345678948'),
('person49', '12345678949'),
('person50', '12345678950'),
('person1', '1234567891'),
('person2', '1234567892'),
('person3', '1234567893'),
('person4', '1234567894'),
('person5', '1234567895'),
('person6', '1234567896'),
('person7', '1234567897'),
('person8', '1234567898'),
('person9', '1234567899'),
('person10', '12345678910'),
('person11', '12345678911'),
('person12', '12345678912'),
('person13', '12345678913'),
('person14', '12345678914'),
('person15', '12345678915'),
('person16', '12345678916'),
('person17', '12345678917'),
('person18', '12345678918'),
('person19', '12345678919'),
('person20', '12345678920'),
('person21', '12345678921'),
('person22', '12345678922'),
('person23', '12345678923'),
('person24', '12345678924'),
('person25', '12345678925'),
('person26', '12345678926'),
('person27', '12345678927'),
('person28', '12345678928'),
('person29', '12345678929'),
('person30', '12345678930'),
('person31', '12345678931'),
('person32', '12345678932'),
('person33', '12345678933'),
('person34', '12345678934'),
('person35', '12345678935'),
('person36', '12345678936'),
('person37', '12345678937'),
('person38', '12345678938'),
('person39', '12345678939'),
('person40', '12345678940'),
('person41', '12345678941'),
('person42', '12345678942'),
('person43', '12345678943'),
('person44', '12345678944'),
('person45', '12345678945'),
('person46', '12345678946'),
('person47', '12345678947'),
('person48', '12345678948'),
('person49', '12345678949'),
('person50', '12345678950'),
('person1', '1234567891'),
('person2', '1234567892'),
('person3', '1234567893'),
('person4', '1234567894'),
('person5', '1234567895'),
('person6', '1234567896'),
('person7', '1234567897'),
('person8', '1234567898'),
('person9', '1234567899'),
('person10', '12345678910'),
('person11', '12345678911'),
('person12', '12345678912'),
('person13', '12345678913'),
('person14', '12345678914'),
('person15', '12345678915'),
('person16', '12345678916'),
('person17', '12345678917'),
('person18', '12345678918'),
('person19', '12345678919'),
('person20', '12345678920'),
('person21', '12345678921'),
('person22', '12345678922'),
('person23', '12345678923'),
('person24', '12345678924'),
('person25', '12345678925'),
('person26', '12345678926'),
('person27', '12345678927'),
('person28', '12345678928'),
('person29', '12345678929'),
('person30', '12345678930'),
('person31', '12345678931'),
('person32', '12345678932'),
('person33', '12345678933'),
('person34', '12345678934'),
('person35', '12345678935'),
('person36', '12345678936'),
('person37', '12345678937'),
('person38', '12345678938'),
('person39', '12345678939'),
('person40', '12345678940'),
('person41', '12345678941'),
('person42', '12345678942'),
('person43', '12345678943'),
('person44', '12345678944'),
('person45', '12345678945'),
('person46', '12345678946'),
('person47', '12345678947'),
('person48', '12345678948'),
('person49', '12345678949'),
('person50', '12345678950');
--
-- Database: `teacher`
--
CREATE DATABASE IF NOT EXISTS `teacher` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teacher`;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `vpc`
--
CREATE DATABASE IF NOT EXISTS `vpc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vpc`;

-- --------------------------------------------------------

--
-- Table structure for table `bcs`
--

CREATE TABLE `bcs` (
  `name` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `vp college`
--
CREATE DATABASE IF NOT EXISTS `vp college` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vp college`;

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `Aarti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
