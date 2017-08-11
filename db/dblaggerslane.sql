-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 08:32 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblaggerslane`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `id` int(16) NOT NULL,
  `fid` varchar(200) NOT NULL,
  `action` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`id`, `fid`, `action`, `dt`) VALUES
(1, 'DE BORJARALPH JOSEPHP-1993-10-17-', 'Registered Online', '2017-07-02 05:56:23'),
(2, 'PATIENTPATIENTP-1994-03-31-', 'Registered Online', '2017-08-10 10:40:29'),
(3, 'PATIENTPATIENTP-1994-03-31-', 'Registered Online', '2017-08-10 10:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(16) NOT NULL,
  `name` int(128) NOT NULL,
  `url` int(255) NOT NULL,
  `email` int(255) NOT NULL,
  `body` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `url`, `email`, `body`, `dt`, `type`) VALUES
(1, 0, 0, 0, 'sadasd', '2017-06-30 06:42:32', 'Patient'),
(2, 0, 0, 0, 'zxc', '2017-06-30 06:43:41', 'Patient'),
(3, 0, 0, 0, 'sad', '2017-06-30 07:11:40', 'Patient'),
(4, 0, 0, 0, 'zxcasd', '2017-07-04 01:20:29', 'Doctor'),
(5, 0, 0, 0, 'xxxxx', '2017-07-04 01:20:35', 'Doctor'),
(6, 0, 0, 0, '', '2017-08-05 10:24:17', 'Administrator'),
(7, 0, 0, 0, '21', '2017-08-05 10:24:24', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(16) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `SN` varchar(50) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `YEARS` varchar(3) NOT NULL,
  `SPECIALIZATION` varchar(255) NOT NULL,
  `CN` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `attempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `LN`, `FN`, `MN`, `SN`, `GENDER`, `YEARS`, `SPECIALIZATION`, `CN`, `email`, `attempts`) VALUES
