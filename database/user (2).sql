-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 01:16 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `state_id` text NOT NULL,
  `city_id` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `logtype` varchar(90) NOT NULL,
  `branch_id` text NOT NULL,
  `department_id` text NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` text NOT NULL,
  `company_name` varchar(90) NOT NULL,
  `company_code` text NOT NULL,
  `user_status` int(11) NOT NULL,
  `image` text NOT NULL,
  `permission` mediumtext NOT NULL,
  `designation` varchar(90) NOT NULL,
  `mobile_no` text NOT NULL,
  `personal_no` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lastlogged` text NOT NULL,
  `created` text NOT NULL,
  `token` text NOT NULL,
  `parent_id` text NOT NULL,
  `f_permission` mediumtext NOT NULL,
  `m_permission` mediumtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `state_id`, `city_id`, `admin_id`, `logtype`, `branch_id`, `department_id`, `name`, `email`, `password`, `company_name`, `company_code`, `user_status`, `image`, `permission`, `designation`, `mobile_no`, `personal_no`, `timestamp`, `lastlogged`, `created`, `token`, `parent_id`, `f_permission`, `m_permission`, `status`) VALUES
(1, '', '', 0, '1', '1', '1', 'Pratik Bhai', 'admin@gmail.com', '123456', '', '', 0, '15968999602.jpg', '', '', '', '', '2020-08-10 09:35:00', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
