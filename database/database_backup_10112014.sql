
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2014 at 02:12 AM
-- Server version: 5.1.71
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u910356205_hoyvl`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `ADMINID` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`ADMINID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`ADMINID`, `email`, `username`, `password`) VALUES
(1, 'hoyvl@domain.com', 'ngovanninh', 'de9c2bc7095aff9ddc3f2a2c58f7e885');

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `AID` bigint(30) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL DEFAULT '',
  `code` text NOT NULL,
  `active` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`AID`, `description`, `code`, `active`) VALUES
(1, '300 x 250 pixels', '<div style="width:300px; height:250px; border:1px solid #DFDFDF;" align="center"><br/><br/><br/><br/><br/><br/>Insert Your Advertisement Here</div>', '0'),
(2, '300 x 300 pixels', '<div style="width:300px; height:300px; border:1px solid #DFDFDF;" align="center"><br/><br/><br/><br/><br/><br/><br/>Insert Your Advertisement Here</div>', '0'),
(3, '728 x 90 pixels', '<div style="width:728px; height:90px; border:1px solid #DFDFDF;" align="center"><br/><br/>Insert Your Advertisement Here</div>', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bans_ips`
--

CREATE TABLE IF NOT EXISTS `bans_ips` (
  `ip` varchar(20) NOT NULL,
  UNIQUE KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `setting` varchar(60) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`setting`, `value`) VALUES
('site_email', 'hoyvl@domain.com'),
('site_name', 'Hoy vl | Ảnh hài'),
('max_syndicate_results', '25'),
('maximum_results', '1000000'),
('emailsender', 'Admin'),
('max_img_size', '200'),
('items_per_page', '10'),
('approve_stories', '0'),
('metadescription', 'Ảnh video hài hước'),
('metakeywords', 'hoyvl, Hoy vl, Ảnh hài, video hài, hot'),
('pub_mod', '1'),
('ver', '2.5'),
('FACEBOOK_PROFILE', 'https://www.facebook.com/pages/Hoyvl/829623453725688'),
('myes', '3'),
('mno', '3'),
('twitter', 'hoyvl'),
('FACEBOOK_APP_ID', '587634624675882'),
('FACEBOOK_SECRET', 'dd1da516a1c27ad76aa8a9b6fd573f4c'),
('enable_fc', '1'),
('mtrend', '5'),
('quota', '20'),
('contact_email', 'contact@yourdomain.com'),
('short_urls', '1'),
('FACEBOOK_ADMIN', '100001627959911'),
('wm', '1'),
('watermark', 'watermark.png'),
('points_gag', '10'),
('points_view', '1'),
('enable_featured', '0'),
('infinity_paging', '1'),
('wm', '1'),
('watermark', 'watermark.png'),
('FACEBOOK_ADMIN', '100001627959911'),
('mobilemode', '1'),
('mobile_per_page', '5'),
('m_ver', '2.0'),
('m_url', 'http://m.hoyvl.net');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `USERID` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL DEFAULT '',
  `gender` varchar(6) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `country` varchar(100) NOT NULL DEFAULT '',
  `yourviewed` int(20) NOT NULL DEFAULT '0',
  `profileviews` int(20) NOT NULL DEFAULT '0',
  `youviewed` bigint(20) NOT NULL DEFAULT '0',
  `addtime` varchar(20) NOT NULL DEFAULT '',
  `lastlogin` varchar(20) NOT NULL DEFAULT '',
  `verified` char(1) NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `profilepicture` varchar(100) NOT NULL DEFAULT '',
  `remember_me_key` varchar(32) DEFAULT NULL,
  `remember_me_time` datetime DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `lip` varchar(20) NOT NULL,
  `website` varchar(200) NOT NULL,
  `news` int(1) NOT NULL DEFAULT '0',
  `mylang` varchar(20) NOT NULL,
  `color1` varchar(6) NOT NULL DEFAULT '333333',
  `color2` varchar(6) NOT NULL DEFAULT 'FFFFFF',
  `filter` bigint(1) NOT NULL DEFAULT '1',
  `points` bigint(50) NOT NULL,
  PRIMARY KEY (`USERID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`USERID`, `email`, `username`, `password`, `pwd`, `fullname`, `gender`, `description`, `country`, `yourviewed`, `profileviews`, `youviewed`, `addtime`, `lastlogin`, `verified`, `status`, `profilepicture`, `remember_me_key`, `remember_me_time`, `ip`, `lip`, `website`, `news`, `mylang`, `color1`, `color2`, `filter`, `points`) VALUES
