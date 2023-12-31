-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2023 at 11:15 AM
-- Server version: 8.0.34
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdccom_old-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `aid` int NOT NULL,
  `user_id` varchar(300) NOT NULL,
  `route_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `sr_id` int NOT NULL,
  `sub_route_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`aid`, `user_id`, `route_id`, `status`, `sr_id`, `sub_route_status`) VALUES
(1, '0UWuJuPVX2RXrBZZUl', 1, 0, 0, 0),
(2, '0UWuJuPVX2RXrBZZUl', 2, 0, 0, 0),
(3, '0UWuJuPVX2RXrBZZUl', 3, 0, 0, 0),
(4, '0UWuJuPVX2RXrBZZUl', 4, 0, 0, 0),
(5, '0UWuJuPVX2RXrBZZUl', 5, 1, 0, 0),
(6, '0UWuJuPVX2RXrBZZUl', 6, 0, 0, 0),
(7, '0UWuJuPVX2RXrBZZUl', 7, 0, 0, 0),
(8, '0UWuJuPVX2RXrBZZUl', 8, 0, 0, 0),
(9, '0UWuJuPVX2RXrBZZUl', 9, 0, 0, 0),
(10, '0UWuJuPVX2RXrBZZUl', 10, 0, 0, 0),
(11, '0UWuJuPVX2RXrBZZUl', 11, 0, 0, 0),
(12, '0UWuJuPVX2RXrBZZUl', 12, 0, 0, 0),
(13, '0UWuJuPVX2RXrBZZUl', 13, 0, 0, 0),
(14, '0UWuJuPVX2RXrBZZUl', 14, 0, 0, 0),
(15, '0UWuJuPVX2RXrBZZUl', 15, 0, 0, 0),
(16, '0UWuJuPVX2RXrBZZUl', 16, 0, 0, 0),
(17, 'hcq5lqd1E3wkFylLnx', 1, 0, 0, 0),
(18, 'hcq5lqd1E3wkFylLnx', 2, 0, 0, 0),
(19, 'hcq5lqd1E3wkFylLnx', 3, 0, 0, 0),
(20, 'hcq5lqd1E3wkFylLnx', 4, 0, 0, 0),
(21, 'hcq5lqd1E3wkFylLnx', 5, 0, 0, 0),
(22, 'hcq5lqd1E3wkFylLnx', 6, 0, 0, 0),
(23, 'hcq5lqd1E3wkFylLnx', 7, 0, 0, 0),
(24, 'hcq5lqd1E3wkFylLnx', 8, 0, 0, 0),
(25, 'hcq5lqd1E3wkFylLnx', 9, 0, 0, 0),
(26, 'hcq5lqd1E3wkFylLnx', 10, 0, 0, 0),
(27, 'hcq5lqd1E3wkFylLnx', 11, 0, 0, 0),
(28, 'hcq5lqd1E3wkFylLnx', 12, 0, 0, 0),
(29, 'hcq5lqd1E3wkFylLnx', 13, 0, 0, 0),
(30, 'hcq5lqd1E3wkFylLnx', 14, 0, 0, 0),
(31, 'hcq5lqd1E3wkFylLnx', 15, 0, 0, 0),
(32, 'hcq5lqd1E3wkFylLnx', 16, 0, 0, 0),
(33, 'xxRkEjIo2R5ElXJ9uk', 1, 0, 0, 0),
(34, 'xxRkEjIo2R5ElXJ9uk', 2, 0, 0, 0),
(35, 'xxRkEjIo2R5ElXJ9uk', 3, 0, 0, 0),
(36, 'xxRkEjIo2R5ElXJ9uk', 4, 0, 0, 0),
(37, 'xxRkEjIo2R5ElXJ9uk', 5, 0, 0, 0),
(38, 'xxRkEjIo2R5ElXJ9uk', 6, 0, 0, 0),
(39, 'xxRkEjIo2R5ElXJ9uk', 7, 0, 0, 0),
(40, 'xxRkEjIo2R5ElXJ9uk', 8, 0, 0, 0),
(41, 'xxRkEjIo2R5ElXJ9uk', 9, 0, 0, 0),
(42, 'xxRkEjIo2R5ElXJ9uk', 10, 0, 0, 0),
(43, 'xxRkEjIo2R5ElXJ9uk', 11, 0, 0, 0),
(44, 'xxRkEjIo2R5ElXJ9uk', 12, 0, 0, 0),
(45, 'xxRkEjIo2R5ElXJ9uk', 13, 0, 0, 0),
(46, 'xxRkEjIo2R5ElXJ9uk', 14, 0, 0, 0),
(47, 'xxRkEjIo2R5ElXJ9uk', 15, 0, 0, 0),
(48, 'xxRkEjIo2R5ElXJ9uk', 16, 0, 0, 0),
(49, 'RyiBvAo8NmOx0ZeYDC', 1, 0, 0, 0),
(50, 'RyiBvAo8NmOx0ZeYDC', 2, 0, 0, 0),
(51, 'RyiBvAo8NmOx0ZeYDC', 3, 0, 0, 0),
(52, 'RyiBvAo8NmOx0ZeYDC', 4, 0, 0, 0),
(53, 'RyiBvAo8NmOx0ZeYDC', 5, 0, 0, 0),
(54, 'RyiBvAo8NmOx0ZeYDC', 6, 0, 0, 0),
(55, 'RyiBvAo8NmOx0ZeYDC', 7, 0, 0, 0),
(56, 'RyiBvAo8NmOx0ZeYDC', 8, 0, 0, 0),
(57, 'RyiBvAo8NmOx0ZeYDC', 9, 0, 0, 0),
(58, 'RyiBvAo8NmOx0ZeYDC', 10, 0, 0, 0),
(59, 'RyiBvAo8NmOx0ZeYDC', 11, 0, 0, 0),
(60, 'RyiBvAo8NmOx0ZeYDC', 12, 0, 0, 0),
(61, 'RyiBvAo8NmOx0ZeYDC', 13, 0, 0, 0),
(62, 'RyiBvAo8NmOx0ZeYDC', 14, 0, 0, 0),
(63, 'RyiBvAo8NmOx0ZeYDC', 15, 0, 0, 0),
(64, 'RyiBvAo8NmOx0ZeYDC', 16, 0, 0, 0),
(65, 'wU67nOgQB8yofcAvnm', 1, 0, 0, 0),
(66, 'wU67nOgQB8yofcAvnm', 2, 0, 0, 0),
(67, 'wU67nOgQB8yofcAvnm', 3, 0, 0, 0),
(68, 'wU67nOgQB8yofcAvnm', 4, 0, 0, 0),
(69, 'wU67nOgQB8yofcAvnm', 5, 0, 0, 0),
(70, 'wU67nOgQB8yofcAvnm', 6, 0, 0, 0),
(71, 'wU67nOgQB8yofcAvnm', 7, 0, 0, 0),
(72, 'wU67nOgQB8yofcAvnm', 8, 0, 0, 0),
(73, 'wU67nOgQB8yofcAvnm', 9, 0, 0, 0),
(74, 'wU67nOgQB8yofcAvnm', 10, 0, 0, 0),
(75, 'wU67nOgQB8yofcAvnm', 11, 0, 0, 0),
(76, 'wU67nOgQB8yofcAvnm', 12, 0, 0, 0),
(77, 'wU67nOgQB8yofcAvnm', 13, 0, 0, 0),
(78, 'wU67nOgQB8yofcAvnm', 14, 0, 0, 0),
(79, 'wU67nOgQB8yofcAvnm', 15, 0, 0, 0),
(80, 'wU67nOgQB8yofcAvnm', 16, 0, 0, 0),
(81, 'tqE9Z7huOON8jW016V', 1, 0, 0, 0),
(82, 'tqE9Z7huOON8jW016V', 2, 0, 0, 0),
(83, 'tqE9Z7huOON8jW016V', 3, 0, 0, 0),
(84, 'tqE9Z7huOON8jW016V', 4, 0, 0, 0),
(85, 'tqE9Z7huOON8jW016V', 5, 0, 0, 0),
(86, 'tqE9Z7huOON8jW016V', 6, 0, 0, 0),
(87, 'tqE9Z7huOON8jW016V', 7, 0, 0, 0),
(88, 'tqE9Z7huOON8jW016V', 8, 0, 0, 0),
(89, 'tqE9Z7huOON8jW016V', 9, 0, 0, 0),
(90, 'tqE9Z7huOON8jW016V', 10, 0, 0, 0),
(91, 'tqE9Z7huOON8jW016V', 11, 0, 0, 0),
(92, 'tqE9Z7huOON8jW016V', 12, 0, 0, 0),
(93, 'tqE9Z7huOON8jW016V', 13, 0, 0, 0),
(94, 'tqE9Z7huOON8jW016V', 14, 0, 0, 0),
(95, 'tqE9Z7huOON8jW016V', 15, 0, 0, 0),
(96, 'tqE9Z7huOON8jW016V', 16, 0, 0, 0),
(97, 'OSP7F8GV5DhoMy1eiH', 1, 0, 0, 0),
(98, 'OSP7F8GV5DhoMy1eiH', 2, 0, 0, 0),
(99, 'OSP7F8GV5DhoMy1eiH', 3, 1, 0, 0),
(100, 'OSP7F8GV5DhoMy1eiH', 4, 1, 0, 0),
(101, 'OSP7F8GV5DhoMy1eiH', 5, 1, 0, 0),
(102, 'OSP7F8GV5DhoMy1eiH', 6, 1, 0, 0),
(103, 'OSP7F8GV5DhoMy1eiH', 7, 1, 0, 0),
(104, 'OSP7F8GV5DhoMy1eiH', 8, 1, 0, 0),
(105, 'OSP7F8GV5DhoMy1eiH', 9, 1, 0, 0),
(106, 'OSP7F8GV5DhoMy1eiH', 10, 1, 0, 0),
(107, 'OSP7F8GV5DhoMy1eiH', 11, 1, 0, 0),
(108, 'OSP7F8GV5DhoMy1eiH', 12, 1, 0, 0),
(109, 'OSP7F8GV5DhoMy1eiH', 13, 1, 0, 0),
(110, 'OSP7F8GV5DhoMy1eiH', 14, 1, 0, 0),
(111, 'OSP7F8GV5DhoMy1eiH', 15, 1, 0, 0),
(112, 'OSP7F8GV5DhoMy1eiH', 16, 1, 0, 0),
(113, 'WvwrGWZdOXTTDiPCJr', 1, 0, 0, 0),
(114, 'WvwrGWZdOXTTDiPCJr', 2, 0, 0, 0),
(115, 'WvwrGWZdOXTTDiPCJr', 3, 0, 0, 0),
(116, 'WvwrGWZdOXTTDiPCJr', 4, 0, 0, 0),
(117, 'WvwrGWZdOXTTDiPCJr', 5, 0, 0, 0),
(118, 'WvwrGWZdOXTTDiPCJr', 6, 0, 0, 0),
(119, 'WvwrGWZdOXTTDiPCJr', 7, 0, 0, 0),
(120, 'WvwrGWZdOXTTDiPCJr', 8, 0, 0, 0),
(121, 'WvwrGWZdOXTTDiPCJr', 9, 0, 0, 0),
(122, 'WvwrGWZdOXTTDiPCJr', 10, 0, 0, 0),
(123, 'WvwrGWZdOXTTDiPCJr', 11, 0, 0, 0),
(124, 'WvwrGWZdOXTTDiPCJr', 12, 0, 0, 0),
(125, 'WvwrGWZdOXTTDiPCJr', 13, 0, 0, 0),
(126, 'WvwrGWZdOXTTDiPCJr', 14, 0, 0, 0),
(127, 'WvwrGWZdOXTTDiPCJr', 15, 0, 0, 0),
(128, 'WvwrGWZdOXTTDiPCJr', 16, 0, 0, 0),
(129, 'AfA3S0s7EgfMtkS9q9', 1, 0, 0, 0),
(130, 'AfA3S0s7EgfMtkS9q9', 2, 0, 0, 0),
(131, 'AfA3S0s7EgfMtkS9q9', 3, 0, 0, 0),
(132, 'AfA3S0s7EgfMtkS9q9', 4, 0, 0, 0),
(133, 'AfA3S0s7EgfMtkS9q9', 5, 0, 0, 0),
(134, 'AfA3S0s7EgfMtkS9q9', 6, 0, 0, 0),
(135, 'AfA3S0s7EgfMtkS9q9', 7, 0, 0, 0),
(136, 'AfA3S0s7EgfMtkS9q9', 8, 0, 0, 0),
(137, 'AfA3S0s7EgfMtkS9q9', 9, 0, 0, 0),
(138, 'AfA3S0s7EgfMtkS9q9', 10, 0, 0, 0),
(139, 'AfA3S0s7EgfMtkS9q9', 11, 0, 0, 0),
(140, 'AfA3S0s7EgfMtkS9q9', 12, 0, 0, 0),
(141, 'AfA3S0s7EgfMtkS9q9', 13, 0, 0, 0),
(142, 'AfA3S0s7EgfMtkS9q9', 14, 0, 0, 0),
(143, 'AfA3S0s7EgfMtkS9q9', 15, 0, 0, 0),
(144, 'AfA3S0s7EgfMtkS9q9', 16, 0, 0, 0),
(145, 'yzy67ywpYKElPeDoCb', 1, 0, 0, 0),
(146, 'yzy67ywpYKElPeDoCb', 2, 0, 0, 0),
(147, 'yzy67ywpYKElPeDoCb', 3, 1, 0, 0),
(148, 'yzy67ywpYKElPeDoCb', 4, 0, 0, 0),
(149, 'yzy67ywpYKElPeDoCb', 5, 0, 0, 0),
(150, 'yzy67ywpYKElPeDoCb', 6, 0, 0, 0),
(151, 'yzy67ywpYKElPeDoCb', 7, 0, 0, 0),
(152, 'yzy67ywpYKElPeDoCb', 8, 0, 0, 0),
(153, 'yzy67ywpYKElPeDoCb', 9, 0, 0, 0),
(154, 'yzy67ywpYKElPeDoCb', 10, 0, 0, 0),
(155, 'yzy67ywpYKElPeDoCb', 11, 0, 0, 0),
(156, 'yzy67ywpYKElPeDoCb', 12, 0, 0, 0),
(157, 'yzy67ywpYKElPeDoCb', 13, 0, 0, 0),
(158, 'yzy67ywpYKElPeDoCb', 14, 0, 0, 0),
(159, 'yzy67ywpYKElPeDoCb', 15, 0, 0, 0),
(160, 'yzy67ywpYKElPeDoCb', 16, 0, 0, 0),
(161, '0puh27JrThv08qbpff', 1, 0, 0, 0),
(162, '0puh27JrThv08qbpff', 2, 0, 0, 0),
(163, '0puh27JrThv08qbpff', 3, 0, 0, 0),
(164, '0puh27JrThv08qbpff', 4, 0, 0, 0),
(165, '0puh27JrThv08qbpff', 5, 0, 0, 0),
(166, '0puh27JrThv08qbpff', 6, 0, 0, 0),
(167, '0puh27JrThv08qbpff', 7, 1, 0, 0),
(168, '0puh27JrThv08qbpff', 8, 0, 0, 0),
(169, '0puh27JrThv08qbpff', 9, 0, 0, 0),
(170, '0puh27JrThv08qbpff', 10, 0, 0, 0),
(171, '0puh27JrThv08qbpff', 11, 0, 0, 0),
(172, '0puh27JrThv08qbpff', 12, 0, 0, 0),
(173, '0puh27JrThv08qbpff', 13, 0, 0, 0),
(174, '0puh27JrThv08qbpff', 14, 0, 0, 0),
(175, '0puh27JrThv08qbpff', 15, 0, 0, 0),
(176, '0puh27JrThv08qbpff', 16, 0, 0, 0),
(177, '4s1OvFzqh8MixXCEj5', 1, 0, 0, 0),
(178, '4s1OvFzqh8MixXCEj5', 2, 0, 0, 0),
(179, '4s1OvFzqh8MixXCEj5', 3, 0, 0, 0),
(180, '4s1OvFzqh8MixXCEj5', 4, 0, 0, 0),
(181, '4s1OvFzqh8MixXCEj5', 5, 0, 0, 0),
(182, '4s1OvFzqh8MixXCEj5', 6, 0, 0, 0),
(183, '4s1OvFzqh8MixXCEj5', 7, 1, 0, 0),
(184, '4s1OvFzqh8MixXCEj5', 8, 0, 0, 0),
(185, '4s1OvFzqh8MixXCEj5', 9, 0, 0, 0),
(186, '4s1OvFzqh8MixXCEj5', 10, 0, 0, 0),
(187, '4s1OvFzqh8MixXCEj5', 11, 0, 0, 0),
(188, '4s1OvFzqh8MixXCEj5', 12, 0, 0, 0),
(189, '4s1OvFzqh8MixXCEj5', 13, 0, 0, 0),
(190, '4s1OvFzqh8MixXCEj5', 14, 0, 0, 0),
(191, '4s1OvFzqh8MixXCEj5', 15, 0, 0, 0),
(192, '4s1OvFzqh8MixXCEj5', 16, 0, 0, 0),
(193, '4s1OvFzqh8MixXCEj5', 17, 0, 0, 0),
(194, 'B0nIzb6qBuaOVTeoBV', 1, 0, 0, 0),
(195, 'B0nIzb6qBuaOVTeoBV', 2, 0, 0, 0),
(196, 'B0nIzb6qBuaOVTeoBV', 3, 0, 0, 0),
(197, 'B0nIzb6qBuaOVTeoBV', 4, 0, 0, 0),
(198, 'B0nIzb6qBuaOVTeoBV', 5, 0, 0, 0),
(199, 'B0nIzb6qBuaOVTeoBV', 6, 0, 0, 0),
(200, 'B0nIzb6qBuaOVTeoBV', 7, 1, 0, 0),
(201, 'B0nIzb6qBuaOVTeoBV', 8, 0, 0, 0),
(202, 'B0nIzb6qBuaOVTeoBV', 9, 0, 0, 0),
(203, 'B0nIzb6qBuaOVTeoBV', 10, 0, 0, 0),
(204, 'B0nIzb6qBuaOVTeoBV', 11, 0, 0, 0),
(205, 'B0nIzb6qBuaOVTeoBV', 12, 0, 0, 0),
(206, 'B0nIzb6qBuaOVTeoBV', 13, 0, 0, 0),
(207, 'B0nIzb6qBuaOVTeoBV', 14, 0, 0, 0),
(208, 'B0nIzb6qBuaOVTeoBV', 15, 0, 0, 0),
(209, 'B0nIzb6qBuaOVTeoBV', 16, 0, 0, 0),
(210, 'B0nIzb6qBuaOVTeoBV', 17, 0, 0, 0),
(211, 'sxWNtltdfrkxRzRRNE', 1, 0, 0, 0),
(212, 'sxWNtltdfrkxRzRRNE', 2, 0, 0, 0),
(213, 'sxWNtltdfrkxRzRRNE', 3, 0, 0, 0),
(214, 'sxWNtltdfrkxRzRRNE', 4, 0, 0, 0),
(215, 'sxWNtltdfrkxRzRRNE', 5, 0, 0, 0),
(216, 'sxWNtltdfrkxRzRRNE', 6, 0, 0, 0),
(217, 'sxWNtltdfrkxRzRRNE', 7, 1, 0, 0),
(218, 'sxWNtltdfrkxRzRRNE', 8, 0, 0, 0),
(219, 'sxWNtltdfrkxRzRRNE', 9, 0, 0, 0),
(220, 'sxWNtltdfrkxRzRRNE', 10, 0, 0, 0),
(221, 'sxWNtltdfrkxRzRRNE', 11, 0, 0, 0),
(222, 'sxWNtltdfrkxRzRRNE', 12, 0, 0, 0),
(223, 'sxWNtltdfrkxRzRRNE', 13, 0, 0, 0),
(224, 'sxWNtltdfrkxRzRRNE', 14, 0, 0, 0),
(225, 'sxWNtltdfrkxRzRRNE', 15, 0, 0, 0),
(226, 'sxWNtltdfrkxRzRRNE', 16, 0, 0, 0),
(227, 'sxWNtltdfrkxRzRRNE', 17, 0, 0, 0),
(228, '2bYiL8y46CdHgaLXCM', 1, 0, 0, 0),
(229, '2bYiL8y46CdHgaLXCM', 2, 0, 0, 0),
(230, '2bYiL8y46CdHgaLXCM', 3, 0, 0, 0),
(231, '2bYiL8y46CdHgaLXCM', 4, 0, 0, 0),
(232, '2bYiL8y46CdHgaLXCM', 5, 0, 0, 0),
(233, '2bYiL8y46CdHgaLXCM', 6, 0, 0, 0),
(234, '2bYiL8y46CdHgaLXCM', 7, 1, 0, 0),
(235, '2bYiL8y46CdHgaLXCM', 8, 0, 0, 0),
(236, '2bYiL8y46CdHgaLXCM', 9, 0, 0, 0),
(237, '2bYiL8y46CdHgaLXCM', 10, 0, 0, 0),
(238, '2bYiL8y46CdHgaLXCM', 11, 0, 0, 0),
(239, '2bYiL8y46CdHgaLXCM', 12, 0, 0, 0),
(240, '2bYiL8y46CdHgaLXCM', 13, 0, 0, 0),
(241, '2bYiL8y46CdHgaLXCM', 14, 0, 0, 0),
(242, '2bYiL8y46CdHgaLXCM', 15, 0, 0, 0),
(243, '2bYiL8y46CdHgaLXCM', 16, 0, 0, 0),
(244, '2bYiL8y46CdHgaLXCM', 17, 0, 0, 0),
(245, 'Axc9JKM96PdobVZynT', 1, 0, 0, 0),
(246, 'Axc9JKM96PdobVZynT', 2, 0, 0, 0),
(247, 'Axc9JKM96PdobVZynT', 3, 0, 0, 0),
(248, 'Axc9JKM96PdobVZynT', 4, 0, 0, 0),
(249, 'Axc9JKM96PdobVZynT', 5, 0, 0, 0),
(250, 'Axc9JKM96PdobVZynT', 6, 0, 0, 0),
(251, 'Axc9JKM96PdobVZynT', 7, 1, 0, 0),
(252, 'Axc9JKM96PdobVZynT', 8, 0, 0, 0),
(253, 'Axc9JKM96PdobVZynT', 9, 0, 0, 0),
(254, 'Axc9JKM96PdobVZynT', 10, 0, 0, 0),
(255, 'Axc9JKM96PdobVZynT', 11, 0, 0, 0),
(256, 'Axc9JKM96PdobVZynT', 12, 0, 0, 0),
(257, 'Axc9JKM96PdobVZynT', 13, 0, 0, 0),
(258, 'Axc9JKM96PdobVZynT', 14, 0, 0, 0),
(259, 'Axc9JKM96PdobVZynT', 15, 0, 0, 0),
(260, 'Axc9JKM96PdobVZynT', 16, 0, 0, 0),
(261, 'Axc9JKM96PdobVZynT', 17, 0, 0, 0),
(262, 'LBQCVymuWdEP5rmAIw', 1, 0, 0, 0),
(263, 'LBQCVymuWdEP5rmAIw', 2, 0, 0, 0),
(264, 'LBQCVymuWdEP5rmAIw', 3, 0, 0, 0),
(265, 'LBQCVymuWdEP5rmAIw', 4, 0, 0, 0),
(266, 'LBQCVymuWdEP5rmAIw', 5, 0, 0, 0),
(267, 'LBQCVymuWdEP5rmAIw', 6, 0, 0, 0),
(268, 'LBQCVymuWdEP5rmAIw', 7, 1, 0, 0),
(269, 'LBQCVymuWdEP5rmAIw', 8, 0, 0, 0),
(270, 'LBQCVymuWdEP5rmAIw', 9, 0, 0, 0),
(271, 'LBQCVymuWdEP5rmAIw', 10, 0, 0, 0),
(272, 'LBQCVymuWdEP5rmAIw', 11, 0, 0, 0),
(273, 'LBQCVymuWdEP5rmAIw', 12, 0, 0, 0),
(274, 'LBQCVymuWdEP5rmAIw', 13, 0, 0, 0),
(275, 'LBQCVymuWdEP5rmAIw', 14, 0, 0, 0),
(276, 'LBQCVymuWdEP5rmAIw', 15, 0, 0, 0),
(277, 'LBQCVymuWdEP5rmAIw', 16, 0, 0, 0),
(278, 'LBQCVymuWdEP5rmAIw', 17, 0, 0, 0),
(279, '1YjUp9MzdRX6XXvxIK', 1, 1, 0, 0),
(280, '1YjUp9MzdRX6XXvxIK', 2, 1, 0, 0),
(281, '1YjUp9MzdRX6XXvxIK', 3, 1, 0, 0),
(282, '1YjUp9MzdRX6XXvxIK', 4, 0, 0, 0),
(283, '1YjUp9MzdRX6XXvxIK', 5, 0, 0, 0),
(284, '1YjUp9MzdRX6XXvxIK', 6, 0, 0, 0),
(285, '1YjUp9MzdRX6XXvxIK', 7, 0, 0, 0),
(286, '1YjUp9MzdRX6XXvxIK', 8, 0, 0, 0),
(287, '1YjUp9MzdRX6XXvxIK', 9, 0, 0, 0),
(288, '1YjUp9MzdRX6XXvxIK', 10, 0, 0, 0),
(289, '1YjUp9MzdRX6XXvxIK', 11, 0, 0, 0),
(290, '1YjUp9MzdRX6XXvxIK', 12, 0, 0, 0),
(291, '1YjUp9MzdRX6XXvxIK', 13, 0, 0, 0),
(292, '1YjUp9MzdRX6XXvxIK', 14, 0, 0, 0),
(293, '1YjUp9MzdRX6XXvxIK', 15, 0, 0, 0),
(294, '1YjUp9MzdRX6XXvxIK', 16, 0, 0, 0),
(295, '1YjUp9MzdRX6XXvxIK', 17, 0, 0, 0),
(296, '8aQUv2jLTwIhiLXa3b', 1, 0, 0, 0),
(297, '8aQUv2jLTwIhiLXa3b', 2, 0, 0, 0),
(298, '8aQUv2jLTwIhiLXa3b', 3, 0, 0, 0),
(299, '8aQUv2jLTwIhiLXa3b', 4, 0, 0, 0),
(300, '8aQUv2jLTwIhiLXa3b', 5, 0, 0, 0),
(301, '8aQUv2jLTwIhiLXa3b', 6, 0, 0, 0),
(302, '8aQUv2jLTwIhiLXa3b', 7, 0, 0, 0),
(303, '8aQUv2jLTwIhiLXa3b', 8, 0, 0, 0),
(304, '8aQUv2jLTwIhiLXa3b', 9, 0, 0, 0),
(305, '8aQUv2jLTwIhiLXa3b', 10, 0, 0, 0),
(306, '8aQUv2jLTwIhiLXa3b', 11, 0, 0, 0),
(307, '8aQUv2jLTwIhiLXa3b', 12, 0, 0, 0),
(308, '8aQUv2jLTwIhiLXa3b', 13, 0, 0, 0),
(309, '8aQUv2jLTwIhiLXa3b', 14, 0, 0, 0),
(310, '8aQUv2jLTwIhiLXa3b', 15, 0, 0, 0),
(311, '8aQUv2jLTwIhiLXa3b', 16, 0, 0, 0),
(312, '8aQUv2jLTwIhiLXa3b', 17, 0, 0, 0),
(313, 'naswVtT7Mh1pRAU30Y', 1, 0, 0, 0),
(314, 'byAreVylIKg6lsyEuC', 1, 0, 0, 0),
(315, 'byAreVylIKg6lsyEuC', 2, 0, 0, 0),
(316, 'byAreVylIKg6lsyEuC', 3, 0, 0, 0),
(317, 'oxgmt9mBYc8D47U88U', 1, 0, 0, 0),
(318, 'oxgmt9mBYc8D47U88U', 2, 0, 0, 0),
(319, 'oxgmt9mBYc8D47U88U', 3, 0, 0, 0),
(320, 'oxgmt9mBYc8D47U88U', 3, 0, 1, 0),
(321, 'oxgmt9mBYc8D47U88U', 3, 0, 2, 0),
(322, 'oxgmt9mBYc8D47U88U', 4, 0, 0, 0),
(323, 'oxgmt9mBYc8D47U88U', 5, 0, 0, 0),
(324, 'oxgmt9mBYc8D47U88U', 6, 0, 0, 0),
(325, 'oxgmt9mBYc8D47U88U', 7, 0, 0, 0),
(326, 'oxgmt9mBYc8D47U88U', 7, 0, 3, 0),
(327, 'oxgmt9mBYc8D47U88U', 7, 0, 4, 0),
(328, 'oxgmt9mBYc8D47U88U', 7, 0, 5, 0),
(329, 'oxgmt9mBYc8D47U88U', 7, 0, 6, 0),
(330, 'oxgmt9mBYc8D47U88U', 7, 0, 7, 0),
(331, 'oxgmt9mBYc8D47U88U', 8, 0, 0, 0),
(332, 'oxgmt9mBYc8D47U88U', 9, 0, 0, 0),
(333, 'oxgmt9mBYc8D47U88U', 10, 0, 0, 0),
(334, 'oxgmt9mBYc8D47U88U', 10, 0, 8, 0),
(335, 'oxgmt9mBYc8D47U88U', 10, 0, 9, 0),
(336, 'oxgmt9mBYc8D47U88U', 10, 0, 10, 0),
(337, 'oxgmt9mBYc8D47U88U', 10, 0, 11, 0),
(338, 'oxgmt9mBYc8D47U88U', 10, 0, 12, 0),
(339, 'oxgmt9mBYc8D47U88U', 10, 0, 13, 0),
(340, 'oxgmt9mBYc8D47U88U', 10, 0, 14, 0),
(341, 'oxgmt9mBYc8D47U88U', 11, 0, 0, 0),
(342, 'oxgmt9mBYc8D47U88U', 12, 0, 0, 0),
(343, 'oxgmt9mBYc8D47U88U', 13, 0, 0, 0),
(344, 'oxgmt9mBYc8D47U88U', 14, 0, 0, 0),
(345, 'oxgmt9mBYc8D47U88U', 14, 0, 15, 0),
(346, 'oxgmt9mBYc8D47U88U', 14, 0, 16, 0),
(347, 'oxgmt9mBYc8D47U88U', 14, 0, 17, 0),
(348, 'oxgmt9mBYc8D47U88U', 14, 0, 18, 0),
(349, 'oxgmt9mBYc8D47U88U', 15, 0, 0, 0),
(350, 'oxgmt9mBYc8D47U88U', 16, 0, 0, 0),
(351, 'oxgmt9mBYc8D47U88U', 17, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
