-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 11, 2020 at 06:38 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`Phone_id`),
  ADD KEY `fk_idFirm_tbFirm_tbPhone` (`Firm_id`),
  ADD KEY `fk_idColor_tbColor_tbPhone` (`Color_id`),
  ADD KEY `Memory_id` (`Memory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phones`
--
ALTER TABLE `phones`
  MODIFY `Phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `fk_idColor_tbColor_tbPhone` FOREIGN KEY (`Color_id`) REFERENCES `color` (`Color_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idFirm_tbFirm_tbPhone` FOREIGN KEY (`Firm_id`) REFERENCES `firm` (`Firm_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`Memory_id`) REFERENCES `memory` (`Memory_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
