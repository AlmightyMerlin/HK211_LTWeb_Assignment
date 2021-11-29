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

CREATE TABLE `brand` (
  `brand_id` CHAR(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand_short_desc` varchar(500) DEFAULT NULL,
  `url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BRAND`
--

INSERT INTO `brand` (`brand_id`, `name`, `brand_short_desc`, `url`) VALUES
('1', 'Dell', default, 'images/Dell.png'),
('2', 'Lenovo', default, 'images/Lenovo.jpg'),
('3', 'Apple', default, 'images/Apple.png'),
('4', 'Razer', default, 'images/Razer.png'),
('5', 'Asus', default, 'images/Asus.jpg'),
('6', 'Acer', default, 'images/Acer.png');

-- --------------------------------------------------------

--
-- Table structure for table `CART`
--

CREATE TABLE `cart` (
	`cart_id`		CHAR(12),
    `user_id`		CHAR(10),
    `total`			int
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cart` VALUES
('CA0950241121','USERS00000',0);
-- --------------------------------------------------------

--
-- Table structure for table `CART_ITEM`
--

CREATE TABLE `cart_item`(
	`citem_id`		CHAR(15),
    `pro_id`		CHAR(5),
    `cart_id`		CHAR(12),
    `quantity`		INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cart_item` VALUES
('CI0950241121001','SP001','CA0950241121',1);
-- --------------------------------------------------------

--
-- Table structure for table `INVENTORY`
--

CREATE TABLE `inventory` (
	`pro_id`				CHAR(5)			NOT NULL,
    `avail_num`				int				NOT NULL,
    UNIQUE (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BRAND`
--
INSERT INTO `inventory`	VALUES 
('SP001', 10),
('SP004', 10),
('SP007', 10),
('SP010', 10),
('SP013', 10),
('SP016', 10);
-- --------------------------------------------------------

--
-- Table structure for table `ORDERS`
--

CREATE TABLE `orders` (
	`order_id`				CHAR(12)		NOT NULL,
    `user_id`				CHAR(10)		NOT NULL,
    `total`					INT				NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders` VALUES
('OD0950241121','USERS00000',22999000);
-- --------------------------------------------------------

--
-- Table structure for table `ORDER_ITEM`
--

CREATE TABLE `order_item` (
	`item_id`			CHAR(15),
    `order_id`			CHAR(12),
    `pro_id`			CHAR(5),
    `quantity`			INT
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `order_item` VALUES
('OD0950241121001','SP001','OD0950241121',1);
-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `product` (
	`pro_id`				CHAR(5)			NOT NULL,
    `pro_name`				VARCHAR(100)	NOT NULL,
    `brand_id`				CHAR(2)			NOT NULL,
    `desc`					VARCHAR(500),
    `price`					INT 			NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `product` (`pro_id`, `pro_name`,`brand_id`,`desc`,`price`) VALUES 
('SP001', 'Dell Inspiron 15 3505', '1', 'Dell Inspiron 15 3505 là một mẫu laptop thuộc phân khúc phổ thông đến từ Dell. Được thiết kế với những đường nét cổ điển nhưng khi xét về hiệu năng, chiếc máy này lại thể hiện một tổ hợp phần cứng cực kỳ nhanh nhẹn và mượt mà. Sự cổ điển tổng thể kết hợp với những nét hiện đại sẽ được thể hiện rõ ràng nhất thông qua Dell Inspiron 15 3505. Ngoài ra, sự bền bỉ cũng là một trong những mục tiêu mà Dell đặt lên hàng đầu cho chiếc máy này.', 22999000),
('SP002', 'Lenovo Legion 5 Intel 2021', '2', 'Lenovo Legion 5 Intel 2021 là một mẫu laptop gaming thuộc phân khúc cao cấp đến từ Lenovo. Được thiết kế với phong cách trẻ trung và hiện đại, khi xét về hiệu năng, chiếc máy này cũng thể hiện một tổ hợp phần cứng cực kỳ nhanh nhẹn và mượt mà. Tốc độ xử lý nhanh chóng, giao diện hiện đại đi kèm sự bền bỉ theo thời gian là những mục tiêu mà Lenovo đặt lên hàng đầu cho chiếc máy này.', 27990000),
('SP003', 'Apple Macbook Pro 13 2020', '3', 'Với thiết kế thu hút cùng hiệu năng tốt, Macbook Pro 13 hướng tới đối tượng làm những công việc văn phòng, có thiên hướng làm đồ hoạ hay lập trình ở mức khá.', 23990000),
('SP004', 'Razer Blade 14 AMD', '4', 'Sản phẩm đầu tiên sử dụng vi xử lý của AMD: Razer Blade 14 AMD, với APU Ryzen 9 5900HX phù hợp với người dùng mong muốn có được sức mạnh cao nhất, mới nhất ở thời điểm hiện tại. Kết hợp với vẻ ngoài sang chảnh, bền bỉ vốn có cùng thương hiệu “Rắn Ba Đầu” nổi danh, Razer Blade 14 AMD nay đã đủ mạnh mẽ và chỉn chu để chiều lòng ngay cả những khách hàng khó tính nhất.', 46990000),
('SP005', 'ASUS VivoBook 14 X415', '5', 'Vivobook X415 là một mẫu Ultrabook cực kỳ sành điệu, tinh tế và phù hợp với thị hiếu. Với trang bị bộ vi xử lý mạnh mẽ cộng thêm giá cả phải chăng, đây hứa hẹn sẽ là món hàng không thể bỏ qua đối với các bạn học sinh sinh viên.', 17000000),
('SP006', 'Acer Aspire 7 Gaming AMD', '6', 'Aspire 7 Gaming AMD là một mẫu laptop cực kỳ sành điệu, trẻ trung và hiện đại. Với trang bị bộ vi xử lý mạnh mẽ, sản phẩm này phù hợp để các bạn học sinh sinh viên chơi các game cấu hình mạnh như Liên minh huyền thoại, Liên Quân...', 19990000),
('SP007', 'Dell XPS 15 7590', '1', 'XPS 15 7590 là dòng laptop nổi tiếng đến từ Dell. Đây là mẫu laptop với hiệu năng cao đi kèm với màn hình hiện đại, bắt mắt. Dell XPS 15 7590 sẽ phù hợp với các khách hàng làm việc đòi hỏi sức mạnh phần cứng nhưng vẫn muốn có được sự cơ động, linh hoạt.', 28990000),
('SP008', 'Lenovo Thinkpad T14s', '2', 'Thinkpad T14s của Lenovo hướng tới đối tượng doanh nhân hay phải di chuyển nhiều và cần một chiếc máy ổn định cho mọi tác vụ công việc. Với sự ổn định cực kỳ cao về mặt hiệu suất, Lenovo Thinkpad T14s xứng đáng là sự lựa chọn không thể bỏ lỡ trong phân khúc Ultrabook.', 25000000),
('SP009', 'Apple Macbook Air 2020', '3', 'Là ultrabook mỏng nhẹ, Macbook Air 2020 phù hợp cho những ai sử dụng với mục đích học tập, làm việc và giải trí nhẹ nhàng. Thiết kế nhôm nguyên khối truyền thống, bo cong nhẹ giúp mang lại trải nghiệm mềm mại và êm ái khi sử dụng.', 22990000),
('SP010', 'Razer Book 13', '4', 'Razer Book 13 vuông vắn, phẳng phiu như một cuốn sách chúng ta hay mang mỗi ngày. Sản phẩm có thể vừa vặn gần như mọi loại balo, cặp táp mà người dùng tìm thấy trên thị trường. Khả năng tối ưu không gian hiển thị theo chiều dọc là cải tiến đáng chú ý của Razer để giúp người dùng tập trung hoàn thành công việc tốt hơn.', 31990000),
('SP011', 'Asus ROG Strix G15 (G513)', '5', 'ROG Strix G15 là con bài chiến lược trong phân khúc gaming đến từ Asus, nổi bật nhờ thiết kế mang đậm dấu ấn mà từ lâu nay hãng đã xây dựng. Với những nét phay xước ấn tượng và tinh tế, sự thôi thúc vô cùng lớn sẽ hiện diện trong tâm trí bạn khi lần đầu tiên nhìn thấy sản phẩm này.', 23990000),
('SP012', 'Lenovo ThinkCentre M710E', '2', 'ThinkCentre M710e là dòng máy tầm trung của Lenovo, có hiệu suất ổn định trong thời gian dài. Sản phẩm này thích hợp với đối tượng là các doanh nghiệp cần một hệ thống ổn định và ít phải bảo trì.', 8490000),
('SP013', 'Acer Aspire XC895', '6', 'Aspire XC895 là dòng máy tầm trung của Acer, có hiệu suất ổn định trong thời gian dài. Sản phẩm này thích hợp với đối tượng là các doanh nghiệp cần một hệ thống ổn định, bền bỉ.', 10490000),
('SP014', 'Apple Mac Mini Late 2020', '3', 'Apple Mac Mini M1 là chiếc MiniPC với thiết kế tinh giản, gọn nhẹ và hiệu năng mạnh mẽ, đáp ứng được nhiều nhu cầu cho người dùng, nhất là trong thiết kế đồ hoạ hay chỉnh sửa video.', 21000000),
('SP015', 'Asus Huracan G21CX', '5', 'Huracan G21CX là sản phẩm mới được Asus ra mắt trong phân khúc PC cao cấp, sở hữu nhiều công nghệ tiên tiến phù hợp với việc chơi game, làm đồ họa, video...Sản phẩm phù hợp với nhiều lứa tuổi khác nhau.', 32000000),
('SP016', 'Dell Inspiron AllInOne', '1', 'Đây là sản phẩm thuộc phân khúc PC chất lượng cao của Dell. Kiểu dáng thanh lịch, xử lý mượt mà, giá cả hợp lý sẽ là những điểm khiến bạn không thể bỏ qua món hàng chất lượng này.', 20490000),
('SP017', 'Acer Aspire X1920', '6', 'Aspire X1920 là dòng máy mới xuất hiện của Acer, có hiệu suất ổn định trong thời gian dài kết hợp với mẫu mã hiện đại, trẻ trung phù hợp với GenZ. Sản phẩm phù hợp cho các tác vụ văn phòng cơ bản, đồ họa cấp thấp...', 14990000);
-- --------------------------------------------------------

--
-- Table structure for table `SPECS`
--

CREATE TABLE `specs`(
    `pro_id`				CHAR(5)				NOT NULL,
	`processor`				VARCHAR(50)			,
    `display`				VARCHAR(50)			,
    `memory`				VARCHAR(50)			,
    `graphics`				VARCHAR(50)			,
    `storage`				VARCHAR(50)			,
    `battery`				VARCHAR(50)			,
    `ports`					VARCHAR(50)			,
    `weight`				VARCHAR(10)			,
    `os`					VARCHAR(20),
    `ins_policy`			TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SPECS`
--

INSERT INTO `specs` (`pro_id`,`processor`,`display`,`memory`,`graphics`,`storage`,`battery`,`ports`,`weight`,`os`) VALUES 
('SP001', 'AMD Ryzen R3 3250U, 2 nhân / 4 luồng','15.6" FHD WVA (1920 x 1080)','8GB DDR4 bus 3200MHz (2x4GB) ','AMD Radeon™ Graphics ','256GB m.2 NVMe (Nâng cấp tối đa 2TB)','42Wh','1 x USB 2.0 Type-A ; 2 x USB 3.1 Gen 1 Type-A','1.83kg','Windows 10 Home bản quyền' ),
('SP002', 'Intel Core i5 11400H, 3 nhân / 6 luồng','15.6" Full HD IPS (1920 x 1080) 165Hz, 240nits','8GB DDR4 3200MHz (8GBx1, 2 slot nâng cấp tối đa 32GB)','NVIDIA GeForce RTX 3050 4GB GDDR6','512GB NVMe (Nâng cấp tối đa 2TB)','48Wh','4 x USB-A, 1 x USB-C, 1 x HDMI, 1 x Jack 3.5mm','2.2kg','Windows 10 Single Language bản quyền' ),
('SP003', 'Intel Core i5 8th, 2 nhân / 4 luồng','13.3" Retina (2560 x 1600)','8GB LPDDR3 bus 2133 MHz ','Intel Iris Plus 645 ','256GB NVMe','50Wh','2 x USB-C with Thunderbolt 3','1.5kg','Mac OS X' ),
('SP004', 'AMD Ryzen 9 5900HX, 8 nhân / 16 luồng','14.0" FHD IPS (1920x1080) 144Hz, chống chói','16GB DDR4 3200MHz ','Nvidia Geforce RTX 3060 6GB ','1TB NVMe (Nâng cấp tối đa 2TB)','65Wh','2 x USB-A 3.2 Gen 2, 2 x USB-C 3.2 Gen 2 (Hỗ trợ DisplayPort 1.4, Power Delivery 100W), 1 x HDMI 2.1, 1 x Jack 3.5mm','1.9kg','Windows 10 Home bản quyền' ),
('SP005', 'Intel Core i5 1135G7, 4 nhân/ 8 luồng','14" FHD TN (1920 x 1080)','4GB DDR4 bus 3200MHz ','Intel Iris Xe ','512GB m.2 NVMe','50Wh','1 x USB-C 3.2 Gen 1, 1 x USB-A 3.2 Gen 1, 1 x USB-A 2.0, 1 x HDMI1.4, 1 x 3.5mm, 1 x microSD','1.45kg','Windows 10 Home bản quyền' ),
('SP006', 'AMD Ryzen 5 5500U, 4 nhân / 8 luồng','15.6" FHD IPS (1920 x 1080), chống chói','8GB DDR4 bus 3200 MHz (Nâng cấp tối đa 64GB) ','NVIDIA GeForce GTX 1650 4GB GDDR6 ','256GB m.2 NVMe','42Wh','3 x USB-A, 1 x USB-C, 1 x HDMI','1.9kg','Windows 10 Home Single Language bản quyền' ),
('SP007', 'Intel Core i5 9300H, 6 nhân / 12 luồng','15.6" FHD IPS (1920 x 1080)','8GB DDR4 bus 2666 MHz (Nâng cấp tối đa 64GB)','Intel UHD 600','256GB m.2 NVMe (Nâng cấp tối đa 2TB)','60Wh','1 x USB-C with Thunderbolt 3, 2 x USB-A, SD Card slot, 1 x HDMI, 1 x Headset 3.5mm','2.0kg','Windows 10 Home bản quyền' ),
('SP008', 'Intel Core i5-10210U, 4 nhân / 8 luồng','14" FHD IPS (1920 x 1080), chống chói','16GB DDR4 bus 2666 MHz','Intel UHD 630','256GB m.2 NVMe','48Wh','2 x USB-C, Thunderbolt 3, 2 x USB-A, 1 x Micro SD','1.4kg','Windows 10 Home bản quyền' ),
('SP009', 'Intel Core i5, 4 nhân / 8 luồng','13.3" Retina (2560 x 1600)','8GB LPDDR4X bus 3733 MHz','Intel Iris Plus G1','256GB NVMe','50Wh','2 x USB-C, Thunderbolt 3','1.2kg','Mac OS X' ),
('SP010', 'Intel Core i7-1165G7, 6 nhân / 12 luồng','13.4" FHD+ IPS (1920x1200) 60Hz','16GB LPDDR4X bus 4266 MHz','Intel Iris Xe','256GB m.2 NVMe (Nâng cấp tối đa 2TB)','60Wh','1 x USB-A 3.2 Gen 1, 2 x USB-C with Thunderbolt 4, 1 x HDMI 2.0, 1 x microSD','1.4kg','Windows 10 bản quyền' ),
('SP011', 'AMD Ryzen 7 4800H, 4 nhân / 8 luồng','15.6" FHD IPS (1920 x 1080)','8GB DDR4 3200MHz (Nâng cấp tối đa 32GB)','NVIDIA GeForce 1650 4GB','512GB NVMe','60Wh','1 x USB-C 3.2 Gen 2 (Hỗ trợ sạc PD và xuất hình), 3 x USB-A 3.2 Gen 1, 1 x HDMI 2.0b, 1 x RJ-45, 1 x jack 3.5mm','1.85kg','Windows 10 bản quyền' ),
('SP012', 'Intel Core i5 7400, 6 nhân / 6 luồng','8GB DDR4 bus 2666 MHz (Nâng cấp tối đa 32GB)', NULL,'Intel HD 560','1TB HDD',NULL,'6 x USB-A',NULL,'Windows 10 bản quyền' ),
('SP013', 'AMD Ryzen 5 5500U, 4 nhân / 4 luồng','8GB DDR4 bus 3200 MHz (Nâng cấp tối đa 32GB)',NULL,'NVIDIA GeForce GTX 1650 4GB GDDR6','1TB HDD',NULL,'3 x USB-A',NULL,'Windows 10 bản quyền' ),
('SP014', 'Apple M1, 8 nhân','8GB LPDDR4x',NULL,'Apple GPU 8 Cores','512GB NVMe',NULL,'2 x USB-C hỗ trợ Thunderbolt 3/USB4, 2 USB-A 3.2 Gen 2, 1 x HDMI 2.0, 1 x RJ-45, 1 x jack 3.5mm',NULL,'Mac OS X' ),
('SP015', 'AMD Ryzen 7 4800H, 8 nhân / 8 luồng','8GB DDR4 3200MHz (Nâng cấp tối đa 32GB)',NULL,'NVIDIA GeForce 1650 4GB','1TB NVMe',NULL,'3 x USB-C',NULL,'Windows 10 bản quyền' ),
('SP016', 'Intel Core i5 1135G7, 4 nhân / 8 luồng','8GB DDR4 bus 2666 MHz (Nâng cấp tối đa 64GB)',NULL,'Intel Iris Xe','256GB m.2 NVMe (Nâng cấp tối đa 2TB) + 1TB HDD',NULL,'1 x USB-C 3.1 Gen 2 (Truyền dữ liệu), 4 x USB-A 3.1 Gen 1','1.83kg','Windows 10 bản quyền' ),
('SP017', 'AMD Ryzen 5 5500U, 6 nhân / 6 luồng','8GB DDR4 bus 3200 MHz (Nâng cấp tối đa 64GB)',NULL,'NVIDIA GeForce GTX 1650 4GB GDDR6','2TB HDD',NULL,'4 x USB-A',NULL,'Windows 10 Home bản quyền' );
-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `users` (
	`user_id`		CHAR(10)			NOT NULL,
    `username`		CHAR(15)			NOT NULL,
    `name`			VARCHAR(30)			NOT NULL,
    `phone`			VARCHAR(11)			NOT NULL,
    `password`		VARCHAR(30)			NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`user_id`,`username`,`name`,`phone`,`password`) VALUES 
('USERS00000','testuser','TEST USER','01100011100','123456');
------------------------------------------------------
--
-- Indexes for dumped tables
--

--
-- Indexes for table `BRAND`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `CART`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `CART_ITEM`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`citem_id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `INVENTORY`
--
ALTER TABLE `inventory`
  ADD UNIQUE KEY `pro_id` (`pro_id`);

--
-- Indexes for table `ORDERS`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ORDER_ITEM`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `SPECS`
--
ALTER TABLE `specs`
  ADD UNIQUE KEY `pro_id` (`pro_id`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CART`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `CART_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `CART_ITEM`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `CART_ITEM_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `CART_ITEM_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `INVENTORY`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `INVENTORY_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ORDER_ITEM`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `ORDER_ITEM_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ORDER_ITEM_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PRODUCT`
--
ALTER TABLE `product`
  ADD CONSTRAINT `PRODUCT_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SPECS`
--
ALTER TABLE `specs`
  ADD CONSTRAINT `SPECS_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;