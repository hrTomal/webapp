-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(10) NOT NULL,
  `sold_to` varchar(30) NOT NULL DEFAULT '*For sell*',
  `date` date NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `adult_fare` int(10) NOT NULL,
  `child_fare` int(10) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `sold_to`, `date`, `source`, `destination`, `adult_fare`, `child_fare`, `status`) VALUES
(1, '*For sell*', '2021-01-13', 'Dhaka', 'Khulna', 200, 100, 'available'),
(2, 'x@y.z', '2021-01-15', 'Dhaka', 'Kushtia', 200, 100, 'active'),
(3, '*For sell*', '0000-00-00', 'Dhaka', 'Khulna', 200, 100, 'available'),
(4, 'x@y.z', '2021-01-13', 'Dhaka', 'Khulna', 200, 100, 'active'),
(5, 'x@y.z', '2021-01-13', 'Dhaka', 'Khulna', 200, 100, 'active'),
(6, '*For sell*', '2021-01-13', 'Dhaka', 'Khulna', 200, 100, 'available'),
(7, '*For sell*', '2020-12-04', 'Dhaka', 'Khulna', 200, 100, 'available'),
(77, 'x@y.z', '2020-12-18', 'Dhaka', 'Khulna', 200, 100, 'active'),
(67, 'x@y.z', '2020-12-30', 'Dhaka', 'Khulna', 200, 100, 'completed'),
(78, 'x@y.z', '2020-12-20', 'Dhaka', 'Khulna', 200, 100, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_name` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `start_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_name`, `source`, `destination`, `class`, `start_time`) VALUES
('ExpressWay', 'Dhaka', 'Khulna', 'Economy', '9AM'),
('Rupsha', 'Kushtia', 'Dhaka', 'Business', '10PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `username`, `phone`, `password`) VALUES
('x@y.z', 'user1', 123456789, '222'),
('user2@g.c', 'user2', 1254589, '222'),
('user3', '565654', 0, '333'),
('a@b.c', '0', 56465, '555'),
('user6@pera.com', 'user6', 666789, '666'),
('user7@mail.com', 'user7', 789465, '777'),
('t@y.com', 'user8', 64654, '888'),
('user9@mail.com', 'user9', 7897, '999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
