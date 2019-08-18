-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2017 at 11:14 AM
-- Server version: 8.0.0-dmr-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer`
--
CREATE DATABASE IF NOT EXISTS `farmer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `farmer`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `userid`, `datetime`, `title`, `content`) VALUES
(1, 0, '2017-03-29 07:23:14.000000', 'new', 'Lk'),
(3, 0, '2017-01-31 00:28:09.000000', 'Test', 'Test Content'),
(4, 5, '2017-03-12 12:31:18.000000', 'test2', 'test3'),
(5, 5, '2017-03-12 13:40:50.000000', 'Gg', 'Gg'),
(6, 5, '2017-03-12 13:41:20.000000', 'Gg', 'Gg'),
(7, 1, '2017-03-29 07:31:44.000000', 'haloo', 'new'),
(8, 5, '2017-03-12 13:42:06.000000', 'Gg', 'Gg'),
(9, 5, '2017-03-12 13:43:18.000000', 'Ks', 'Ks'),
(10, 5, '2017-03-12 13:43:30.000000', 'Jd', 'Jd'),
(11, 5, '2017-03-12 13:44:03.000000', 'Hj', 'Jj'),
(12, 5, '2017-03-12 13:45:15.000000', 'Hh', 'Jj'),
(13, 1, '2017-03-29 07:31:44.000000', 'haloo', 'new'),
(14, 5, '2017-03-12 15:19:12.000000', 'Fr', 'Hu'),
(15, 5, '2017-03-12 15:24:49.000000', 'vgghjbgg', 'gbnkjnb'),
(16, 5, '2017-03-12 15:26:46.000000', 'Ertyy', 'Wertyy'),
(17, 5, '2017-03-25 13:10:35.000000', 'fff', 'ffffff'),
(18, 11, '2017-04-12 23:59:52.000000', 'g2', 'g2'),
(19, 11, '2017-04-12 23:59:52.000000', 'g2', 'g2');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `chatdate` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`sender`, `receiver`, `message`, `chatdate`, `id`) VALUES
(5, 1, 'fhjkmn', '2017-03-25 15:01:08', 1),
(5, 1, 'dghnbg', '2017-03-25 15:48:25', 2),
(5, 1, 'hhjzjs', '2017-03-25 15:48:39', 3),
(5, 1, 'hai', '2017-03-25 15:52:26', 4),
(5, 4, 'hello', '2017-03-25 16:01:14', 6),
(5, 3, 'hello', '2017-03-25 16:02:55', 7),
(5, 3, '', '2017-03-25 16:03:10', 8),
(5, 1, 'dghjk', '2017-03-25 16:03:39', 9),
(5, 1, 'welcome', '2017-03-25 16:06:50', 10),
(5, 3, 'haii', '2017-03-25 16:07:44', 11),
(1, 0, 'hai sini', '2017-03-25 16:09:48', 12),
(5, 7, 'hi', '2017-03-25 16:10:05', 13),
(5, 6, 'heloo', '2017-03-25 16:10:17', 14),
(11, 1, 'halooo', '2017-03-27 15:35:21', 15),
(1, 0, 'haloo', '2017-03-27 15:36:00', 16),
(1, 9, 'haloi', '2017-03-27 16:06:01', 17),
(1, 10, 'haloo', '2017-03-27 16:25:46', 18),
(11, 3, 'fghj', '2017-03-29 07:37:18', 19),
(5, 10, 'gjk', '2017-03-29 07:48:14', 20),
(5, 11, 'halo gopu', '2017-03-29 07:48:32', 21),
(11, 4, 'halo sree', '2017-03-29 07:50:20', 22),
(4, 11, 'fghh', '2017-03-29 07:51:19', 23),
(5, 11, 'haloo gopu', '2017-03-29 20:32:55', 24),
(4, 11, 'haiii', '2017-03-29 20:34:00', 25),
(5, 11, 'he u', '2017-03-29 20:34:29', 26),
(4, 10, 'hoii', '2017-03-29 20:35:01', 27),
(11, 2, 'hai', '2017-04-12 23:38:28', 30),
(2, 11, 'enthada', '2017-04-12 23:42:55', 31),
(11, 2, 'podey', '2017-04-12 23:46:42', 32),
(2, 11, 'vvvv', '2017-04-12 23:46:59', 33),
(11, 1, 'hai', '2017-04-12 23:51:39', 34),
(1, 11, 'ccvhh', '2017-04-12 23:53:12', 35),
(11, 1, 'dfgg', '2017-04-13 00:01:43', 36),
(11, 3, 'ghj', '2017-04-13 00:03:57', 37);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `commenter` int(11) NOT NULL,
  `blogid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `datetime`, `comment`, `commenter`, `blogid`) VALUES
(1, '2017-01-17 00:00:00.000000', 'super topic', 1, 1),
(2, '2017-01-31 00:33:35.000000', 'Test Comment', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

DROP TABLE IF EXISTS `crop`;
CREATE TABLE `crop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `water_availability_low` float NOT NULL,
  `water_availability_high` float NOT NULL,
  `Avg_temperature_low` float NOT NULL,
  `Avg_temperature_high` float NOT NULL,
  `soil_type` varchar(50) NOT NULL,
  `pH_low` float NOT NULL,
  `pH_high` float NOT NULL,
  `provider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `name`, `water_availability_low`, `water_availability_high`, `Avg_temperature_low`, `Avg_temperature_high`, `soil_type`, `pH_low`, `pH_high`, `provider`) VALUES
(6, 'Kuruva4', 25, 40, 55, 70, 'dry2', 5, 7, 1),
(13, 'Kuruva10', 25, 40, 55, 70, 'dry', 5, 7, 1),
(19, 'test', 56, 72, 35, 58, 'cold', 5, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `disliked`
--

DROP TABLE IF EXISTS `disliked`;
CREATE TABLE `disliked` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `engineer`
--

DROP TABLE IF EXISTS `engineer`;
CREATE TABLE `engineer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineer`
--

INSERT INTO `engineer` (`id`, `name`, `address`, `contact`, `username`, `password`) VALUES
(1, 'ammu', 'kalathil valappil', '123456', '', ''),
(2, 'manu', 'm', '5678', '', ''),
(3, 'Banee', 'test address', '89089766', '', ''),
(4, 'test3', 'test4', 'test5', 'test', 'test2'),
(5, 'rajukan', 'andra', '567889', 'raju', 'raju123'),
(6, 'kiran das', 'tirur', '56777', 'kiran', 'kiran123'),
(7, 'on2', 'oa2', 'oc2', 'o2', 'o2'),
(8, 'a', 'a', '6', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

DROP TABLE IF EXISTS `farmer`;
CREATE TABLE `farmer` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `username`, `password`, `name`, `address`, `contact`) VALUES
(9, 'ammu', 'ammu123', 'ammukv', 'kalathil', '35678'),
(10, 'ramu', 'ramu123', 'ramu sing', 'panjab', '4678789'),
(11, 'gopan', 'gopan123', 'gopakumar', 'trissur', '5686663'),
(12, 'f2', 'f2', 'fn2', 'fa2', 'fc2'),
(13, 'b', 'b', 'b', 'b', '8');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

DROP TABLE IF EXISTS `fertilizer`;
CREATE TABLE `fertilizer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cropid` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`id`, `name`, `cropid`, `supplierid`) VALUES
(1, 'factomfose', 12, 2),
(2, 'fert', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

DROP TABLE IF EXISTS `labour`;
CREATE TABLE `labour` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour`
--