(4, 'ngovanninh2007@gmail.com', 'faker', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', 'faker', '', '', '', 95, 0, 37, '1413539930', '1413657137', '1', '1', '', NULL, NULL, '113.161.81.194', '1.53.155.246', '', 0, '', '333333', 'FFFFFF', 1, 277),
(5, 'phambichhong.vn@gmail.com', 'xuka', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', '', '', '', '', 90, 0, 29, '1413551767', '1413644396', '1', '1', '', NULL, NULL, '113.161.81.194', '1.53.155.246', '', 0, '', '333333', 'FFFFFF', 1, 239),
(6, 'ninhnv.cfc@gmail.com', 'daika', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', '', '', '', '', 41, 0, 15, '1413558223', '1413658417', '1', '1', '6.jpg', NULL, NULL, '1.53.155.246', '1.53.155.246', '', 0, '', '333333', 'FFFFFF', 1, 115),
(9, 'ninhnv@mana.vn', 'deptraicogisai', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', '', '', '', '', 41, 0, 11, '1413618487', '', '1', '1', '9.jpg', NULL, NULL, '113.161.81.194', '113.161.81.194', '', 0, '', '333333', 'FFFFFF', 1, 101),
(12, 'denavn3@gmail.com', 'hung9x', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', '', '', '', '', 89, 0, 21, '1413629240', '', '1', '1', '12.jpg', NULL, NULL, '113.161.81.194', '113.161.81.194', '', 0, '', '333333', 'FFFFFF', 1, 221),
(11, 'denavn2@gmail.com', 'dena', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', '', '', '', '', 183, 0, 19, '1413622776', '', '1', '1', '11.jpg', NULL, NULL, '113.161.81.194', '113.161.81.194', '', 0, '', '333333', 'FFFFFF', 1, 169),
(13, 'denavn4@gmail.com', 'thuylinh', 'b8c8c3c2a2c476439266d3c701c64b76', '01687241893', '', '', '', '', 95, 0, 16, '1413640212', '', '1', '1', '13.jpg', NULL, NULL, '113.161.81.194', '113.161.81.194', '', 0, '', '333333', 'FFFFFF', 1, 176);

-- --------------------------------------------------------

--
-- Table structure for table `members_passcode`
--

CREATE TABLE IF NOT EXISTS `members_passcode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members_verifycode`
--

CREATE TABLE IF NOT EXISTS `members_verifycode` (
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`USERID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members_verifycode`
--

INSERT INTO `members_verifycode` (`USERID`, `code`) VALUES
(0, 'h394Y1328501678');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(20) NOT NULL DEFAULT '0',
  `story` text NOT NULL,
  `tags` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `nsfw` int(1) NOT NULL DEFAULT '0',
  `pic` varchar(20) NOT NULL,
  `youtube_key` varchar(20) NOT NULL,
  `fod_key` varchar(20) NOT NULL,
  `url` text NOT NULL,
  `time_added` varchar(20) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT '0000-00-00',
  `active` char(1) NOT NULL DEFAULT '',
  `phase` bigint(1) NOT NULL DEFAULT '0',
  `favclicks` bigint(50) NOT NULL DEFAULT '0',
  `last_viewed` varchar(20) NOT NULL DEFAULT '',
  `mod_yes` bigint(20) NOT NULL DEFAULT '0',
  `mod_no` bigint(20) NOT NULL DEFAULT '0',
  `pip` varchar(20) NOT NULL,
  `pip2` varchar(20) NOT NULL,
  `unfavclicks` bigint(50) NOT NULL DEFAULT '0',
  `fix` bigint(20) NOT NULL DEFAULT '0',
  `short` varchar(20) NOT NULL,
  `ttime` varchar(20) NOT NULL,
  `htime` varchar(20) NOT NULL,
  `feat` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PID`, `USERID`, `story`, `tags`, `source`, `nsfw`, `pic`, `youtube_key`, `fod_key`, `url`, `time_added`, `date_added`, `active`, `phase`, `favclicks`, `last_viewed`, `mod_yes`, `mod_no`, `pip`, `pip2`, `unfavclicks`, `fix`, `short`, `ttime`, `htime`, `feat`) VALUES
(7, 4, 'Giang hồ sử lý quán nhậu', '', '', 0, '', 'M_5i31F1Zsk', '', 'http://www.youtube.com/watch?v=M_5i31F1Zsk', '1413542551', '2014-10-17', '1', 2, 1, '1413549041', 0, 0, '113.161.81.194', '', 0, 0, '6421700', '', '', 0),
(8, 4, 'Đi ăn với gấu gặp cảnh này :). có ai nhìn nhầm giống e ko @@', '', '', 0, '8.jpg', '', '', '', '1413543355', '2014-10-17', '1', 2, 0, '1413651743', 0, 0, '113.161.81.194', '', 0, 0, '6421775', '', '', 0),
(9, 4, 'Mấy con lợn tr&ocirc;ng y&ecirc;u gh&ecirc; :x', '', '', 0, '9.jpg', '', '', '', '1413544490', '2014-10-17', '1', 0, 1, '1413618137', 0, 0, '113.161.81.194', '', 0, 0, '6421862', '', '', 0),
(10, 5, 'Dọa thế n&agrave;y chắc gặp người yếu tim l&agrave; chết ngay tại chỗ :3', '', '', 0, '', 'oFMsqrG9RWg', '', 'http://www.youtube.com/watch?v=oFMsqrG9RWg', '1413552129', '2014-10-17', '1', 0, 1, '1413605343', 0, 0, '113.161.81.194', '', 0, 0, '6422399', '', '', 0),
(11, 5, 'Tình yêu...Giúp ta vượt lên những suy nghĩ tầm thường...Và..', '', '', 0, '11.jpg', '', '', '', '1413552557', '2014-10-17', '1', 2, 1, '1413641657', 0, 0, '113.161.81.194', '', 0, 0, '6422418', '', '', 0),
(12, 5, 'Đắng... ', '', '', 0, '12.jpg', '', '', '', '1413552699', '2014-10-17', '1', 0, 1, '1413652119', 0, 0, '113.161.81.194', '', 0, 0, '6422429', '', '', 0),
(13, 5, 'Chỉ c&oacute; FA mới hiểu ', '', '', 0, '13.png', '', '', '', '1413552753', '2014-10-17', '1', 0, 1, '1413649208', 0, 0, '113.161.81.194', '', 0, 0, '6422430', '', '', 0),
(14, 5, 'Vô tình qua tường con bạn thấy cái này', '', '', 0, '14.jpg', '', '', '', '1413552849', '2014-10-17', '1', 2, 1, '1413644921', 0, 0, '113.161.81.194', '', 0, 0, '6422435', '', '', 0),
(15, 5, 'Đáng yêu đừng hỏi... Thánh ăn :))', '', '', 0, '', 'rxs2JGZLhAY', '', 'http://www.youtube.com/watch?v=rxs2JGZLhAY', '1413552996', '2014-10-17', '1', 2, 0, '1413648391', 0, 0, '113.161.81.194', '', 0, 0, '6422441', '', '', 0),
(16, 5, 'My Beautiful Woman [Vietsub] - Phim ngắn gây sốt ở Thái Lan', '', '', 0, '', 'COwTVM44w88', '', 'http://www.youtube.com/watch?v=COwTVM44w88', '1413553137', '2014-10-17', '1', 2, 0, '1413553141', 0, 0, '113.161.81.194', '', 0, 0, '6422450', '', '', 0),
(17, 5, 'Khi con gái đánh nhau', '', '', 0, '', 'TKw97ppR2Pw', '', 'http://www.youtube.com/watch?v=TKw97ppR2Pw', '1413553485', '2014-10-17', '1', 2, 0, '1413615357', 0, 0, '113.161.81.194', '', 0, 0, '6422464', '', '', 0),
(18, 5, 'Fan R&Ocirc; điệu điểm danh....', '', '', 0, '18.jpg', '', '', '', '1413553591', '2014-10-17', '1', 0, 0, '1413652046', 0, 0, '113.161.81.194', '', 0, 0, '6422469', '', '', 0),
(19, 5, 'H&oacute;t boy tự phong đẹp nhất VN', '', '', 0, '19.jpg', '', '', '', '1413553803', '2014-10-17', '1', 0, 0, '1413652222', 0, 0, '113.161.81.194', '', 0, 0, '6422481', '', '', 0),
(20, 5, 'Cờ h&oacute; vs Cờ m&egrave;o', '', '', 0, '20.jpg', '', '', '', '1413553832', '2014-10-17', '1', 0, 0, '1413649214', 0, 0, '113.161.81.194', '', 0, 0, '6422483', '', '', 0),
(22, 6, 'Kenny Troll v&agrave; những c&aacute;ch l&agrave;m phụ nữ &quot;sướng&quot;', '', '', 0, '', 'HaSZf23H7j0', '', 'http://www.youtube.com/watch?v=HaSZf23H7j0#t=92', '1413608798', '2014-10-18', '1', 0, 0, '1413608836', 0, 0, '113.161.81.194', '', 0, 0, '6423945', '', '', 0),
(23, 4, 'Phở 13: Mạng X&atilde; Hội - The Social Network', '', '', 0, '', '0Ui1ZW5AsoA', '', 'http://www.youtube.com/watch?v=0Ui1ZW5AsoA', '1413609826', '2014-10-18', '1', 0, 0, '1413638939', 0, 0, '113.161.81.194', '', 0, 0, '6423958', '', '', 0),
(24, 4, 'Hoy di nha :((', '', '', 0, '24.jpg', '', '', '', '1413610017', '2014-10-18', '1', 2, 0, '1413653610', 0, 0, '113.161.81.194', '', 0, 0, '6423961', '', '', 0),
(25, 4, '&Ocirc;i cuộc đời !!! ', '', '', 0, '25.jpg', '', '', '', '1413610101', '2014-10-18', '1', 0, 0, '1413610106', 0, 0, '113.161.81.194', '', 0, 0, '6423962', '', '', 0),
(26, 4, 'H&agrave;i hước với Minions .Tập th&uacute; cưng ngo&agrave;i h&agrave;nh tinh', '', '', 0, '', '-40EI6CUAWk', '', 'http://www.youtube.com/watch?v=-40EI6CUAWk', '1413610255', '2014-10-18', '1', 0, 0, '1413610263', 0, 0, '113.161.81.194', '', 0, 0, '6423975', '', '', 0),
(27, 4, 'Tr&ograve; m&egrave;o ảo thuật ', '', '', 0, '', 'ZHlDpRAFqk4', '', 'http://www.youtube.com/watch?v=ZHlDpRAFqk4', '1413610311', '2014-10-18', '1', 0, 0, '1413653845', 0, 0, '113.161.81.194', '', 0, 0, '6423977', '', '', 0),
(28, 5, 'Ngắm nh&igrave;n b&eacute; Cadie Cutie con của Elly Trần', '', '', 0, '', 'rGA1Flc1rtw', '', 'http://www.youtube.com/watch?v=rGA1Flc1rtw', '1413610450', '2014-10-18', '1', 0, 0, '1413610454', 0, 0, '113.161.81.194', '', 0, 0, '6423978', '', '', 0),
(29, 5, 'Rất hay kh&ocirc;ng xem đừng hối hận ', '', '', 0, '', 'dFmrddUD7Og', '', 'https://www.youtube.com/watch?v=dFmrddUD7Og', '1413613338', '2014-10-18', '1', 0, 0, '1413613342', 0, 0, '113.161.81.194', '', 0, 0, '6424013', '', '', 0),
(30, 5, 'Có một sự trùng hợp... không hề nhẹ :)', '', '', 0, '30.jpg', '', '', '', '1413613428', '2014-10-18', '1', 2, 0, '1413649145', 0, 0, '113.161.81.194', '', 0, 0, '6424014', '', '', 0),
(31, 5, 'Đừng nhờn với chụy...', '', '', 0, '31.jpg', '', '', '', '1413614543', '2014-10-18', '1', 2, 0, '1413614547', 0, 0, '113.161.81.194', '', 0, 0, '6424079', '', '', 0),
(32, 5, 'Cựu thanh ni&ecirc;n nghi&ecirc;m t&uacute;c', '', '', 0, '32.jpg', '', '', '', '1413614724', '2014-10-18', '1', 0, 0, '1413614788', 0, 0, '113.161.81.194', '', 0, 0, '6424080', '', '', 0),
(33, 4, 'Phở 13: Mạng Xã Hội - The Social Network', '', '', 0, '', '0Ui1ZW5AsoA', '', 'http://www.youtube.com/watch?v=0Ui1ZW5AsoA', '1413617328', '2014-10-18', '1', 2, 0, '1413670872', 0, 0, '113.161.81.194', '', 0, 0, '6424127', '', '', 0),
(34, 9, 'Gái một con (.)(.)', '', '', 0, '34.jpg', '', '', '', '1413618704', '2014-10-18', '1', 2, 0, '1413640560', 0, 0, '113.161.81.194', '', 0, 0, '6424133', '', '', 0),
(35, 9, 'Chọn xanh hay đỏ', '', '', 0, '35.jpg', '', '', '', '1413618744', '2014-10-18', '1', 2, 0, '1413618749', 0, 0, '113.161.81.194', '', 0, 0, '6424134', '', '', 0),
(36, 9, 'Hơn 2 triệu sinh linh...........đ&atilde; ra đi v&igrave; clip n&agrave;y c&aacute;c b&aacute;c', '', '', 0, '', 'lnhl8wxL52w', '', 'http://www.youtube.com/watch?v=lnhl8wxL52w', '1413621261', '2014-10-18', '1', 0, 0, '1413621268', 0, 0, '113.161.81.194', '', 0, 0, '6424156', '', '', 0),
(38, 9, 'Diễm My 9X xưa và nay @@', '', '', 0, '38.png', '', '', '', '1413621665', '2014-10-18', '1', 2, 0, '1413640448', 0, 0, '113.161.81.194', '', 0, 0, '6424181', '', '', 0),
(39, 9, '[Linh Miu v&agrave; Hữu C&ocirc;ng] Chuyện c&aacute;i Rễ 18+', '', '', 0, '', 'xfST3ZXqHUw', '', 'http://www.youtube.com/watch?v=xfST3ZXqHUw', '1413621805', '2014-10-18', '1', 0, 0, '1413621810', 0, 0, '113.161.81.194', '', 0, 0, '6424185', '', '', 0),
(40, 9, 'Sự Kh&aacute;c Biệt giữa Học Sinh &amp; Sinh Vi&ecirc;n', '', '', 0, '', 'pp5vBQITjZM', '', 'http://www.youtube.com/watch?v=pp5vBQITjZM', '1413621921', '2014-10-18', '1', 0, 0, '1413621925', 0, 0, '113.161.81.194', '', 0, 0, '6424217', '', '', 0),
(41, 9, '[Clip 18+] Phẫn nộ nữ sinh đ&aacute;nh nhau lột quần &aacute;o sạch sẽ lu&ocirc;', '', '', 0, '', 'y6WiiecCC-g', '', 'http://www.youtube.com/watch?v=y6WiiecCC-g', '1413622012', '2014-10-18', '1', 0, 0, '1413622016', 0, 0, '113.161.81.194', '', 0, 0, '6424221', '', '', 0),
(42, 9, 'DJ xứ Nghệ chỉ dán Núm mà quẩy tưng bừng', '', '', 0, '', 'Iokk1m3Erjw', '', 'http://www.youtube.com/watch?v=Iokk1m3Erjw', '1413622063', '2014-10-18', '1', 2, 0, '1413637007', 0, 0, '113.161.81.194', '', 0, 0, '6424225', '', '', 0),
(43, 6, 'C&Ocirc; G&Aacute;I 18 TUỔI C&Oacute; CHIẾC CỔ D&Agrave;I NHẤT THẾ GIỚI', '', '', 0, '43.png', '', '', '', '1413622303', '2014-10-18', '1', 0, 0, '1413652148', 0, 0, '113.161.81.194', '', 0, 0, '6424238', '', '', 0),
(44, 6, 'Con trai gặp gái đẹp hay chảy nước bọt lắm ', '', '', 0, '44.jpg', '', '', '', '1413622634', '2014-10-18', '1', 2, 0, '1413651976', 0, 0, '113.161.81.194', '', 0, 0, '6424255', '', '', 0),
(45, 11, 'M&oacute;c cua gấu :))', '', '', 0, '', 'b_v4e0jliIY', '', 'http://www.youtube.com/watch?v=b_v4e0jliIY', '1413622959', '2014-10-18', '1', 0, 0, '1413622963', 0, 0, '113.161.81.194', '', 0, 0, '6424260', '', '', 0),
(46, 11, 'Th&aacute;nh cắt t&oacute;c của năm ', '', '', 0, '', 'qGQxT0kttbE', '', 'http://www.youtube.com/watch?v=qGQxT0kttbE', '1413623029', '2014-10-18', '1', 0, 0, '1413623033', 0, 0, '113.161.81.194', '', 0, 0, '6424262', '', '', 0),
(47, 11, 'C&aacute;i g&igrave; qu&yacute; nhất?', '', '', 0, '47.png', '', '', '', '1413623124', '2014-10-18', '1', 0, 0, '1413635838', 0, 0, '113.161.81.194', '', 0, 0, '6424264', '', '', 0),
(48, 11, 'Sao việt xưa và nay', '', '', 0, '48.png', '', '', '', '1413623496', '2014-10-18', '1', 2, 0, '1413652185', 0, 0, '113.161.81.194', '', 0, 0, '6424272', '', '', 0),
(49, 11, 'Tổng hợp những cảnh quay bị cấm chiếu tr&ecirc;n TV ', '', '', 0, '', '_lBlw-YHxfM', '', 'http://www.youtube.com/watch?v=_lBlw-YHxfM#t=16', '1413623732', '2014-10-18', '1', 0, 0, '1413623736', 0, 0, '113.161.81.194', '', 0, 0, '6424277', '', '', 0),
(50, 11, 'Em mới đi ăn về các bác ạ :((', '', '', 0, '50.jpg', '', '', '', '1413623797', '2014-10-18', '1', 2, 0, '1413623801', 0, 0, '113.161.81.194', '', 0, 0, '6424282', '', '', 0),
(51, 11, 'Linh Miu - Khác biệt con trai, con gái ngày 20.10', '', '', 0, '', 'o3dKN-B5xXY', '', 'http://www.youtube.com/watch?v=o3dKN-B5xXY', '1413623845', '2014-10-18', '1', 2, 0, '1413670607', 0, 0, '113.161.81.194', '', 0, 0, '6424285', '', '', 0),
(52, 11, 'em 20 tuổi rồi không bằng thằng trẻ con :((', '', '', 0, '52.jpg', '', '', '', '1413624022', '2014-10-18', '1', 2, 0, '1413651964', 0, 0, '113.161.81.194', '', 0, 0, '6424289', '', '', 0),
(53, 11, '&Aacute;o n&agrave;y mua ở đ&acirc;u thế c&aacute;c b&aacute;c', '', '', 0, '53.jpg', '', '', '', '1413624056', '2014-10-18', '1', 0, 0, '1413652240', 0, 0, '113.161.81.194', '', 0, 0, '6424290', '', '', 0),
(54, 11, 'Cướp xe trắng trợn giữa đường phố Sao Paolo', '', '', 0, '', 'xRtYAkUNnYs', '', 'https://www.youtube.com/watch?v=xRtYAkUNnYs', '1413624209', '2014-10-18', '1', 0, 0, '1413624213', 0, 0, '113.161.81.194', '', 0, 0, '6424294', '', '', 0),
(55, 11, 'Fan coc học hỏi n&agrave;y - rồng hall 9', '', '', 0, '', 'ZwWFxFUkBRI', '', 'https://www.youtube.com/watch?v=ZwWFxFUkBRI', '1413624567', '2014-10-18', '1', 0, 0, '1413682700', 0, 0, '113.161.81.194', '', 0, 0, '6424300', '', '', 0),
(56, 11, 'con mèo bị bỏ rơi', '', '', 0, '', 'YNnm2BBxEVs', '', 'http://www.youtube.com/watch?v=YNnm2BBxEVs&amp;list=UUfwx98Wty7LhdlkxL5PZyLA', '1413628579', '2014-10-18', '1', 2, 0, '1413628583', 0, 0, '113.161.81.194', '', 0, 0, '6424470', '', '', 0),
(57, 11, 'Nhớ nh&eacute; c&aacute;c thanh ni&ecirc;n', '', '', 0, '57.png', '', '', '', '1413628802', '2014-10-18', '1', 0, 0, '1413628806', 0, 0, '113.161.81.194', '', 0, 0, '6424504', '', '', 0),
(58, 11, 'K&ecirc;u như thế n&agrave;o để em ph&iacute;a sau quay người lại ta', '', '', 0, '58.jpg', '', '', '', '1413628961', '2014-10-18', '1', 0, 0, '1413669129', 0, 0, '113.161.81.194', '', 0, 0, '6424542', '', '', 0),
(59, 11, 'Chỉ vì anh FA lâu năm..', '', '', 0, '59.jpg', '', '', '', '1413629037', '2014-10-18', '1', 2, 0, '1413653593', 0, 0, '113.161.81.194', '', 0, 0, '6424545', '', '', 0),
(81, 6, 'Đắng L&ograve;ng  Thanh Ni&ecirc;n bị say xe  V&agrave; 1 c&aacute;i kết', '', '', 0, '', 'kmhLXFvHpsk', '', 'http://www.youtube.com/watch?v=kmhLXFvHpsk', '1413632808', '2014-10-18', '1', 0, 0, '1413632897', 0, 0, '113.161.81.194', '', 0, 0, '6425225', '', '', 0),
(80, 6, 'Nóng quá các bác . Ơ...nhưng có j ko ổn', '', '', 0, '80.jpg', '', '', '', '1413632322', '2014-10-18', '1', 2, 0, '1413679200', 0, 0, '113.161.81.194', '', 0, 0, '6425170', '', '', 0),
(61, 12, ':D', '', '', 0, '61.jpg', '', '', '', '1413629600', '2014-10-18', '1', 2, 0, '1413629604', 0, 0, '113.161.81.194', '', 0, 0, '6424726', '', '', 0),
(62, 12, 'Lang thang trên mạng... ', '', '', 0, '62.jpg', '', '', '', '1413629624', '2014-10-18', '1', 2, 0, '1413629627', 0, 0, '113.161.81.194', '', 0, 0, '6424732', '', '', 0),
(63, 12, 'Em thề là không nhìn phía dưới ', '', '', 0, '63.jpg', '', '', '', '1413629677', '2014-10-18', '1', 2, 0, '1413633286', 0, 0, '113.161.81.194', '', 0, 0, '6424761', '', '', 0),
(64, 12, 'Nh&igrave;n tho&aacute;ng qua l&agrave; e cũng biết a chủ đập troai rồi.', '', '', 0, '64.jpg', '', '', '', '1413629742', '2014-10-18', '1', 0, 0, '1413629746', 0, 0, '113.161.81.194', '', 0, 0, '6424788', '', '', 0),
(65, 12, 'Thằng chó, dám nhởn với anh à... ', '', '', 0, '65.jpg', '', '', '', '1413629804', '2014-10-18', '1', 2, 0, '1413682452', 0, 0, '113.161.81.194', '', 0, 0, '6424819', '', '', 0),
(66, 12, 'FA l&acirc;u ng&agrave;y', '', '', 0, '66.jpg', '', '', '', '1413629860', '2014-10-18', '1', 0, 0, '1413629864', 0, 0, '113.161.81.194', '', 0, 0, '6424836', '', '', 0),
(67, 12, 'Để tao cứu mầy.. ', '', '', 0, '67.jpg', '', '', '', '1413629935', '2014-10-18', '1', 2, 0, '1413629939', 0, 0, '113.161.81.194', '', 0, 0, '6424859', '', '', 0),
(68, 12, 'Phụ nữ có một phép thuật cao siêu', '', '', 0, '68.jpg', '', '', '', '1413630200', '2014-10-18', '1', 2, 0, '1413630207', 0, 0, '113.161.81.194', '', 0, 0, '6424899', '', '', 0),
(69, 12, 'Hú hồn', '', '', 0, '69.jpg', '', '', '', '1413630281', '2014-10-18', '1', 2, 0, '1413630285', 0, 0, '113.161.81.194', '', 0, 0, '6424910', '', '', 0),
(70, 12, 'Khi gấu của bạn kêu dừng lại thì nghĩa là ..cứ tiếp tục đi', '', '', 0, '', 'lGfSKXVGfNM', '', 'http://www.youtube.com/watch?v=lGfSKXVGfNM', '1413630356', '2014-10-18', '1', 2, 0, '1413630360', 0, 0, '113.161.81.194', '', 0, 0, '6424918', '', '', 0),
(71, 12, 'Và tôi đã yêu em ấy cmnr :X', '', '', 0, '71.jpg', '', '', '', '1413630461', '2014-10-18', '1', 2, 0, '1413634490', 0, 0, '113.161.81.194', '', 0, 0, '6424920', '', '', 0),
(72, 12, '7S CƯỜI XẢ L&Aacute;NG N&Agrave;O!! ', '', '', 0, '', 'viUY8Aftzq0', '', 'http://www.youtube.com/watch?v=viUY8Aftzq0', '1413630531', '2014-10-18', '1', 0, 0, '1413630535', 0, 0, '113.161.81.194', '', 0, 0, '6424942', '', '', 0),
(73, 12, 'Cười 1 cái có hay hơn không.', '', '', 0, '73.jpg', '', '', '', '1413630618', '2014-10-18', '1', 2, 0, '1413653592', 0, 0, '113.161.81.194', '', 0, 0, '6424969', '', '', 0),
(74, 12, '1 phong cách chỉ có ở Hà nội các bác ạ', '', '', 0, '', 'mAMQl6PqgMI', '', 'http://www.youtube.com/watch?v=mAMQl6PqgMI', '1413630654', '2014-10-18', '1', 2, 0, '1413630658', 0, 0, '113.161.81.194', '', 0, 0, '6424973', '', '', 0),
(75, 12, 'Thanh niên cứng nhất năm', '', '', 0, '75.jpg', '', '', '', '1413630779', '2014-10-18', '1', 2, 0, '1413653574', 0, 0, '113.161.81.194', '', 0, 0, '6424975', '', '', 0),
(76, 12, 'Học hành cực kh&ocirc;̉ quá nhỉ ', '', '', 0, '76.jpg', '', '', '', '1413630836', '2014-10-18', '1', 0, 0, '1413651731', 0, 0, '113.161.81.194', '', 0, 0, '6424977', '', '', 0),
(77, 12, 'Đ&aacute;ng y&ecirc;u chưa', '', '', 0, '77.jpg', '', '', '', '1413630901', '2014-10-18', '1', 0, 0, '1413630905', 0, 0, '113.161.81.194', '', 0, 0, '6425000', '', '', 0),
(78, 12, 'C&oacute; 1 sự ảo nhẹ', '', '', 0, '', 'RqziQX7eEv0', '', 'http://www.youtube.com/watch?v=RqziQX7eEv0', '1413630947', '2014-10-18', '1', 0, 0, '1413650279', 0, 0, '113.161.81.194', '', 0, 0, '6425010', '', '', 0),
(79, 12, 'E đ&atilde; kh&oacute;c khi nh&igrave;n thấy c&ocirc; d&acirc;u c&aacute;c b&aacute;c ạ', '', '', 0, '79.jpg', '', '', '', '1413630992', '2014-10-18', '1', 0, 0, '1413635070', 0, 0, '113.161.81.194', '', 0, 0, '6425013', '', '', 0),
(82, 6, 'Tổng thống Putin thi the voice', '', '', 0, '', '177gGnMHBPU', '', 'http://www.youtube.com/watch?v=177gGnMHBPU', '1413634107', '2014-10-18', '1', 2, 0, '1413634138', 0, 0, '113.161.81.194', '', 0, 0, '6425415', '', '', 0),
(83, 6, 'Phải đi mới biết...', '', '', 0, '83.jpg', '', '', '', '1413640078', '2014-10-18', '1', 2, 0, '1413679223', 0, 0, '113.161.81.194', '', 0, 0, '6426345', '', '', 0),
(84, 13, 'Một chữ thôi', '', '', 0, '84.jpg', '', '', '', '1413640489', '2014-10-18', '1', 2, 0, '1413640493', 0, 0, '113.161.81.194', '', 0, 0, '6426391', '', '', 0),
(85, 13, 'Con trai lại bảo sai đi ', '', '', 0, '85.jpg', '', '', '', '1413640650', '2014-10-18', '1', 2, 0, '1413640654', 0, 0, '113.161.81.194', '', 0, 0, '6426398', '', '', 0),
(86, 13, 'N&atilde;o kh&ocirc;ng thể bơm đc nhưng v&ograve;ng 1 th&igrave; c&oacute; ', '', '', 0, '', 'FQp_HJ5kIks', '', 'http://www.youtube.com/watch?v=FQp_HJ5kIks', '1413640746', '2014-10-18', '1', 0, 0, '1413640751', 0, 0, '113.161.81.194', '', 0, 0, '6426441', '', '', 0),
(87, 13, 'Tr&ograve;n mắt xem hội chợ triển l&atilde;m vũ kh&iacute; ở Nga', '', '', 0, '', '-bLHGZwQ_5w', '', 'http://www.youtube.com/watch?v=-bLHGZwQ_5w', '1413640806', '2014-10-18', '1', 0, 0, '1413640811', 0, 0, '113.161.81.194', '', 0, 0, '6426442', '', '', 0),
(88, 13, 'đi c&agrave; ph&ecirc; gặp chụy n&agrave;y', '', '', 0, '88.jpg', '', '', '', '1413640932', '2014-10-18', '1', 0, 0, '1413653618', 0, 0, '113.161.81.194', '', 0, 0, '6426444', '', '', 0),
(89, 13, 'E thích cách suy nghĩ của cô ấy', '', '', 0, '89.jpg', '', '', '', '1413641036', '2014-10-18', '1', 2, 0, '1413641040', 0, 0, '113.161.81.194', '', 0, 0, '6426482', '', '', 0),
(90, 13, 'Chỉ 5s th&ocirc;i&hellip; đố th&aacute;nh n&agrave;o nhịn được cười =', '', '', 0, '', 'fUA6Kk7X5-g', '', 'http://www.youtube.com/watch?v=fUA6Kk7X5-g', '1413641147', '2014-10-18', '1', 0, 0, '1413641152', 0, 0, '113.161.81.194', '', 0, 0, '6426484', '', '', 0),
(91, 13, 'đầu b&acirc;y giờ vẫn đ&acirc;u. Buồn qu&aacute; mọi người ạ', '', '', 0, '91.jpg', '', '', '', '1413641400', '2014-10-18', '1', 0, 0, '1413641410', 0, 0, '113.161.81.194', '', 0, 0, '6426529', '', '', 0),
(92, 13, 'Đắng lòng với thanh niên xem Jav trong phòng tắm', '', '', 0, '92.jpg', '', '', '', '1413641511', '2014-10-18', '1', 2, 0, '1413641515', 0, 0, '113.161.81.194', '', 0, 0, '6426532', '', '', 0),
(93, 13, 'Angela Phương Trinh tặng quà cho trẻ em khuyết tật', '', '', 0, '93.jpg', '', '', '', '1413641662', '2014-10-18', '1', 2, 0, '1413652092', 0, 0, '113.161.81.194', '', 0, 0, '6426535', '', '', 0),
(94, 13, 'Fan LOL điểm danh', '', '', 0, '94.jpg', '', '', '', '1413641738', '2014-10-18', '1', 0, 0, '1413641742', 0, 0, '113.161.81.194', '', 0, 0, '6426575', '', '', 0),
(95, 13, 'Những kiểu phụ nữ không nên lấy làm vợ', '', '', 0, '95.jpg', '', '', '', '1413641824', '2014-10-18', '1', 2, 0, '1413681185', 0, 0, '113.161.81.194', '', 0, 0, '6426577', '', '', 0),
(96, 13, 'Làm gì tiếp bây giờ', '', '', 0, '96.jpg', '', '', '', '1413641918', '2014-10-18', '1', 2, 0, '1413682254', 0, 0, '113.161.81.194', '', 0, 0, '6426579', '', '', 0),
(97, 13, 'Ch&ecirc;nh cmn lệch @@', '', '', 0, '97.jpg', '', '', '', '1413642050', '2014-10-18', '1', 0, 0, '1413642055', 0, 0, '113.161.81.194', '', 0, 0, '6426622', '', '', 0),
(98, 13, 'Em ý chỉ có 16t thôi', '', '', 0, '98.jpg', '', '', '', '1413642076', '2014-10-18', '1', 2, 0, '1413642081', 0, 0, '113.161.81.194', '', 0, 0, '6426624', '', '', 0),
(99, 13, 'Gái đà nẵng đó mấy bác', '', '', 0, '99.jpg', '', '', '', '1413642156', '2014-10-18', '1', 2, 0, '1413653592', 0, 0, '113.161.81.194', '', 0, 0, '6426626', '', '', 0),
(100, 5, 'Hay', '', '', 0, '100.png', '', '', '', '1413644453', '2014-10-18', '1', 0, 0, '1413681223', 0, 0, '1.53.155.246', '', 0, 0, '6426948', '', '', 0),
(101, 5, 'Tuyệt đỉnh của đ&aacute;nh trống l&agrave; đ&acirc;y ?', '', '', 0, '', 'vMI2XAb0APo', '', 'http://www.youtube.com/watch?v=vMI2XAb0APo', '1413644984', '2014-10-18', '1', 0, 0, '1413644989', 0, 0, '1.53.155.246', '', 0, 0, '6426999', '', '', 0),
(102, 5, 'thật tình cờ', '', '', 0, '102.jpg', '', '', '', '1413645103', '2014-10-18', '1', 2, 1, '1413663680', 0, 0, '1.53.155.246', '', 0, 0, '6427039', '', '', 0),
(103, 5, 'Troll người kh&aacute;c để rồi bị troll nhọ vl', '', '', 0, '', 'U_cR3xEX-ow', '', 'http://www.youtube.com/watch?v=U_cR3xEX-ow', '1413645149', '2014-10-18', '1', 0, 1, '1413645153', 0, 0, '1.53.155.246', '', 0, 0, '6427041', '', '', 0),
(104, 5, 'Nấc tháng lên thiên đường', '', '', 0, '104.jpg', '', '', '', '1413650271', '2014-10-18', '1', 2, 0, '1413664005', 0, 0, '1.53.155.246', '', 0, 0, '6427782', '', '', 0),
(105, 4, 'M&egrave;o r&igrave;nh chủ để ăn trộm thịt', '', '', 0, '', 'D8l700IqAvw', '', 'http://www.youtube.com/watch?v=D8l700IqAvw', '1413657153', '2014-10-18', '1', 0, 0, '1413657157', 0, 0, '1.53.155.246', '', 0, 0, '6428790', '', '', 0),
(106, 4, 'Thanh ni&ecirc;n cứng nhất năm', '', '', 0, '106.jpg', '', '', '', '1413657286', '2014-10-18', '1', 0, 0, '1413657289', 0, 0, '1.53.155.246', '', 0, 0, '6428817', '', '', 0),
(107, 4, 'Vẻ đẹp 10 năm c&oacute; ai th&iacute;ch chị n&agrave;y như e ko', '', '', 0, '107.jpg', '', '', '', '1413657315', '2014-10-18', '1', 0, 0, '1413657319', 0, 0, '1.53.155.246', '', 0, 0, '6428818', '', '', 0),
(108, 4, 'Th&aacute;nh nhọ l&agrave; đ&acirc;y. Kh&ocirc;ng cười kh&ocirc;ng lấy tiền :))', '', '', 0, '', 'vRYKYDSdjFg', '', 'http://www.youtube.com/watch?v=vRYKYDSdjFg', '1413657369', '2014-10-18', '1', 0, 0, '1413657374', 0, 0, '1.53.155.246', '', 0, 0, '6428819', '', '', 0),
(109, 4, 'Đẹp phết nhỉ', '', '', 0, '109.jpg', '', '', '', '1413657478', '2014-10-18', '1', 0, 0, '1413657482', 0, 0, '1.53.155.246', '', 0, 0, '6428844', '', '', 0),
(110, 4, 'Thế giới cần những si&ecirc;u anh h&ugrave;ng', '', '', 0, '110.jpg', '', '', '', '1413657498', '2014-10-18', '1', 0, 0, '1413657502', 0, 0, '1.53.155.246', '', 0, 0, '6428845', '', '', 0),
(111, 4, 'Kinh ho&agrave;ng với trẻ tr&acirc;u', '', '', 0, '111.jpg', '', '', '', '1413657547', '2014-10-18', '1', 0, 0, '1413657551', 0, 0, '1.53.155.246', '', 0, 0, '6428846', '', '', 0),
(112, 4, 'Cấm cười nh&eacute; !!!', '', '', 0, '', 'gZpWpKirL8Q', '', 'http://www.youtube.com/watch?v=gZpWpKirL8Q', '1413657639', '2014-10-18', '1', 0, 0, '1413657644', 0, 0, '1.53.155.246', '', 0, 0, '6428856', '', '', 0),
(113, 4, 'Phim việt nam :)', '', '', 0, '113.jpg', '', '', '', '1413657717', '2014-10-18', '1', 0, 0, '1413657721', 0, 0, '1.53.155.246', '', 0, 0, '6428872', '', '', 0),
(114, 4, 'Lửa thử v&agrave;ng, xe sang thử g&aacute;i. Kết th&uacute;c c&oacute; hậu ', '', '', 0, '', 'VglD8xIm5Yk', '', 'http://www.youtube.com/watch?v=VglD8xIm5Yk ', '1413657774', '2014-10-18', '1', 0, 0, '1413657778', 0, 0, '1.53.155.246', '', 0, 0, '6428875', '', '', 0),
(115, 4, 'Chủ nhật vui vẻ nh&eacute; c&aacute;c mem', '', '', 0, '115.jpg', '', '', '', '1413657827', '2014-10-18', '1', 0, 0, '1413657831', 0, 0, '1.53.155.246', '', 0, 0, '6428899', '', '', 0),
(116, 4, 'C&ocirc; gi&aacute;o xem xong k th&egrave;m chấm', '', '', 0, '116.jpg', '', '', '', '1413658125', '2014-10-18', '1', 0, 0, '1413658129', 0, 0, '1.53.155.246', '', 0, 0, '6428929', '', '', 0),
(117, 4, 'Da thật s&aacute;ng, d&aacute;ng thật xinh', '', '', 0, '117.jpg', '', '', '', '1413658261', '2014-10-18', '1', 0, 0, '1413658266', 0, 0, '1.53.155.246', '', 0, 0, '6428943', '', '', 0),
(118, 4, 'Cần Gấp Th&aacute;nh Soi', '', '', 0, '118.jpg', '', '', '', '1413658304', '2014-10-18', '1', 0, 0, '1413658309', 0, 0, '1.53.155.246', '', 0, 0, '6428958', '', '', 0),
(119, 6, '10 phim kinh dị ăn kh&aacute;ch nhất 5 năm qua  bạn nghĩ sao?', '', '', 0, '119.jpg', '', '', '', '1413658439', '2014-10-18', '1', 0, 0, '1413659199', 0, 0, '1.53.155.246', '', 0, 0, '6428965', '', '', 0),
(120, 6, 'Với bốn c&ocirc; g&aacute;i n&agrave;y bạn sẽ l&agrave;m g&igrave;', '', '', 0, '120.jpg', '', '', '', '1413658461', '2014-10-18', '1', 0, 0, '1413658464', 0, 0, '1.53.155.246', '', 0, 0, '6428966', '', '', 0),
(121, 6, 'Đẹp+ ...', '', '', 0, '121.jpg', '', '', '', '1413658485', '2014-10-18', '1', 0, 0, '1413658488', 0, 0, '1.53.155.246', '', 0, 0, '6428970', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_favorited`
--

CREATE TABLE IF NOT EXISTS `posts_favorited` (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(25) NOT NULL DEFAULT '0',
  `PID` bigint(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `posts_favorited`
--

INSERT INTO `posts_favorited` (`FID`, `USERID`, `PID`) VALUES
(1, 4, 7),
(2, 5, 9),
(3, 5, 10),
(4, 5, 11),
(5, 5, 12),
(6, 5, 13),
(7, 5, 14),
(8, 5, 103),
(9, 5, 102);

-- --------------------------------------------------------

--
-- Table structure for table `posts_reports`
--

CREATE TABLE IF NOT EXISTS `posts_reports` (
  `RID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `time` varchar(20) DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `reason` bigint(1) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts_unfavorited`
--

CREATE TABLE IF NOT EXISTS `posts_unfavorited` (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USERID` bigint(25) NOT NULL DEFAULT '0',
  `PID` bigint(25) NOT NULL DEFAULT '0',
  PRIMARY KEY (`FID`),
  UNIQUE KEY `USERID` (`USERID`,`PID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `ID` bigint(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`ID`, `title`, `value`) VALUES
(1, 'Terms Of Use', 'hoyvl.net'),
(2, 'Privacy Policy', 'hoyvl.net'),
(3, 'About', 'Xả stress với hoyvl\r\n\r\nHoyvl.net là nơi chia sẻ những bức ảnh, những câu chuyện hài hước độc đáo và ý nghĩa của Việt Nam và thế giới. Rất đơn giản, chỉ cần vào hoyvl.net và cười.'),
(4, '9 Rules', 'hoyvl.net'),
(5, 'FAQ', 'Câu hỏi thường gặp khi sử dụng hoyvl.net');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
