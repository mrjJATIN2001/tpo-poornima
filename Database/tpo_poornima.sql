-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2022 at 05:25 PM
-- Server version: 10.5.13-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18835262_tpo_poornima`
--
CREATE DATABASE IF NOT EXISTS `id18835262_tpo_poornima` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id18835262_tpo_poornima`;

-- --------------------------------------------------------

--
-- Table structure for table `add_drive`
--

CREATE TABLE `add_drive` (
  `Id` int(10) NOT NULL,
  `CompanyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `C/P` tinyint(1) NOT NULL,
  `Venue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(10) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(10) NOT NULL,
  `ODetails` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GoogleFormLink` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_drive`
--

INSERT INTO `add_drive` (`Id`, `CompanyName`, `Date`, `C/P`, `Venue`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `ODetails`, `GoogleFormLink`) VALUES
(1, 'Apple', '2015-07-23', 0, 'address', 98, 98, 90, 0, 0, 0, 'Welcome to Apple', 'https://www.google.com'),
(2, 'HP', '2013-08-19', 1, 'address', 70, 75, 75, 0, 0, 0, '0', 'https://www.google.com'),
(3, 'IBM', '2015-05-12', 0, 'CIT College', 60, 65, 65, 0, 0, 0, '0', 'https://www.google.com'),
(4, 'Intel', '2013-09-08', 0, 'address', 60, 65, 65, 0, 0, 0, '0', 'https://www.google.com'),
(5, 'Microsoft company', '2014-12-09', 0, 'CIT', 60, 65, 65, 0, 0, 0, '0', 'https://www.google.com'),
(6, 'Skype', '2014-06-10', 1, 'address', 75, 75, 75, 0, 0, 0, '0', 'https://www.google.com'),
(7, 'Tata Consultency Services', '2015-11-24', 1, 'AIE', 65, 70, 75, 0, 0, 0, '0', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `hod_login`
--

CREATE TABLE `hod_login` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Branch` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hod_login`
--

INSERT INTO `hod_login` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`, `Branch`) VALUES
(1, 'HOD CE', 'hod_ce', '1234', 'hod.cs@gmail.com', 'What is your nickname?', 'HOD', 'CE'),
(2, 'HOD CV', 'hod_cv', '1234', 'hod.cv@gmail.com', 'What is your nickname?', 'HOD', 'CV');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Id` int(10) NOT NULL,
  `Subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sender` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Id`, `Subject`, `Message`, `Sender`) VALUES
(3, 'Test', 'sdfghjkl;lkhgfd', 'HOD'),
(4, 'rhejkwehdf`', 'ioioutddfgioioufhgxjkjldgfslfjkl\r\nferferf\r\ner\r\nf\r\ner\r\nfe\r\nrf\r\ner\r\nfer\r\nf\r\ne', 'HOD'),
(5, 'kdrwtqyrioweorghejk', 'qwqeqeriueijodksjf\r\nersew\r\nsadfwa\r\nwe\r\nasdw\r\nas\r\nwas\r\ndw\r\nedw\r\n\r\nd', 'HOD'),
(6, 'oiuiutrersdtfyuhiopl', 'lkkjhgfdsadfghjkl;kjkhggfdghjkl;lkjhgfd', 'TPO'),
(7, 'resume', 'all are required to attend meeting regarding placement', 'TPO'),
(8, 'join', 'please be available on time', 'HOD'),
(9, 'join', 'please be available on time', 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`Name`, `Email`, `Subject`, `Message`) VALUES
('Test', 'test@gmail.com', 'T', 'Testing the queries section'),
('lak', 'lak@gmail.com', 'res', 'hello'),
('lak', 'lak@gmail.com', 'res', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `Id` int(10) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Sem` int(10) NOT NULL,
  `Branch` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SSLC` float NOT NULL,
  `PU/Dip` float NOT NULL,
  `BE` float NOT NULL,
  `Backlogs` int(10) NOT NULL,
  `HofBacklogs` tinyint(1) NOT NULL,
  `DetainYears` int(10) NOT NULL,
  `Approve` tinyint(1) NOT NULL,
  `ApprovalDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Id`, `FirstName`, `LastName`, `Username`, `Mobile`, `Email`, `DOB`, `Sem`, `Branch`, `SSLC`, `PU/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`, `ApprovalDate`) VALUES
(1, 'b', 'q', '1cg13cs400', 22222, 'vhs@gmil.com', '1996-03-08', 2, 'CE', 75, 75, 70, 0, 0, 0, 1, '0000-00-00'),
(2, 'd', 'w', '1cg12cs002', 66666, 'p@gmail.com', '1991-02-13', 8, 'CE', 85, 85, 85, 0, 0, 0, 1, '0000-00-00'),
(3, 'e', 'e', '1cg12cv001', 7777, 'mk@gmail.com', '1998-05-31', 7, 'CV', 99, 99, 99, 0, 0, 0, 1, '0000-00-00'),
(4, 'g', 'r', '1cg12cv002', 99999, 't@gmil.com', '1997-08-13', 4, 'CV', 65, 65, 65, 0, 0, 0, 0, '0000-00-00'),
(5, 'a', 't', '1cg12cs031', 40000, 'y@gmail.com', '2000-06-13', 5, 'CE', 41, 45, 45, 0, 0, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'Student A', 'student_a', '1234', 'student.a@gmail.com', 'What is your nickname?', 'student'),
(2, 'Student B', 'student_b', '1234', 'student.b@gmail.com', 'What is your nickname?', 'student'),
(3, 'Student C', 'student_c', '1234', 'student.c@gmail.com', 'What is your nickname?', 'student'),
(4, 'Student D', 'student_d', '1234', 'student.d@gmail.com', 'What is your nickname?', 'student'),
(5, 'Student E', 'student_e', '1234', 'student.e@gmail.com', 'What is your nickname?', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `tpo_login`
--

CREATE TABLE `tpo_login` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tpo_login`
--

INSERT INTO `tpo_login` (`Id`, `Name`, `Username`, `Password`, `Email`, `Question`, `Answer`) VALUES
(1, 'TPO', 'admin', '1234', 'admin@gmail.com', 'What is your nickname?', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `update_drive`
--

CREATE TABLE `update_drive` (
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CompanyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Attendance` tinyint(1) NOT NULL,
  `WT` tinyint(1) NOT NULL,
  `GD` tinyint(1) NOT NULL,
  `Technical` tinyint(1) NOT NULL,
  `Placed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `update_drive`
--

INSERT INTO `update_drive` (`Username`, `Name`, `CompanyName`, `Date`, `Attendance`, `WT`, `GD`, `Technical`, `Placed`) VALUES
('1cg13cs400', 'Vastala', 'HP', '2013-08-19', 1, 1, 1, 1, 1),
('1cg12cs002', 'Punith', 'IBM', '2015-05-12', 1, 1, 1, 1, 1),
('1cg12cs031', 'Yogesh', 'Tata Consultency Services', '2015-11-24', 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_drive`
--
ALTER TABLE `add_drive`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UNIQUE` (`CompanyName`,`Date`) USING BTREE;

--
-- Indexes for table `hod_login`
--
ALTER TABLE `hod_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`Id`,`Username`),
  ADD UNIQUE KEY `Username` (`Username`,`Mobile`,`Email`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tpo_login`
--
ALTER TABLE `tpo_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `update_drive`
--
ALTER TABLE `update_drive`
  ADD KEY `Username` (`Username`),
  ADD KEY `CompanyName` (`CompanyName`,`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_drive`
--
ALTER TABLE `add_drive`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hod_login`
--
ALTER TABLE `hod_login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tpo_login`
--
ALTER TABLE `tpo_login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `update_drive`
--
ALTER TABLE `update_drive`
  ADD CONSTRAINT `update_drive_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `student_details` (`Username`) ON DELETE CASCADE,
  ADD CONSTRAINT `update_drive_ibfk_2` FOREIGN KEY (`CompanyName`,`Date`) REFERENCES `add_drive` (`CompanyName`, `Date`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
