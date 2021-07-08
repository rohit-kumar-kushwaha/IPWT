-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 06:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `student_id` varchar(255) NOT NULL,
  `class` varchar(10) NOT NULL,
  `board` varchar(50) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `roll_no` varchar(30) NOT NULL,
  `registration_no` varchar(30) NOT NULL,
  `full_marks` int(11) NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `division` varchar(10) NOT NULL,
  `marks_sheet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`student_id`, `class`, `board`, `institution`, `year`, `roll_no`, `registration_no`, `full_marks`, `obtained_marks`, `division`, `marks_sheet`) VALUES
('20210', '10th', 'BSEB patna', 'raj school', 2021, '500', '35001', 500, 332, '1st', 'upload_document/20210doc10.pdf'),
('20210', '12th', 'BSEB patna', 'RLSY college', 2014, '500', '3501', 500, 272, '2nd', 'upload_document/20210doc12.pdf'),
('20211', '10th', 'BSEB Patna', 'Rah school', 2021, '0608', '35001', 500, 332, '1st', 'upload_document/20211doc10.pdf'),
('20211', '12th', 'BSEB Patna', 'RLSY College', 2014, '10413', '3501', 500, 272, '2nd', 'upload_document/20211doc12.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `student_id` varchar(255) NOT NULL,
  `village` varchar(30) NOT NULL,
  `po` varchar(30) DEFAULT NULL,
  `ps` varchar(30) NOT NULL,
  `distric` varchar(30) NOT NULL,
  `pin` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`student_id`, `village`, `po`, `ps`, `distric`, `pin`, `state`, `status`) VALUES
('20210', 'arnahawa', 'chanayan bandh', 'majholiya', 'west champaran', '845454', 'bihar', 'permanent address'),
('20210', 'arnahawa', 'chanayan bandh', 'majholiya', 'west champaran', '845454', 'bihar', 'current address'),
('20211', 'Arnahawa', 'Chanayan Bandh', 'Majholiya', 'West Champaran', '845454', 'Bihar', 'permanent address'),
('20211', 'Arnahawa', 'Chanayan Bandh', 'Majholiya', 'West Champaran', '845454', 'Bihar', 'current address');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
('voc2', 'BBA'),
('voc1', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `student_id` varchar(255) NOT NULL,
  `course_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`student_id`, `course_id`) VALUES
('20210', 'voc1'),
('20211', 'voc1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `student_id` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`student_id`, `payment_id`, `amount`, `date`) VALUES
('20210', 'pay_HRwpWhCOJVrvLe', 250, '2021-06-27 06:14:01'),
('20211', 'admin', 250, '2021-07-04 07:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `gurdian_name` varchar(30) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `domicile_state` varchar(15) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cast` varchar(15) NOT NULL,
  `cast_certificate` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `payment_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `mother_name`, `gurdian_name`, `occupation`, `nationality`, `domicile_state`, `sex`, `dob`, `mobile`, `religion`, `email`, `cast`, `cast_certificate`, `photo`, `signature`, `payment_status`) VALUES
('20210', 'Aditya kumar', 'dayanand prashad kushwaha', 'krishnawati devi', 'dayanad prashadkushwaha', 'farmer', 'indian', 'bihar', ' male', '1996-08-16', '9661434551', 'hindu', 'rohit@gmail.com', 'BC2', 'upload_document/20210caste.pdf', 'upload_img/20210pic.jpg', 'upload_img/20210sig.jpg', 'complete'),
('20211', 'Rohit Kumar', 'Dayanand Prashad Kushwaha', 'Krishnawati Devi', 'Dayanand Prashad Kushwaha', 'Farmer', 'Indian', 'Bihar', ' male', '1996-08-16', '9661434551', 'Hindu', 'rohit3888kumar@gmail.com', 'BC2', 'upload_document/20211caste.pdf', 'upload_img/20211pic.jpg', 'upload_img/20211sig.jpg', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `email`, `mobile`, `password`, `cpassword`, `id`) VALUES
('Rohit Kumar', 'rohit@gmail.com', '1478523690', '$2y$10$kf4xL9LT1dXXw45WMDXM9uW7e6QJe3a9Maw9hHzYfLJpcIJCtsgnm', '$2y$10$CNUpqy6nlSvOALxaMBwvJeGf.oP8rzRhYrYONDA1BxPSYg7WXigDy', '$2y$10$9dDQ3wdxUscNsmXY/xJyluSXVSe.HEYUmWi5hsaSN0DCuCuXqOd42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `mobile`, `password`, `cpassword`) VALUES
('Rani kumari', 'rani@gmail.com', '7896541203', '$2y$10$xFhO6Zh/WvHz8b1zIjSUXu9roORMApwWvdaDcdnKBmrZ/9Px4cvfW', '$2y$10$JveAYKeh8/lrdcmp/bo.pe5Hiw.9Ik/CgHQVR2d/SrF2xwlMumKRm'),
('Aditya kumar', 'rohit.pumca@gmail.com', '1236547896', '$2y$10$JLs01G5RgcfDk0iN8WPgSOKNfd8X8A7hocpirUIh1FEfBGYHyk1pu', '$2y$10$oOIK/2lcLzDxnl8k5lyyZ.r.73oFClqRN6goxt30xIal2LW.R5Cgi'),
('Rohit Kumar', 'rohit3888kumar@gmail.com', '1236547890', '$2y$10$t1e/JzyT4beJrD2gS9vXLeCQRcuqT5ty/t3QhgZCGC1nP3lqwqgyy', '$2y$10$yFnHMnuV2LGlVzhuXs7wG.wBWudabpG0SmbmVWvBM46sEuXhsPZL2'),
('Rohit kumar', 'rohit@gmail.com', '9661434551', '$2y$10$nhYiReBQODed8vVqN1kFcuutD0yM78oof6KusDfuH6fgSZKv44Icy', '$2y$10$CPNUaen8Bv34aAaUNbgZNOyy.ma6lZXO0FWjfLErxTpi/GgwlV5BS'),
('Smriti Kumari', 'smriti@gmail.com', '1236547890', '$2y$10$f3tEcgFs2ng1LI4W9dtQZuE2AqTfP/usp0/7w67akJGzeNOQMXG2q', '$2y$10$dv/xzPvegaokOjtu6anwje/OERqeh5Po4ZAGs6jxOxBnmz89OO.nS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD KEY `student_id` (`student_id`) USING BTREE;

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_name` (`course_name`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
