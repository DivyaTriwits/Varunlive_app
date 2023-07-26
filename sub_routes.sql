-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 06:29 AM
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
-- Table structure for table `sub_routes`
--

CREATE TABLE `sub_routes` (
  `sr_id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `sub_route` varchar(250) NOT NULL,
  `sub_route_name` varchar(250) NOT NULL,
  `sub_route_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_routes`
--

INSERT INTO `sub_routes` (`sr_id`, `rid`, `sub_route`, `sub_route_name`, `sub_route_status`) VALUES
(1, 3, 'webinar-registrations', 'New Webiner Registration', 0),
(2, 3, 'webinar-registered-student-list', 'Webinar Registered Student List', 0),
(3, 7, 'live-scholarships', 'Push Scholarship', 0),
(4, 7, 'scholarship-list', 'Active Scholarship List', 0),
(5, 7, 'expired-scholarship-list', 'Expired Scholarship List', 0),
(6, 7, 'view-institution-scholarship-list', 'View Institution Scholarship List', 0),
(7, 7, 'scholarship-form', 'Add Scholarship', 0),
(8, 10, 'religion', 'Religion', 0),
(9, 10, 'category-form', 'Category', 0),
(10, 10, 'qualification', 'Qualification', 0),
(11, 10, 'course', 'Course', 0),
(12, 10, 'disability', 'Disablity', 0),
(13, 10, 'activity-type', 'Activity Type', 0),
(14, 10, 'activity-name', 'Activity Type', 0),
(15, 14, 'renew-requests', 'Renew for next year request', 0),
(16, 14, 'bank-requests', 'Redeem Amount to Bank Request', 0),
(17, 14, 'registered-account-request', 'Registered New Account Request', 0),
(18, 14, 'influencer-request', 'Influencer Request', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_routes`
--
ALTER TABLE `sub_routes`
  ADD PRIMARY KEY (`sr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_routes`
--
ALTER TABLE `sub_routes`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
