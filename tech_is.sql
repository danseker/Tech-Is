-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 01:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_is`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(6, 'Bàn Ghế Gaming'),
(8, 'Bộ Nhớ '),
(1, 'Gaming Gear'),
(3, 'Lót Chuột'),
(4, 'Mô Hình'),
(9, 'Ổ Cứng'),
(2, 'Phụ Kiện Máy Tính'),
(7, 'Tản Nhiệt'),
(5, 'Đồ Trang Trí');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comm_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `comm_name` varchar(255) NOT NULL,
  `comm_mail` varchar(255) NOT NULL,
  `comm_date` datetime NOT NULL,
  `comm_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comm_id`, `prd_id`, `comm_name`, `comm_mail`, `comm_date`, `comm_details`) VALUES
(1, 1, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(2, 2, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(3, 3, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(4, 4, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(5, 5, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(6, 6, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(7, 7, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(8, 8, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(9, 9, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(10, 10, 'Nguyễn Thị A', 'nguyenthia@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(11, 11, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(12, 12, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(13, 13, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(14, 14, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(15, 15, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(16, 16, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(17, 17, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(18, 18, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(19, 19, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(20, 20, 'Nguyễn Văn B', 'nguyenvanb@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(21, 21, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(22, 22, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(23, 23, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(24, 24, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(25, 25, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(26, 26, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(27, 27, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(28, 28, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(29, 29, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(30, 30, 'Lê Thị C', 'lethic@gmail.com', '2022-01-15 19:15:40', 'Sản phẩm chất lượng, bền, đẹp'),
(50, 1, 'Nguyễn Văn Demo', 'nguyenvandemo@gmail.com', '0000-00-00 00:00:00', 'Sản phẩm chất lượng, bền, đẹp'),
(52, 1, 'Nguyễn Văn Demo 2', 'nguyenvandemo2@gmail.com', '0000-00-00 00:00:00', 'á');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(30,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `prd_id`, `qty`, `price`) VALUES
(1, 14, 7, 1, '3000000.0000'),
(2, 15, 6, 1, '3000000.0000'),
(3, 16, 6, 1, '3000000.0000'),
(4, 17, 17, 1, '3000000.0000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `amount` decimal(30,4) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `user_email`, `user_phone`, `status`, `amount`, `created`) VALUES
(14, 'Le Thi Demo 2', 'lethidemo2@gmail.com', '1234567', 0, '3000000.0000', '2022-07-21 16:17:27'),
(15, 'Le Thi Demo 3', 'lethidemo23@gmail.com', '123456', 0, '3000000.0000', '2022-07-21 16:18:50'),
(16, 'Le Thi Demo 3', 'lethidemo2@gmail.com', '123456', 0, '3000000.0000', '2022-07-21 16:19:05'),
(17, 'Le Thi Demo 4', 'lethidemo4@gmail.com', '1234567', 0, '3000000.0000', '2022-07-21 16:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prd_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prd_name` varchar(255) NOT NULL,
  `prd_image` varchar(255) NOT NULL,
  `prd_price` int(11) UNSIGNED NOT NULL,
  `prd_warranty` varchar(255) NOT NULL,
  `prd_accessories` varchar(255) NOT NULL,
  `prd_new` varchar(255) NOT NULL,
  `prd_promotion` varchar(255) NOT NULL,
  `prd_status` int(1) NOT NULL,
  `prd_featured` int(1) NOT NULL,
  `prd_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `cat_id`, `prd_name`, `prd_image`, `prd_price`, `prd_warranty`, `prd_accessories`, `prd_new`, `prd_promotion`, `prd_status`, `prd_featured`, `prd_details`) VALUES
(1, 1, 'HyperX Alloy Origins 65', 'HyperX Alloy Origins 65.png', 3000000, '3 Tháng', 'Lót chuột, keycap', 'New 100%', 'None', 1, 1, 'Thiết kế fullsize 104 phím.\r\nChuẩn kết nối USB.\r\nKý tự được in bằng công nghệ laser giúp cho mặt chữ bền bỉ, không phai'),
(2, 1, 'HyperX Alloy FPS Pro', 'HyperX Alloy FPS Pro.png', 3000000, '3 Tháng', 'Lót chuột, keycap', 'New 100%', 'None', 1, 1, 'Thiết kế fullsize 104 phím.\r\nChuẩn kết nối USB.\r\nKý tự được in bằng công nghệ laser giúp cho mặt chữ bền bỉ, không phai'),
(3, 1, 'Edra EK396 RGB', 'Edra EK396 RGB.png', 3000000, '3 Tháng', 'Lót chuột, keycap', 'New 100%', 'None', 1, 0, 'Thiết kế fullsize 104 phím.\r\nChuẩn kết nối USB.\r\nKý tự được in bằng công nghệ laser giúp cho mặt chữ bền bỉ, không phai'),
(4, 1, 'Logitech MX Mechanical', 'Logitech MX Mechanical.png', 3000000, '3Tháng', 'Lót chuột, keycap', 'New 100%', 'None', 1, 0, 'Thiết kế fullsize 104 phím.\r\nChuẩn kết nối USB.\r\nKý tự được in bằng công nghệ laser giúp cho mặt chữ bền bỉ, không phai'),
(5, 1, 'Razer Huntsman Mini Mercury', 'Razer Huntsman Mini Mercury.png', 3000000, '3 Tháng', 'Lót chuột, keycap', 'Còn hàng', 'None', 1, 0, 'Thiết kế fullsize 104 phím.\r\nChuẩn kết nối USB.\r\nKý tự được in bằng công nghệ laser giúp cho mặt chữ bền bỉ, không phai'),
(6, 2, 'Bộ keycap Asus ROG', 'Bộ keycap Asus ROG.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 1, 'Bộ keycap Asus ROG RX PBT AC04. \r\nThiết kế dành cho Switch RX của ROG. \r\nSố lượng nút: 123.'),
(7, 2, 'Keycap Asus ROG NX PBT AC03', 'Keycap Asus ROG NX PBT AC03.png', 3000000, '3 Tháng', 'None', 'New 100%', '', 1, 1, 'Bộ keycap Asus ROG NX PBT AC03. \r\nChất liệu: PBT DoubleShot (Xuyên led). \r\nSố lượng nút: 124.'),
(8, 2, 'Varmilo Christmas Dye-sub', 'Varmilo Christmas Dye-sub.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Bộ nút bàn phím Varmilo Chrismast Dye-sub PBT 108. \r\nChất liệu nhựa PBT cho cảm giác gõ đầm tay. \r\nCông nghệ in Dye-sub không bị mờ ký tự. \r\nProfile : OEM'),
(9, 2, 'Microphone Kingston HyperX', 'Microphone Kingston HyperX.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Microphone Kingston HyperX Quadcast Gaming. \r\nTiêu thụ điện năng: 5V 125mA. \r\nThành phần: Micro tụ điện. '),
(10, 2, 'Microphone Thronmax M20', 'Microphone Thronmax M20.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Nhiều mục đích sử dụng: cho Karaoke, YouTube, Trò chơi. \r\nChipset 96 kHz / 24-bit. '),
(11, 4, 'Mô hình móc khóa Superman', 'MÔ HÌNH MÓC KHÓA SUPERMAN.png', 3000000, 'None', 'None', 'New 100%', 'None', 1, 1, 'Chất liệu nhựa pvc. \r\nChiều cao 9cm. \r\nĐầu xoay 360 độ.'),
(12, 4, 'Mô hình móc khóa Batman', 'MÔ HÌNH MÓC KHÓA BATMAN.png', 3000000, 'None', 'None', 'New 100%', 'None', 1, 0, 'Chất liệu nhựa pvc. \r\nChiều cao 9cm. \r\nĐầu xoay 360 độ. '),
(13, 4, 'Mô hình xe Pagani Huayra', 'MÔ HÌNH XE PAGANI HUAYRA.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Xe được làm bằng sắt, chi tiết có thể mở được cửa, capo trước hoặc sau.\r\nXe có thể chạy được bằng cách kéo trớn (kéo lùi ra sau và thả tay).'),
(14, 4, 'Mô hình xe Mclaren 720S', 'MÔ HÌNH XE MCLAREN 720S.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Xe được làm bằng sắt, chi tiết có thể mở được cửa, capo trước hoặc sau.\r\nXe có thể chạy được bằng cách kéo trớn (kéo lùi ra sau và thả tay).'),
(15, 4, 'Mô hình Uchiha Madara', 'MÔ HÌNH UCHIHA MADARA.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 0, 0, 'CHẤT LIỆU : NHỰA PVC. \r\nKÍCH THƯỚC : 36CM.'),
(16, 7, 'QUẠT LED CASE COOLMOON D1', 'QUẠT LED CASE COOLMOON D1.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 1, 'FAN COOLMOON RGB : Tốc độ : 1300-1500 rpm, Trọng lượng : 150g, Lượng gió : 33 CFM, Độ ồn : 23.5 dBA, Tiêu thụ : 3.8w.\r\nDây LED RGB COOLMOON : Đế hút nam châm, Tiêu thụ : 3,5w, dài 40cm. \r\nThanh LED RGB COOLMOON CỨNG : Đế hút nam châm, Tiêu thụ : 3,5w, dài 40cm.'),
(17, 7, 'Tản nhiệt CPU COOLMOON M1', 'TẢN NHIỆT CPU COOLMOON M1.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Kích thước Fan: 120mm x 120mm x 25mm. \r\nTốc độ: 1800rpm “+/- 10%”. \r\nĐộ bền quạt: 40.000h.'),
(18, 7, 'Keo Tản Nhiệt Arctic MX-4', 'Keo Tản Nhiệt Arctic MX-4.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Tem cào check code hàng chính hãng. \r\nHiệu quả dẫn nhiệt tốt. \r\nĐiện trở suất: 3.8 x 10^13 Ω-cm.'),
(19, 7, 'Tản nhiệt nước Lian Li Galahad', 'Tản nhiệt nước Lian Li Galahad.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Thiết kế lồng bơm 3 buồng hiện đại. \r\nHỗ trợ socket đa dạng ( bao gồm cả socket 1700 ).'),
(20, 7, 'Tản nhiệt khí Jonsbo HX6250', 'Tản nhiệt khí Jonsbo HX6250.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Hỗ trợ socket LGA1700. \r\nQuạt tản nhiệt với kích thước 140mm tăng khả năng lưu thông gió và làm mát. \r\nThiết kế 6 ống đồng dẫn nhiệt tháp đơn giúp tối ưu khả năng tản nhiệt. \r\nThiết kế khoa học giúp tản nhiệt lên đến 250W TDP.'),
(21, 8, 'Ram Desktop Kingston Fury', 'Ram Desktop Kingston Fury.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 1, 'Dung lượng: 32GB.\r\nSố lượng: 2 thanh (2x16GB).\r\nBus: 3200 Mhz. '),
(22, 8, 'Ram Gskill Trident Z Neo', 'Ram Gskill Trident Z Neo.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Dung lượng: 2 x 8GB. \r\nThế hệ: DDR4. \r\nBus: 3600MHz\r\n'),
(23, 8, 'Ram Gskill RIPJAWS V', 'Ram Gskill RIPJAWS V.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Dung lượng: 16GB (2x8GB). \r\nBus: 3000 Mhz. \r\nTrang bị sẵn tản nhiệt'),
(24, 8, 'Ram Desktop Gigabyte AORUS', 'Ram Desktop Gigabyte AORUS.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Dung lượng: 32GB (2x16GB). \r\nBus: 5200 Mhz. \r\nChip nhớ được tuyển chọn'),
(25, 8, 'Ram Desktop Gskill Trident Z5', 'Ram Desktop Gskill Trident Z5.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 0, 0, 'Dung lượng: 32Gb (2x16GB)\r\nBus: 6000 Mhz (CL36-36-36-96)\r\nPhiên bản RGB đẹp mắt'),
(26, 9, 'Ổ cứng SSD WD SN570 Blue', 'Ổ cứng SSD WD SN570 Blue.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 1, 'Tốc độ đọc: 3500Mb/s. \r\nTốc độ ghi: 2300MB/s. \r\nDung lượng: 500GB.'),
(27, 9, 'Ổ cứng SSD Samsung 980 PRO', 'Ổ cứng SSD Samsung 980 PRO.png', 3000000, '3 Tháng', 'None', 'New 100%', 'None', 1, 0, 'Tốc độ đọc: 7000Mb/s. \r\nTốc độ ghi: 5000Mb/s. \r\nDung lượng: 1TB'),
(28, 7, 'Tản nhiệt RAM JONSBO NC1', 'TẢN NHIỆT RAM JONSBO NC1 LED RGB.png', 3000000, '3 Tháng', 'None', 'Còn hàng', 'None', 1, 0, 'Kích thước sản phẩm：141mm x 8.5mm x 43mm. \r\nVật liệu：Nhôm và nhựa ABS. \r\nKết nối：3Pin 5V.'),
(29, 1, 'Logitech Lift Vertical Ergonomic', 'Logitech Lift Vertical Ergonomic.png', 3000000, '3 Tháng', 'Lót chuột', 'Còn hàng', 'None', 1, 0, 'Chuột không dây Logitech Lift Vertical Ergonomic\r\nThiết kế công thái học đặc biệt\r\nChuẩn kết nối: Bluetooth / Wireless 2.4GHz thông qua đầu thu Logi Bolt\r\nTính năng SmartWheel\r\nTuỳ chỉnh nút dễ dàng với phần mềm Logi Option+\r\nKết nối tối đa 3 thiết bị với công nghệ Flow'),
(30, 1, 'Newmen GX9 Pro White', 'Newmen GX9 Pro White.png', 3000000, '3 Tháng', 'Lót chuột', 'Còn hàng', 'None', 1, 0, 'Chuột game Newmen GX9 Pro. \r\nChuẩn kết nối: Dây USB. \r\nThiết kế đối xứng. \r\nMắt cảm biến cao cấp PIXART PMW3389. \r\nĐộ phân giải: 16000 DPI.'),
(31, 1, 'Logitech G502 Hero Lightspeed ', 'Logitech G502 Hero Lightspeed.png', 3000000, '3 Tháng', 'Lót chuột', 'Còn hàng', 'None', 1, 0, 'Chuột Chơi game Không dây Logitech G502 Lightspeed. \r\nPhiên bản không dây của huyền thoại Logitech G502. \r\nCông nghệ không dây Lightspeed với độ trễ cực thấp.'),
(32, 2, 'Webcam Rapoo C280', 'Webcam Rapoo C280.png', 3000000, '3 Tháng', 'None', 'Còn hàng', 'None', 1, 0, 'Tỷ lệ khung hình 30 khung hình / giây. \r\nĐộ phân giải video 2560 * 1440. \r\nĐộ phân giải video FHD 1440P.'),
(33, 3, 'Lót chuột Dareu ESP109 SWALLOW', 'Lót chuột Dareu ESP109 SWALLOW.png', 3000000, '3 Tháng', 'None', 'Còn hàng', 'None', 1, 0, 'Bàn di chuột Gaming Dareu ESP109 SWALLOW.\r\nKích thước 900 x 350 x 3mm.'),
(34, 3, 'Lót chuột Onepiece', 'Lót chuột Onepiece.png', 3000000, '3 Tháng', 'None', 'Còn hàng', 'None', 1, 0, 'Kích thước 800x300mm. \r\nBề mặt vải có bo viền.'),
(35, 5, 'Bộ 50 Sticker Harry Potter', 'BỘ 50 STICKER HARRY POTTER.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'CHẤT GIẤY PHA NHỰA PVC CỰC BỀN. \r\nDÁN XE, MŨ BẢO HIỂM, VALI KHÔNG SỢ BONG. '),
(36, 5, 'Đèn Led treo màn hình S1 1080P', 'ĐÈN LED TREO MÀN HÌNH S1 1080P.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'Chất liệu : Hợp kim nhôm + nhựa PVC. \r\nHiệu điện thế : 5V. \r\nCông suất : 5w.'),
(37, 5, 'Tranh cát họa tiết núi xanh', 'TRANH CÁT 3D HỌA TIẾT NÚI XANH.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'Đường kính lớn 26cm. \r\nCó thể xoay trực tiếp trên kệ đứng'),
(38, 5, 'Đèn Pixar kẹp bàn', 'ĐÈN PIXAR KẸP BÀN.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'Chụp đèn: 12cmx15.5cm. \r\nThân đèn bàn học: 37cm + 37cm. \r\nChất liệu: thép ống cứng được sơn tĩnh điện.'),
(39, 5, 'Đồng hồ Led 3D digital', 'ĐỒNG HỒ LED 3D DIGITAL.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'LED hiển thị thời gian (Giờ : Phút), có 2 chế độ hiển thị thời gian 12h và 24h. \r\nCó 3 mức độ sáng (mặc định độ sáng là trung bình)'),
(40, 6, 'Bàn Gaming E-DRA Z TANK V3', 'BÀN GAMING E-DRA Z TANK V3.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'Cân nặng 15kg\r\nKhả năng chịu tải: 150kg\r\nKích thước vỏ hộp: 1300*750*150mm'),
(41, 6, 'Bàn Gaming E-DRA ELT1975', 'BÀN GAMING E-DRA ELT1675.png', 3000000, 'None', 'None', 'Còn hàng', 'None', 1, 0, 'Kích thước: 160x60x75cm.\r\nMàu sắc: Đen. \r\nKiểu chân: chữ T. \r\nDạng bàn: chữ nhật. \r\nCân nặng: 29 Kg.'),
(42, 6, 'Ghế Legion YT030 Grey White', 'Ghế Legion YT030 Grey White.png', 3000000, '3 Tháng', 'None', 'Còn hàng', 'None', 1, 0, 'Ngả lưng 120 độ. \r\nGối đầu 4D. \r\nTay ghế có thể nâng hạ theo góc 90 độ. '),
(43, 6, 'Ghế Cooler Master Caliber R2S', 'Ghế Cooler Master Caliber R2S.png', 3000000, '3 Tháng', 'None', 'Còn hàng', 'None', 1, 0, 'Phiên bản giới hạn của dòng ghế Caliber R2. \r\nChất liệu : Da PU. \r\nKhung và chân được làm bằng kim loại cực kỳ chắc chắn.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_full` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL,
  `user_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_full`, `user_mail`, `user_pass`, `user_level`, `user_phone`) VALUES
(1, 'Administrator', 'admin@gmail.com', '123456', 0, 961302360),
(2, 'nhan vien a', 'nhanviena@gmail.com', '123456', 1, 961302360),
(3, 'nhan vien b', 'nhanvienb@gmail.com', '123456', 1, 961302360),
(4, 'nhan vien c', 'nhanvienc@gmail.com', '123456', 1, 961302360),
(5, 'nhan vien d', 'nhanviend@gmail.com', '123456', 1, 961302360),
(10, 'demo 2', 'demo2@gmail.com', '123456', 1, 123456),
(13, 'demo 4', 'demo4@gmail.com', '987654', 0, 123456),
(18, 'demo client', 'client@gmail.com', '123', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comm_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `prd_id` (`prd_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`prd_id`) REFERENCES `product` (`prd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
