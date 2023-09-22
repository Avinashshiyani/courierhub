-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 09:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `couriersoftware_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_booking`
--

CREATE TABLE `account_booking` (
  `ab_id` int(11) NOT NULL,
  `ab_from_name` varchar(200) NOT NULL,
  `ab_from_phno` bigint(200) NOT NULL,
  `ab_documentno` int(200) NOT NULL,
  `ab_to_name` varchar(200) NOT NULL,
  `ab_to_city` varchar(200) NOT NULL,
  `ab_couriertype` varchar(200) NOT NULL,
  `ab_weight` int(200) NOT NULL,
  `ab_address` varchar(200) NOT NULL,
  `ab_totalamt` int(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account_booking`
--

INSERT INTO `account_booking` (`ab_id`, `ab_from_name`, `ab_from_phno`, `ab_documentno`, `ab_to_name`, `ab_to_city`, `ab_couriertype`, `ab_weight`, `ab_address`, `ab_totalamt`, `user_id`) VALUES
(11, 'Avinash Shiyani', 9054349356, 1, 'asasasas', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 60, 1),
(12, 'Avinash Shiyani', 9054349356, 5, 'Jay mange', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 50, 1),
(13, 'Avinash Shiyani', 9054349356, 89, 'preet', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 60, 1),
(14, 'Avinash Shiyani', 9054349356, 32035989, 'asasasas', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 400, 1),
(15, 'Avinash Shiyani', 9054349356, 1, 'asasasas', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 30, 9);

-- --------------------------------------------------------

--
-- Table structure for table `add_branch`
--

CREATE TABLE `add_branch` (
  `ab_id` int(11) NOT NULL,
  `ab_branch_name` varchar(200) NOT NULL,
  `ab_manager_name` varchar(200) NOT NULL,
  `ab_branch_address` varchar(200) NOT NULL,
  `ab_branch_city` varchar(200) NOT NULL,
  `ab_phno` bigint(255) NOT NULL,
  `ab_createmail` varchar(200) NOT NULL,
  `ab_createpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_branch`
--

INSERT INTO `add_branch` (`ab_id`, `ab_branch_name`, `ab_manager_name`, `ab_branch_address`, `ab_branch_city`, `ab_phno`, `ab_createmail`, `ab_createpassword`) VALUES
(1, 'Mj Branch', 'Jay mange', '6B old station road .', 'jamnagar', 9054349389, 'jay@gmail.com', 'jaymange'),
(7, 'Bhavias courierHub', 'Bhavia Shah', '86961 Jennifer Roads,Branson Creek,Chile - GW', 'rajkot', 9054349656, 'bhavia@gmail.com', 'bhaviashah'),
(9, 'Neeraj , Courier Hub', 'Neeraj Chopda', '86961 Jennifer Roads,Branson Creek,Chile - GW', 'porbandar', 9998377982, 'neeraj@gmail.com', 'neerajchopda'),
(10, 'Prit,s CourierHub', 'Prit jogia', 'railway Road ', 'ahmedabad', 8160012260, 'prit@gmail.com', 'pritjogia');

-- --------------------------------------------------------

--
-- Table structure for table `add_circular`
--

CREATE TABLE `add_circular` (
  `ac_id` int(11) NOT NULL,
  `ac_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_circular`
--

INSERT INTO `add_circular` (`ac_id`, `ac_message`) VALUES
(1, 'hi tomorrow is holiday'),
(2, 'hi do the work strictly'),
(3, 'date = 14/9/23 Will be Holiday Due to Workday.\nRegards Admin.'),
(4, 'hello there how are you\r\n'),
(5, 'Hello from tomorrow onwards You are not free because Raksha bandhan is coming so bee from all of you work.\r\n'),
(6, 'hi'),
(7, 'hi zaadya is smoothless'),
(8, 'Tomorrow Ganesh Chaturthi date 19-9-23 will be holiday . '),
(9, 'tomorrow is holiday');

-- --------------------------------------------------------

--
-- Table structure for table `admin_employee`
--

CREATE TABLE `admin_employee` (
  `ae_id` int(11) NOT NULL,
  `ae_name` varchar(200) NOT NULL,
  `ae_role` varchar(200) NOT NULL,
  `ae_salary` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_employee`
--

INSERT INTO `admin_employee` (`ae_id`, `ae_name`, `ae_role`, `ae_salary`) VALUES
(45, 'Bhavia', 'Delivery', 20000),
(50, 'avinash', 'developer', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `al_id` int(11) NOT NULL,
  `al_email` varchar(200) NOT NULL,
  `al_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`al_id`, `al_email`, `al_password`) VALUES
(1, 'admin@gmail.com', 'adminch');

-- --------------------------------------------------------

--
-- Table structure for table `branch_employee`
--

CREATE TABLE `branch_employee` (
  `be_id` int(11) NOT NULL,
  `be_name` varchar(200) NOT NULL,
  `be_role` varchar(200) NOT NULL,
  `be_salary` int(200) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_employee`
--

INSERT INTO `branch_employee` (`be_id`, `be_name`, `be_role`, `be_salary`, `user_id`) VALUES
(3, 'Prit Jogia', 'Delivery', 2000, '7'),
(5, 'Prit Jogia', 'Delivery', 30000, '7'),
(10, 'Avinash', 'Desk', 10000, '1');

-- --------------------------------------------------------

--
-- Table structure for table `branch_login`
--

CREATE TABLE `branch_login` (
  `bl_id` int(11) NOT NULL,
  `bl_email` varchar(200) NOT NULL,
  `bl_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_login`
--

INSERT INTO `branch_login` (`bl_id`, `bl_email`, `bl_password`) VALUES
(1, 'branch@gmail.com', 'branch');

-- --------------------------------------------------------

--
-- Table structure for table `cash_booking`
--

CREATE TABLE `cash_booking` (
  `cb_id` int(11) NOT NULL,
  `cb_from_name` varchar(200) NOT NULL,
  `cb_from_phno` bigint(200) NOT NULL,
  `cb_documentno` int(200) NOT NULL,
  `cb_to_name` varchar(200) NOT NULL,
  `cb_to_city` varchar(200) NOT NULL,
  `cb_couriertype` varchar(200) NOT NULL,
  `cb_weight` int(200) NOT NULL,
  `cb_address` varchar(200) NOT NULL,
  `cb_totalamt` int(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cash_booking`
--

INSERT INTO `cash_booking` (`cb_id`, `cb_from_name`, `cb_from_phno`, `cb_documentno`, `cb_to_name`, `cb_to_city`, `cb_couriertype`, `cb_weight`, `cb_address`, `cb_totalamt`, `user_id`) VALUES
(19, 'asasasas', 9054349356, 369, 'asasasas', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 40, 1),
(20, 'asasasas', 9054349356, 1, 'asasasas', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 400, 1),
(21, 'asasasas', 9054349356, 4, 'asasasas', 'jamnagar', 'Document', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 30, 1),
(22, 'Avinash', 9054349356, 320321259, 'Jaymange', 'rajkot', 'Parcel', 1, '86961 Jennifer Roads,Branson Creek,Chile - GW', 80, 1),
(23, 'Jeetesh saib', 9054349356, 3205689, 'Avinash', 'rajkot', 'Parcel', 1, 'railway road', 60, 1),
(24, 'Jeetsesh nariya', 9054349356, 3691220, 'Jatin', 'porbandar', 'Parcel', 2, '86961 Jennifer Roads,Branson Creek,Chile - GW', 80, 9);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_run_sheet`
--

CREATE TABLE `delivery_run_sheet` (
  `drs_id` int(11) NOT NULL,
  `drs_recievers_name` varchar(200) NOT NULL,
  `drs_recieving_city` varchar(200) NOT NULL,
  `drs_documentno` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_run_sheet`
--

INSERT INTO `delivery_run_sheet` (`drs_id`, `drs_recievers_name`, `drs_recieving_city`, `drs_documentno`) VALUES
(1, 'avinash', 'jamnagar', 1),
(2, 'avinash', 'jamnagar', 1),
(3, 'avinash', 'jamnagar', 2),
(15, 'avinash', 'jamnagar', 3),
(16, 'avinash', 'jamnagar', 4),
(17, 'avinash', 'rajkot', 5),
(18, 'avinash', 'rajkot', 6),
(19, 'avinash', 'jamnagar', 7),
(20, 'avinash', 'jamnagar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_sheet`
--

CREATE TABLE `delivery_sheet` (
  `ds_id` int(11) NOT NULL,
  `ds_city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_sheet`
--

INSERT INTO `delivery_sheet` (`ds_id`, `ds_city`) VALUES
(1, 'jamnagar'),
(2, 'jamnagar'),
(3, 'jamnagar'),
(4, 'jamnagar'),
(5, 'jamnagar'),
(6, 'rajkot'),
(7, 'jamnagar');

-- --------------------------------------------------------

--
-- Table structure for table `document_incoming`
--

CREATE TABLE `document_incoming` (
  `di_id` int(11) NOT NULL,
  `di_incomingdate` varchar(200) NOT NULL,
  `di_incoming_city` varchar(200) NOT NULL,
  `di_recieving_city` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_incoming`
--

INSERT INTO `document_incoming` (`di_id`, `di_incomingdate`, `di_incoming_city`, `di_recieving_city`, `user_id`) VALUES
(1, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(2, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(3, '15/9/2023', 'rajkot', 'jamnagar', 0),
(4, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(5, '15/9/2023', 'rajkot', 'jamnagar', 0),
(6, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(7, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(8, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(9, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(10, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(11, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(12, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(13, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(14, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(15, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(16, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(17, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(18, '15/9/2023', 'jamnagar', 'jamnagar', 0),
(19, '16/9/2023', 'jamnagar', 'jamnagar', 0),
(20, '16/9/2023', 'jamnagar', 'jamnagar', 0),
(21, '16/9/2023', 'jamnagar', 'jamnagar', 7),
(22, '16/9/2023', 'jamnagar', 'jamnagar', 7),
(23, '18/9/2023', 'jamnagar', 'jamnagar', 1),
(24, '19/9/2023', 'jamnagar', 'jamnagar', 1),
(25, '19/9/2023', 'rajkot', 'jamnagar', 1),
(26, '19/9/2023', 'jamnagar', 'jamnagar', 1),
(27, '19/9/2023', 'jamnagar', 'jamnagar', 1),
(28, '19/9/2023', 'jamnagar', 'jamnagar', 1),
(29, '19/9/2023', 'jamnagar', 'jamnagar', 1),
(30, '19/9/2023', 'jamnagar', 'jamnagar', 1),
(31, '19/9/2023', 'rajkot', 'jamnagar', 1),
(32, '20/9/2023', 'jamnagar', 'jamnagar', 1),
(33, '20/9/2023', 'jamnagar', 'jamnagar', 1),
(34, '20/9/2023', 'jamnagar', 'jamnagar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `document_inner_incoming`
--

CREATE TABLE `document_inner_incoming` (
  `dii_id` int(11) NOT NULL,
  `dii_documentno` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_inner_incoming`
--

INSERT INTO `document_inner_incoming` (`dii_id`, `dii_documentno`) VALUES
(12, 320),
(13, 23),
(15, 36),
(16, 12),
(18, 23),
(19, 56),
(20, 89),
(21, 78),
(22, 12),
(23, 23),
(24, 45),
(25, 78),
(26, 23),
(27, 56),
(28, 12),
(30, 45);

-- --------------------------------------------------------

--
-- Table structure for table `document_outer_outgoing`
--

CREATE TABLE `document_outer_outgoing` (
  `doo_id` int(11) NOT NULL,
  `doo_documentno` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_outer_outgoing`
--

INSERT INTO `document_outer_outgoing` (`doo_id`, `doo_documentno`) VALUES
(11, 12),
(12, 23),
(13, 45),
(14, 23),
(15, 56),
(16, 89),
(17, 123),
(18, 789),
(19, 456),
(20, 12),
(21, 78),
(22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `document_outgoing`
--

CREATE TABLE `document_outgoing` (
  `do_id` int(11) NOT NULL,
  `do_outgoing_date` varchar(200) NOT NULL,
  `do_outgoing_city` varchar(200) NOT NULL,
  `do_outgoingto_city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_outgoing`
--

INSERT INTO `document_outgoing` (`do_id`, `do_outgoing_date`, `do_outgoing_city`, `do_outgoingto_city`) VALUES
(1, '15/9/2023', 'jamnagar', 'jamnagar'),
(2, '15/9/2023', 'jamnagar', 'jamnagar'),
(3, '15/9/2023', 'jamnagar', 'jamnagar'),
(4, '15/9/2023', 'jamnagar', 'jamnagar'),
(5, '15/9/2023', 'jamnagar', 'jamnagar'),
(6, '15/9/2023', 'jamnagar', 'jamnagar'),
(7, '15/9/2023', 'jamnagar', 'jamnagar'),
(8, '16/9/2023', 'rajkot', 'jamnagar'),
(9, '16/9/2023', 'jamnagar', 'jamnagar'),
(10, '16/9/2023', 'jamnagar', 'jamnagar'),
(11, '18/9/2023', 'jamnagar', 'jamnagar'),
(12, '19/9/2023', 'jamnagar', 'jamnagar'),
(13, '19/9/2023', 'jamnagar', 'jamnagar'),
(14, '19/9/2023', 'jamnagar', 'jamnagar'),
(15, '19/9/2023', 'jamnagar', 'jamnagar'),
(16, '19/9/2023', 'jamnagar', 'jamnagar'),
(17, '20/9/2023', 'jamnagar', 'jamnagar');

-- --------------------------------------------------------

--
-- Table structure for table `index_contact`
--

CREATE TABLE `index_contact` (
  `ic_id` int(11) NOT NULL,
  `ic_name` varchar(200) NOT NULL,
  `ic_email` varchar(200) NOT NULL,
  `ic_subject` varchar(200) NOT NULL,
  `ic_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_contact`
--

INSERT INTO `index_contact` (`ic_id`, `ic_name`, `ic_email`, `ic_subject`, `ic_message`) VALUES
(1, 'Avinash Shiyani', 'avi@gmail.com', 'hello', 'hi bro how are you'),
(2, 'prit savla', 'p@gmail.com', 'hi i am prit', 'prit savla good boy'),
(3, 'darshit', 'd@gmail.com', 'dar', 'branch is misbehaving'),
(4, 'avinash', 'ds', 'ds', 'sds'),
(5, 'Avinash Shiyani', 'avi@gmail.com', 'hello', 'hi bro how are you'),
(6, 'Avinash Shiyani', 'avi@gmail.com', 'complain', 'staff of jamnagar branch is not behaving properly.please try to understand'),
(7, 'darshit', 'p@gmail.com', 'dar', 'hello bro the document are good in this form but delivery can be speeded if possible'),
(8, 'pritjogia', 'pritjogia@gmail.com', 'very nice ', 'this is very nice courier services'),
(9, 'jatin gymlover', 'jatin@gmail.com', 'nice service', 'services is good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_booking`
--
ALTER TABLE `account_booking`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `add_branch`
--
ALTER TABLE `add_branch`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `add_circular`
--
ALTER TABLE `add_circular`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin_employee`
--
ALTER TABLE `admin_employee`
  ADD PRIMARY KEY (`ae_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`al_id`);

--
-- Indexes for table `branch_employee`
--
ALTER TABLE `branch_employee`
  ADD PRIMARY KEY (`be_id`);

--
-- Indexes for table `branch_login`
--
ALTER TABLE `branch_login`
  ADD PRIMARY KEY (`bl_id`);

--
-- Indexes for table `cash_booking`
--
ALTER TABLE `cash_booking`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `delivery_run_sheet`
--
ALTER TABLE `delivery_run_sheet`
  ADD PRIMARY KEY (`drs_id`);

--
-- Indexes for table `delivery_sheet`
--
ALTER TABLE `delivery_sheet`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `document_incoming`
--
ALTER TABLE `document_incoming`
  ADD PRIMARY KEY (`di_id`);

--
-- Indexes for table `document_inner_incoming`
--
ALTER TABLE `document_inner_incoming`
  ADD PRIMARY KEY (`dii_id`);

--
-- Indexes for table `document_outer_outgoing`
--
ALTER TABLE `document_outer_outgoing`
  ADD PRIMARY KEY (`doo_id`);

--
-- Indexes for table `document_outgoing`
--
ALTER TABLE `document_outgoing`
  ADD PRIMARY KEY (`do_id`);

--
-- Indexes for table `index_contact`
--
ALTER TABLE `index_contact`
  ADD PRIMARY KEY (`ic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_booking`
--
ALTER TABLE `account_booking`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_branch`
--
ALTER TABLE `add_branch`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_circular`
--
ALTER TABLE `add_circular`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_employee`
--
ALTER TABLE `admin_employee`
  MODIFY `ae_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_employee`
--
ALTER TABLE `branch_employee`
  MODIFY `be_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `branch_login`
--
ALTER TABLE `branch_login`
  MODIFY `bl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cash_booking`
--
ALTER TABLE `cash_booking`
  MODIFY `cb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `delivery_run_sheet`
--
ALTER TABLE `delivery_run_sheet`
  MODIFY `drs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `delivery_sheet`
--
ALTER TABLE `delivery_sheet`
  MODIFY `ds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document_incoming`
--
ALTER TABLE `document_incoming`
  MODIFY `di_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `document_inner_incoming`
--
ALTER TABLE `document_inner_incoming`
  MODIFY `dii_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `document_outer_outgoing`
--
ALTER TABLE `document_outer_outgoing`
  MODIFY `doo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `document_outgoing`
--
ALTER TABLE `document_outgoing`
  MODIFY `do_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `index_contact`
--
ALTER TABLE `index_contact`
  MODIFY `ic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
