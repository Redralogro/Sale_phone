-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 13, 2020 at 04:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `Color_id` int(11) NOT NULL,
  `Color_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`Color_id`, `Color_name`) VALUES
(1, 'Xanh '),
(2, 'Cam'),
(3, 'Trắng'),
(4, 'Bạc'),
(5, 'Gold'),
(6, 'Tím'),
(7, 'Đỏ'),
(8, 'Đen'),
(9, 'Chàm'),
(10, 'Hồng');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Comment_id` int(11) NOT NULL,
  `Phone_id` int(11) NOT NULL,
  `Full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comment_time` datetime NOT NULL,
  `Comment_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Comment_id`, `Phone_id`, `Full_name`, `Comment_time`, `Comment_content`, `Phone_number`) VALUES
(1, 1, 'Trần Văn Chiến', '2020-07-01 00:00:00', 'Ngon đấy', '0978146789'),
(2, 1, 'Lam linh', '2020-07-01 08:00:00', 'Đẹp', '0123456654'),
(3, 3, 'Long Tran', '2020-07-03 08:20:00', 'Quá đắt', '0977844564'),
(4, 6, 'Lung Thị Linh', '2020-07-04 12:26:24', 'Chất lượng đấy', '0114123123'),
(5, 4, 'Thanh Thanh', '2020-07-05 07:35:13', 'Đẹp', '0945146789'),
(6, 8, 'Thanh Thanh', '2020-07-05 09:26:21', 'Tàm tạm', '0945146789'),
(7, 3, 'Tuấn Phạm', '2020-07-01 00:00:00', 'Đắt', '0711311411'),
(8, 5, 'Tuấn Phạm', '2020-07-01 00:00:00', 'Đắt', '0711311411'),
(9, 2, 'Liên Trần', '2020-07-01 05:11:38', 'Chơi game ổn', '0988123456'),
(10, 14, 'Thanh Thanh', '2020-07-03 20:19:10', 'Độ họa ổn', '0945146789');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Customer_name`, `Customer_phone`, `Customer_email`) VALUES
(1, 'ĐINH ANH DŨNG', '0333968599', 'dung.ckay9999@gmail.com'),
(2, 'Trần Khắc Hoàng', '0965845502', 'tranhoang@gmail.com'),
(3, 'Vũ Đức Long', '0958468723', 'vulong@gmail.com'),
(4, 'ĐINH ANH DŨNG 1', '0333968599', 'dung.ckay9999@gmail.com'),
(5, 'Trần Khắc Hoàng 1', '0965845502', 'tranhoang@gmail.com'),
(6, 'Vũ Đức Long 1', '0958468723', 'vulong@gmail.com'),
(7, 'Nguyễn Thị Hóa', '0113114115', 'hue@gmail.com'),
(8, 'Loan Thị Lam', '0644589112', 'lam@gmail.com'),
(9, 'Nguyễn Xuân Bách', '066118134', 'bach@gmail.com'),
(10, 'Trần Văn Chiến', '0978166254', 'Chien@gmail.com'),
(11, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(14, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(15, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(19, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(21, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(22, 'Đinh Anh Dũng', '0832098', 'longvd@hachium.com'),
(23, 'Vũ Đức Long', '86868', 'longvd@hachium.com'),
(24, 'Đinh Anh Dũng', '123123123', 'longvd@hachium.com'),
(25, 'Đinh Anh Dũng', '123123123', 'longvd@hachium.com'),
(26, 'Đinh Anh Dũng', '123123123', 'longvd@hachium.com'),
(27, 'Đinh Anh Dũng', '123123123', 'longvd@hachium.com'),
(28, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(29, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(30, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(31, 'Vũ Đức Long', '019808120938120', 'longvd@hachium.com'),
(38, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(40, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(41, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(42, 'jasldjasdjaskldjaslk', '0943465136', 'redralogro@gmail.com'),
(43, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(44, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(45, 'Long Vu', '0943465136', 'longvd@hachium.com'),
(46, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(47, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(48, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(49, 'Lê Thị Liên', '0378362505', 'redralogro@gmail.com'),
(50, 'Long Vu', '0943465136', 'redralogro@gmail.com'),
(51, 'Hoàng Thị Như QUỳnh', '0969704130', 'yangyang14051999@gmail.com'),
(52, 'Đinh Anh Dũng', '028930482', 'dinhanhdung03011999@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `deliverer`
--

CREATE TABLE `deliverer` (
  `Deliverer_id` int(11) NOT NULL,
  `Deliverer_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deliverer_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliverer`
--

INSERT INTO `deliverer` (`Deliverer_id`, `Deliverer_name`, `Deliverer_phone`) VALUES
(1, 'Dũng', '0333968599'),
(2, 'Hoàng', '096857612'),
(3, 'Long', '0988165132'),
(4, 'Nam', '0988114111'),
(5, 'Vũ', '0988114112'),
(6, 'Mạnh', '0988114113'),
(7, 'Dương', '0988114114'),
(8, 'Tùng', '0988114115'),
(9, 'Khanh', '0988114116'),
(10, 'Luyện', '0978115116');

-- --------------------------------------------------------

--
-- Table structure for table `detail_phones`
--

CREATE TABLE `detail_phones` (
  `Detail_phones_id` int(11) NOT NULL,
  `Phone_id` int(11) NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quatity` int(11) NOT NULL,
  `Size` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Os` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cpu_speed` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Camera_primary` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bettery` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Warranty` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bluetooth` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Wlan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Promotion_price` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_phones`
