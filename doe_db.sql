-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 05:06 AM
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
-- Database: `doe_db`
--
create database doe_db;
use doe_db;
-- --------------------------------------------------------

--
-- Table structure for table `bmdt_banner`
--

CREATE TABLE `bmdt_banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_banner`
--

INSERT INTO `bmdt_banner` (`id`, `image`) VALUES
(1, 'Customer_Journey_Map.jpg'),
(4, 'home4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career`
--

CREATE TABLE `bmdt_career` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_benefit`
--

CREATE TABLE `bmdt_career_benefit` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_company`
--

CREATE TABLE `bmdt_career_company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_career_company`
--

INSERT INTO `bmdt_career_company` (`id`, `name`, `address`, `image`, `description`) VALUES
(1, 'honghoa', 'KTX khu A, ĐHQG TPHCM', 'lvtn.png', 'dffasd a  gadg ag '),
(2, 'hoa', 'Bình Dương', 'news-2389226_640.png', 'sssssssssaaa'),
(4, 'BK', 'Hồ Chí Minh', 'hcmut.png', ''),
(5, 'BK', 'Hồ Chí Minh', 'hcmut.png', ''),
(6, 'BKBot', 'Bình Dương', 'hcmut.png', 'Doanh nghiệp');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_description`
--

CREATE TABLE `bmdt_career_description` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_job`
--

CREATE TABLE `bmdt_career_job` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `description` text NOT NULL,
  `requirement` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `howtoapply` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_career_job`
--

INSERT INTO `bmdt_career_job` (`id`, `name`, `summary`, `content`, `description`, `requirement`, `deadline`, `quantity`, `location`, `file`, `company`, `howtoapply`, `status`) VALUES
(1, 'Học bổng tài năng', '1', NULL, 'gssdfd h; sbjhsbaf; afdaf; ', 'agaga ;faafdfa;adfadfad', '2022-11-28', 12, 'Vietnam', 'Project #2 description.pdf', 'ABC company', 'adfaadfa', 1),
(3, 'honghoa12', '3', NULL, 'dafafaa; fdafadfs; afadffasdfa ', 'afadfadfas; adfadfdfa;afadfadfads ', '2022-12-09', 12, 'Vietnam', 'VNG - Zalo.docx', 'ABC company', 'fdafafadadfad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_news`
--

CREATE TABLE `bmdt_career_news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `summary` text DEFAULT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `posttime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_career_news`
--

INSERT INTO `bmdt_career_news` (`id`, `title`, `summary`, `content`, `status`, `posttime`) VALUES
(1, 'Tuyển dụng TMA', 'Thông tin tuyển dụng', '<h3><strong>Convolution</strong></h3>\r\n<p>Tin mới tuyển dụng TMA;d &acirc;f</p>\r\n<p>- d&agrave;kj</p>\r\n<p>&acirc;dgasg</p>\r\n<p>&nbsp;</p>\r\n<p><strong>afadadguh jalkdj l</strong></p>', 1, '2022-11-02'),
(2, 'Tuyển dụng TMA', 'Thông tin tuyển dụng', '<h1><strong>Tuyển dụng th&aacute;ng 3</strong></h1>\r\n<p>Th&ocirc;ng b&aacute;o tuyển dụng th&aacute;ng 3 của TMA</p>\r\n<p>&nbsp;</p>\r\n<p>Số lượng: 3</p>\r\n<table style=\"border-collapse: collapse; width: 99.967%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 32.1756%;\">Vị tr&iacute;</td>\r\n<td style=\"width: 32.1756%;\">M&ocirc; tả</td>\r\n<td style=\"width: 32.1777%;\">Y&ecirc;u cầu</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 32.1756%;\">&nbsp;</td>\r\n<td style=\"width: 32.1756%;\">&nbsp;</td>\r\n<td style=\"width: 32.1777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 32.1756%;\">&nbsp;</td>\r\n<td style=\"width: 32.1756%;\">&nbsp;</td>\r\n<td style=\"width: 32.1777%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 32.1756%;\">&nbsp;</td>\r\n<td style=\"width: 32.1756%;\">&nbsp;</td>\r\n<td style=\"width: 32.1777%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Link ứng tuyển: <a href=\"https://www.dienmayxanh.com/may-rua-mat/sieu-am-kem-chuc-nang-nhiet-rio-fadf-h\">https://www.dienmayxanh.com/may-rua-mat/sieu-am-kem-chuc-nang-nhiet-rio-fadf-h</a></p>\r\n<p>Hạn: H&ocirc;m nay</p>', 1, '2022-11-02'),
(3, 'Tuyển dụng TMA', 'Thông tin tuyển dụng', '<p>Tuyển dụng 2</p>', 1, '2022-11-02'),
(4, 'Quản lý  chất lượng', 'Giới thiệu chung', '<p>1. M&ocirc; tả</p>\r\n<p>- Cần</p>\r\n<p>- C&oacute;</p>\r\n<p>2. Y&ecirc;u cầu</p>\r\n<p>3. Số lượng tuyển dụng:&nbsp;<strong>10</strong></p>', 1, '2022-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_requirement`
--

CREATE TABLE `bmdt_career_requirement` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_career_workshop`
--

CREATE TABLE `bmdt_career_workshop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `field` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_contact`
--

CREATE TABLE `bmdt_contact` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_contact_message`
--

CREATE TABLE `bmdt_contact_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_duty`
--

CREATE TABLE `bmdt_duty` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_education`
--

CREATE TABLE `bmdt_education` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_education_image`
--

CREATE TABLE `bmdt_education_image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_education_major`
--

CREATE TABLE `bmdt_education_major` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_education_subject`
--

CREATE TABLE `bmdt_education_subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `subjectID` varchar(255) NOT NULL,
  `majorID` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_human`
--

CREATE TABLE `bmdt_human` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_human_cadres`
--

CREATE TABLE `bmdt_human_cadres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `personnelID` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `major` varchar(255) DEFAULT NULL,
  `research` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `lab` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_human_cadres`
--

INSERT INTO `bmdt_human_cadres` (`id`, `name`, `personnelID`, `position`, `major`, `research`, `image`, `email`, `phone`, `lab`, `degree`, `description`, `file`) VALUES
(1, 'Nguyễn Tuấn Anh', 3, 'Giảng viên', '', NULL, 'fb_profile.jpg', '', '1234567891', '', 'Tiến sĩ', '', ''),
(2, 'Nguyễn Khánh An', 3, 'Giảng viên', '', NULL, 'fb_profile.jpg', 'an@gmail.com', '', '', 'Tiến sĩ', 'Không', 'VNG - Zalo.docx'),
(4, 'Trần Hoàng Linh', 1, 'Giảng viên - Tiến sĩ', '', 'Digital IC Design (Computer Architecture, Computer Arithmetic), Logic Synthesis, Reversible Circuit Synthesis, Quantum Computing, Data Mining', 'teacher1.png', 'linhtran@hcmut.edu.vn', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_human_personnel`
--

CREATE TABLE `bmdt_human_personnel` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_human_personnel`
--

INSERT INTO `bmdt_human_personnel` (`id`, `position`) VALUES
(1, 'Chủ nhiệm bộ môn'),
(3, 'Giảng viên giảng dạy'),
(5, 'Phó Chủ nhiệm Bộ môn');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_info`
--

CREATE TABLE `bmdt_info` (
  `address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `logobm` varchar(255) NOT NULL,
  `logobk` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_intro`
--

CREATE TABLE `bmdt_intro` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_intro_detail`
--

CREATE TABLE `bmdt_intro_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_intro_image`
--

CREATE TABLE `bmdt_intro_image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_intro_image`
--

INSERT INTO `bmdt_intro_image` (`id`, `name`, `image`) VALUES
(4, NULL, 'home4.jpg'),
(5, NULL, 'home5.jpg'),
(6, NULL, 'teams.png');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_intro_object`
--

CREATE TABLE `bmdt_intro_object` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_lab`
--

CREATE TABLE `bmdt_lab` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_lab`
--

INSERT INTO `bmdt_lab` (`id`, `name`, `address`, `teacher`, `image`, `status`, `subject`, `description`) VALUES
(1, 'ĐIỆN TỬ CÔNG SUẤT', 'Cơ sở 1 : B1', 'Nguyễn Văn Bình', 'teams.png', 0, 'Thí nghiệm Điện công nghiệp (401023)', 'PTN điện'),
(2, 'PTN Vi Xử Lý CS1', 'Cơ sở 1 : B1', 'Trần Văn Hoàng', 'teams.png', 1, '', ''),
(3, 'PTN Vi Xử Lý CS2', 'Cơ sở 2', 'Trần Văn Hoàng', 'teams.png', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_lab_image`
--

CREATE TABLE `bmdt_lab_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_lab_image`
--

INSERT INTO `bmdt_lab_image` (`id`, `image`) VALUES
(2, 'teams.png'),
(3, 'home4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_lib_doc`
--

CREATE TABLE `bmdt_lib_doc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `download` varchar(255) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_lib_doc`
--

INSERT INTO `bmdt_lib_doc` (`id`, `name`, `date`, `description`, `image`, `link`, `download`, `field`, `author`, `status`) VALUES
(1, 'Học bổng tài năng', '2019', ' value=\"aaaaa\"', '', 'http://tuyensinh.hcmut.edu.vn/admission/index.php?route=catalog/chitietts&path=64&tid=1844', 'VNG - Zalo.docx', 'Điện', 'Nguyễn Minh Tân', 1),
(2, 'Học bổng tài năng', '2019', '123', 'news-2389226_640.png', '', 'VNG - Zalo.docx', '', 'Nguyễn Minh Tân', 1),
(3, 'Học bổng tài năng', '2019', 'ssss', 'lvtn.png', '', 'kendall7e_ch07_Using Dataflow Diagrams.ppt', '', 'Nguyễn Minh Tân', 1),
(4, 'Học bổng tài năng', '2019', 'qqqq', 'news-2389226_640.png', 'https://next-website-mintlala.vercel.app/', 'BỘ CÂU HỎI TRẮC NGHIỆM ÔN TẬP MÔN TTHCM (1).pdf', 'Điện', 'Trần Văn An', 1),
(5, 'Văn bản 1', '2019', 'Mô tả', '', '', '', 'Điện', 'Nguyễn Minh Tân', 1),
(6, 'Văn bản 2', '2019', 'Mô tả', '', '', '', 'Điện', 'Trần Văn Bình', 1),
(7, 'Văn bản 3', '2019', 'Mô tả', '', '', '', '', 'Nguyễn Minh Tân', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_lib_thesis`
--

CREATE TABLE `bmdt_lib_thesis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `field` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `date` varchar(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `link` varchar(255) DEFAULT NULL,
  `download` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_lib_thesis`
--

INSERT INTO `bmdt_lib_thesis` (`id`, `name`, `image`, `description`, `field`, `author`, `semester`, `date`, `status`, `link`, `download`, `note`) VALUES
(1, 'Học bổng tài năng', 'lvtn.png', 'aaaaa', 'Điện', 'Nguyễn Minh Tân', 'HK221', '2019', 1, 'http://tuyensinh.hcmut.edu.vn/admission/index.php?route=catalog/chitietts&path=64&tid=1844', 'Lab 1_CQ.docx', '10đ'),
(2, 'DoggoCutebabycute', 'thongbao.png', 'sfafd grgrsrhth  rh fjagf eugf iuaguf aga ', 'Điện', 'Trần Văn Bình', 'HK221', '2019', 1, 'https://www.facebook.com/BK-FC-THPT-S%E1%BB%91-2-Ph%C3%B9-M%E1%BB%B9-B%C3%ACnh-%C4%90%E1%BB%8Bnh-131637513994464', 'front-dashboard (1).rar', '10đ'),
(3, 'Luận văn 2', '', 'Luận văn ', 'Điện', 'Trần Văn An', 'HK221', '2019', 1, 'http://tuyensinh.hcmut.edu.vn/admission/index.php?route=catalog/chitietts&path=64&tid=1844', '', ''),
(4, 'luận án 1', '', 'Luận án', 'Điện', 'Trần Văn Bình', 'HK221', '2019', 1, 'http://tuyensinh.hcmut.edu.vn/admission/index.php?route=catalog/chitietts&path=64&tid=1844', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_link_intro`
--

CREATE TABLE `bmdt_link_intro` (
  `id` int(11) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_news`
--

CREATE TABLE `bmdt_news` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_news`
--

INSERT INTO `bmdt_news` (`id`, `title`, `content`, `type`, `status`, `time`) VALUES
(1, 'Thông báo 1', '<p style=\"text-align: center;\">Ng&agrave;y mai sẽ c&oacute; nhiều th&ocirc;ng b&aacute;o</p>\r\n<p>Th&ocirc;ng b&aacute;o cho h&ocirc;m nay</p>\r\n<p>&nbsp;</p>', 1, 1, '2022-11-02'),
(2, 'Thông báo 1', '<p style=\"text-align: center;\">Ng&agrave;y mai sẽ c&oacute; nhiều th&ocirc;ng b&aacute;o</p>\r\n<p>Th&ocirc;ng b&aacute;o cho h&ocirc;m nay</p>\r\n<p>&nbsp;</p>', 1, 1, '2022-11-02'),
(3, 'Tin tức 1', '<p>adfadff&nbsp;</p>\r\n<p>dafdf dầ</p>\r\n<p>a fadfa&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<table style=\"border-collapse: collapse; width: 99.9837%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 48.8427%;\">faff</td>\r\n<td style=\"width: 48.8427%;\">afafadfa afadfa fa &aacute;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 48.8427%;\">&nbsp;</td>\r\n<td style=\"width: 48.8427%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 48.8427%;\">&nbsp;</td>\r\n<td style=\"width: 48.8427%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 48.8427%;\">&nbsp;</td>\r\n<td style=\"width: 48.8427%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 2, 1, '2022-11-02'),
(9, 'afaf ', '<p>&acirc;faff</p>', 1, 1, '2022-11-02'),
(10, 'công nghệ mới 1', '<p>Tin c&ocirc;ng nghệ mới&nbsp;<strong>dfaf&nbsp;<span style=\"text-decoration: underline;\">adbfak&nbsp;</span><em>cadkan faj</em></strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>* adfafa</em></strong></p>\r\n<p><strong><em>- fadfajf</em></strong></p>\r\n<p><strong><em>* afafja</em></strong></p>', 3, 1, '2022-11-02'),
(11, 'Thông báo', '<p>Th&ocirc;ng b&aacute;o mới nhất</p>', 1, 1, '2022-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_news_notification`
--

CREATE TABLE `bmdt_news_notification` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `time` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `author` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_news_notification`
--

INSERT INTO `bmdt_news_notification` (`id`, `name`, `type`, `content`, `description`, `time`, `status`, `author`, `note`, `image`, `file`) VALUES
(2, 'Học bổng tài năng', 2, 'f gag ag ag af \r\nnkln\r\nkl;j\r\njl;', 'Dfa ga aga ag ', '0000-00-00', 1, 'Trần Văn Bình', '10đ', 'news-2389226_640.png', 'VNG - Zalo.docx'),
(3, 'CN afh ar', 3, 'trteter rt tataZa', 'rtrttrt', '0000-00-00', 1, 'Trần Văn An', '10đ', 'thongbao.png', 'VNG - Zalo.docx'),
(4, 'Học bổng tài năng', 1, 'se rrg  hrew re ỷ regr aec ', 'yuuuuu', '0000-00-00', 1, '', '10đ', 'news-2389226_640.png', 'VNG - Zalo.docx'),
(5, 'Học bổng tài năng', 1, 'agd dá ad da ad ', 'aafa fda ad sg ', '2022-10-27', 1, '', '10đ', 'thongbao.png', 'kendall7e_ch07_Using Dataflow Diagrams.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_news_type`
--

CREATE TABLE `bmdt_news_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_news_type`
--

INSERT INTO `bmdt_news_type` (`id`, `name`) VALUES
(1, 'THÔNG BÁO'),
(2, 'TIN TỨC'),
(3, 'TIN CÔNG NGHỆ');

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_research`
--

CREATE TABLE `bmdt_research` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_research_paper`
--

CREATE TABLE `bmdt_research_paper` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `year` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `area` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `topicID` int(11) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_research_researcher`
--

CREATE TABLE `bmdt_research_researcher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `member` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `achievement` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bmdt_user`
--

CREATE TABLE `bmdt_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bmdt_user`
--

INSERT INTO `bmdt_user` (`id`, `username`, `password`, `description`, `status`) VALUES
(1, 'adminbmdt', 'f58cda3c41483debfa9ad1f9bc31a1b3', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmdt_banner`
--
ALTER TABLE `bmdt_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_career`
--
ALTER TABLE `bmdt_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_career_benefit`
--
ALTER TABLE `bmdt_career_benefit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_career_company`
--
ALTER TABLE `bmdt_career_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_career_description`
--
ALTER TABLE `bmdt_career_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_job_description` (`job_id`);

--
-- Indexes for table `bmdt_career_job`
--
ALTER TABLE `bmdt_career_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_career_news`
--
ALTER TABLE `bmdt_career_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_career_requirement`
--
ALTER TABLE `bmdt_career_requirement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_job_requirement` (`job_id`);

--
-- Indexes for table `bmdt_career_workshop`
--
ALTER TABLE `bmdt_career_workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_contact`
--
ALTER TABLE `bmdt_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_contact_message`
--
ALTER TABLE `bmdt_contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_duty`
--
ALTER TABLE `bmdt_duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_education`
--
ALTER TABLE `bmdt_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_education_image`
--
ALTER TABLE `bmdt_education_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_education_major`
--
ALTER TABLE `bmdt_education_major`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_education_subject`
--
ALTER TABLE `bmdt_education_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_human`
--
ALTER TABLE `bmdt_human`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_human_cadres`
--
ALTER TABLE `bmdt_human_cadres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_personnel_cadres` (`personnelID`);

--
-- Indexes for table `bmdt_human_personnel`
--
ALTER TABLE `bmdt_human_personnel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_info`
--
ALTER TABLE `bmdt_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_intro`
--
ALTER TABLE `bmdt_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_intro_detail`
--
ALTER TABLE `bmdt_intro_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_intro_image`
--
ALTER TABLE `bmdt_intro_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_lab`
--
ALTER TABLE `bmdt_lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_lab_image`
--
ALTER TABLE `bmdt_lab_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_lib_doc`
--
ALTER TABLE `bmdt_lib_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_lib_thesis`
--
ALTER TABLE `bmdt_lib_thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_link_intro`
--
ALTER TABLE `bmdt_link_intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_news`
--
ALTER TABLE `bmdt_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_type` (`type`);

--
-- Indexes for table `bmdt_news_notification`
--
ALTER TABLE `bmdt_news_notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_news_type` (`type`);

--
-- Indexes for table `bmdt_news_type`
--
ALTER TABLE `bmdt_news_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_research`
--
ALTER TABLE `bmdt_research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_research_paper`
--
ALTER TABLE `bmdt_research_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_research_researcher`
--
ALTER TABLE `bmdt_research_researcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmdt_user`
--
ALTER TABLE `bmdt_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmdt_banner`
--
ALTER TABLE `bmdt_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bmdt_career`
--
ALTER TABLE `bmdt_career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_career_benefit`
--
ALTER TABLE `bmdt_career_benefit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_career_company`
--
ALTER TABLE `bmdt_career_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bmdt_career_description`
--
ALTER TABLE `bmdt_career_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_career_job`
--
ALTER TABLE `bmdt_career_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bmdt_career_news`
--
ALTER TABLE `bmdt_career_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bmdt_career_requirement`
--
ALTER TABLE `bmdt_career_requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_career_workshop`
--
ALTER TABLE `bmdt_career_workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_contact`
--
ALTER TABLE `bmdt_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_contact_message`
--
ALTER TABLE `bmdt_contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_duty`
--
ALTER TABLE `bmdt_duty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_education`
--
ALTER TABLE `bmdt_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_education_image`
--
ALTER TABLE `bmdt_education_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_education_major`
--
ALTER TABLE `bmdt_education_major`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_education_subject`
--
ALTER TABLE `bmdt_education_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_human`
--
ALTER TABLE `bmdt_human`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_human_cadres`
--
ALTER TABLE `bmdt_human_cadres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bmdt_human_personnel`
--
ALTER TABLE `bmdt_human_personnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bmdt_info`
--
ALTER TABLE `bmdt_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_intro`
--
ALTER TABLE `bmdt_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_intro_detail`
--
ALTER TABLE `bmdt_intro_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_intro_image`
--
ALTER TABLE `bmdt_intro_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bmdt_lab`
--
ALTER TABLE `bmdt_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bmdt_lab_image`
--
ALTER TABLE `bmdt_lab_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bmdt_lib_doc`
--
ALTER TABLE `bmdt_lib_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bmdt_lib_thesis`
--
ALTER TABLE `bmdt_lib_thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bmdt_link_intro`
--
ALTER TABLE `bmdt_link_intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_news`
--
ALTER TABLE `bmdt_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bmdt_news_notification`
--
ALTER TABLE `bmdt_news_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bmdt_news_type`
--
ALTER TABLE `bmdt_news_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bmdt_research`
--
ALTER TABLE `bmdt_research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_research_paper`
--
ALTER TABLE `bmdt_research_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_research_researcher`
--
ALTER TABLE `bmdt_research_researcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bmdt_user`
--
ALTER TABLE `bmdt_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bmdt_career_description`
--
ALTER TABLE `bmdt_career_description`
  ADD CONSTRAINT `lk_job_description` FOREIGN KEY (`job_id`) REFERENCES `bmdt_career_job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bmdt_career_requirement`
--
ALTER TABLE `bmdt_career_requirement`
  ADD CONSTRAINT `lk_job_requirement` FOREIGN KEY (`job_id`) REFERENCES `bmdt_career_job` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bmdt_human_cadres`
--
ALTER TABLE `bmdt_human_cadres`
  ADD CONSTRAINT `lk_personnel_cadres` FOREIGN KEY (`personnelID`) REFERENCES `bmdt_human_personnel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bmdt_news`
--
ALTER TABLE `bmdt_news`
  ADD CONSTRAINT `lk_type` FOREIGN KEY (`type`) REFERENCES `bmdt_news_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bmdt_news_notification`
--
ALTER TABLE `bmdt_news_notification`
  ADD CONSTRAINT `lk_news_type` FOREIGN KEY (`type`) REFERENCES `bmdt_news_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
