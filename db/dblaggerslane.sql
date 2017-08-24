-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 02:14 AM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `chosentime` time NOT NULL,
  `purpose` varchar(1000) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_number` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `notify` int(11) NOT NULL,
  `reference_code` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `email`, `chosentime`, `purpose`, `patient_name`, `patient_email`, `patient_number`, `status`, `notify`, `reference_code`, `date`, `datetime`) VALUES
(90, 'cabugajeddahlyn@gmail.com', '09:30:00', 'check up', 'John David Sadia Lozano', 'lozanojohndavid@gmail.com', '9555773952', 5, 0, 'EWHYFGLQUQ', '2017-08-31', '2017-08-23 23:59:25');

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
  `title` varchar(255) NOT NULL,
  `day` date NOT NULL,
  `time_from` varchar(255) NOT NULL,
  `time_to` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time_base_from` time NOT NULL,
  `time_base_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `title`, `day`, `time_from`, `time_to`, `start`, `end`, `email`, `time_base_from`, `time_base_to`) VALUES
(87, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-14', '10 AM', '2 PM', '2017-08-14T10:00:00', '2017-08-14T14:00:00', 'cabugajeddahlyn@gmail.com', '10:00:00', '14:00:00'),
(88, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-16', '10 AM', '2 PM', '2017-08-16T10:00:00', '2017-08-16T14:00:00', 'cabugajeddahlyn@gmail.com', '10:00:00', '14:00:00'),
(107, 'Dr. iamdoctor iamdoctor iamdoctor', '2017-08-16', '10 AM', '2 PM', '2017-08-16T10:00:00', '2017-08-16T14:00:00', 'iamdoctor@yahoo.com', '10:00:00', '14:00:00'),
(108, 'Dr. demo demo demo', '2017-08-16', '10 AM', '2 PM', '2017-08-16T10:00:00', '2017-08-16T14:00:00', 'demo@yahoo.com', '10:00:00', '14:00:00'),
(109, 'Dr. Rosalito Perez De Borja', '2017-08-16', '8 AM', '1 PM', '2017-08-16T08:00:00', '2017-08-16T13:00:00', 'itoy_deborja@yahoo.com', '08:00:00', '13:00:00'),
(110, 'Dr. Rosalito Perez De Borja', '2017-08-16', '3 PM', '6 PM', '2017-08-16T03:00:00', '2017-08-16T18:00:00', 'itoy_deborja@yahoo.com', '15:00:00', '18:00:00'),
(111, 'Dr. Rosalito Perez De Borja', '2017-08-17', '3 PM', '6 PM', '2017-08-17T03:00:00', '2017-08-17T18:00:00', 'itoy_deborja@yahoo.com', '15:00:00', '18:00:00'),
(112, 'Dr. Rosalito Perez De Borja', '2017-08-17', '8 AM', '11 AM', '2017-08-17T08:00:00', '2017-08-17T11:00:00', 'itoy_deborja@yahoo.com', '08:00:00', '11:00:00'),
(113, 'Dr. Marife Ponce De Borja', '2017-08-16', '8 AM', '1 PM', '2017-08-16T08:00:00', '2017-08-16T13:00:00', 'fe_deborja@yahoo.com', '08:00:00', '13:00:00'),
(114, 'Dr. Marife Ponce De Borja', '2017-08-16', '4 PM', '9 PM', '2017-08-16T04:30:00', '2017-08-16T21:00:00', 'fe_deborja@yahoo.com', '16:30:00', '21:00:00'),
(115, 'Dr. Marife Ponce De Borja', '2017-08-17', '8 AM', '1 PM', '2017-08-17T08:00:00', '2017-08-17T13:30:00', 'fe_deborja@yahoo.com', '08:00:00', '13:30:00'),
(116, 'Dr. Carl Adriel Yamat Santos', '2017-08-16', '8 AM', '1 PM', '2017-08-16T08:00:00', '2017-08-16T13:30:00', 'chad_santos15@yahoo.com', '08:00:00', '13:30:00'),
(117, 'Dr. Carl Adriel Yamat Santos', '2017-08-16', '3 PM', '6 PM', '2017-08-16T03:30:00', '2017-08-16T18:30:00', 'chad_santos15@yahoo.com', '15:30:00', '18:30:00'),
(118, 'Dr. Carl Adriel Yamat Santos', '2017-08-17', '8 AM', '12 PM', '2017-08-17T08:00:00', '2017-08-17T12:00:00', 'chad_santos15@yahoo.com', '08:00:00', '12:00:00'),
(119, 'Dr. Jazz Reyes Reyes', '2017-08-16', '8 AM', '4 PM', '2017-08-16T08:00:00', '2017-08-16T16:00:00', 'jazzreyes16@gmail.com', '08:00:00', '16:00:00'),
(120, 'Dr. Jazz Reyes Reyes', '2017-08-17', '8 AM', '10 AM', '2017-08-17T08:00:00', '2017-08-17T10:00:00', 'jazzreyes16@gmail.com', '08:00:00', '10:00:00'),
(121, 'Dr. Cedrick Balboa Garbosa', '2017-08-16', '12 PM', '8 PM', '2017-08-16T12:30:00', '2017-08-16T20:30:00', 'cedrickdalegarbosa@gmail.com', '12:30:00', '20:30:00'),
(122, 'Dr. Cedrick Balboa Garbosa', '2017-08-17', '8 AM', '1 PM', '2017-08-17T08:00:00', '2017-08-17T13:00:00', 'cedrickdalegarbosa@gmail.com', '08:00:00', '13:00:00'),
(123, 'Dr. Jolet Fransisco Bondoc', '2017-08-16', '10 AM', '1 PM', '2017-08-16T10:00:00', '2017-08-16T13:30:00', 'jolet_bondoc@yahoo.com', '10:00:00', '13:30:00'),
(124, 'Dr. Jolet Fransisco Bondoc', '2017-08-16', '5 PM', '9 PM', '2017-08-16T05:00:00', '2017-08-16T21:00:00', 'jolet_bondoc@yahoo.com', '17:00:00', '21:00:00'),
(125, 'Dr. Jolet Fransisco Bondoc', '2017-08-17', '8 AM', '11 AM', '2017-08-17T08:00:00', '2017-08-17T11:00:00', 'jolet_bondoc@yahoo.com', '08:00:00', '11:00:00'),
(126, 'Dr. Miguel Sabandal Canon', '2017-08-16', '8 AM', '10 AM', '2017-08-16T08:00:00', '2017-08-16T10:30:00', 'miguelangelocanon@gmail.com', '08:00:00', '10:30:00'),
(128, 'Dr. Miguel Sabandal Canon', '2017-08-17', '3 PM', '6 PM', '2017-08-17T03:00:00', '2017-08-17T18:00:00', 'miguelangelocanon@gmail.com', '15:00:00', '18:00:00'),
(129, 'Dr. Gem Tan Latumbo', '2017-08-16', '8 AM', '12 PM', '2017-08-16T08:00:00', '2017-08-16T12:00:00', 'gemadrianlatumbo@gmail.com', '08:00:00', '12:00:00'),
(130, 'Dr. Gem Tan Latumbo', '2017-08-16', '3 PM', '7 PM', '2017-08-16T03:00:00', '2017-08-16T19:30:00', 'gemadrianlatumbo@gmail.com', '15:00:00', '19:30:00'),
(131, 'Dr. Gem Tan Latumbo', '2017-08-17', '3 PM', '7 PM', '2017-08-17T03:00:00', '2017-08-17T19:30:00', 'gemadrianlatumbo@gmail.com', '15:00:00', '19:30:00'),
(132, 'Dr. Lita Flores Ponce', '2017-08-16', '8 AM', '10 AM', '2017-08-16T08:00:00', '2017-08-16T10:30:00', 'litaponce1023@gmail.com', '08:00:00', '10:30:00'),
(133, 'Dr. Lita Flores Ponce', '2017-08-16', '3 PM', '7 PM', '2017-08-16T03:00:00', '2017-08-16T19:00:00', 'litaponce1023@gmail.com', '15:00:00', '19:00:00'),
(134, 'Dr. Oyie Noriel Dimatulach', '2017-08-16', '8 AM', '12 PM', '2017-08-16T08:00:00', '2017-08-16T12:00:00', 'oyiedimatulach@yahoo.com', '08:00:00', '12:00:00'),
(135, 'Dr. Oyie Noriel Dimatulach', '2017-08-17', '8 AM', '12 PM', '2017-08-17T08:00:00', '2017-08-17T12:00:00', 'oyiedimatulach@yahoo.com', '08:00:00', '12:00:00'),
(136, 'Dr. Oyie Noriel Dimatulach', '2017-08-18', '8 AM', '12 PM', '2017-08-18T08:00:00', '2017-08-18T12:00:00', 'oyiedimatulach@yahoo.com', '08:00:00', '12:00:00'),
(138, 'Dr. Marcus Dabandan Marticio', '2017-08-16', '8 AM', '11 AM', '2017-08-16T08:00:00', '2017-08-16T11:30:00', 'chillman907@gmail.com', '08:00:00', '11:30:00'),
(140, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-21', '8 AM', '10 AM', '2017-08-21T08:00:00', '2017-08-21T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(141, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-22', '8 AM', '10 AM', '2017-08-22T08:00:00', '2017-08-22T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(142, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-23', '8 AM', '10 AM', '2017-08-23T08:00:00', '2017-08-23T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(143, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-25', '8 AM', '10 AM', '2017-08-25T08:00:00', '2017-08-25T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(144, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-28', '8 AM', '10 AM', '2017-08-28T08:00:00', '2017-08-28T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(145, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-30', '8 AM', '10 AM', '2017-08-30T08:00:00', '2017-08-30T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(146, 'Dr. Jeddahlyn Linzag Cabuga', '2017-08-31', '8 AM', '10 AM', '2017-08-31T08:00:00', '2017-08-31T10:00:00', 'cabugajeddahlyn@gmail.com', '08:00:00', '10:00:00'),
(147, 'Dr. Fake  Doctor', '2017-09-04', '8 AM', '2 PM', '2017-09-04T08:00:00', '2017-09-04T14:00:00', 'fakedoctor@gmail.com', '08:00:00', '14:00:00'),
(149, 'Dr. Fake  Doctor', '2017-09-08', '8 AM', '2 PM', '2017-09-08T08:00:00', '2017-09-08T14:00:00', 'fakedoctor@gmail.com', '08:00:00', '14:00:00'),
(150, 'Dr. Fake  Doctor', '2017-09-12', '9 AM', '1 PM', '2017-09-12T09:00:00', '2017-09-12T13:00:00', 'fakedoctor@gmail.com', '09:00:00', '13:00:00'),
(151, 'Dr. Fake  Doctor', '2017-09-14', '9 AM', '1 PM', '2017-09-14T09:00:00', '2017-09-14T13:00:00', 'fakedoctor@gmail.com', '09:00:00', '13:00:00'),
(152, 'Dr. Fake  Doctor', '2017-08-30', '8 AM', '12 PM', '2017-08-30T08:30:00', '2017-08-30T12:30:00', 'fakedoctor@gmail.com', '08:30:00', '12:30:00'),
(153, 'Dr. Fake  Doctor', '2017-08-28', '8 AM', '12 PM', '2017-08-28T08:30:00', '2017-08-28T12:30:00', 'fakedoctor@gmail.com', '08:30:00', '12:30:00');

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
(46, 'Cabuga', 'Jeddahlyn', 'Linzag', '', 'Female', '15', 'endocrinology', '095448484844', 'cabugajeddahlyn@gmail.com', 3),
(48, 'De Borja', 'Rosalito', 'Perez', '', 'Male', '5', 'endocrinology', '09279582440', 'itoy_deborja@yahoo.com', 3),
(49, 'De Borja', 'Marife', 'Ponce', '', 'Female', '4', 'endocrinology', '09420001787', 'fe_deborja@yahoo.com', 3),
(50, 'Santos', 'Carl Adriel', 'Yamat', '', 'Male', '5', 'endocrinology', '09257280238', 'chad_santos15@yahoo.com', 3),
(51, 'Reyes', 'Jazz', 'Reyes', '', 'Male', '7', 'endocrinology', '09062313617', 'jazzreyes16@gmail.com', 3),
(52, 'Garbosa', 'Cedrick', 'Balboa', '', 'Male', '7', 'endocrinology', '09123453254', 'cedrickdalegarbosa@gmail.com', 3),
(53, 'Bondoc', 'Jolet', 'Fransisco', '', 'Male', '9', 'endocrinology', '09124560192', 'jolet_bondoc@yahoo.com', 3),
(54, 'Canon', 'Miguel', 'Sabandal', '', 'Male', '8', 'endocrinology', '09234501029', 'miguelangelocanon@gmail.com', 3),
(55, 'Latumbo', 'Gem', 'Tan', '', 'Male', '6', 'endocrinology', '09150929283', 'gemadrianlatumbo@gmail.com', 3),
(56, 'Ponce', 'Lita', 'Flores', '', 'Female', '12', 'endocrinology', '09220941203', 'litaponce1023@gmail.com', 3),
(57, 'Dimatulach', 'Oyie', 'Noriel', '', 'Male', '5', 'endocrinology', '09234569192', 'oyiedimatulach@yahoo.com', 3),
(58, 'Marticio', 'Marcus', 'Dabandan', '', 'Male', '7', 'adult pulmonary medicine', '09970797547', 'chillman907@gmail.com', 3),
(59, 'Doctor', 'Fake', '', '', 'Male', '5', 'dermatology', '09261588384', 'fakedoctor@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_rating`
--

