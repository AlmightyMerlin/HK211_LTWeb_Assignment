-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2021 at 10:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `THINKBRUH`
--

-- --------------------------------------------------------

--
-- Table structure for table `BRAND`
--

CREATE TABLE `BRAND` (
  `BRAND_ID` char(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `BRAND_SHORT_DESC` varchar(500) DEFAULT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BRAND`
--

INSERT INTO `BRAND` (`BRAND_ID`, `name`, `BRAND_SHORT_DESC`, `url`) VALUES
('1', 'Dell', 'hello from dell', 'images/Dell.png'),
('2', 'Microsoft', 'hello from microsoft', 'images/Microsoft.png');

-- --------------------------------------------------------

--
-- Table structure for table `CART`
--

CREATE TABLE `CART` (
  `CART_ID` char(12) NOT NULL,
  `USER_ID` char(10) DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `CART_ITEM`
--

CREATE TABLE `CART_ITEM` (
  `CITEM_ID` char(15) NOT NULL,
  `PRO_ID` char(5) DEFAULT NULL,
  `CART_ID` char(12) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `INVENTORY`
--

CREATE TABLE `INVENTORY` (
  `PRO_ID` char(5) NOT NULL,
  `AVAIL_NUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `MEMBERS`
--

CREATE TABLE `MEMBERS` (
  `USERNAME` varchar(15) NOT NULL,
  `USER_ID` char(10) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PHONE` varchar(11) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ORDERS`
--

CREATE TABLE `ORDERS` (
  `ORDER_ID` char(8) NOT NULL,
  `USER_ID` char(10) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ORDER_ITEM`
--

CREATE TABLE `ORDER_ITEM` (
  `ITEM_ID` char(5) NOT NULL,
  `ORDER_ID` char(8) DEFAULT NULL,
  `PRO_ID` char(5) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `PRO_ID` char(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `BRAND_ID` char(2) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `PRODUCT` (`PRO_ID`, `name`, `BRAND_ID`, `description`, `price`) VALUES
('1', 'Dell Inspiron 15 3505 (Chính hãng)', '1', 'Dell Inspiron 15 3505 là một mẫu laptop thuộc phân khúc phổ thông đến từ Dell. Được thiết kế với những đường nét cổ điển nhưng khi xét về hiệu năng, chiếc máy này lại thể hiện một tổ hợp phần cứng cực kỳ nhanh nhẹn và mượt mà. Sự cổ điển tổng thể kết hợp với những nét hiện đại sẽ được thể hiện rõ ràng nhất thông qua Dell Inspiron 15 3505. Ngoài ra, sự bền bỉ cũng là một trong những mục tiêu mà Dell đặt lên hàng đầu cho chiếc máy này.', 20290000);

-- --------------------------------------------------------

--
-- Table structure for table `SPECS`
--

CREATE TABLE `SPECS` (
  `PRO_ID` char(5) NOT NULL,
  `PROCESSOR` varchar(50) DEFAULT NULL,
  `DISPLAY` varchar(50) DEFAULT NULL,
  `MEMORY` varchar(50) DEFAULT NULL,
  `GRAPHICS` varchar(50) DEFAULT NULL,
  `STORAGE` varchar(50) DEFAULT NULL,
  `BATTERY` varchar(50) DEFAULT NULL,
  `PORTS` varchar(2000) DEFAULT NULL,
  `WEIGHT` varchar(10) DEFAULT NULL,
  `OS` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SPECS`
--

INSERT INTO `SPECS` (`PRO_ID`, `PROCESSOR`, `DISPLAY`, `MEMORY`, `GRAPHICS`, `STORAGE`, `BATTERY`, `PORTS`, `WEIGHT`, `OS`) VALUES
('1', 'AMD Ryzen R3 3250U, 2 nhân / 4 luồng', '15.6\" FHD WVA (1920 x 1080)', '8GB DDR4 bus 3200MHz (2 x4GB)', 'AMD Radeon &trade;Graphics', '256GB m.2 NVMe (Nâng cấp tối đa 2TB)', '42Wh', '1 x USB 2.0 Type-A ; 2 x USB 3.1 Gen 1 Type-A ; 1 x HDMI ; 1 x RJ45 ; 1 x Headphone/Microphone combo jack', '1.83kg', 'Windows 10 Home bản quyền');

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `USER_ID` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BRAND`
--
ALTER TABLE `BRAND`
  ADD PRIMARY KEY (`BRAND_ID`);

--
-- Indexes for table `CART`
--
ALTER TABLE `CART`
  ADD PRIMARY KEY (`CART_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `CART_ITEM`
--
ALTER TABLE `CART_ITEM`
  ADD PRIMARY KEY (`CITEM_ID`),
  ADD KEY `PRO_ID` (`PRO_ID`),
  ADD KEY `CART_ID` (`CART_ID`);

--
-- Indexes for table `INVENTORY`
--
ALTER TABLE `INVENTORY`
  ADD UNIQUE KEY `PRO_ID` (`PRO_ID`);

--
-- Indexes for table `MEMBERS`
--
ALTER TABLE `MEMBERS`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `PHONE` (`PHONE`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `ORDERS`
--
ALTER TABLE `ORDERS`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `ORDER_ITEM`
--
ALTER TABLE `ORDER_ITEM`
  ADD PRIMARY KEY (`ITEM_ID`),
  ADD KEY `ORDER_ID` (`ORDER_ID`),
  ADD KEY `PRO_ID` (`PRO_ID`);

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`PRO_ID`),
  ADD KEY `BRAND_ID` (`BRAND_ID`);

--
-- Indexes for table `SPECS`
--
ALTER TABLE `SPECS`
  ADD UNIQUE KEY `PRO_ID` (`PRO_ID`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CART`
--
ALTER TABLE `CART`
  ADD CONSTRAINT `CART_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `CART_ITEM`
--
ALTER TABLE `CART_ITEM`
  ADD CONSTRAINT `CART_ITEM_ibfk_1` FOREIGN KEY (`PRO_ID`) REFERENCES `PRODUCT` (`PRO_ID`),
  ADD CONSTRAINT `CART_ITEM_ibfk_2` FOREIGN KEY (`CART_ID`) REFERENCES `CART` (`CART_ID`);

--
-- Constraints for table `INVENTORY`
--
ALTER TABLE `INVENTORY`
  ADD CONSTRAINT `INVENTORY_ibfk_1` FOREIGN KEY (`PRO_ID`) REFERENCES `PRODUCT` (`PRO_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `MEMBERS`
--
ALTER TABLE `MEMBERS`
  ADD CONSTRAINT `MEMBERS_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USERS` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ORDER_ITEM`
--
ALTER TABLE `ORDER_ITEM`
  ADD CONSTRAINT `ORDER_ITEM_ibfk_1` FOREIGN KEY (`ORDER_ID`) REFERENCES `ORDERS` (`ORDER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ORDER_ITEM_ibfk_2` FOREIGN KEY (`PRO_ID`) REFERENCES `PRODUCT` (`PRO_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD CONSTRAINT `PRODUCT_ibfk_1` FOREIGN KEY (`BRAND_ID`) REFERENCES `BRAND` (`BRAND_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SPECS`
--
ALTER TABLE `SPECS`
  ADD CONSTRAINT `SPECS_ibfk_1` FOREIGN KEY (`PRO_ID`) REFERENCES `PRODUCT` (`PRO_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
