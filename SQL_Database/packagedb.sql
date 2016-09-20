-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 04:11 PM
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
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `customerType`, `firstName`, `lastName`, `state`, `suburb`, `postcode`, `street`, `telNo`, `email`) VALUES
(430, 'Individual', 'wewe', 'ewew', 'TAS', 'dsds', 232, 'sds', 23222222222, 'ewew@gmail.com');

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
  `employeeType` enum('Manager','Driver') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `orderStatus` enum('Pickup','Warehouse','Ongoing','Delivery') NOT NULL DEFAULT 'Pickup',
  `employeeID` int(11) DEFAULT NULL,
  `isSigned` enum('Yes','No') NOT NULL DEFAULT 'No',
  `recepientID` int(11) NOT NULL,
  `paymentStatus` enum('Paid','Unpaid') DEFAULT 'Paid',
  `paymentInfo` enum('Cash','Card','Voucher','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `delDate`, `delTime`, `orderDateTime`, `pickupDate`, `pickupTime`, `numPackages`, `weight`, `pickupType`, `deliveryType`, `secure`, `signature`, `pStreet`, `pSuburb`, `pState`, `pPostcode`, `cost`, `orderStatus`, `employeeID`, `isSigned`, `recepientID`, `paymentStatus`, `paymentInfo`) VALUES
(618, 430, '2016-09-23', '16:02:00', '2016-09-21 00:06:27', '2016-10-25', '16:02:00', 22, 22, 'scheduled', 'scheduled', 'no', 'no', 'xcxc', 'cdxcxc', 'QLD', 2323, 77, 'Pickup', NULL, 'No', 327, 'Paid', NULL);

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
('sdsdd', 'dsdsd', 'sdsdsd', 'dsdsd', 'QLD', 2323, 3232323, 327),
('sdsdd', 'dsdsd', 'sdsdsd', 'dsdsd', 'QLD', 2323, 3232323, 671),
('dfdfd', 'fdfd', 'fdfddf', 'dfdf', 'QLD', 3434, 434343, 980);

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
