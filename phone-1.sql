-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 07:52 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `image_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`banner_id`, `image_banner`) VALUES
(9, 'nubiaredmagic5g1jpg'),
(10, 'xiaomiredmi10xjpg'),
(11, 'xiaomiredmi81Dungjpg'),
(12, 'iphone11800300800x3001_1583386230png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `Color_id` int(11) NOT NULL,
  `Color_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
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
-- Cấu trúc bảng cho bảng `comment`
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
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`Comment_id`, `Phone_id`, `Full_name`, `Comment_time`, `Comment_content`, `Phone_number`) VALUES
(3, 3, 'Long Tran', '2020-07-03 08:20:00', 'Quá đắt', '0977844564'),
(4, 6, 'Lung Thị Linh', '2020-07-04 12:26:24', 'Chất lượng đấy', '0114123123'),
(5, 4, 'Thanh Thanh', '2020-07-05 07:35:13', 'Đẹp', '0945146789'),
(6, 8, 'Thanh Thanh', '2020-07-05 09:26:21', 'Tàm tạm', '0945146789'),
(7, 3, 'Tuấn Phạm', '2020-07-01 00:00:00', 'Đắt', '0711311411'),
(8, 5, 'Tuấn Phạm', '2020-07-01 00:00:00', 'Đắt', '0711311411'),
(9, 2, 'Liên Trần', '2020-07-01 05:11:38', 'Chơi game ổn', '0988123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
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
(52, 'Đinh Anh Dũng', '028930482', 'dinhanhdung03011999@gmail.com'),
(53, 'Äinh Anh DÅ©ng', '0333968599', 'dinhanhdung03011999@gmail.com'),
(54, 'DINH ANH DUNG', '0333333333', 'dung.ckay9999@gmail.com'),
(55, 'Tráº§n Kháº¯c HoÃ ng', '0968574821', 'duggoitentao@gmail.com'),
(56, 'DINH ANH DUNG', '0333333333', 'duggoitentao@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `deliverer`
--

CREATE TABLE `deliverer` (
  `Deliverer_id` int(11) NOT NULL,
  `Deliverer_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deliverer_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `deliverer`
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
-- Cấu trúc bảng cho bảng `detail_phones`
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
-- Đang đổ dữ liệu cho bảng `detail_phones`
--

INSERT INTO `detail_phones` (`Detail_phones_id`, `Phone_id`, `Description`, `Quatity`, `Size`, `Weight`, `Os`, `Cpu_speed`, `Camera_primary`, `Bettery`, `Warranty`, `Bluetooth`, `Wlan`, `Promotion_price`) VALUES
(2, 4, 'Rất ngon', 255, '5 inch', '185g', 'OPPO 3', '8X', '32MP', '2700', '12 tháng', 'Tạm Ổn', 'Ổn', '90000'),
(3, 5, 'Chơi game cực ngon', 255, '5.5 inch', '300g', 'Android 10', '8X', '128MP', '4000', '12 tháng', 'Mọi thiết bị', 'Mọi thiết bị', '10000000'),
(4, 2, '<h2>Đặc điểm nổi bật của OPPO F11 Pro 128GB</h2>\r\n\r\n<h2>L&acirc;u nay, những chiếc điện thoại của&nbsp;<a href=\"https://www.thegioididong.com/dtdd-oppo\" target=\"_blank\">OPPO</a>&nbsp;thường được đ&aacute;nh gi&aacute; cao ở camera selfie v&agrave; với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-f11-pro-128gb\" target=\"_blank\">OPPO F11 Pro 128GB</a>&nbsp;th&igrave; ngo&agrave;i thế mạnh về camera trước với hệ thống trượt, OPPO l&agrave;m người ta phải ấn tượng th&ecirc;m cả về camera sau.</h2>\r\n\r\n<h3>M&agrave;n h&igrave;nh tr&agrave;n viền kh&ocirc;ng khuyết điểm</h3>\r\n\r\n<p>Kh&ocirc;ng &ldquo;tai thỏ&rdquo;, kh&ocirc;ng &ldquo;nốt ruồi&rdquo; gi&uacute;p cho OPPO F11 Pro 128GB kh&aacute;c biệt ho&agrave;n to&agrave;n với nhiều&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;tr&ecirc;n thị trường hiện nay.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-13.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-13.jpg\" /></a></p>\r\n\r\n<p>Camera selfie nằm ẩn b&ecirc;n trong cơ chế trượt, từ đ&oacute; ch&uacute;ng ta c&oacute; một&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=man-hinh-tran-vien\" target=\"_blank\">m&agrave;n h&igrave;nh tr&agrave;n viền</a>&nbsp;cực kỳ ấn tượng gi&uacute;p người d&ugrave;ng c&oacute; một diện t&iacute;ch trải nghiệm tuyệt vời.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-7.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-7.jpg\" /></a></p>\r\n\r\n<p>OPPO F11 Pro 128GB được trang bị m&agrave;n h&igrave;nh 6.5 inch, độ ph&acirc;n giải Full HD+, tỉ lệ 19.5:9, cộng với viền mỏng, n&oacute; gi&uacute;p chiếc m&aacute;y dễ d&agrave;ng nằm gọn trong l&ograve;ng b&agrave;n tay người d&ugrave;ng.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-18.jpg\" onclick=\"return false;\"><img alt=\"Màn hình của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-18.jpg\" /></a></p>\r\n\r\n<p>Đồng thời, g&oacute;c nh&igrave;n v&agrave; độ s&aacute;ng của m&aacute;y cũng được đ&aacute;nh gi&aacute; l&agrave; kh&aacute; tốt khi người d&ugrave;ng trải nghiệm ngo&agrave;i trời.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-oppo-f11-pro-khong-chi-dep-ma-con-manh-me-1155352\" target=\"_blank\">Đ&aacute;nh gi&aacute; nhanh OPPO F11 Pro: Đ&acirc;u chỉ đẹp m&agrave; c&ograve;n mạnh mẽ</a></p>\r\n\r\n<h3>Camera selfie trượt ấn tượng</h3>\r\n\r\n<p>F11 Pro 128GB l&agrave; m&aacute;y sở hữu camera selfie 16 MP c&oacute; cơ chế &ldquo; th&ograve; thụt&rdquo; kh&aacute; độc đ&aacute;o v&agrave; tiện lợi cho người d&ugrave;ng.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-12.jpg\" onclick=\"return false;\"><img alt=\"Camera trước selfie của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-12.jpg\" /></a></p>\r\n\r\n<p>OPPO gọi đ&acirc;y l&agrave; cơ chế pop-up (bật l&ecirc;n), l&uacute;c n&agrave;o cần th&igrave; camera sẽ tự động được bật l&ecirc;n v&agrave; sẽ ẩn đi khi kh&ocirc;ng sử dụng.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-11.jpg\" onclick=\"return false;\"><img alt=\"Camera trước selfie của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-11.jpg\" /></a></p>\r\n\r\n<p>Camera selfie được đặt tại vị tr&iacute; ch&iacute;nh giữa gi&uacute;p c&aacute;c bức ảnh selfie dễ canh h&igrave;nh hơn, kh&ocirc;ng bị lệch v&agrave; bạn chỉ cần mất v&agrave;i gi&acirc;y để bật camera l&ecirc;n để tự sướng th&ocirc;i.</p>\r\n\r\n<p>Kh&ocirc;ng chỉ thế, camera selfie hỗ trợ tr&iacute; tuệ nh&acirc;n tạo AI với c&ocirc;ng nghệ Beautification được OPPO đ&aacute;nh gi&aacute; cao, cho ph&eacute;p mang đến những bức ảnh selfie tốt nhất.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-20.jpg\" onclick=\"return false;\"><img alt=\"Camera trước selfie của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-20.jpg\" /></a></p>\r\n\r\n<p>Phần mềm m&aacute;y ảnh cũng sẽ c&oacute; nhiều hiệu ứng kh&aacute;c nhau để l&agrave;m cho ảnh selfie của bạn tr&ocirc;ng tuyệt vời hơn nữa.</p>\r\n\r\n<h3>Camera sau l&ecirc;n đến 48 MP</h3>\r\n\r\n<p>Kh&ocirc;ng chỉ c&oacute; camera trước m&agrave;&nbsp;OPPO F11 Pro 128 GB c&ograve;n sở hữu camera ch&iacute;nh với độ ph&acirc;n giải l&ecirc;n đến 48 MP v&agrave; nhiều t&iacute;nh năng chụp h&igrave;nh th&uacute; vị kh&aacute;c.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-15.jpg\" onclick=\"return false;\"><img alt=\"Camera sau của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-15.jpg\" /></a></p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; F11 Pro c&ograve;n được trang bị cảm biến độ s&acirc;u 5 MP với khẩu độ f/2.4, sử dụng cảm biến của Sony gi&uacute;p camera nhận được nhiều &aacute;nh s&aacute;ng hơn v&agrave; thu được nhiều chi tiết hơn.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-6.jpg\" onclick=\"return false;\"><img alt=\"Camera sau của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-6.jpg\" /></a></p>\r\n\r\n<p>Ngo&agrave;i độ ph&acirc;n giải cao, OPPO F11 Pro c&ograve;n trang bị qu&aacute; nhiều c&ocirc;ng nghệ ti&ecirc;n tiến tr&ecirc;n một chiếc camera như: AI Ultra-clear Engine gi&uacute;p người d&ugrave;ng lu&ocirc;n c&oacute; được những bức ảnh tuyệt vời d&ugrave; chụp đủ s&aacute;ng hay thiếu s&aacute;ng.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-5.jpg\" onclick=\"return false;\"><img alt=\"Ảnh chụp từ camera của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-5.jpg\" /></a></p>\r\n\r\n<p>C&ocirc;ng nghệ Tetracell xuất hiện tr&ecirc;n m&aacute;y cũng sẽ cải thiện khả năng chụp ảnh ch&acirc;n dung v&agrave;o ban đ&ecirc;m.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-4.jpg\" onclick=\"return false;\"><img alt=\"Ảnh chụp từ camera của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-4.jpg\" /></a></p>\r\n\r\n<p>Chế độ Ultra Night c&oacute; chức năng mang đến những bức ảnh tuyệt vời trong nhiều cảnh đ&ecirc;m kh&aacute;c nhau v&agrave; k&egrave;m theo t&iacute;nh năng Color Mapping nhằm kiểm so&aacute;t m&agrave;u da của con người.</p>\r\n\r\n<p>Xem th&ecirc;m:&nbsp;<a href=\"https://www.thegioididong.com/tin-tuc/danh-gia-camera-oppo-f11-pro-chan-dung-sieu-dep-chup-dem-chat-luong-1158621\" target=\"_blank\">Đ&aacute;nh gi&aacute; camera OPPO F11 Pro: Ch&acirc;n dung si&ecirc;u đẹp, chụp đ&ecirc;m chất lượng</a></p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd6.jpg\" onclick=\"return false;\"><img alt=\"Ảnh seldie của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd6.jpg\" /></a></p>\r\n\r\n<p>Tất cả những g&igrave; bạn cần l&agrave;m l&agrave; cầm chiếc&nbsp;OPPO F11 Pro l&ecirc;n v&agrave; chụp, mọi việc c&ograve;n lại đ&atilde; c&oacute; m&aacute;y xử l&yacute; tự động cho bạn.</p>\r\n\r\n<h3><a href=\"https://www.thegioididong.com/dtdd?f=pin-khung-3000-mah\" target=\"_blank\">Pin &quot;si&ecirc;u khủng&quot;</a>&nbsp;k&egrave;m&nbsp;<a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-cong-nghe-sac-nhanh-vooc-cua-oppo-918283\" target=\"_blank\">c&ocirc;ng nghệ VOOC</a></h3>\r\n\r\n<p>OPPO F11 Pro được n&acirc;ng cấp c&ocirc;ng nghệ&nbsp;<a href=\"https://www.thegioididong.com/dtdd?f=sac-pin-nhanh\" target=\"_blank\">sạc nhanh</a>&nbsp;VOOC 3.0 gi&uacute;p m&aacute;y c&oacute; thể được sạc đầy chỉ trong v&ograve;ng 80 ph&uacute;t.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-10.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-10.jpg\" /></a></p>\r\n\r\n<p>Với sự n&acirc;ng cấp n&agrave;y sẽ cho m&aacute;y sạc nhanh hơn 20% so với &quot;đ&agrave;n em&quot; OPPO F9 đ&atilde; ra mắt trước đ&oacute;.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-9.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-9.jpg\" /></a></p>\r\n\r\n<p>Vi&ecirc;n pin dung lượng l&ecirc;n tới 4000 mAh hứa hẹn cũng sẽ cho bạn thoải m&aacute;i sử dụng cả ng&agrave;y m&agrave; kh&ocirc;ng cần lo lắng về việc phải sạc pin.</p>\r\n\r\n<p>Ngo&agrave;i ra m&aacute;y c&ograve;n được trang bị chip MediaTek Helio P70 8 nh&acirc;n gi&uacute;p m&aacute;y c&oacute; thể xử l&yacute; c&aacute;c t&aacute;c vụ cơ bản hằng ng&agrave;y một c&aacute;ch mượt m&agrave;.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd8.jpg\" onclick=\"return false;\"><img alt=\"Điểm Antutu Benchmark của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd8.jpg\" /></a></p>\r\n\r\n<p>Đồng thời, với 5 lớp bảo vệ trong c&ocirc;ng nghệ VOOC, c&ocirc;ng nghệ sạc nhanh của OPPO đảm bảo sự an to&agrave;n cho người d&ugrave;ng.</p>\r\n\r\n<p style=\"text-align:center\"><a href=\"https://www.thegioididong.com/images/42/202703/oppo-f11-pro-128gb-tgdd-8.jpg\" onclick=\"return false;\"><img alt=\"Thời lượng pin của điện thoại OPPO F11 Pro 128GB chính hãng\" src=\"https://cdn.tgdd.vn/Products/Images/42/202703/oppo-f11-pro-128gb-tgdd-8.jpg\" /></a></p>\r\n', 255, '5.5 inch', '160g', 'android 9', '8X', '64MP', '3000', '12 tháng', '1 số thiết bị', 'ổn', '150000'),
(5, 3, '<h2>Đặc điểm nổi bật của OPPO A5 (2020) 128GB</h2>\r\n\r\n<h2><a href=\"https://www.thegioididong.com/dtdd/oppo-a5-2020-128gb\" target=\"_blank\">OPPO A5 (2020) 128GB</a>&nbsp;l&agrave; chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\">smartphone</a>&nbsp;mới ra mắt của thương hiệu OPPO nhận nhiệm vụ đ&aacute;nh chiếm ph&acirc;n kh&uacute;c gi&aacute; rẻ/tầm trung với rất nhiều điểm nhấn đ&aacute;ng gi&aacute;.</h2>\r\n\r\n<h3>M&agrave;n h&igrave;nh lớn, thỏa sức giải tr&iacute;</h3>\r\n\r\n<p>Khi chọn mua một chiếc smartphone th&igrave; điều đầu ti&ecirc;n m&agrave; người d&ugrave;ng ch&uacute;ng ta quan t&acirc;m đ&oacute; ch&iacute;nh l&agrave; phần ngoại h&igrave;nh c&oacute; đẹp mắt, sang trọng hay kh&ocirc;ng.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/212116/oppo-a5-2020-128gb-tgdd-5.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại OPPO A5 (2020) 128GB | Thiết kế\" src=\"https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-tgdd-5.jpg\" /></a></p>\r\n\r\n<p>OPPO A9 (2020) thỏa m&atilde;n được ti&ecirc;u ch&iacute; n&agrave;y với họa tiết ấn tương tự d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd/oppo-reno\" target=\"_blank\">OPPO Reno</a>&nbsp;cao cấp.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/212116/oppo-a5-2020-128gb-tgdd-13.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại OPPO A5 (2020) 128GB | Thiết kế\" src=\"https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-tgdd-13.jpg\" /></a></p>\r\n\r\n<p>D&ugrave; kh&ocirc;ng phải bằng k&iacute;nh nhưng khi nghi&ecirc;ng c&aacute;c g&oacute;c nh&igrave;n kh&aacute;c nhau vẫn tạo ra rất nhiều m&agrave;u sắc lung linh huyền ảo.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/212116/oppo-a5-2020-128gb-tgdd-14.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại OPPO A5 (2020) 128GB | Thiết kế mặt lưng\" src=\"https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-tgdd-14.jpg\" /></a></p>\r\n\r\n<p>N&oacute;i chung khi cầm tr&ecirc;n tay OPPO A5 (2020) cho ch&uacute;ng ta cảm gi&aacute;c đ&acirc;y cũng l&agrave; một phụ kiện thời trang.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/212116/oppo-a5-2020-128gb-tgdd-11.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại OPPO A5 (2020) 128GB | Thiết kế\" src=\"https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-tgdd-11.jpg\" /></a></p>\r\n\r\n<p>Mặt trước l&agrave; m&agrave;n h&igrave;nh với k&iacute;ch thước lớn l&ecirc;n tới 6.5 inch v&agrave; độ ph&acirc;n giải dừng lại ở mức HD+.</p>\r\n\r\n<p><a href=\"https://www.thegioididong.com/images/42/212116/oppo-a5-2020-128gb-tgdd-8.jpg\" onclick=\"return false;\"><img alt=\"Điện thoại OPPO A5 (2020) 128GB | Trải nghiệm cầm nắm\" src=\"https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-tgdd-8.jpg\" /></a></p>\r\n', 255, '6 inch', '150g', 'android 10', '16X', '128MP', '4400', '36 tháng', 'đa năng', 'đa năng', '100000000'),
(8, 6, 'CHơi game mượt', 255, '6 inch', '160g', 'MIUI 10', '8X', '64MP', '3600', '24 tháng', 'Ổn', 'Ổn', '5000000'),
(9, 7, 'Mượt', 255, '5.5 inch', '160g', 'MAX OS', '8X', '128MP', '3600', '12 tháng', 'Tốt', 'Ổn', '560450'),
(10, 8, 'Cưc ngon', 255, '6 inch', '190g', 'IOS', '16X', '128MP', '4000', '10 tháng', 'Tốt', 'Ổn', '3000000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `firm`
--

CREATE TABLE `firm` (
  `Firm_id` int(11) NOT NULL,
  `Firm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `firm`
--

INSERT INTO `firm` (`Firm_id`, `Firm_name`, `Logo`) VALUES
(2, 'APPLE', 'LogodesktopAppleCreditCardWallpaperAR72014v1png'),
(3, 'OPPO', 'oppojpg'),
(4, 'XIAOMI', '480pxXiaomi_logosvgpng'),
(5, 'NOKIA', 'nokialogowallpaperjpg'),
(7, 'HUAWEI', 'HuaweiDInh-ANh-Dungjpgjpg'),
(8, 'LG', 'imagesjpg'),
(9, 'SONY', 'tai-xuongpng'),
(26, 'SAMSUNG', 'r7vlvzodjpg'),
(27, 'LENOVO', 'tai-xuong-1png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `memory`
--

CREATE TABLE `memory` (
  `Memory_id` int(11) NOT NULL,
  `Memory` varchar(11) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `memory`
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
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `Order_detail_id` int(11) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Phone_id` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Sale_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`Order_detail_id`, `Order_id`, `Phone_id`, `Price`, `Sale_quantity`) VALUES
(49, 42, 8, 6000000, 2),
(50, 42, 6, 12000000, 3),
(51, 43, 2, 5000000, 1),
(52, 44, 2, 5000000, 1),
(53, 44, 4, 400000, 1),
(54, 44, 5, 789000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_phone`
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
-- Đang đổ dữ liệu cho bảng `order_phone`
--

INSERT INTO `order_phone` (`Order_id`, `Customer_id`, `Status_id`, `Deliverer_id`, `Create_date`, `Total_price`, `Delivery_addres`, `Note`, `password`) VALUES
(42, 53, 3, 8, '2020-07-13 18:59:41', 48000000, 'PhÃ¹ KhÃª - Tá»« SÆ¡n - Báº¯c Ninh', 'Giao vÃ o 11h trÆ°a', '96e2c26a'),
(43, 54, 3, 8, '2020-07-13 19:25:09', 5000000, 'Tá»« SÆ¡n', 'LÃºc nÃ o cÅ©ng ok', '9e4e0ad5'),
(44, 55, 4, 8, '2020-07-13 19:26:32', 6189000, 'Äa Há»™i', '', '090bf3a4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phones`
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
-- Đang đổ dữ liệu cho bảng `phones`
--

INSERT INTO `phones` (`Phone_id`, `Name`, `Price`, `Color_id`, `Image`, `Memory_id`, `Firm_id`) VALUES
(2, 'OPPO F11 Pro', 5000000, 6, 'ibZbaH_simg_de2fe0_500x500_maxbjpg', 4, 3),
(3, 'OPPO A5 (2020)', 4302500, 3, 'tai-xuongjpg', 4, 3),
(4, 'OPPO Reno 3', 400000, 3, 'Opporeno3proSkyWhitepng', 4, 3),
(5, 'Xiaomi Mi A3', 789000, 6, 'ImgWjpg', 1, 4),
(6, 'Xiaomi Mi Note 10 Pro', 12000000, 1, 'mi10projpg', 5, 4),
(7, 'Apple Iphone 11', 17500000, 8, 'iphone11promaxmauvang_1582641195pngpng', 3, 2),
(8, 'Apple iPhone XR', 6000000, 1, 'iphone_xr_64gbwebp', 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale_phones`
--

CREATE TABLE `sale_phones` (
  `Sale_id` int(11) NOT NULL,
  `Phone_id` int(11) NOT NULL,
  `Quatity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale_phones`
--

INSERT INTO `sale_phones` (`Sale_id`, `Phone_id`, `Quatity`) VALUES
(2, 3, 255),
(3, 2, 255),
(4, 4, 255),
(5, 5, 255),
(6, 6, 255),
(7, 7, 255),
(8, 8, 255);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `Status_id` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`Status_id`, `Status`) VALUES
(1, 'Mới'),
(2, 'Đang giao'),
(3, 'Đã giao'),
(4, 'Đã Hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`User_id`, `Email`, `number_phone`, `Password`, `Name`, `Image_user`, `status`) VALUES
(1, 'hoangtran@mail.com', '1234123123', '25d55ad283aa400af464c76d713c07ad', 'hoang', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcThk8RZJHoZ4khgADH52uhRAlkVf9adQGhtUQ&usqp=CAU', 2),
(2, 'dinhanhdung03011999@gmail.com', '0333968599', '25d55ad283aa400af464c76d713c07ad', 'Đinh Anh Dũng', '', 1),
(3, 'redralogro@gmail.com', '0943465136', '25d55ad283aa400af464c76d713c07ad', 'Vũ Đức Long', '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`Color_id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Comment_id`),
  ADD KEY `fk_phoneid_tbphones_tbcomment` (`Phone_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Chỉ mục cho bảng `deliverer`
--
ALTER TABLE `deliverer`
  ADD PRIMARY KEY (`Deliverer_id`);

--
-- Chỉ mục cho bảng `detail_phones`
--
ALTER TABLE `detail_phones`
  ADD PRIMARY KEY (`Detail_phones_id`),
  ADD KEY `fk_phoneid_tbphone` (`Phone_id`);

--
-- Chỉ mục cho bảng `firm`
--
ALTER TABLE `firm`
  ADD PRIMARY KEY (`Firm_id`);

--
-- Chỉ mục cho bảng `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`Memory_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Order_detail_id`),
  ADD KEY `fk_orderid_tborderphone_tborderdetail` (`Order_id`),
  ADD KEY `fk_phoneid_tbphones_tborderdetail` (`Phone_id`);

--
-- Chỉ mục cho bảng `order_phone`
--
ALTER TABLE `order_phone`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `fk_customerid_tbcustomer_tborderphone` (`Customer_id`),
  ADD KEY `fk_statusid_tbstatus_tborderphone` (`Status_id`),
  ADD KEY `fk_delivererid_tbdeliverer_tborderphone` (`Deliverer_id`);

--
-- Chỉ mục cho bảng `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`Phone_id`),
  ADD KEY `fk_idFirm_tbFirm_tbPhone` (`Firm_id`),
  ADD KEY `fk_idColor_tbColor_tbPhone` (`Color_id`),
  ADD KEY `Memory_id` (`Memory_id`);

--
-- Chỉ mục cho bảng `sale_phones`
--
ALTER TABLE `sale_phones`
  ADD PRIMARY KEY (`Sale_id`),
  ADD KEY `fk_phoneid_tbphones_tbsalephone` (`Phone_id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `Color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `deliverer`
--
ALTER TABLE `deliverer`
  MODIFY `Deliverer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `detail_phones`
--
ALTER TABLE `detail_phones`
  MODIFY `Detail_phones_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `firm`
--
ALTER TABLE `firm`
  MODIFY `Firm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `memory`
--
ALTER TABLE `memory`
  MODIFY `Memory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `order_phone`
--
ALTER TABLE `order_phone`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `phones`
--
ALTER TABLE `phones`
  MODIFY `Phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `sale_phones`
--
ALTER TABLE `sale_phones`
  MODIFY `Sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_phoneid_tbphones_tbcomment` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detail_phones`
--
ALTER TABLE `detail_phones`
  ADD CONSTRAINT `fk_phoneid_tbphone` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_orderid_tborderphone_tborderdetail` FOREIGN KEY (`Order_id`) REFERENCES `order_phone` (`Order_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_phoneid_tbphones_tborderdetail` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_phone`
--
ALTER TABLE `order_phone`
  ADD CONSTRAINT `fk_customerid_tbcustomer_tborderphone` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_delivererid_tbdeliverer_tborderphone` FOREIGN KEY (`Deliverer_id`) REFERENCES `deliverer` (`Deliverer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_statusid_tbstatus_tborderphone` FOREIGN KEY (`Status_id`) REFERENCES `status` (`Status_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `fk_idColor_tbColor_tbPhone` FOREIGN KEY (`Color_id`) REFERENCES `color` (`Color_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idFirm_tbFirm_tbPhone` FOREIGN KEY (`Firm_id`) REFERENCES `firm` (`Firm_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`Memory_id`) REFERENCES `memory` (`Memory_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sale_phones`
--
ALTER TABLE `sale_phones`
  ADD CONSTRAINT `fk_phoneid_tbphones_tbsalephone` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
