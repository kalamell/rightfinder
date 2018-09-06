-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 11:04 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rightfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
  `campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cus_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`campaign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaign_id`, `campaign_name`, `cus_id`) VALUES
(1, 'ทดสอบแจกรางวัล', 1),
(2, 'จับฉลากหาผู้โชคร้าย', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_member`
--

CREATE TABLE IF NOT EXISTS `campaign_member` (
  `s_campaign_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`s_campaign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=59 ;

--
-- Dumping data for table `campaign_member`
--

INSERT INTO `campaign_member` (`s_campaign_id`, `campaign_id`, `member_id`, `product_id`, `created_date`) VALUES
(1, 1, 1, NULL, '0000-00-00 00:00:00'),
(2, 1, 2, NULL, '0000-00-00 00:00:00'),
(3, 1, 3, 1, '2016-10-31 17:16:08'),
(4, 1, 4, NULL, '0000-00-00 00:00:00'),
(5, 1, 5, NULL, '0000-00-00 00:00:00'),
(6, 1, 6, NULL, '0000-00-00 00:00:00'),
(7, 1, 7, NULL, '0000-00-00 00:00:00'),
(8, 1, 8, NULL, '0000-00-00 00:00:00'),
(9, 1, 9, NULL, '0000-00-00 00:00:00'),
(10, 1, 10, NULL, '0000-00-00 00:00:00'),
(11, 1, 11, NULL, '0000-00-00 00:00:00'),
(12, 1, 12, NULL, '0000-00-00 00:00:00'),
(13, 1, 13, NULL, '0000-00-00 00:00:00'),
(14, 1, 14, NULL, '0000-00-00 00:00:00'),
(15, 1, 15, NULL, '0000-00-00 00:00:00'),
(16, 1, 16, NULL, '0000-00-00 00:00:00'),
(17, 1, 17, NULL, '0000-00-00 00:00:00'),
(18, 1, 18, NULL, '0000-00-00 00:00:00'),
(19, 1, 19, NULL, '0000-00-00 00:00:00'),
(20, 1, 20, NULL, '0000-00-00 00:00:00'),
(21, 1, 21, NULL, '0000-00-00 00:00:00'),
(22, 1, 22, NULL, '0000-00-00 00:00:00'),
(23, 1, 23, NULL, '0000-00-00 00:00:00'),
(24, 1, 24, NULL, '0000-00-00 00:00:00'),
(25, 1, 25, NULL, '0000-00-00 00:00:00'),
(26, 1, 26, NULL, '0000-00-00 00:00:00'),
(27, 1, 27, NULL, '0000-00-00 00:00:00'),
(28, 1, 28, NULL, '0000-00-00 00:00:00'),
(29, 1, 29, NULL, '0000-00-00 00:00:00'),
(30, 1, 1, NULL, '0000-00-00 00:00:00'),
(31, 1, 2, NULL, '0000-00-00 00:00:00'),
(32, 1, 3, 1, '2016-10-31 17:16:08'),
(33, 1, 4, NULL, '0000-00-00 00:00:00'),
(34, 1, 5, NULL, '0000-00-00 00:00:00'),
(35, 1, 6, NULL, '0000-00-00 00:00:00'),
(36, 1, 7, NULL, '0000-00-00 00:00:00'),
(37, 1, 8, NULL, '0000-00-00 00:00:00'),
(38, 1, 9, NULL, '0000-00-00 00:00:00'),
(39, 1, 10, NULL, '0000-00-00 00:00:00'),
(40, 1, 11, NULL, '0000-00-00 00:00:00'),
(41, 1, 12, NULL, '0000-00-00 00:00:00'),
(42, 1, 13, NULL, '0000-00-00 00:00:00'),
(43, 1, 14, NULL, '0000-00-00 00:00:00'),
(44, 1, 15, NULL, '0000-00-00 00:00:00'),
(45, 1, 16, NULL, '0000-00-00 00:00:00'),
(46, 1, 17, NULL, '0000-00-00 00:00:00'),
(47, 1, 18, NULL, '0000-00-00 00:00:00'),
(48, 1, 19, NULL, '0000-00-00 00:00:00'),
(49, 1, 20, NULL, '0000-00-00 00:00:00'),
(50, 1, 21, NULL, '0000-00-00 00:00:00'),
(51, 1, 22, NULL, '0000-00-00 00:00:00'),
(52, 1, 23, NULL, '0000-00-00 00:00:00'),
(53, 1, 24, NULL, '0000-00-00 00:00:00'),
(54, 1, 25, NULL, '0000-00-00 00:00:00'),
(55, 1, 26, NULL, '0000-00-00 00:00:00'),
(56, 1, 27, NULL, '0000-00-00 00:00:00'),
(57, 1, 28, NULL, '0000-00-00 00:00:00'),
(58, 1, 29, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `customer_name`, `customer_logo`) VALUES
(1, 'เมนทรอส', 'logo-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `member_mobile` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_address` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_mobile`, `member_email`, `member_address`) VALUES
(1, 'ชลิดา สำแดงฤทธิ์', NULL, NULL, NULL),
(2, 'สุภัทรา จรัสแสงวรกุล', NULL, NULL, NULL),
(3, 'ศรกนก ศิริขันธ์', NULL, NULL, NULL),
(4, 'วรกมล ทศทิศรังสรรค์', NULL, NULL, NULL),
(5, 'เอกลักษณ์ อ่อนช่อน ', NULL, NULL, NULL),
(6, 'รุ่งทิพย์ ศิริพิพัฒน์ไพสิฐ', NULL, NULL, NULL),
(7, 'สุลาวัลย์ เอี่ยมอุดม', NULL, NULL, NULL),
(8, 'ศิวพร อาจาริยะ', NULL, NULL, NULL),
(9, 'ปารณัท พัฒชู', NULL, NULL, NULL),
(10, 'ไอศวรรย์  บุพศิริ ', NULL, NULL, NULL),
(11, 'จุติพัชร วิภาศินนท์', NULL, NULL, NULL),
(12, 'ปาริตา ศรีมันตะ', NULL, NULL, NULL),
(13, 'ลาวัลย์ สุวรรณประทีป ', NULL, NULL, NULL),
(14, 'หทัย พรินทร์', NULL, NULL, NULL),
(15, 'พาราวดี สุพาชยณัฐ', NULL, NULL, NULL),
(16, 'ชุลีพร ชูผล', NULL, NULL, NULL),
(17, 'วันฉัตร ดำด้วง ', NULL, NULL, NULL),
(18, 'ณภัทร รัตนะโสม ', NULL, NULL, NULL),
(19, 'ธิติยา ศาลไพล ', NULL, NULL, NULL),
(20, 'นิฤมล วราหะจีระกุล', NULL, NULL, NULL),
(21, 'พัทยา สุภะชุณหะ', NULL, NULL, NULL),
(22, 'ประภาส กุดทิง', NULL, NULL, NULL),
(23, 'พงษ์ศักดิ์ คุณอมรเลิศ', NULL, NULL, NULL),
(24, 'เอกวิทย์ เอื้อกชกร', NULL, NULL, NULL),
(25, 'ปาณิสรา ภูธรโยธิน', NULL, NULL, NULL),
(26, 'สุภาวรรณ ถาวร', NULL, NULL, NULL),
(27, 'ศรัญญา สัญญโชติ', NULL, NULL, NULL),
(28, 'เบญจวรรณ แซ่เลี่ยม', NULL, NULL, NULL),
(29, 'พรพรรณ จตุพรหมวงศ์', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ondate` datetime NOT NULL,
  `used` int(1) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `campaign_id`, `member_id`, `product_name`, `ondate`, `used`) VALUES
(1, 1, 0, 'IPHONE10S', '0000-00-00 00:00:00', 0),
(2, 1, 0, 'Apple Watch', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
