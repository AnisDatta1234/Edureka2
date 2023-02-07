-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 01:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `calling2`
--

CREATE TABLE `calling2` (
  `id` int(11) NOT NULL,
  `channel_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `next_step` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `number` bigint(50) NOT NULL,
  `assigned_to` varchar(200) NOT NULL,
  `time_from` varchar(200) NOT NULL,
  `time_to` varchar(200) NOT NULL,
  `modify_by` varchar(200) NOT NULL,
  `modify_time` varchar(200) NOT NULL,
  `auto_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calling2`
--

INSERT INTO `calling2` (`id`, `channel_id`, `customer_id`, `next_step`, `schedule`, `remark`, `number`, `assigned_to`, `time_from`, `time_to`, `modify_by`, `modify_time`, `auto_id`) VALUES
(30, 3, 2, 'Re-scheduled', '2023-01-20', 'Nill', 8981821270, 'Anis Datta', '', '', 'none', 'none', 240),
(31, 7, 5, 'Follow Up', '2023-01-20', 'Confrimed', 7980531537, 'Souvik Singh', '', '', 'none', 'none', 836),
(32, 7, 6, 'Follow Up', '2023-01-20', 'excellent', 62849831658, 'Anis Datta', '22:09', '', 'none', 'none', 669),
(33, 7, 6, 'Follow Up', '2023-01-20', 'excellent', 62849831658, 'Anis Datta', '22:09', '', 'none', 'none', 368),
(34, 7, 5, 'Emergency Support\r\n', '2023-01-24', 'Nill', 7980531537, 'Souvik Singh', '11:08', '11:08', 'Souvik Singh', '24-01-2023 11:08:30', 116),
(35, 7, 5, 'Quotaion to be sent\r\n', '2023-01-25', 'Nill', 7980531537, 'Souvik Singh', '', '', 'none', 'none', 93),
(36, 3, 2, 'Follow Up', '2023-01-24', 'Nill', 8981821271, 'Souvik Singh', '', '', 'none', 'none', 346),
(37, 3, 2, 'Inspection Required\r\n', '2023-01-25', 'Nill', 8981821271, 'Souvik Singh', '12:10', '12:10', 'Souvik Singh', '24-01-2023 11:10:41', 965),
(38, 3, 2, 'Follow Up', '2023-01-26', 'good', 8981821271, '', '21:31', '22:32', 'none', 'none', 229),
(39, 2, 9, 'Emergency Support\r\n', '2023-01-26', 'good', 74859666, '', '22:33', '21:32', 'none', 'none', 549),
(40, 3, 2, 'Quotaion to be sent\r\n', '2023-01-27', 'na', 7485966, '', '23:13', '10:13', 'none', 'none', 597),
(41, 9, 4, 'Emergency Support\r\n', '2023-01-28', 'Excellent', 89546633, '', '23:14', '22:13', 'none', 'none', 15),
(42, 1, 1, 'Not Interested\r\n', '2023-01-26', 'gcv', 4567899, '', '23:20', '14:21', 'none', 'none', 73);

-- --------------------------------------------------------

--
-- Table structure for table `calling2_log`
--

CREATE TABLE `calling2_log` (
  `id` int(11) NOT NULL,
  `channel_id` int(50) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `next_step` varchar(50) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `number` bigint(200) NOT NULL,
  `assigned_to` varchar(200) NOT NULL,
  `time_from` varchar(200) NOT NULL,
  `time_to` varchar(200) NOT NULL,
  `added_by` varchar(200) NOT NULL,
  `added_time` varchar(200) NOT NULL,
  `modify_by` varchar(200) NOT NULL,
  `modify_time` varchar(200) NOT NULL,
  `auto_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calling2_log`
--

INSERT INTO `calling2_log` (`id`, `channel_id`, `customer_id`, `next_step`, `schedule`, `remark`, `number`, `assigned_to`, `time_from`, `time_to`, `added_by`, `added_time`, `modify_by`, `modify_time`, `auto_id`) VALUES
(4, 3, 2, 'Re-scheduled', '2023-01-20', 'Nill', 8981821270, 'Anis Datta', '', '', '', '', 'none', 'none', 240),
(5, 7, 5, 'Follow Up', '2023-01-20', 'Confrimed', 7980531537, 'Anis Datta', '', '', '', '', 'none', 'none', 836),
(6, 7, 6, 'Follow Up', '2023-01-20', 'excellent', 62849831658, 'Anis Datta', '22:09', '', 'Anis Datta', '2023-01-20', 'none', 'none', 669),
(7, 7, 6, 'Follow Up', '2023-01-20', 'excellent', 62849831658, 'Anis Datta', '22:09', '', 'Anis Datta', '2023-01-20', 'none', 'none', 368),
(8, 7, 5, 'Emergency Support\r\n', '2023-01-24', 'Nill', 7980531537, 'Souvik Singh', '11:08', '11:08', '', '', 'Souvik Singh', '24-01-2023 11:08:30', 116),
(9, 7, 5, 'Quotaion to be sent\r\n', '2023-01-25', 'Nill', 7980531537, 'Souvik Singh', '', '', '', '', 'none', 'none', 93),
(10, 3, 2, 'Follow Up', '2023-01-24', 'Nill', 8981821271, 'Souvik Singh', '', '', 'Souvik Singh', '2023-01-24', 'none', 'none', 346),
(11, 3, 2, 'Inspection Required\r\n', '2023-01-25', 'Nill', 8981821271, 'Souvik Singh', '12:10', '12:10', 'Souvik Singh', '2023-01-25', 'Souvik Singh', '24-01-2023 11:10:41', 965);

-- --------------------------------------------------------

--
-- Table structure for table `calling_status`
--

CREATE TABLE `calling_status` (
  `id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calling_status`
--

INSERT INTO `calling_status` (`id`, `status`) VALUES
(1, 'Follow Up'),
(2, 'Re-Followup\r\n'),
(3, 'Not Interested\r\n'),
(4, 'Quotaion to be sent\r\n'),
(5, 'Inspection Required\r\n'),
(6, 'Service Requested\r\n'),
(7, 'Emergency Support\r\n'),
(8, 'Invoice need to be sent\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `communication2`
--

CREATE TABLE `communication2` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `point` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `spoc` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `service_center` varchar(200) NOT NULL,
  `modify_by` varchar(200) NOT NULL,
  `modify_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `communication2`
--

INSERT INTO `communication2` (`id`, `name`, `point`, `date`, `spoc`, `time`, `service_center`, `modify_by`, `modify_time`) VALUES
(1, 'Jadavpur Camp', 'Sreekalani', '2023-01-16', 'Abhijit', '15:22', 'Garia Camp', 'Souvik Singh', '16-01-2023 05:11:00'),
(2, 'Behala Camp', 'Sreekalani', '2023-01-17', 'Abhijit', '15:25', 'Jadavpur Camp', 'none', 'none'),
(3, 'Behala Camp', 'Sreekalani', '2023-01-16', 'Abhijit', '17:08', 'Garia Camp', 'none', 'none'),
(4, 'Jadavpur Camp/2023-01-17', 'Sreekalani', '2023-01-17', 'Abhijit', '17:19', 'Jadavpur Camp', 'none', 'none'),
(5, 'Garia Camp/2023-01-16/Sreekalani', 'Sreekalani', '2023-01-16', 'Abhijit', '18:58', 'Garia Camp', 'none', 'none'),
(6, 'Garia Camp/2023-01-19/51', '51', '2023-01-19', '2532891', '13:41', 'Jadavpur Camp', 'Anis Datta', '19-01-2023 01:49:41'),
(7, 'Garia Camp/2023-01-11/8B', '8B', '2023-01-11', 'RAHUL', '17:20', 'Jadavpur Camp', 'Souvik Singh', '19-01-2023 03:19:08'),
(8, 'Garia Camp/2023-01-20/1270', '1270', '2023-01-20', 'souvik', '17:24', 'Garia Camp', 'none', 'none'),
(9, 'Jadavpur Camp/2023-01-17/TALTALA', 'TALTALA', '2023-01-17', 'RAHUL', '20:40', 'Jadavpur Camp', 'none', 'none'),
(10, 'Garia Camp/2023-01-20/121458721', '121458721', '2023-01-20', 'Abhijit', '17:44', 'Garia Camp', 'none', 'none'),
(11, 'Jadavpur Camp/2023-01-24/12345', '12345', '2023-01-24', 'RAHUL', '19:01', 'Jadavpur Camp', 'Souvik Singh', '23-01-2023 07:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `customer2`
--

CREATE TABLE `customer2` (
  `id` int(11) NOT NULL,
  `channel_id` int(50) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` bigint(50) NOT NULL,
  `interested` varchar(200) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `refference` varchar(200) NOT NULL,
  `modify_by` varchar(200) NOT NULL,
  `modify_time` varchar(200) NOT NULL,
  `auto_id3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer2`
--

INSERT INTO `customer2` (`id`, `channel_id`, `cust_name`, `phone`, `address`, `pincode`, `interested`, `remarks`, `refference`, `modify_by`, `modify_time`, `auto_id3`) VALUES
(1, 1, 'Souvik Singh', 7980531533, '6/1 pan bagan', 700014, 'Tank cleaning,Maintenance,Emergency Support', 'Pump Brakedown', 'NA', 'none', 'none', 434),
(2, 3, 'Anis Datta', 8981821271, '6/1 pan bagan', 700014, 'Tank cleaning,Emergency Support', 'Good', 'NA', 'Souvik Singh', '23-01-2023 11:48:46', 564),
(3, 1, 'Vishal Gupta', 9231781600, '6/1 pan bagan lane', 70000455, 'Pump Controller,Tank cleaning,Plumbing support,Maintenance,Emergency Support,Filter,Other', 'Nill', 'NA', 'Anis Datta', '19-01-2023 01:54:49', 226),
(4, 5, 'Anis Datta', 21245897105, '6/1 pan bagan', 1565, 'Tank cleaning,Plumbing support,Emergency Support', 'Bad', 'NA', 'Souvik Singh', '19-01-2023 03:12:04', 275),
(5, 7, 'Vishal Gupta', 7980531537, '6/1 pan bagan', 700045, 'Tank cleaning', 'Urgent', 'NA', 'none', 'none', 659),
(6, 7, 'Sumit Shaw', 6284983165, '59/c/7 shab', 65156, 'Tank cleaning', 'Bad', 'NA', 'Souvik Singh', '23-01-2023 06:53:16', 743),
(7, 8, 'Anis Datta', 1258971, '6/1 pan bagan', 700001455, 'Tank cleaning,Emergency Support', 'Bad', 'NA', 'none', 'none', 882),
(8, 8, 'Vishal Gupta', 12589741, '59/c/7 shab', 225823, 'Tank cleaning', 'Urgent', 'NA', 'none', 'none', 26),
(9, 9, 'RAHUL DAS', 8796854751, 'PARL CIRCUS 28-3', 700048, 'Pump Controller,Tank cleaning,Emergency Support', 'TEST', 'NA', 'none', 'none', 734),
(10, 9, 'souvik', 258965412, '6/1 pan bagan lane', 1254, 'Tank cleaning', 'Bad', 'NA', 'none', 'none', 766),
(11, 1, 'India', 1212121, '59/c/7 shab', 32165498, 'Tank cleaning', 's2dvsdv12', 'Datta1', 'none', 'none', 583),
(12, 1, 'USA', 1, '6/1 pan bagan', 12589, 'Tank cleaning', 'Pump Brakedown', 'NA', 'none', 'none', 356),
(13, 1, 'Souvik Singh', 1, '6/1 pan bagan', 2588, 'Tank cleaning', 'Pump Brakedown', 'NA', 'none', 'none', 861),
(14, 1, 'Souvik Singh', 1258971258, '6/1 pan bagan', 258971, 'Tank cleaning', 'Excellent', 'NA', 'none', 'none', 916);

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Souvik Singh', 'souviksingh83@gmail.com', 7980531533, '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Anis Datta', 'dattaanish1994@gmail.com', 21487651518, '26588e932c7ccfa1df309280702fe1b5');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `category` varchar(230) NOT NULL,
  `auto_id` int(210) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_type_id`, `category`, `auto_id`) VALUES
(1, 2, 'abc', 257),
(2, 2, 'good123', 675),
(3, 1, 'rock', 906),
(4, 6, 'roy', 891),
(24, 1, 'brishti', 262);

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE `product_group` (
  `id` int(11) NOT NULL,
  `product_type` varchar(215) NOT NULL,
  `product_category` varchar(216) NOT NULL,
  `product_sub_category` varchar(219) NOT NULL,
  `product_group` varchar(220) NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `id` int(11) NOT NULL,
  `product_name` varchar(213) NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`id`, `product_name`, `auto_id`) VALUES
(1, 'motor', 300),
(2, 'fan', 400),
(3, 'pumpcontroller', 500),
(4, 'pump', 250),
(5, 'mobile', 552),
(6, 'Tab', 918);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `id` int(11) NOT NULL,
  `product_type_id` varchar(213) NOT NULL,
  `product_category_id` varchar(227) NOT NULL,
  `product_sub` varchar(230) NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`id`, `product_type_id`, `product_category_id`, `product_sub`, `auto_id`) VALUES
(1, '2', '2', 'anis', 291),
(2, '2', '2', 'souvik', 708);

-- --------------------------------------------------------

--
-- Table structure for table `service_center`
--

CREATE TABLE `service_center` (
  `id` int(11) NOT NULL,
  `center` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_center`
--

INSERT INTO `service_center` (`id`, `center`) VALUES
(1, 'Garia Camp'),
(2, 'Jadavpur Camp');

-- --------------------------------------------------------

--
-- Table structure for table `service_user`
--

CREATE TABLE `service_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_user`
--

INSERT INTO `service_user` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Souvik Singh', '7980531533', 'souviksingh83@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Anis Datta', '8981821270', 'dattaanish1994@gmail.com', '26588e932c7ccfa1df309280702fe1b5'),
(3, 'Vishal Gupta', '15863158651', 'vishal@gmail.com', '4c56ff4ce4aaf9573aa5dff913df997a');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` bigint(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'Souvik Singh', 7980531533, 'souviksingh83@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Anis Datta', 7980531533, 'dattaanish1994@gmail.com', '26588e932c7ccfa1df309280702fe1b5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calling2`
--
ALTER TABLE `calling2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calling2_log`
--
ALTER TABLE `calling2_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calling_status`
--
ALTER TABLE `calling_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communication2`
--
ALTER TABLE `communication2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer2`
--
ALTER TABLE `customer2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_center`
--
ALTER TABLE `service_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_user`
--
ALTER TABLE `service_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calling2`
--
ALTER TABLE `calling2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `calling2_log`
--
ALTER TABLE `calling2_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `calling_status`
--
ALTER TABLE `calling_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `communication2`
--
ALTER TABLE `communication2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer2`
--
ALTER TABLE `customer2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_center`
--
ALTER TABLE `service_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_user`
--
ALTER TABLE `service_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