--

INSERT INTO `detail_phones` (`Detail_phones_id`, `Phone_id`, `Description`, `Quatity`, `Size`, `Weight`, `Os`, `Cpu_speed`, `Camera_primary`, `Bettery`, `Warranty`, `Bluetooth`, `Wlan`, `Promotion_price`) VALUES
(2, 4, 'Rất ngon', 255, '5 inch', '185g', 'OPPO 3', '8X', '32MP', '2700', '12 tháng', 'Tạm Ổn', 'Ổn', '90000'),
(3, 5, 'Chơi game cực ngon', 255, '5.5 inch', '300g', 'Android 10', '8X', '128MP', '4000', '12 tháng', 'Mọi thiết bị', 'Mọi thiết bị', '10000000'),
(4, 2, 'cực Xịn', 255, '5.5 inch', '160g', 'android 9', '8X', '64MP', '3000', '12 tháng', '1 số thiết bị', 'ổn', '150000'),
(5, 3, 'Chụp ảnh rõ nét, chơi game tẹt ga, pin cực trâu,....', 255, '6 inch', '150g', 'android 10', '16X', '128MP', '4400', '36 tháng', 'đa năng', 'đa năng', '10000000'),
(6, 14, 'Rất là xịn xò', 255, '5.5 inch', '188g', 'Android 10', '8X', '64MP', '3000', '12 Tháng', 'Chịu', 'Chịu luôn', '20000000'),
(7, 11, 'Rất là xịn xò', 255, '5.5 inch', '188g', 'Android 10', '8X', '64MP', '3000', '12 Tháng', 'Chịu', 'Chịu luôn', '20000000'),
(8, 6, 'CHơi game mượt', 255, '6 inch', '160g', 'MIUI 10', '8X', '64MP', '3600', '24 tháng', 'Ổn', 'Ổn', '5000000'),
(9, 7, 'Mượt', 255, '5.5 inch', '160g', 'MAX OS', '8X', '128MP', '3600', '12 tháng', 'Tốt', 'Ổn', '560450'),
(10, 8, 'Cưc ngon', 255, '6 inch', '190g', 'IOS', '16X', '128MP', '4000', '10 tháng', 'Tốt', 'Ổn', '3000000'),
(18, 1, 'Rất là xịn xò', 0, '5.5 inch', '188g', 'Android 10', '8X', '64MP', '3000', '12 Tháng', 'Chịu', 'Chịu luôn', '5000000'),
(19, 24, '', 12, '', '', '', '', '', '', '', '', '', ''),
(20, 25, 'Con máy xịn xò con bò', 1, '10 icnh', '0,2 kg', 'Android', '16PX', '32Mpx', '3200mAh', '24 tháng', 'có', 'card mạng xịn hết xẩy', '4234000');

-- --------------------------------------------------------

--
-- Table structure for table `firm`
--

