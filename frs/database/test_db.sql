-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 09:08 AM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `rec_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`rec_id`, `name`, `username`, `password`, `level`) VALUES
(1, 'asahi', '1234', '1234', 'user'),
(2, 'haruto', '4321', '4321', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `rec_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_id` varchar(15) CHARACTER SET latin1 NOT NULL,
  `section` varchar(250) CHARACTER SET latin1 NOT NULL,
  `file` varchar(250) CHARACTER SET latin1 NOT NULL,
  `dateborrow` date NOT NULL,
  `datereturn` date NOT NULL,
  `ex_num` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `remark` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`rec_id`, `staff_name`, `staff_id`, `section`, `file`, `dateborrow`, `datereturn`, `ex_num`, `phone_num`, `remark`) VALUES
(1, '0', '222222', 'MIS', 'DeliveryOrder', '2022-12-01', '2022-12-03', '435', '19865', 'gg'),
(2, '0', '2020608897', 'IMS', 'BDASTAFFMOVEMENT', '2022-11-10', '2022-12-17', '987', '178051772', 'hi'),
(3, 'Watanabe Haruto', '20209998', 'BED', 'B.O.S_RECORD', '2022-12-09', '2022-12-10', '567', '1980964', 'no'),
(4, 'Sophea', '20209876', 'MIS', '', '2022-12-02', '2022-12-24', '234', '16390876', '-'),
(5, 'Batrisya', '20209087', 'MIS', 'Delivery Order', '2022-12-02', '2022-12-31', '456', '11890765', 'haha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`rec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
