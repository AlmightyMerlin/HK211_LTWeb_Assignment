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
  `url` varchar(1000) NOT NULL,
  `size` INT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BRAND`
--

INSERT INTO `brand` (`brand_id`, `name`, `brand_short_desc`, `url`, `size`) VALUES
('1', 'Dell', default, 'images/Dell.png', 40),
('2', 'Lenovo', default, 'images/Lenovo.jpg', 80),
('3', 'Apple', default, 'images/Apple.png', 30),
('4', 'Razer', default, 'images/Razer.png', 45),
('5', 'Asus', default, 'images/Asus.jpg', 60),
('6', 'Acer', default, 'images/Acer.png', 80);

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

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
	`new_id`			CHAR(1)	NOT NULL,
    `title`				VARCHAR(255),
    `content`			longtext,
    `subcontent`		longtext
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `news` VALUES
('1','Lenovo Legion 5 Intel đã có mặt tại Việt Nam!',
'Ngày 16/9 vừa qua, chiếc laptop Lenovo Legion 5 Intel đầu tiên đã có mặt tại trụ sở của BKU. Đây là sự kiện nhận được sự trông đợi rất lớn từ các khách hàng của BKU trong thời gian qua. Hãy cùng khám phá những hình ảnh đầu tiên của sản phẩm này:<img src="Images/Images-Lenovo-Legion5-Intel2021/item01.jpg"><img src="Images/Images-Lenovo-Legion5-Intel2021/item02.jpg"><img src="Images/Images-Lenovo-Legion5-Intel2021/item03.jpg"><img src="Images/Images-Lenovo-Legion5-Intel2021/item04.jpg">',
'Với thiết kế hiện đại, giá cả phải chăng cùng với uy tín được Lenovo xây dựng qua nhiều thập kỷ, chắc chắn đây sẽ là một best-seller trong thời gian tới!'),
('2','No nervous November!',
'Bạn lo lắng vì vẫn chưa sắm được một em laptop ưng ý "xử đẹp" công việc mùa dịch?<br>Bạn chán nản vì học online mà laptop cứ giật lag, không thể tập trung?<br><strong>Dẹp ngay những suy nghĩ tiêu cực đó nào</strong>. <b>Tháng 11 này</b>, BKU tri ân khách hàng với hàng loạt ưu đãi khủng đi kèm những sản phẩm chất lượng:',
'<table><tr><th>Sản phẩm</th><th>Ưu đãi khủng</th></tr><tr><td style="width: 200px;">Dell Inspiron 15 3505</td><td style="width: 650px; text-align: left;"><strong>Giảm 500.000đ</strong> + Khuyến mãi 800.000đ khi mua Microsoft Office 365 kèm laptop</td></tr><tr><td style="width: 200px;">Macbook Pro 13 2020</td><td style="width: 650px; text-align: left;"><strong>Giảm 600.000đ</strong> + Tặng 1 bàn phím rời Apple trị giá 650.000đ</td><tr><td style="width: 200px;">Razer Book 13</td><td style="width: 650px; text-align: left;"><strong>Giảm 900.000đ</strong> + Tặng 1 chuột không dây Razer trị giá 550.000đ</td></tr><tr><td style="width: 200px;">Dell XPS 15 7590</td><td style="width: 650px; text-align: left;"><strong>Giảm 700.000đ</strong> + Giảm giá 1.000.000đ khi mua các sản phẩm khác của Dell</td></tr><tr><td style="width: 200px;">Apple Mac Mini 2020</td><td style="width: 650px; text-align: left;"><strong>Giảm 600.000đ</strong> + Giảm giá 15% khi mua 1 sản phẩm Apple có giá dưới 15 triệu đồng</td></tr><tr><td style="width: 200px;">Acer Aspire X1920</td><td style="width: 650px; text-align: left;"><strong>Giảm 400.000đ</strong> + Tặng 1 chuột không dây Acer trị giá 400.000đ</td></tr></table><p>Chương trình áp dụng đến hết ngày <strong>30/11/2021</strong>. <br>Nhanh tay đến và lựa chọn cho mình 1 chiến hữu thật <b>SANG - XỊN - MỊN</b> để chiến đấu mùa dịch nào!</p>'),
('3', 'Sứ mệnh - Tầm nhìn của BKU',
'<h1>Sứ mệnh của BKU</h1><p>Đã từng trải qua thời kỳ sinh viên, rồi công tác tại nhiều vị trí công việc khác nhau, những nhà sáng lập của BKU hiểu rõ nỗi trăn trở của một bộ phận không nhỏ khách hàng, <strong>có nhu cầu về những sản phẩm laptop-pc ổn định và chất lượng nhưng lại không dư dả về điều kiện kinh tế</strong>. Từ đó, chúng tôi nung nấu ý định thành lập một doanh nghiệp bán các sản phẩm laptop-pc đáp ứng những nhu cầu nêu trên của quý khách hàng. Mong muốn lớn nhất của chúng tôi chính là việc <b>sẽ ngày càng có nhiều người tiêu dùng được tiếp cận với công nghệ, với tiến bộ khoa học và công nghệ</b> để đất nước ta nhanh chóng bắt kịp xu hướng công nghệ luôn biến đổi không ngừng của thế giới.</p><p>Để thực hiện mong muốn đó, chúng tôi luôn cố gắng đảm bảo ở mức cao nhất chất lượng từng mặt hàng, với mức giá cạnh tranh, khuyến mãi hấp dẫn cùng chế độ bảo hành ổn định, tiện lợi. Mặc dù mới thành lập, nhưng chúng tôi sẽ nỗ lực không ngửng nghỉ để tạo được niềm tin nơi quý khách hàng thân yêu.</p>',
'<h1>Tầm nhìn của chúng tôi</h1><p>Trích lời ông <strong>Đỗ Quang Minh</strong> - Trưởng Bộ phận Marketing:<br> "Với quyết tâm cao nhất cùng chiến lược kinh doanh bài bản; có sự học hỏi, tiếp thu và chắt lọc những bài học kinh nghiệm của các ông lớn về công nghệ, chúng tôi có thể đặt ra mục tiêu với một cái nhìn đầy lạc quan và tươi sáng: <b>Đến năm 2025, BKU sẽ trở thành 1 ông lớn tại Việt Nam!</b>"</p><p><strong>Vì sao chúng tôi có thể tự tin nói như vậy?</strong> Mặc dù còn rất non trẻ trong thị trường công nghệ Việt Nam, song BKU lại sở hữu đội ngũ nhân viên có năng lực cao, chuyên môn vững vàng, kinh nghiệm dày dặn. Họ đều là những sinh viên giỏi, có tiềm năng, tốt nghiệp tại các đại học danh tiếng như <b>Đại học Bách Khoa TPHCM</b>, <b>Đại học Khoa học Tự nhiên</b>, <b>Đại học FPT</b>... Bên cạnh đó, tầng lớp lãnh đạo - quản lý của BKU luôn luôn đoàn kết, tôn trọng, quan tâm và chia sẻ lẫn nhau; cùng đoàn kết hướng tới một mục tiêu chung là đưa đế chế BKU trở nên cường thịnh. Đó chính là những yếu tố giúp chúng tôi có cái nhìn lạc quan về tương lai phát triển của doanh nghiệp non trẻ này.</p>'),
('4', 'About BKU - Your new favor',
'<section class="about"><p>Công ty BKU được thành lập vào <strong>cuối năm 2020</strong>, là công ty hoạt động chủ yếu trong lĩnh vực <strong>điện tử - công nghệ thông tin</strong>. Chúng tôi buôn bán các loại <strong>Laptop - PC</strong> với giá cả phải chăng và phù hợp với nhiều lứa tuổi. Với chất lượng sản phẩm được đảm bảo, cam kết hàng uy tín, chế độ bảo hành ưu đãi, chúng tôi đang cố gắng mở rộng thị trường của mình để tiếp cận rộng rãi hơn với người tiêu dùng cả nước.</p><p>Hiện tại công ty của chúng tôi đã liên kết với <strong>6 ông lớn</strong> về Laptop - PC gồm <strong>Acer, Apple, Asus, Dell, Lenovo và Razer</strong>. BKU vô cùng hân hạnh được phục vụ quý khách hàng để đáp ứng tối đa nhu cầu của quý vị. Xin chân thành cảm ơn!</p></section>',
'<section class="intro"><video width="650" controls><source src="../Video/Intro.mp4" type="video/mp4">Sorry, Your browser does not support HTML5 video.</video></section><section class="leader"><h1>Leaders</h1><ul class="no-bullets"><li><p><strong>Trần Ngọc Anh Quân</strong>: Chủ tịch hội đồng quản trị</p></li><li><p><strong>Trần An Hạ</strong>: Trưởng bộ phận Quản lý nhân sự</p></li><li><p><strong>Đỗ Quang Minh</strong>: Trưởng bộ phận Marketing</p></li><li><p><strong>Lê Hồng Đức</strong>: Trưởng bộ phận Sales</p></li></ul></section>');
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
  
--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);
  
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `role` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `mail`, `password`, `name`, `phone`, `createdAt`, `role`) VALUES
('0', 'duc.le200115@hcmut.edu.vn', 'password', 'Duc Le', '0911360460', '2021-11-22 17:40:08', 0),
('1', 'customer@hcmut.edu.vn', 'password', 'customer', '0123456789', '2021-11-22 18:29:29', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;