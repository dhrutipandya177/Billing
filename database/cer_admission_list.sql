-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 01:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cer_admission_list`
--

CREATE TABLE `cer_admission_list` (
  `ad_id` int(11) NOT NULL,
  `depart` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `sname` text NOT NULL,
  `gr_id` int(11) NOT NULL,
  `con_no` int(255) NOT NULL,
  `course` text NOT NULL,
  `branch` varchar(11) NOT NULL,
  `start_date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `end_date` date NOT NULL,
  `issue_date` date NOT NULL,
  `grade` varchar(10) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cer_admission_list`
--

INSERT INTO `cer_admission_list` (`ad_id`, `depart`, `regno`, `sname`, `gr_id`, `con_no`, `course`, `branch`, `start_date`, `duration`, `end_date`, `issue_date`, `grade`, `status`) VALUES
(1, 'design', 'RNWDESIGN0001', 'Radhika Mehta', 4534, 789632145, 'CERTIFICATE  IN  FINANCIAL  ACCOUNTING', 'AK ROAD', '2021-04-21', 2, '2021-07-14', '2021-08-03', 'A', 'APROOVED'),
(3, 'multimedia', 'RNWMULTIN0002', 'Dhruti Pandya', 5050, 987924128, 'CERTIFICATE IN SOLIDWORKS', 'YOGI CHOWK', '2021-02-23', 6, '2021-07-14', '2021-08-03', 'B+', 'APROOVED'),
(4, 'multimedia', 'RNWMULTIN0001', 'kaushal Raval', 1234, 741258963, 'CERTIFICATE IN AUTOCAD & CREO PARAMETRIC', 'SARTHANA', '2021-05-11', 3, '2021-07-30', '2021-08-11', 'A+', 'PANDING'),
(5, 'multimedia', 'RNWMULTIN0003', 'Vandana chawala', 2345, 987924128, 'CERTIFICATE IN AUTOCAD & CREO PARAMETRIC', 'SARTHANA', '2021-05-17', 6, '2021-07-12', '2021-08-10', 'A+', 'APROOVED'),
(6, 'multimedia', 'RNWMULTIN0004', 'hdghdgh', 5633, 987412563, 'CERTIFICATE IN V-RAY', 'SARTHANA', '2021-08-01', 5, '2021-09-01', '2021-08-12', 'A', 'APROOVED'),
(10, 'Design', 'RNWMULTIN0005', 'Jayesh Patel', 1010, 2147483647, 'CERTIFICATE IN AUTOCAD', 'MOTA VARACH', '2021-08-04', 5, '2021-11-11', '2021-08-18', 'A', 'PANDING'),
(12, 'Design', 'RNW000120821', 'Uma Zaveri', 2030, 2147483647, 'CERTIFICATE IN WEB DESIGNING', 'MOTA VARACH', '2021-08-06', 3, '2021-10-01', '2021-08-27', 'B+', 'APROOVED'),
(14, 'Multimedia', 'RNW000130821', 'Kaushal Acharya', 1020, 2147483647, 'CERTIFICATE IN FINANCIAL ACCOUNTING', 'AK ROAD', '2021-04-06', 4, '2021-08-01', '2021-08-15', 'B+', 'PANDING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cer_admission_list`
--
ALTER TABLE `cer_admission_list`
  ADD PRIMARY KEY (`ad_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cer_admission_list`
--
ALTER TABLE `cer_admission_list`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
