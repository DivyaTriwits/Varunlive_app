-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 06:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `rid` int(11) NOT NULL,
  `route` varchar(300) NOT NULL,
  `route_name` varchar(300) NOT NULL,
  `route_status` int(11) NOT NULL DEFAULT 0,
  `sub_routes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`rid`, `route`, `route_name`, `route_status`, `sub_routes`) VALUES
(1, 'roles', 'Access Authentication', 0, 0),
(2, 'new_regsitration', 'Support & Sales', 0, 0),
(3, 'webinar', 'Webinar', 0, 1),
(4, 'failed-registrations', 'Failed Registration', 0, 0),
(5, 'registered-students', 'Registered Students', 0, 0),
(6, 'promotional-registered-students', 'Promotional Registered Students', 0, 0),
(7, 'scholarship', 'Scholarship', 0, 1),
(8, 'scholarship-notifications', 'Students Who Not Got Scholarship', 0, 0),
(9, 'subscription-expired-list', 'Subscription Expired List', 0, 0),
(10, 'other-details', 'Others', 0, 1),
(11, 'candidate-feedback', 'Candidate Feedback', 0, 0),
(12, 'requested-callback-list', 'Requested Callback List', 0, 0),
(13, 'push-alert-notifications', 'Push Alert Notifications', 0, 0),
(14, 'redeem-request', 'Redeem Request', 0, 1),
(15, 'renewal-logs', 'Renewal Logs', 0, 0),
(16, 'upload-student-data-for-certificate', 'Upload Webinar Student Data', 0, 0),
(17, 'state-wise-registered-students', 'State Wise Students', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
