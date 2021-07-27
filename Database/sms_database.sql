-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 10:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_database`
--

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'akbar@gmail.com', '112233'),
(2, 'sabri@gmail.com', '112233');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(255) NOT NULL,
  `faculty_password` varchar(255) NOT NULL,
  `faculty_email` varchar(255) NOT NULL,
  `faculty_mobile` varchar(255) NOT NULL,
  `faculty_gender` varchar(255) NOT NULL,
  `faculty_address` varchar(255) NOT NULL,
  `faculty_subject1` varchar(255) NOT NULL,
  `faculty_subject2` varchar(255) NOT NULL,
  `faculty_subject3` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_id`, `faculty_password`, `faculty_email`, `faculty_mobile`, `faculty_gender`, `faculty_address`,  `faculty_subject1`, `faculty_subject2`, `faculty_subject3`, `salary`) 
VALUES
(1, 'sohail@gmail.com', '112233', 'sohailnasir00@gmail.com', '090078601', 'male', 'H#1 St#2 johar town, lahore', 'English', 'Urdu', 'Islamiyat', '1000'),
(2, 'aneeqa@gmail.com', '112233', 'aneeqa.ilyas7@gmail.com', '090078601', 'female', 'H#1 St#2 johar town, lahore', 'Maths', 'Physics', 'Chemistry', '500');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `guardian_email` varchar(255) NOT NULL,
  `student_mobile` varchar(255) NOT NULL,
  `guardian_mobile` varchar(255) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_batch` varchar(255) NOT NULL,
  `student_semester` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `student_password`, `student_name`, `student_email`, `guardian_email`, `student_mobile`, `guardian_mobile`, `student_dob`, `student_gender`, `student_batch`, `student_semester`, `student_address`) 
VALUES
(1, 'aneeqa@gmail.com', '112233', 'anneqa ilyas', 'aneeqa.ilyas7@gmail.com', 'ilyas.kamboh7@gmail.com', '090078601', '090078601', '29-2-1999', 'female', 'A', '6', 'H#1 St#2 johar town, lahore');
INSERT INTO `student` (`id`, `student_id`, `student_password`, `student_name`, `student_email`, `guardian_email`, `student_mobile`, `guardian_mobile`, `student_dob`, `student_gender`, `student_batch`, `student_semester`, `student_address`) 
VALUES
(2, 'akbar@gmail.com', '112233', 'akbar sabri', 'akbar.sabri@gmail.com', 'ilyas.kamboh7@gmail.com', '090078601', '090078601', '29-2-1999', 'female', 'A', '6', 'H#1 St#2 johar town, lahore');
INSERT INTO `student` (`id`, `student_id`, `student_password`, `student_name`, `student_email`, `guardian_email`, `student_mobile`, `guardian_mobile`, `student_dob`, `student_gender`, `student_batch`, `student_semester`, `student_address`) 
VALUES
(3, 'ayeshagmail.com', '112233', 'ayesha shahid', 'ayesha.shahid@gmail.com', 'akujna@gmail.com', '090078601', '090078601', '29-2-1999', 'female', 'A', '6', 'H#1 St#2 johar town, lahore');
INSERT INTO `student` (`id`, `student_id`, `student_password`, `student_name`, `student_email`, `guardian_email`, `student_mobile`, `guardian_mobile`, `student_dob`, `student_gender`, `student_batch`, `student_semester`, `student_address`) 
VALUES
(4, 'tooba@gmail.com', '112233', 'tooba ilyas', 'tooba@gmail.com', 'ilyas.kamboh7@gmail.com', '090078601', '090078601', '29-2-1999', 'female', 'A', '6', 'H#1 St#2 johar town, lahore');


--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `fee` (`id`, `student_id`, `month`, `fee`) 
VALUES
(1, 'anneqa@gmail.com', 'march', '400');


--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `class` (`id`, `class_id`, `section`, `room`) 
VALUES
(1, 'wad', 'A', 'cl 102');

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tmarks` varchar(255) NOT NULL,
  `omarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `marks` (`id`, `student_id`, `description`, `tmarks`, `omarks`) 
VALUES
(1, 'aneeqa@gmail.com', 'quiz for PHP', '10', '8');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