CREATE TABLE `firm` (
  `Firm_id` int(11) NOT NULL,
  `Firm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firm`
--

INSERT INTO `firm` (`Firm_id`, `Firm_name`, `Logo`) VALUES
(1, 'SAMSUNG ', 'r7vlvzodjpg'),
(2, 'APPLE', '471886jpg'),
(3, 'OPPO', 'oppojpg'),
(4, 'XIAOMI', '480pxXiaomi_logosvgpng'),
(5, 'NOKIA', 'nokialogowallpaperjpg'),
(6, 'IPHONE', '471886jpg'),
(7, 'HUAWEI', 'HuaweiDInh-ANh-Dungjpgjpg'),
(8, 'LG', 'imagesjpg'),
(9, 'SONY', 'tai-xuongpng'),
(10, 'LENOVO', 'tai-xuong-1png');

-- --------------------------------------------------------

--
-- Table structure for table `memory`
--

CREATE TABLE `memory` (
  `Memory_id` int(11) NOT NULL,
  `Memory` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `memory`
--

INSERT INTO `memory` (`Memory_id`, `Memory`) VALUES
(1, '16gb'),
(2, '32gb'),
(3, '64gb'),
(4, '128gb'),
(5, '256gb'),
(6, '512gb'),
(7, '1Tb');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Order_detail_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Phone_id` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Sale_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Order_detail_id`, `Order_id`, `Phone_id`, `Price`, `Sale_quantity`) VALUES
(1, 1, 14, 23000000, 10),
(2, 3, 11, 4500000, 2),
(3, 2, 14, 23000000, 10),
(4, 4, 11, 4500000, 2),
(5, 4, 2, 300000, 100000),
(6, 10, 4, 300000, 3),
(7, 6, 8, 350000, 5),
(8, 7, 8, 350000, 5),
(9, 10, 5, 305000, 2),
(10, 3, 7, 345020, 6),
(11, 13, 14, 21000000, 2),
(12, 14, 5, 789000, 2),
(13, 15, 11, 300000, 1),
(14, 16, 5, 789000, 1),
(15, 17, 5, 789000, 1),
(16, 18, 5, 789000, 1),
(17, 19, 5, 789000, 3),
(18, 20, 14, 21000000, 1),
(19, 21, 8, 6000000, 2),
(20, 21, 2, 5000000, 1),
(21, 22, 14, 21000000, 1),
(22, 22, 2, 5000000, 1),
(23, 23, 5, 789000, 1),
(29, 28, 11, 300000, 1),
(31, 29, 14, 21000000, 1),
(32, 30, 6, 12000000, 2),
(33, 30, 8, 6000000, 1),
(34, 31, 14, 21000000, 1),
(35, 32, 2, 5000000, 1),
(36, 33, 5, 789000, 2),
(37, 34, 24, 6700000, 1),
(38, 34, 6, 12000000, 2),
(39, 35, 7, 17500000, 1),
(40, 36, 6, 12000000, 2),
(41, 36, 4, 400000, 3),
(42, 37, 7, 17500000, 2),
(43, 37, 11, 300000, 1),
(44, 38, 24, 6700000, 1),
(45, 38, 2, 5000000, 2),
(46, 39, 1, 500000, 1),
(47, 40, 14, 21000000, 1),
(48, 41, 14, 21000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_phone`
--

CREATE TABLE `order_phone` (
  `Order_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Status_id` int(11) NOT NULL,
  `Deliverer_id` int(11) NOT NULL,
  `Create_date` datetime NOT NULL,
  `Total_price` int(11) NOT NULL,
  `Delivery_addres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_phone`
--

INSERT INTO `order_phone` (`Order_id`, `Customer_id`, `Status_id`, `Deliverer_id`, `Create_date`, `Total_price`, `Delivery_addres`, `Note`, `password`) VALUES
(1, 5, 3, 1, '2020-07-17 07:14:07', 396000000, 'Bắc NInh 2', '																								giao vao 15h																						', 'dung'),
(2, 6, 3, 2, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', 'Giao vào 7h tối', 'dung'),
(3, 3, 4, 2, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', 'Giao vào 7h tối', 'dung'),
(4, 1, 2, 2, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', '						Giao vào 7h tối					', 'dung'),
(5, 2, 2, 2, '2020-07-01 12:22:14', 200000, 'Bắc ninh', 'Chưa xác định', '1'),
(6, 3, 2, 2, '2020-07-01 05:10:00', 300000, 'Hà nội 2', '						Giao lúc 12h					', '1'),
(7, 6, 3, 2, '2020-07-02 11:00:00', 250000, 'Hà nội', 'Chưa xác định', '1'),
(9, 1, 2, 2, '2020-07-02 10:00:00', 600000, 'Bắc Ninh', 'Giao lúc 16H', '1'),
(10, 5, 3, 2, '2020-07-01 16:00:00', 100000, 'Từ  Sơn', 'Giao lúc 20h', '1'),
(11, 19, 2, 9, '0000-00-00 00:00:00', 21000000, 'ktx B10 Bách Khoa', 'giao hàng nhanh lên', '5059cfb5bfe6d73050a7905db7bf7b93'),
(13, 21, 3, 3, '0000-00-00 00:00:00', 42000000, 'ktx B10 Bách Khoa', 'giao hàng nhanh lên ba', '3f53dde60aff5903f5d944cbf09ad4e5'),
(14, 22, 1, 5, '0000-00-00 00:00:00', 1578000, 'ádasdasdas', 'adasdlasdjasdjas', '07bdf5cb48dfd60ada1be30628f168a9'),
(15, 23, 1, 4, '0000-00-00 00:00:00', 300000, 'lsjflfjsdfklsjfsdfjsdkl', 'ádfksdjfklsdjfsdklfjsdlkfjslf', '375a46b21bac0cab122ce6bc3d9af6da'),
(16, 24, 1, 1, '0000-00-00 00:00:00', 0, 'ádasdasdas', 'álasldjalsjdasjdasldjalj', '283e9c7b0899848210e99bcc7a998f04'),
(17, 25, 4, 10, '0000-00-00 00:00:00', 0, 'ádasdasdas', 'álasldjalsjdasjdasldjalj', '4fead909a4c4a0ea7dc9666a2bc8582f'),
(18, 26, 1, 1, '0000-00-00 00:00:00', 0, 'ádasdasdas', 'álasldjalsjdasjdasldjalj', 'f3765d3db8274da4cce45445e4eac327'),
(19, 27, 1, 2, '2020-07-17 08:14:07', 2367000, '123123', 'ádasasdasdas', '62581649b48d38ba293e7658bca9472b'),
(20, 28, 2, 1, '0000-00-00 00:00:00', 21000000, 'ádasdasdasd', 'ádsddasdasdas', 'b571a1bceb99852e7aee7ad6521b931e'),
(21, 29, 2, 8, '0000-00-00 00:00:00', 17000000, 'ktx B10 Bách Khoa', 'adasdasdasdasdas', '1522ec81eb8adf2a3a8300755b652b09'),
(22, 30, 2, 2, '0000-00-00 00:00:00', 26000000, 'ádsdasda', 'ádsdasdasd', '1fda8fb300a8f3db3bae2a5b3d20f1e5'),
(23, 31, 3, 3, '0000-00-00 00:00:00', 789000, 'lsjflfjsdfklsjfsdfjsdkl', 'sfjsdklfjsdklfjsdklfjsdklfjsld', 'a931144d578d88d22958b09865c74c19'),
(28, 38, 1, 1, '0000-00-00 00:00:00', 300000, 'áasdasd', 'ssfsd;fjkjsksdjfklsdjflj', '7ba4d8ac'),
(29, 40, 2, 3, '2020-07-12 06:04:45', 21000000, 'ktx B10 Bách Khoa', 'ấkdjaskldjaskldjaskldjkl', '97c8b82c'),
(30, 41, 2, 10, '2020-07-12 06:13:07', 30000000, 'ktx B10 Bách Khoa', 'lkjskljsdkljsdklfjsdklfsdjfkldj', '761680e5'),
(31, 42, 2, 6, '2020-07-12 06:17:28', 21000000, 'ádasdsA', 'ưewepwepriweprwei', '13996903'),
(32, 43, 2, 10, '2020-07-12 06:24:48', 5000000, 'ADSDASD', 'âsjasljaldjaslj', 'a920b58b'),
(33, 44, 2, 2, '2020-07-12 06:42:20', 1578000, 'ktx B10 Bách Khoa', 'kjkkbkjhjknkn', 'f2092542'),
(34, 45, 2, 5, '2020-07-12 06:46:41', 30700000, 'ktx B10 Bách Khoa', 'jfdklfjslfjsdklfjfkldjl', 'e6fbc314'),
(35, 46, 2, 9, '2020-07-12 06:49:35', 17500000, 'a;á;;ksa;ka;dk', ';;lfksd;kfs;lfkd;lfk', '0b1d0795'),
(36, 47, 3, 1, '2020-07-12 08:18:12', 25200000, 'ktx B10 Bách Khoa', 'dkfjsdlfjsdkljsdkljsdjfkl', 'bf164233'),
(37, 48, 3, 1, '2020-07-12 08:20:54', 35300000, 'ádasasasdas', 'lskd;asdk;ka;ldkas;kd', '31bc513c'),
(38, 49, 3, 7, '2020-07-12 08:37:33', 16700000, 'ktx B10 Bách Khoa', 'fhfkhsdfhjkhfjkh', '9feb3d31'),
(39, 50, 2, 4, '2020-07-12 08:46:18', 500000, 'ádasdasd', ';afkd;fksd;kd;', '24951485'),
(40, 51, 2, 1, '2020-07-12 11:45:36', 21000000, 'seiohsigjs', 'slfjslfjdklfjsdlfjsdlfjd', '9b120f57'),
(41, 52, 2, 4, '2020-07-12 16:07:50', 21000000, 'dốc Thọ Lão', 'Giao hàng vào cuối tuần', 'f895c39e');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `Phone_id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Color_id` int(11) NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory_id` int(11) NOT NULL,
  `Firm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`Phone_id`, `Name`, `Price`, `Color_id`, `Image`, `Memory_id`, `Firm_id`) VALUES
(1, 'iPhone 11 Pro Max', 500000, 4, 'iphone11promaxmauvang_1582641195pngpng', 6, 6),
(2, 'OPPO F11 Pro', 5000000, 6, 'ibZbaH_simg_de2fe0_500x500_maxbjpg', 4, 3),
(3, 'OPPO A5 (2020)', 4302500, 3, 'tai-xuongjpg', 4, 3),
(4, 'OPPO Reno 3', 400000, 3, 'Opporeno3proSkyWhitepng', 4, 3),
(5, 'Xiaomi Mi A3', 789000, 6, 'ImgWjpg', 1, 4),
(6, 'Xiaomi Mi Note 10 Pro', 12000000, 1, 'mi10projpg', 5, 4),
(7, 'Apple Iphone 11', 17500000, 8, 'iphone11promaxmauvang_1582641195pngpng', 3, 2),
(8, 'Apple iPhone XR', 6000000, 1, 'iphone_xr_64gbwebp', 4, 2),
(11, 'iPhone 8 Plus', 300000, 3, '8plusjpg', 3, 6),
(14, 'IPHONE 11 PRO MAX', 21000000, 4, 'iphone11promaxmauvang_1582641195pngpng', 5, 6),
(24, 'Lenovo A60000', 6700000, 4, 'lenovozukz1300x300jpg', 2, 10),
(25, 'Lenovo A5s ', 8000000, 10, 'lenovoa5s600x600jpg', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sale_phones`
--

CREATE TABLE `sale_phones` (
  `Sale_id` int(11) NOT NULL,
  `Phone_id` int(11) NOT NULL,
  `Quatity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_phones`
--

INSERT INTO `sale_phones` (`Sale_id`, `Phone_id`, `Quatity`) VALUES
(1, 1, 255),
(2, 3, 255),
(3, 2, 255),
(4, 4, 255),
(5, 5, 255),
(6, 6, 255),
(7, 7, 255),
(8, 8, 255),
(9, 11, 255),
(10, 14, 255);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_id` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_id`, `Status`) VALUES
(1, 'Mới'),
(2, 'Đang giao'),
(3, 'Đã giao'),
(4, 'Đã Hủy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Email`, `number_phone`, `Password`, `Name`, `Image_user`, `status`) VALUES
(1, 'hoangtran@mail.com', '1234123123', '25d55ad283aa400af464c76d713c07ad', 'hoang', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcThk8RZJHoZ4khgADH52uhRAlkVf9adQGhtUQ&usqp=CAU', 1),
(2, 'dinhanhdung03011999@gmail.com', '0333968599', '25d55ad283aa400af464c76d713c07ad', 'Đinh Anh Dũng', '', 1),
(3, 'redralogro@gmail.com', '0943465136', '25d55ad283aa400af464c76d713c07ad', 'Vũ Đức Long', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`Color_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Comment_id`),
  ADD KEY `fk_phoneid_tbphones_tbcomment` (`Phone_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `deliverer`
--
ALTER TABLE `deliverer`
  ADD PRIMARY KEY (`Deliverer_id`);

--
-- Indexes for table `detail_phones`
--
ALTER TABLE `detail_phones`
  ADD PRIMARY KEY (`Detail_phones_id`),
  ADD KEY `fk_phoneid_tbphone` (`Phone_id`);

--
-- Indexes for table `firm`
--
ALTER TABLE `firm`
  ADD PRIMARY KEY (`Firm_id`);

--
-- Indexes for table `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`Memory_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Order_detail_id`),
  ADD KEY `fk_orderid_tborderphone_tborderdetail` (`Order_id`),
  ADD KEY `fk_phoneid_tbphones_tborderdetail` (`Phone_id`);

--
-- Indexes for table `order_phone`
--
ALTER TABLE `order_phone`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `fk_customerid_tbcustomer_tborderphone` (`Customer_id`),
  ADD KEY `fk_statusid_tbstatus_tborderphone` (`Status_id`),
  ADD KEY `fk_delivererid_tbdeliverer_tborderphone` (`Deliverer_id`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`Phone_id`),
  ADD KEY `fk_idFirm_tbFirm_tbPhone` (`Firm_id`),
  ADD KEY `fk_idColor_tbColor_tbPhone` (`Color_id`),
  ADD KEY `Memory_id` (`Memory_id`);

--
-- Indexes for table `sale_phones`
--
ALTER TABLE `sale_phones`
  ADD PRIMARY KEY (`Sale_id`),
  ADD KEY `fk_phoneid_tbphones_tbsalephone` (`Phone_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `Color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `deliverer`
--
ALTER TABLE `deliverer`
  MODIFY `Deliverer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_phones`
--
ALTER TABLE `detail_phones`
  MODIFY `Detail_phones_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `firm`
--
ALTER TABLE `firm`
  MODIFY `Firm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `memory`
--
ALTER TABLE `memory`
  MODIFY `Memory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `order_phone`
--
ALTER TABLE `order_phone`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `Phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sale_phones`
--
ALTER TABLE `sale_phones`
  MODIFY `Sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_phoneid_tbphones_tbcomment` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `detail_phones`
--
ALTER TABLE `detail_phones`
  ADD CONSTRAINT `fk_phoneid_tbphone` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_orderid_tborderphone_tborderdetail` FOREIGN KEY (`Order_id`) REFERENCES `order_phone` (`Order_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_phoneid_tbphones_tborderdetail` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `order_phone`
--
ALTER TABLE `order_phone`
  ADD CONSTRAINT `fk_customerid_tbcustomer_tborderphone` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_delivererid_tbdeliverer_tborderphone` FOREIGN KEY (`Deliverer_id`) REFERENCES `deliverer` (`Deliverer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_statusid_tbstatus_tborderphone` FOREIGN KEY (`Status_id`) REFERENCES `status` (`Status_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `fk_idColor_tbColor_tbPhone` FOREIGN KEY (`Color_id`) REFERENCES `color` (`Color_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idFirm_tbFirm_tbPhone` FOREIGN KEY (`Firm_id`) REFERENCES `firm` (`Firm_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`Memory_id`) REFERENCES `memory` (`Memory_id`) ON UPDATE CASCADE;

--
-- Constraints for table `sale_phones`
--
ALTER TABLE `sale_phones`
  ADD CONSTRAINT `fk_phoneid_tbphones_tbsalephone` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