INSERT INTO `labour` (`id`, `name`, `category`, `address`, `contact`, `username`, `password`) VALUES
(1, 'keshav2', 'worker2', 'tirur2', '498652', '', ''),
(2, 'test', 'thepp', 'dsss', '5698745', '', ''),
(3, 'test', 'test2', 'test3', 'test5', 'test6', 'test7'),
(4, 'sreelakshmi', '456677', 'gokulam', '456677', 'sree', 'sree123'),
(5, 'inncc2', 'lcc2', 'address', 'lc2', 'l2', 'l2'),
(6, 'c', 'c', 'c', 'c', 'c', 'c'),
(7, 'la3', '6', 'la5', '6', 'la', 'la2'),
(8, 'la5', 'la6', 'la7', '8', 'la3', 'la4');

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

DROP TABLE IF EXISTS `liked`;
CREATE TABLE `liked` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `userid`) VALUES
('', '', 'seller', 3),
('a', 'a', 'officer', 8),
('b', 'b', 'farmer', 13),
('c', 'c', 'labour', 6),
('d', 'd', 'seller', 6),
('e', 'e', 'supplier', 9),
('f', 'f', 'farmer', 11),
('f2', 'f2', 'farmer', 12),
('fhfhjj', 'cgyun', 'supplier', 7),
('fhj', 'cgyun', 'seller', 4),
('gopan', 'gopan123', 'farmer', 11),
('kiran', 'kiran123', 'officer', 6),
('l', 'l', 'labour', 5),
('l2', 'l2', 'labour', 1),
('la', 'la2', 'labour', 7),
('la3', 'la4', 'labour', 8),
('o', 'o', 'officer', 1),
('o2', 'o2', 'officer', 7),
('raju', 'raju123', 'officer', 5),
('ramu', 'ramu123', 'farmer', 10),
('se', 'se', 'seller', 4),
('se2', 'se2', 'seller', 5),
('sree', 'sree123', 'labour', 4),
('su', 'su', 'supplier', 2),
('su2', 'su2', 'supplier', 1),
('test', 'test2', 'officer', 4),
('test45', 'test7', 'supplier', 5),
('test6', 'test7', 'labour', 3);

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE `machine` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `rent` varchar(50) NOT NULL,
  `rentscheme` varchar(50) NOT NULL,
  `rentamount` varchar(50) NOT NULL,
  `purchase` varchar(50) NOT NULL,
  `purchaseamount` varchar(50) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `name`, `category`, `rent`, `rentscheme`, `rentamount`, `purchase`, `purchaseamount`, `supplier_id`) VALUES