(45, 'iamdoctor', 'iamdoctor', 'iamdoctor', 'iamdoctor', 'Male', '5', 'adult pulmonary medicine', '1233123', 'iamdoctor@yahoo.com', 3),
(46, 'Cabuga', 'Jeddahlyn', 'Linzag', '', 'Female', '15', 'endocrinology', '095448484844', 'cabugajeddahlyn@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(200) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `SN` varchar(50) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `CN` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `LN`, `FN`, `MN`, `SN`, `POSITION`, `DEPARTMENT`, `EMAIL`, `CN`) VALUES
('admin', 'Jor', 'JorS', 'Jor', '', 'Programmer', 'IT', 'lewjordenjulve@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(16) NOT NULL,
  `fid` varchar(200) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `fid`, `dt`) VALUES
(1, 'JULVELEW JORDENR-1994-07-18-', '2017-06-30 07:31:25'),
(2, '1', '2017-07-01 21:36:45'),
(3, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-02 05:56:36'),
(4, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-02 06:00:06'),
(5, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-02 06:04:49'),
(6, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-02 06:17:24'),
(7, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-02 06:47:35'),
(8, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-04 00:34:06'),
(9, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-04 00:49:33'),
(10, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-07-04 00:54:57'),
(11, 'DE BORJARALPH JOSEPHP-1993-10-17-', '2017-08-05 10:14:05'),
(12, '1', '2017-08-10 10:43:21'),
(13, '23', '2017-08-10 16:16:08'),
(14, '24', '2017-08-10 21:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `email`, `content`, `dt`) VALUES
(1, 'news', '', '', '<hr class=\"hr2\"/><br/>\r\n\r\n		\r\n	\r\n	<div class=\"jumbotron\">\r\n     <div class=\"container\">\r\n	\r\n		<img src=\"img/1.png\" class=\"center-block img-responsive\" style=\"width:108px; height:108px;\"/>\r\n        <h1>Welcome!</h1>\r\n		\r\n        <p style=\"text-align:justify\">The system that is to be develop by Lagger\'s Lane from Jose Rizal University in partial fulfillment of IT Project 2 under the supervision of Mr. Israel Cariño and Mr. Billy Jay Angeles. This will provide an accurate and effective Online Appointment System with Billing & Patient Information System for Medical Facilities.</p>\r\n        <p>\r\n		<a onclick=\"newas()\" class=\"btn btn-lg btn-warning\"  role=\"button\">Click Here to Signup... &raquo;</a></p>\r\n      </div>\r\n    </div>\r\n						\r\n<hr class=\"hr2\"/><br/>		\r\n\r\n\r\n<div class=\"row\">\r\n       <center>\r\n        <div class=\"col-md-12\">\r\n          <h2>News / Announcement</h2>\r\n\r\n		  <p style=\"text-align:center\">If you have any concerns or suggestions please feel free to message us:</p>\r\n		  <p style=\"text-align:center\">Just click on the \"Message Us\" button or email us at laggerslane@gmail.com. Thank you.</p>\r\n          <p><a class=\"btn btn-sm btn-primary\" href=\"index.php?p=news\" role=\"button\">View details <span class=\"badge\">1</span> &raquo;</a></p>\r\n		</div>\r\n       </center>\r\n</div>					\r\n\r\n<hr class=\"hr2\"/><br/>	\r\n<div class=\"row\">\r\n       <center>\r\n        <div class=\"col-md-12\">\r\n          <h2>Contact Us</h2>\r\n			<p style=\"text-align:center\">Contact Number:  09898888888</p>\r\n		   <p style=\"text-align:center\">Address:  Shaw Blvd., Mandaluyong</p>\r\n		  <p style=\"text-align:center\">Email: laggerslane@gmail.com</p>\r\n\r\n\r\n          <p><a class=\"btn btn-sm btn-primary\" href=\"index.php?p=message\" role=\"button\">Message us &raquo;</a></p>\r\n		</div>\r\n       </center>\r\n</div>\r\n	\r\n\r\n<hr class=\"hr2\"/><br/>	\r\n<div class=\"row\">\r\n       <center>\r\n        <div class=\"col-md-12\">\r\n          <h2>Links</h2>\r\n		\r\n		\r\n		\r\n\r\n			\r\n				<a href=\"https://www.facebook.com/rap.deborja?ref=br_rs\" target=\"_blank\"><img src=\"img/social/fb.png\" style=\"height:38px; width:38px;\"/></a>\r\n				<a href=\"https://twitter.com/MochaUson\" target=\"_blank\"><img src=\"img/social/twit.png\" style=\"height:38px; width:38px;\"/></a>\r\n\r\n		\r\n		</div>\r\n       </center>\r\n</div>', '2017-06-30 06:34:48'),
(2, 'Welcome!', '', '', 'Welcome to laggers lane. Please feel free to enjoy!', '2017-06-30 06:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(50) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `SN` varchar(50) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `WEIGHT` varchar(50) NOT NULL,
  `HEIGHT` varchar(50) NOT NULL,
  `BIRTHDAY` varchar(50) NOT NULL,
  `BIRTHPLACE` varchar(50) NOT NULL,
  `CIVILSTATUS` varchar(50) NOT NULL,
  `NATIONALITY` varchar(50) NOT NULL,
  `ZIPCODE` int(8) NOT NULL,
  `RELIGION` varchar(50) NOT NULL,
  `ADDRESS` text NOT NULL,
  `BLOOD_TYPE` varchar(15) NOT NULL,
  `CONTACT_NUMBER` varchar(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `LN`, `FN`, `MN`, `SN`, `GENDER`, `WEIGHT`, `HEIGHT`, `BIRTHDAY`, `BIRTHPLACE`, `CIVILSTATUS`, `NATIONALITY`, `ZIPCODE`, `RELIGION`, `ADDRESS`, `BLOOD_TYPE`, `CONTACT_NUMBER`, `EMAIL`) VALUES
(24, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `id` int(11) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `specialization`) VALUES
(1, 'adult pulmonary medicine'),
(2, 'allergology immunology'),
(3, 'anatomic pathology'),
(4, 'anesthesiology'),
(5, 'cardiology'),
(6, 'clinical epidemiology'),
(7, 'clinical nutrition'),
(8, 'clinical pathology'),
(9, 'clinical quality improvement'),
(10, 'complementary medicine'),
(11, 'critical care'),
(12, 'dentistry & oral surgery'),
(13, 'dermatology'),
(14, 'emergency medicine'),
(15, 'endocrinology'),
(16, 'gastroenterology'),
(17, 'geriatic medicine'),
(18, 'hematology'),
(19, 'hyperbaric oxygen therapy'),
(20, 'infectious disease and tropical medicine'),
(21, 'internal medicine'),
(22, 'legal medicine and jurisprudence'),
(23, 'medical oncology'),
(24, 'nephrology'),
(25, 'neurology'),
(26, 'neurosciences'),
(50, 'obstetrics gynecology'),
(51, 'oncology'),
(52, 'ophthalmology'),
(53, 'orthopedic surgery'),
(54, 'otorhinolaryngology'),
(55, 'as'),
(56, 'otorhinolaryngology and head and neck surgery'),
(57, 'pain management'),
(58, 'paramedical'),
(59, 'pathology'),
(60, 'pediatrics'),
(61, 'nuclear medicine'),
(62, 'plastic & reconstructive surgery'),
(63, 'physical medicine and rehabilitation'),
(64, 'psychology'),
(65, 'pulmonary medicine'),
(66, 'radiology'),
(67, 'rheumatology'),
(68, 'surgery'),
(69, 'toxicology'),
(70, 'urology'),
(71, 'vascular medicine');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `start`, `end`, `title`, `body`) VALUES
(1, '2017-8-8 8:30', '2017-8-8 14:0', 'asd', 'asdasd'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '2017-8-8 8:0', '2017-8-8 20:30', 'asd', 'dddd'),
(7, '2017-8-8 8:0', '2017-8-8 20:30', 'asd', 'dddd'),
(8, '2017-8-8 8:0', '2017-8-8 20:30', 'asd', 'dddd'),
(9, '2017-8-8 8:0', '2017-8-8 20:30', 'asd', 'dddd'),
(10, '', '', '', ''),
(11, '2017-8-8 9:30', '2017-8-8 10:30', '', ''),
(12, '2017-8-8 10:0', '2017-8-8 11:0', '', ''),
(13, '2017-8-8 10:0', '2017-8-8 11:0', '', ''),
(14, '', '', '', ''),
(15, '2017-8-9 10:30', '2017-8-9 11:30', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(16) NOT NULL,
  `UN` varchar(50) NOT NULL,
  `PW` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `SQ1` text NOT NULL,
  `SQ2` text NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `fid` varchar(200) NOT NULL,
  `st` varchar(50) NOT NULL,
  `attempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UN`, `PW`, `Type`, `SQ1`, `SQ2`, `EMAIL`, `fid`, `st`, `attempts`) VALUES
(2, 'admin', 'admin', 'Administrator', '', '', '', 'admin', '', 3),
(31, 'iamdoctor', '@passworD1234', 'Doctor', '', '', 'iamdoctor@yahoo.com', '', 'Verified', 3),
(32, 'dave.lozano2016', 'QEO7ZXYU0L', 'Patient', 'kisses', 'dave', 'lozanojohndavid@gmail.com', '', 'Not Yet Verified', 3),
(33, 'jeddahlyncabuga', '@passworD1234', 'Doctor', '', '', 'cabugajeddahlyn@gmail.com', '', 'Verified', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;