-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 02, 2020 lúc 05:36 PM
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
(10, 'Trần Văn Chiến', '0978166254', 'Chien@gmail.com');

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
(1, 1, 'Mượt', 255, '5.5 inch', '250g', 'Iphone 11', '8X', '64MP', '3300', '12 tháng', 'đa dạng', 'đa dạng', '100000'),
(2, 4, 'Rất ngon', 255, '5 inch', '185g', 'OPPO 3', '8X', '32MP', '2700', '12 tháng', 'Tạm Ổn', 'Ổn', '90000'),
(3, 5, 'Chơi game cực ngon', 255, '5.5 inch', '300g', 'Android 10', '8X', '128MP', '4000', '12 tháng', 'Mọi thiết bị', 'Mọi thiết bị', '10000000'),
(4, 2, 'cực Xịn', 255, '5.5 inch', '160g', 'android 9', '8X', '64MP', '3000', '12 tháng', '1 số thiết bị', 'ổn', '150000'),
(5, 3, 'Chụp ảnh rõ nét, chơi game tẹt ga, pin cực trâu,....', 255, '6 inch', '150g', 'android 10', '16X', '128MP', '4400', '36 tháng', 'đa năng', 'đa năng', '10000000'),
(6, 14, 'Rất là xịn xò', 255, '5.5 inch', '188g', 'Android 10', '8X', '64MP', '3000', '12 Tháng', 'Chịu', 'Chịu luôn', '20000000'),
(7, 11, 'Rất là xịn xò', 255, '5.5 inch', '188g', 'Android 10', '8X', '64MP', '3000', '12 Tháng', 'Chịu', 'Chịu luôn', '20000000'),
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
  `Logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `firm`
--

INSERT INTO `firm` (`Firm_id`, `Firm_name`, `Logo`) VALUES
(1, 'SAMSUNG ', ''),
(2, 'APPLE', ''),
(3, 'OPPO\r\n', ''),
(4, 'XIAOMI', ''),
(5, 'NOKIA', ''),
(6, 'IPHONE', ''),
(7, 'HUAWEI', ''),
(8, 'LG', ''),
(9, 'SONY', ''),
(10, 'LENOVO', '');

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
  `Sale_quatity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`Order_detail_id`, `Order_id`, `Phone_id`, `Price`, `Sale_quatity`) VALUES
(1, 1, 14, 23000000, 10),
(2, 3, 11, 4500000, 2),
(3, 2, 14, 23000000, 10),
(4, 4, 11, 4500000, 2),
(5, 4, 2, 300000, 100000),
(6, 10, 4, 300000, 3),
(7, 6, 8, 350000, 5),
(8, 7, 8, 350000, 5),
(9, 10, 5, 305000, 2),
(10, 3, 7, 345020, 6);

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
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_phone`
--

INSERT INTO `order_phone` (`Order_id`, `Customer_id`, `Status_id`, `Deliverer_id`, `Create_date`, `Total_price`, `Delivery_addres`, `Note`, `Password`) VALUES
(1, 5, 1, 1, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', 'Giao vào 7h tối', 'dung'),
(2, 6, 1, 2, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', 'Giao vào 7h tối', 'dung'),
(3, 3, 1, 2, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', 'Giao vào 7h tối', 'dung'),
(4, 1, 1, 2, '2020-07-17 07:14:07', 396000000, 'Bắc Ninh', 'Giao vào 7h tối', 'dung'),
(5, 2, 2, 2, '2020-07-01 12:22:14', 200000, 'Bắc ninh', 'Chưa xác định', '1'),
(6, 3, 3, 2, '2020-07-01 05:10:00', 300000, 'Hà nội', 'Giao lúc 12h', '1'),
(7, 6, 2, 2, '2020-07-02 11:00:00', 250000, 'Hà nội', 'Chưa xác định', '1'),
(8, 2, 2, 2, '2020-07-02 07:00:00', 350000, 'Từ Sơn', 'Chưa xác định', '1'),
(9, 1, 3, 2, '2020-07-02 10:00:00', 600000, 'Bắc Ninh', 'Giao lúc 16H', '1'),
(10, 5, 1, 2, '2020-07-01 16:00:00', 100000, 'Từ  Sơn', 'Giao lúc 20h', '1');

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
(1, 'iPhone 11 Pro Max', 500000, 4, 'https://www.xtmobile.vn/vnt_upload/product/09_2019/thumbs/600_iphone_11_pro_max_den_xtmobile.jpg', 6, 6),
(2, 'OPPO F11 Pro', 5000000, 6, 'https://didongviet.vn/pub/media/catalog/product//o/p/oppo-f11-pro-128gb-diddongviet.jpg', 4, 3),
(3, 'OPPO A5 (2020)', 4302500, 3, 'https://cdn.tgdd.vn/Products/Images/42/212116/oppo-a5-2020-128gb-trang-400x460-400x460.png', 4, 3),
(4, 'OPPO Reno 3', 400000, 3, 'https://cdn.tgdd.vn/Products/Images/42/213591/oppo-reno3-trang-600x600-600x600.jpg', 4, 3),
(5, 'Xiaomi Mi A3', 789000, 6, 'https://p.ipricegroup.com/uploaded_350294a9880e10b6144bab5297aea5d7.jpg', 1, 4),
(6, 'Xiaomi Mi Note 10 Pro', 12000000, 1, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/m/i/mi-cc9-pro-blue_1.jpg', 5, 4),
(7, 'Apple Iphone 11', 17500000, 8, 'https://bizweb.dktcdn.net/100/318/659/products/iphone11-black.png?v=1568189731830', 3, 2),
(8, 'Apple iPhone XR', 6000000, 1, 'https://d1erhn8sljv386.cloudfront.net/flAzAZezfXwoXegdXaoZ1CFeC_Y=/fit-in/800x0/https://s3.amazonaws.com/lmbucket0/media/product/sprint-apple-iphone-xr-2.jpg', 4, 2),
(11, 'iPhone 8 Plus', 300000, 3, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/8/-/8-plus-3_1.jpg', 3, 6),
(14, 'IPHONE 11 PRO MAX', 21000000, 4, 'https://cdn.fptshop.com.vn/Uploads/Originals/2019/9/11/637037687763926758_11-pro-max-xanh.png', 5, 6);

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
(3, 'Đã giao');

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
(1, 'hoangtran@mail.com', '1234123123', '1', 'hoang', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcThk8RZJHoZ4khgADH52uhRAlkVf9adQGhtUQ&usqp=CAU', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

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
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `deliverer`
--
ALTER TABLE `deliverer`
  MODIFY `Deliverer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `detail_phones`
--
ALTER TABLE `detail_phones`
  MODIFY `Detail_phones_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `firm`
--
ALTER TABLE `firm`
  MODIFY `Firm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `memory`
--
ALTER TABLE `memory`
  MODIFY `Memory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order_phone`
--
ALTER TABLE `order_phone`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phones`
--
ALTER TABLE `phones`
  MODIFY `Phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sale_phones`
--
ALTER TABLE `sale_phones`
  MODIFY `Sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `Status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_phoneid_tbphones_tbcomment` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_phoneid_tbphones_tbsalephone` FOREIGN KEY (`Phone_id`) REFERENCES `phones` (`Phone_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