CREATE TABLE `doctor_rating` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_rating`
--

INSERT INTO `doctor_rating` (`id`, `doctor_name`, `specialization`, `ratings`, `ip`) VALUES
(18, 'Jeddahlyn Linzag Cabuga ', 'endocrinology', '5', '::1'),
(19, 'Jeddahlyn Linzag Cabuga ', 'endocrinology', '5', '110.54.220.186'),
(20, 'Marcus Dabandan Marticio ', 'adult pulmonary medicine', '1', '110.54.220.186');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_upload`
--

CREATE TABLE `doctor_upload` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `reference_code` varchar(255) NOT NULL,
  `findings` varchar(1000) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_upload`
--

INSERT INTO `doctor_upload` (`id`, `email`, `patient_name`, `patient_email`, `filename`, `reference_code`, `findings`, `date`) VALUES
(72, 'cabugajeddahlyn@gmail.com', 'John David Sadia Lozano', 'lozanojohndavid@gmail.com', 'adminpicture1.png', 'QJHQVGPLNX', 'test', '08-14-2017'),
(73, 'cabugajeddahlyn@gmail.com', 'Ralph Joseph Ponce De Borja', 'ralph_deborja@yahoo.com', 'YDXJ2507.jpg', 'YSAQYGLYEH', '', '08-14-2017'),
(74, 'jazzreyes16@gmail.com', 'Ralph Joseph Ponce De Borja', 'ralph_deborja@yahoo.com', 'YDXJ2309.jpg', 'BSDDUOHPCA', 'ralphjoseph', '08-15-2017'),
(75, 'chillman907@gmail.com', 'Ralph Joseph Ponce De Borja', 'ralph_deborja@yahoo.com', 'De Borja.docx', 'BSYVZJGQAE', 'Pogi pogi mo', '08-15-2017');

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
('admin', 'Laggers', 'Lane', '', '', 'Programmer', 'IT', 'laggerslane@gmail.com', '');

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
(14, '24', '2017-08-10 21:38:01'),
(15, '25', '2017-08-11 12:28:35'),
(16, '25', '2017-08-11 12:30:38'),
(17, '25', '2017-08-11 15:36:37'),
(18, '25', '2017-08-11 16:04:30'),
(19, '25', '2017-08-11 16:38:56'),
(20, '25', '2017-08-11 16:51:26'),
(21, '25', '2017-08-11 20:50:48'),
(22, '25', '2017-08-11 21:03:39'),
(23, '25', '2017-08-11 23:01:17'),
(24, '25', '2017-08-11 23:33:08'),
(25, '25', '2017-08-12 00:00:29'),
(26, '25', '2017-08-12 00:17:59'),
(27, '25', '2017-08-12 02:16:29'),
(28, '25', '2017-08-12 03:05:41'),
(29, '25', '2017-08-12 03:25:09'),
(30, '25', '2017-08-12 03:32:44'),
(31, '25', '2017-08-12 03:34:26'),
(32, '25', '2017-08-12 04:05:06'),
(33, '25', '2017-08-12 04:19:44'),
(34, '25', '2017-08-12 06:38:31'),
(35, '25', '2017-08-12 06:42:38'),
(36, '25', '2017-08-12 06:43:52'),
(37, '25', '2017-08-12 10:56:49'),
(38, '25', '2017-08-12 11:00:33'),
(39, '25', '2017-08-12 11:55:25'),
(40, '25', '2017-08-12 17:22:50'),
(41, '25', '2017-08-12 18:34:27'),
(42, '25', '2017-08-12 18:40:13'),
(43, '25', '2017-08-16 20:06:23'),
(44, '25', '2017-08-16 20:41:37'),
(45, '25', '2017-08-16 21:50:29'),
(46, '25', '2017-08-14 03:21:14'),
(47, '25', '2017-08-14 03:21:40'),
(48, '25', '2017-08-14 03:21:51'),
(49, '25', '2017-08-14 03:33:36'),
(50, '25', '2017-08-14 03:53:00'),
(51, '25', '2017-08-14 04:40:28'),
(52, '25', '2017-08-14 05:06:06'),
(53, '28', '2017-08-14 08:16:00'),
(54, '25', '2017-08-14 09:28:36'),
(55, '25', '2017-08-14 09:41:43'),
(56, '25', '2017-08-14 09:43:25'),
(57, '25', '2017-08-14 09:46:37'),
(58, '25', '2017-08-14 09:50:42'),
(59, '25', '2017-08-14 09:57:05'),
(60, '25', '2017-08-14 10:44:38'),
(61, '28', '2017-08-14 13:18:16'),
(62, '25', '2017-08-14 15:13:09'),
(63, '25', '2017-08-14 15:57:47'),
(64, '28', '2017-08-15 02:39:32'),
(65, '28', '2017-08-15 02:41:08'),
(66, '28', '2017-08-15 02:46:19'),
(67, '28', '2017-08-15 02:48:51'),
(68, '28', '2017-08-15 02:59:13'),
(69, '28', '2017-08-15 02:59:53'),
(70, '28', '2017-08-15 06:12:57'),
(71, '28', '2017-08-15 06:14:36'),
(72, '28', '2017-08-15 06:19:37'),
(73, '28', '2017-08-15 06:27:55'),
(74, '28', '2017-08-15 06:36:30'),
(75, '28', '2017-08-15 07:13:35'),
(76, '28', '2017-08-15 07:17:23'),
(77, '28', '2017-08-15 07:35:18'),
(78, '25', '2017-08-17 16:36:53'),
(79, '25', '2017-08-18 03:30:29'),
(80, '25', '2017-08-18 03:42:25'),
(81, '25', '2017-08-18 08:00:55'),
(82, '29', '2017-08-18 10:27:05'),
(83, '25', '2017-08-18 10:37:25'),
(84, '25', '2017-08-16 23:31:18'),
(85, '28', '2017-08-17 02:23:04'),
(86, '45', '2017-08-17 02:26:06'),
(87, '28', '2017-08-17 02:30:00'),
(88, '25', '2017-08-17 07:30:11'),
(89, '28', '2017-08-18 05:02:20'),
(90, '28', '2017-08-18 06:13:47'),
(91, '25', '2017-08-19 17:21:59'),
(92, '25', '2017-08-19 17:23:24'),
(93, '25', '2017-08-19 17:38:01'),
(94, '28', '2017-08-20 05:53:38'),
(95, '46', '2017-08-20 06:03:22'),
(96, '28', '2017-08-23 07:43:28'),
(97, '47', '2017-08-23 07:55:52'),
(98, '47', '2017-08-23 07:59:55'),
(99, '47', '2017-08-24 02:25:39'),
(100, '47', '2017-08-24 02:39:11'),
(101, '47', '2017-08-24 05:47:12'),
(102, '47', '2017-08-24 05:59:04'),
(103, '47', '2017-08-24 06:02:01'),
(104, '25', '2017-08-23 22:58:07'),
(105, '25', '2017-08-23 23:01:44');

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
  `RELIGION` varchar(50) NOT NULL,
  `ADDRESS` text NOT NULL,
  `CONDOMINIUM` varchar(255) NOT NULL,
  `BARANGAY` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `BLOOD_TYPE` varchar(15) NOT NULL,
  `CONTACT_NUMBER` varchar(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `LN`, `FN`, `MN`, `SN`, `GENDER`, `WEIGHT`, `HEIGHT`, `BIRTHDAY`, `BIRTHPLACE`, `CIVILSTATUS`, `NATIONALITY`, `RELIGION`, `ADDRESS`, `CONDOMINIUM`, `BARANGAY`, `CITY`, `BLOOD_TYPE`, `CONTACT_NUMBER`, `EMAIL`) VALUES
(25, 'Lozano', 'John David', 'Sadia', '', 'Male', '176', '5\'6', '1994-03-31', 'Quezon City', 'Married', 'Filipino', 'Islam', 'Quezon City', '', '', '', 'AB Positive', '9555773952', 'lozanojohndavid@gmail.com'),
(28, 'De Borja', 'Ralph Joseph', 'Ponce', '', 'Male', '176', '5\'8', '1993-10-17', 'Pateros', 'Single', 'Filipino', 'Catholic', '953 P. Herrera St. Pateros M.M', '', '', '', 'A ', '09163453220', 'ralph_deborja@yahoo.com'),
(45, 'De Borja', 'Ross Joshua', 'Ponce', '', 'Male', '140', '5\'9', '1991-10-31', 'Pateros', 'Single', 'Filipino', 'Catholic', '953 P. Herrera St', '', 'Aguho', 'Metro Manila', 'A', '09163423250', 'ralphjosephdeborja11@gmail.com'),
(46, 'demo', 'demo', 'demo', 'demo', 'Male', 'demo', 'demo', '1993-10-17', 'demo', 'Single', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo'),
(47, 'Paganpan', 'Jaycee', '', '', 'Male', '60', '5.2', '1996-10-13', 'Manila', 'Single', 'Filipino', 'INC', '2546 Kasarinlan st', '', '883', 'Manila', 'A', '09261588384', 'jayceepaganpan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_email` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `reference_code` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `patient_name`, `patient_email`, `doctor_name`, `doctor_email`, `amount`, `reference_code`, `date`) VALUES
(17, 'John David Sadia Lozano', 'lozanojohndavid@gmail.com', 'Jeddahlyn Linzag Cabuga', 'cabugajeddahlyn@gmail.com', 1000, 'AEYIEZAZFD', 'August 13,  2017 02:59 AM'),
(19, 'John David Sadia Lozano', 'lozanojohndavid@gmail.com', 'Jeddahlyn Linzag Cabuga', 'cabugajeddahlyn@gmail.com', 3000, 'QJHQVGPLNX', 'August 14,  2017 11:50 AM'),
(20, 'John David Sadia Lozano', 'lozanojohndavid@gmail.com', 'Jeddahlyn Linzag Cabuga', 'cabugajeddahlyn@gmail.com', 500, 'PBOBFATDOC', 'August 14,  2017 05:30 PM'),
(21, 'Ralph Joseph Ponce De Borja', 'ralph_deborja@yahoo.com', 'Jazz Reyes Reyes', 'jazzreyes16@gmail.com', 500, 'BSDDUOHPCA', 'August 15,  2017 10:43 AM'),
(22, 'Ralph Joseph Ponce De Borja', 'ralph_deborja@yahoo.com', 'Marcus Dabandan Marticio', 'chillman907@gmail.com', 500, 'BSYVZJGQAE', 'August 15,  2017 02:16 PM'),
(23, 'Ralph Joseph Ponce De Borja', 'ralph_deborja@yahoo.com', 'Marcus Dabandan Marticio', 'chillman907@gmail.com', 500, 'JEAYWLYWTN', 'August 15,  2017 02:42 PM'),
(24, 'Jaycee  Paganpan', 'jayceepaganpan@gmail.com', 'Jeddahlyn Linzag Cabuga', 'cabugajeddahlyn@gmail.com', 500, 'CECLXAADLF', 'August 24,  2017 10:43 AM'),
(25, 'Jaycee  Paganpan', 'jayceepaganpan@gmail.com', 'Jeddahlyn Linzag Cabuga', 'cabugajeddahlyn@gmail.com', 600, 'TACHTLPQVJ', 'August 24,  2017 10:43 AM');

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
(2, 'admin', 'admin', 'Administrator', '', '', '', 'admin', 'Verified', 3),
(31, 'iamdoctor', '@passworD1234', 'Doctor', '', '', 'iamdoctor@yahoo.com', '', 'Verified', 3),
(33, 'jeddahlyncabuga', '@passworD1234', 'Doctor', '', '', 'cabugajeddahlyn@gmail.com', '', 'Verified', 3),
(34, 'dave.lozano2016', '12345123', 'Patient', 'kisses', 'dave', 'lozanojohndavid@gmail.com', '', 'Verified', 2),
(37, 'ralphdeborja', 'ralph123', 'Patient', 'bimon', 'rap', 'jayceepaganpan@gmail.com', '', 'Verified', 1),
(38, 'demo', '@passworD1234', 'Doctor', '', '', 'demo@yahoo.com', '', 'Verified', 3),
(39, 'itoydeborja', '@passworD1234', 'Doctor', '', '', 'itoy_deborja@yahoo.com', '', 'Verified', 3),
(40, 'fedeborja', '@passworD1234', 'Doctor', '', '', 'fe_deborja@yahoo.com', '', 'Verified', 3),
(41, 'chadsantos', '@passworD1234', 'Doctor', '', '', 'chad_santos15@yahoo.com', '', 'Verified', 3),
(42, 'jazzreyes', '@passworD1234', 'Doctor', '', '', 'jazzreyes16@gmail.com', '', 'Verified', 3),
(43, 'cedrickgarbosa', '@passworD1234', 'Doctor', '', '', 'cedrickdalegarbosa@gmail.com', '', 'Verified', 3),
(44, 'joletbondoc', '@passworD1234', 'Doctor', '', '', 'jolet_bondoc@yahoo.com', '', 'Verified', 3),
(45, 'miguelcanon', '@passworD1234', 'Doctor', '', '', 'miguelangelocanon@gmail.com', '', 'Verified', 3),
(46, 'gemlatumbo', '@passworD1234', 'Doctor', '', '', 'gemadrianlatumbo@gmail.com', '', 'Verified', 3),
(47, 'litaponce', '@passworD1234', 'Doctor', '', '', 'litaponce1023@gmail.com', '', 'Verified', 3),
(48, 'oyiedimatulach', '@passworD1234', 'Doctor', '', '', 'oyiedimatulach@yahoo.com', '', 'Verified', 3),
(49, 'DocMarcus', 'Surfsterss@7', 'Doctor', '', '', 'chillman907@gmail.com', '', 'Verified', 3),
(50, 'EmjayMarticio', 'Surfsterss@07', 'Patient', 'rapp', 'mj', 'martinjohnmarticio@gmail.com', '', 'Not Yet Verified', 3),
(76, 'rossdeborja', '@passworD1234', 'Patient', 'bimon', 'ro', 'ralphjosephdeborja11@gmail.com', '', 'Verified', 3),
(77, 'demodemodemo', '@passworD1234', 'Patient', 'demo', 'demo', 'demo', '', 'Verified', 3),
(78, 'Jaycee', 'Lyr@0131', 'Patient', 'dawg', 'blue', 'jayceepaganpan@gmail.com', '', 'Verified', 3),
(79, 'fakedoctor', 'F@k3doctor', 'Doctor', '', '', 'fakedoctor@gmail.com', '', 'Verified', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `doctor_rating`
--
ALTER TABLE `doctor_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_upload`
--
ALTER TABLE `doctor_upload`
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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `doctor_rating`
--
ALTER TABLE `doctor_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `doctor_upload`
--
ALTER TABLE `doctor_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
