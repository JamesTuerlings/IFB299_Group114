-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 06:55 AM
-- Server version: 5.6.19
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `packagedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `customerType` enum('Individual','Business') NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `state` enum('QLD','NSW','SA','TAS','WA') DEFAULT NULL,
  `suburb` varchar(30) DEFAULT NULL,
  `postcode` int(11) NOT NULL,
  `street` varchar(30) DEFAULT NULL,
  `telNo` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerType`, `firstName`, `lastName`, `state`, `suburb`, `postcode`, `street`, `telNo`, `email`, `password`) VALUES
(768, 'Individual', 'john', 'row', 'QLD', 'dfsdf', 3433, '1/10', 232321321, 'john@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `empState` varchar(10) NOT NULL,
  `empStreet` varchar(30) NOT NULL,
  `empSuburb` varchar(30) NOT NULL,
  `empPostcode` int(10) NOT NULL,
  `employeeType` enum('Manager','Driver') NOT NULL,
  `password` int(11) NOT NULL,
  `empTelNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `firstName`, `lastName`, `empState`, `empStreet`, `empSuburb`, `empPostcode`, `employeeType`, `password`, `empTelNo`) VALUES
(1, 'James', 'C', 'QLD', 'sadsad', 'dasdas', 1232, 'Manager', 123, '232323232'),
(33, 'Tim', 'Row', 'QLD', 'victoria', 'kg', 1234, 'Driver', 123, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `delDate` date NOT NULL,
  `delTime` time NOT NULL,
  `orderDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pickupDate` date NOT NULL,
  `pickupTime` time NOT NULL,
  `numPackages` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `pickupType` varchar(20) NOT NULL,
  `deliveryType` varchar(20) NOT NULL,
  `secure` varchar(20) DEFAULT NULL,
  `signature` varchar(10) DEFAULT NULL,
  `pStreet` varchar(20) NOT NULL,
  `pSuburb` varchar(20) NOT NULL,
  `pState` varchar(20) NOT NULL,
  `pPostcode` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `orderStatus` enum('pickup','pickedup','atWarehouse','delivered') NOT NULL DEFAULT 'pickup',
  `employeeID` int(11) DEFAULT '1',
  `isSigned` enum('Yes','No') NOT NULL DEFAULT 'No',
  `recepientID` int(11) NOT NULL,
  `paymentStatus` enum('Paid','Unpaid') DEFAULT 'Paid',
  `paymentInfo` enum('Cash','Card','Voucher','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `delDate`, `delTime`, `orderDateTime`, `pickupDate`, `pickupTime`, `numPackages`, `weight`, `pickupType`, `deliveryType`, `secure`, `signature`, `pStreet`, `pSuburb`, `pState`, `pPostcode`, `cost`, `orderStatus`, `employeeID`, `isSigned`, `recepientID`, `paymentStatus`, `paymentInfo`) VALUES
(29, 768, '2016-10-15', '02:01:00', '2016-10-14 10:33:54', '2016-10-15', '14:01:00', 2, 22, 'scheduled', 'scheduled', 'no', 'no', 'df', 'fdd', 'QLD', 2323, 47, 'delivered', 33, 'No', 351, 'Paid', 'Card'),
(205, 768, '2016-10-25', '13:01:00', '2016-10-09 18:03:02', '2016-10-19', '01:00:00', 23, 23, 'scheduled', 'scheduled', 'no', 'no', 'sad', 'ss', 'QLD', 1233, 81, 'pickup', 33, 'No', 153, 'Paid', NULL),
(543, 768, '2016-10-25', '02:01:00', '2016-10-23 19:09:55', '2016-10-12', '14:01:00', 1, 12, 'scheduled', 'scheduled', 'no', 'no', 'dfsd', 'dfsf', 'QLD', 1234, 26, 'pickup', 1, 'No', 920, 'Paid', 'Card'),
(674, 768, '2016-10-19', '14:01:00', '2016-10-09 18:06:44', '2016-10-10', '02:01:00', 23, 2, 'scheduled', 'scheduled', 'no', 'no', 'dsa', 'sds', 'QLD', 232, 39, 'pickup', 0, 'No', 599, 'Paid', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recepient`
--

CREATE TABLE `recepient` (
  `recepientFName` varchar(30) NOT NULL,
  `recepientLName` varchar(30) DEFAULT NULL,
  `delStreet` varchar(30) NOT NULL,
  `delSuburb` varchar(30) NOT NULL,
  `delState` varchar(30) NOT NULL,
  `delPostcode` int(11) NOT NULL,
  `delTelNo` int(11) NOT NULL,
  `recepientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recepient`
--

INSERT INTO `recepient` (`recepientFName`, `recepientLName`, `delStreet`, `delSuburb`, `delState`, `delPostcode`, `delTelNo`, `recepientID`) VALUES
('james', 'row', 'victoria', 'logan', 'NSW', 4444, 12343423, 123),
('dfs', 'ddsfs', 'dsfs', 'fddsf', 'QLD', 2323, 222222, 153),
('james', 'row', 'victoria', 'logan', 'NSW', 4444, 12343423, 200),
('james', 'row', 'kg', 'kg', 'QLD', 1234, 12343423, 338),
('james', 'row', 'kg', 'kg', 'QLD', 1234, 12343423, 344),
('fdg', 'fdfgfdg', 'fdg', 'fdgdfg', 'QLD', 3443, 2323232, 351),
('james', 'row', 'kg', 'kg', 'QLD', 1234, 12343423, 402),
('james', 'row', 'kg', 'kg', 'QLD', 1234, 12343423, 433),
('james', 'row', 'victoria', 'logan', 'NSW', 4444, 12343423, 557),
('dfd', 'fdfd', 'dfdf', 'dfd', 'QLD', 2322, 23232323, 599),
('james', 'row', 'kg', 'kg', 'QLD', 1234, 12343423, 752),
('james', 'row', 'victoria', 'logan', 'NSW', 4444, 12343423, 807),
('james', 'row', 'victoria', 'logan', 'NSW', 4444, 12343423, 881),
('dsfs', 'dsfsdfds', 'ddfsdf', 'dsfsd', 'QLD', 3224, 34333333, 920),
('james', 'row', 'kg', 'kg', 'QLD', 1234, 12343423, 996);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `customerID` (`customerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `recepientID` (`recepientID`);

--
-- Indexes for table `recepient`
--
ALTER TABLE `recepient`
  ADD PRIMARY KEY (`recepientID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`recepientID`) REFERENCES `recepient` (`recepientID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
