-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 12:27 PM
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
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `r_id` int(50) DEFAULT NULL,
  `dist` int(50) DEFAULT NULL,
  `bits` int(50) DEFAULT NULL,
  `extra` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `r_id`, `dist`, `bits`, `extra`) VALUES
(1, 1, 33, 60, 0),
(2, 2, 80, 60, NULL),
(3, 1, 88, 60, NULL),
(4, 1, 80, 60, NULL),
(5, 1, 33, 60, NULL),
(6, 1, 80, 60, NULL),
(7, 1, 33, 60, NULL),
(8, 1, 80, 60, NULL),
(9, 1, 80, 60, NULL),
(10, 1, 80, 60, NULL),
(11, 1, 80, 60, NULL),
(12, 1, 80, 60, NULL),
(13, 1, 80, 60, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nurselist`
--

CREATE TABLE `nurselist` (
  `id` int(10) NOT NULL,
  `nm` varchar(25) NOT NULL,
  `surnm` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pincode` int(20) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurselist`
--

INSERT INTO `nurselist` (`id`, `nm`, `surnm`, `address`, `gender`, `dob`, `pincode`, `mob`, `email`, `pass`) VALUES
(1, 'Gita', 'tai', 'acahlpur', 'Female', '1998/18/05', 444809, 2147483647, 'sarveshdakhane888@gmail.com', 'gita1234'),
(2, 'rani', 'ronge', 'kolapur', 'Female', '19983/18/05', 444809, 2147483647, 'abc@gmail.com', 'password'),
(3, 'kavita', 'sarode', 'Amravati', 'Female', '1991/14/01', 444809, 7745049709, 'abc@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `patient_hist`
--

CREATE TABLE `patient_hist` (
  `P_id` int(11) NOT NULL,
  `Room_id` int(11) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `B_group` varchar(5) NOT NULL,
  `Ssubject` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `E_person` varchar(50) NOT NULL,
  `E_number` bigint(10) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `R_time` date NOT NULL,
  `dish_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_hist`
--

INSERT INTO `patient_hist` (`P_id`, `Room_id`, `F_name`, `L_name`, `DOB`, `Gender`, `Email`, `Phone`, `B_group`, `Ssubject`, `Address`, `E_person`, `E_number`, `Image`, `height`, `weight`, `R_time`, `dish_date`) VALUES
(1, 2, 'sarvesh', 'dakhane', '1998-08-18', 'Male', 'sarves@gmail.com', 7745049709, 'A+', 'project file ', 'acahlpur', 'ram', 8885544125, 'sarv.jprg', 150, 60, '2019-02-22', '2019-03-05'),
(2, 1, 'ram', 'chauhan', '1998-08-18', 'Male', 'sarves@gmail.com', 7745049705, 'A+', 'project file ', 'Amravati', 'sham', 7898455454, '5c700d4eb9975.png', 160, 60, '2019-02-22', NULL),
(3, 3, 'rocky', 'Bende', '1997-01-22', 'Male', 'abc@gmail.com', 7745049709, 'AB+', 'no', 'kolapur', 'shakti', 8885544125, '5c700ea46105d.png', 150, 80, '2019-02-22', '2019-03-06'),
(4, 9, 'sarvesh', 'Dakhane', '1998-08-18', 'Male', 'sarves@gmail.com', 7745049709, 'A+', 'project file ', 'acahlpur', 'sham', 7898455454, '5c704316ae6c2.png', 150, 60, '2019-02-23', '2019-03-02'),
(5, 1, 'Ram', 'chauhan', '1998-08-18', 'Male', 'sarveshdakhane888@gmail.com', 7745049709, 'A+', 'Cold', 'Acahlpur', 'sarvesh R. Dakhane', 7020717651, '5c7a087901c56.png', 160, 60, '2019-03-02', NULL),
(6, 5, 'gajana', 'maharaj', '1997-01-22', 'Male', 'abc@gmail.com', 8007336790, 'AB+', 'Cold', 'Sky', 'Ganpati BaBa', 8885544125, '5c7a0e70e78c2.png', 160, 80, '2019-03-02', '2019-03-02'),
(7, 2, 'sai', 'Dakhane', '1997-01-22', 'Female', 'abc@gmail.com', 7745049709, 'O-', 'Cold', 'kolapur', 'sarvesh R. Dakhane', 7890451212, '5c7a1050d6c0d.png', 160, 60, '2019-03-02', '2019-03-05'),
(8, 2, 'Sai', 'Dakhane', '1997-01-22', 'Female', 'sarveshdakhane7@GMAIL.COM', 7745049709, 'O+', 'Cold', 'kolapur', 'shakti', 7890451212, '5c7a117439bf7.png', 160, 80, '2019-03-02', '2019-03-05'),
(9, 3, 'sarvesh', 'Dakhane', '1998-08-18', 'Male', 'sarveshdakhane888@gmail.com', 7745049709, 'A+', 'Cold', 'Acahlpur', 'sham', 7890451212, '5c8122de72e98.png', 160, 60, '2019-03-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `P_id` int(11) NOT NULL,
  `Room_id` int(11) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `B_group` varchar(5) NOT NULL,
  `Ssubject` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `E_person` varchar(50) NOT NULL,
  `E_number` bigint(10) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `height` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `R_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`P_id`, `Room_id`, `F_name`, `L_name`, `DOB`, `Gender`, `Email`, `Phone`, `B_group`, `Ssubject`, `Address`, `E_person`, `E_number`, `Image`, `height`, `weight`, `R_time`) VALUES
(5, 1, 'Ram', 'chauhan', '1998-08-18', 'Male', 'sarveshdakhane888@gmail.com', 7745049709, 'A+', 'Cold', 'Acahlpur', 'sarvesh R. Dakhane', 7020717651, '5c7a087901c56.png', 160, 60, '2019-03-02'),
(6, 3, 'sarvesh', 'Dakhane', '1998-08-18', 'Male', 'sarveshdakhane888@gmail.com', 7745049709, 'A+', 'Cold', 'Acahlpur', 'sham', 7890451212, '5c8122de72e98.png', 160, 60, '2019-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `room_info`
--

CREATE TABLE `room_info` (
  `r_id` int(5) NOT NULL,
  `r_status` int(5) NOT NULL,
  `r_cline` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_info`
--

INSERT INTO `room_info` (`r_id`, `r_status`, `r_cline`) VALUES
(1, 1, 1),
(2, 0, 1),
(3, 1, 1),
(4, 0, 1),
(5, 0, 1),
(6, 0, 1),
(7, 0, 1),
(8, 0, 1),
(9, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurselist`
--
ALTER TABLE `nurselist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_hist`
--
ALTER TABLE `patient_hist`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `room_info`
--
ALTER TABLE `room_info`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nurselist`
--
ALTER TABLE `nurselist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_hist`
--
ALTER TABLE `patient_hist`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
