-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 02:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_db`
--

CREATE TABLE `aadhar_db` (
  `number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar_db`
--

INSERT INTO `aadhar_db` (`number`) VALUES
('123456789'),
('987654321'),
('12');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `aadhar` varchar(50) NOT NULL,
  `aadhar_image` varchar(50) NOT NULL,
  `pan` varchar(50) NOT NULL,
  `pan_image` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `gst_image` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `income_image` varchar(50) NOT NULL,
  `domicile` varchar(50) NOT NULL,
  `domicile_image` varchar(50) NOT NULL,
  `ration` varchar(50) NOT NULL,
  `ration_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`aadhar`, `aadhar_image`, `pan`, `pan_image`, `gst`, `gst_image`, `income`, `income_image`, `domicile`, `domicile_image`, `ration`, `ration_image`) VALUES
('', '', '', ' ', '', '', '', '', '', '', '', ''),
('111', '', '', ' ', '', '', '', '', '', '', '', ''),
('666', '', '', ' ', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `subTitle1` varchar(50) NOT NULL,
  `subContent1` text NOT NULL,
  `subTitle2` varchar(50) NOT NULL,
  `subContent2` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `orgName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`title`, `content`, `subTitle1`, `subContent1`, `subTitle2`, `subContent2`, `image`, `status`, `orgName`) VALUES
('', '', '', ' ', '', '', '', 1, 'tsec'),
('aaa', 'asfa', 'sadsa', ' sad', 'asd', 'asd', '', 1, 'tsec'),
('asd', 'asd', 'asd', ' asd', 'asd', 'subcontent2', '', 0, ''),
('Charity', 'To create awarness for aids', 'Venue', 'Dadar , mumbai', 'Date ', '10th march 2019', 'marathon.jpg', 1, 'hack Society'),
('event3', 'content', 'subtitle1', 'content', 'subtitle2', 'content', 'marathon.jpg', 1, 'tsec'),
('hhh', '', '', ' ', '', '', '', 1, 'tsec'),
('Marathon', 'Marathon Event for woman Empowerment', 'Venue', 'Bandra fort to Tsec college ', 'Date and Time', 'MArathon on 10th march at 6am', 'marathon.jpg', 1, 'tsec'),
('rsp', 'qwe', 'wqe', ' qwe', 'qwe', 'qwe', '', 1, 'tsec'),
('rsp10', '', '', ' ', '', '', '', 0, 'tsec'),
('rsp2', 'qwe', 'wqe', ' qwe', 'qwe', 'qwe', '', 0, 'tsec'),
('rsp3', 'asd', 'asd', ' asd', 'asd', 'asd', '', 0, 'tsec'),
('rsp4', 'sad', 'asd', ' asd', 'asd', 'asd', '', 0, 'tsec'),
('rsp5', '', '', ' ', '', '', '', 0, 'tsec'),
('rtj', 'dsf', 'sdf', ' sdf', 'sddsf', 'sdf', '', 0, ''),
('tttt', 'werefc', 'zddfdsf', ' asdfd', 'sdfds', 'sdfdsf', '', 1, 'tsec');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `organisationName` varchar(100) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aadharNumber` varchar(12) NOT NULL,
  `cardNumber` int(16) NOT NULL,
  `cardDate` varchar(5) NOT NULL,
  `cvv` int(3) NOT NULL,
  `type` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `organisationName`, `number`, `email`, `password`, `aadharNumber`, `cardNumber`, `cardDate`, `cvv`, `type`, `id`) VALUES
('dhiren', 'hack society', 9821299636, 'dhirenpamnani@gmail.com', 'dhiren', '1111222233', 123412341, '02/08', 333, 1, 1),
('rohra', 'tsec', 9821299636, 'rrrohra200@gmail.com', '234', '222233334', 1234642, '02/12', 123, 0, 2),
('kanksha', 'tsec', 6554123, 'kanksha@gmail.com', 'ks', '1546', 32, '02/5', 22, 0, 6),
('anirudh', 'tsec', 978415, 'ani@gmail.com', '44', '64102', 84615, '02/9', 22, 0, 7),
('usman', 'tsec', 98562, 'usman@gmail.com', 'uu', '465132', 6452, '02/8', 22, 0, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
