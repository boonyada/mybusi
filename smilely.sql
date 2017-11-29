-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 04:18 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smilely`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `userID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`userID`, `username`, `password`, `name`, `status`) VALUES
(0001, 'mo', 'mo123', 'Boonyada Soongtiwong', 'ADMIN'),
(0002, 'kae', 'kae123', 'Sathit Wongrach', 'USER'),
(0003, 'suika', '123', 'Suika Momo', 'USER'),
(0005, 'momomo', 'momomo', 'momomo', 'USER'),
(0006, 'boonyadamo', 'boonyadamo', 'Boonyada', 'USER'),
(0007, 'Boonyada S', 'boonyadas', 'Boonyada', 'USER'),
(0008, 'mokae', 'mokae', 'mokae', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `OrderDate` datetime NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `Name`, `Address`, `Tel`, `Email`) VALUES
(00001, '2017-11-15 09:59:13', 'A', '1234 Bangkok Thailand', '0000000000', 'aaa@gmail.com'),
(00002, '2017-11-16 10:15:03', 'B', '5678 Lampang Thailand', '0010010010', 'bbb@gmail.com'),
(00005, '2017-11-16 04:07:05', 'C', '1212 Chiang Mai Thailand', '0082223333', 'ccc@gmail.com'),
(00006, '2017-11-16 04:11:04', 'D', '999 Lampang Thailand', '0098899988', 'ddd@gmail.com'),
(00007, '2017-11-16 04:22:00', 'a', 'a', 'a', 'a'),
(00008, '2017-11-22 13:16:15', 'abc', 'abc', '123456', 'abc@gmail.com'),
(00009, '2017-11-27 16:22:58', 'a', 'a', 'a', 'a'),
(00010, '2017-11-28 14:23:15', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `DetailID` int(5) NOT NULL,
  `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ProductID` int(4) NOT NULL,
  `Qty` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`DetailID`, `OrderID`, `ProductID`, `Qty`) VALUES
(1, 00001, 4, 1),
(2, 00002, 3, 3),
(3, 00002, 1, 1),
(4, 00002, 4, 1),
(12, 00006, 2, 1),
(11, 00006, 1, 3),
(10, 00005, 2, 1),
(9, 00005, 1, 1),
(13, 00006, 3, 1),
(14, 00006, 4, 1),
(15, 00007, 1, 1),
(16, 00008, 1, 1),
(17, 00008, 2, 1),
(18, 00008, 3, 1),
(19, 00008, 4, 1),
(20, 00009, 1, 1),
(21, 00010, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(4) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Price`, `Picture`) VALUES
(1, 'Doll House 1', 100, '1.jpg'),
(2, 'Doll House 2', 200, '2.jpg'),
(3, 'Doll House 3', 300, '3.jpg'),
(4, 'Doll House 4', 400, '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `Username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`DetailID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `userID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `DetailID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1249;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