(1, 'pikas', 'kilakkal', 'true', 'day', '200', 'true', '500', 1),
(2, 'kaikote', 'kilakkal', 'yes', 'week', '300', 'yes', '600', 2),
(3, 'm3', 'test', 'true', 'day', '400', 'true', '500', 2),
(4, 'acss', 'cate', 'true', 'Week', '200', 'true', '100', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `datetime` datetime(5) NOT NULL,
  `content` varchar(50) NOT NULL,
  `provider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `datetime`, `content`, `provider`) VALUES
(1, 'insurance', '2017-01-13 00:00:00.00000', 'insurance details', 3),
(2, 'subsidies', '2017-01-16 00:00:00.00000', 'subsidy details for farmers', 1),
(3, 'Test', '2017-01-31 01:55:13.00000', 'Test Content', 2),
(8, 'helo', '2017-03-12 15:15:11.00000', 'welcome', 1),
(9, 'new header', '2017-03-25 13:22:11.00000', 'welcome', 1),
(10, 'welcome to', '2017-03-31 16:16:20.00000', 'agrimobile', 1),
(11, 'ghik', '2017-04-13 00:08:57.00000', 'ikgouo', 1),
(12, 'ghik', '2017-04-13 00:08:58.00000', 'ikgouo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesticide`
--

DROP TABLE IF EXISTS `pesticide`;
CREATE TABLE `pesticide` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cropid` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesticide`
--

INSERT INTO `pesticide` (`id`, `name`, `cropid`, `supplierid`) VALUES
(1, 'pukayila kashayam', 456, 2),
(2, 'pazhakeni', 456, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `unit_cost` float NOT NULL,
  `minimum_quantity` float NOT NULL,
  `pic1` varchar(50) NOT NULL,
  `pic2` varchar(50) NOT NULL,
  `pic3` varchar(50) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `unit_cost`, `minimum_quantity`, `pic1`, `pic2`, `pic3`, `seller_id`) VALUES
(1, 'tomato', 10, 5, '', '', '', 58),
(2, 'cucumber', 26.5, 10, '', '', '', 10),
(3, 't', 6, 4, '0', '0', '0', 0),
(4, '', 0, 0, '0', '0', '0', 0),
(5, 'pro1', 100, 54, '0', '0', '0', 0),
(6, 'prod2', 250, 50, '0', '0', '0', 4),
(7, 'gggg', 5, 10, '0', '0', '0', 4);

-- --------------------------------------------------------

--
-- Table structure for table `seed`
--

DROP TABLE IF EXISTS `seed`;
CREATE TABLE `seed` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cropid` int(11) NOT NULL,
  `supplierid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seed`
--

INSERT INTO `seed` (`id`, `name`, `cropid`, `supplierid`) VALUES
(1, 'ponni', 34, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `godown_address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `office_address`, `godown_address`, `contact`, `username`, `password`) VALUES
(1, 'madhav', 'abc company', 'palarivattom', '12987', '', ''),
(2, 'baniisaq', 'puthabtheruvu', 'tirur', '567888', '', ''),
(3, 'test', 'test2', 'test3', 'test5', '', ''),
(4, 'hfhj2', 'vdhh2', 'addressnew2', 'cdgf2', 'fhj', 'cgyun'),
(5, 'sn2', 'so2', 'sg2', 'sc2', 'se2', 'se2'),
(6, 'd', 'd', 'd', '7', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `office_address` varchar(50) NOT NULL,
  `godown_address` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `office_address`, `godown_address`, `contact`, `username`, `password`) VALUES
(1, 'ram', 'tirur', 'malppuram', 98765, '', ''),
(2, 'test5', 'address5', 'address35', 565, 'test6', 'test7'),
(3, 'test', 'test2', 'test3', 0, 'test6', 'test7'),
(4, 'test', 'test2', 'test3', 0, 'test6', 'test7'),
(5, 'test', 'test2', 'test3', 0, 'test45', 'test7'),
(6, 'fghj', 'fghjn', 'fhjjj', 0, 'fhj', 'cgyun'),
(7, 'bhhj', 'cfgbb', 'vhujvg', 0, 'fhfhjj', 'cgyun'),
(8, 'sn2', 'sno2', 'sg2', 0, 'su2', 'su2'),
(9, 'e', 'e', 'e', 9, 'e', 'e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crop`
--
ALTER TABLE `crop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disliked`
--
ALTER TABLE `disliked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engineer`
--
ALTER TABLE `engineer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labour`
--
ALTER TABLE `labour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesticide`
--
ALTER TABLE `pesticide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `crop`
--
ALTER TABLE `crop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `disliked`
--
ALTER TABLE `disliked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `engineer`
--
ALTER TABLE `engineer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `labour`
--
ALTER TABLE `labour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pesticide`
--
ALTER TABLE `pesticide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `seed`
--
ALTER TABLE `seed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
