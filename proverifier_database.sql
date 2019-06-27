-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 03:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proverifier`
--

-- --------------------------------------------------------

--
-- Table structure for table `document_data`
--

CREATE TABLE `document_data` (
  `doc_id` int(10) NOT NULL,
  `doc_owner` int(10) NOT NULL,
  `doc_title` varchar(255) NOT NULL,
  `doc_type` varchar(64) NOT NULL,
  `doc_description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `file_type` varchar(64) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_data`
--

INSERT INTO `document_data` (`doc_id`, `doc_owner`, `doc_title`, `doc_type`, `doc_description`, `filename`, `file_type`, `uploaded_on`) VALUES
(21, 47, 'SSc Certificate', 'Certificate', 'Roll:121106 Reg:525157', 'pqr6.jpg', 'image/jpeg', '2019-06-25 23:10:09'),
(22, 46, 'SSc Certificate', 'Certificate', 'Roll:121106 Reg:525157', 'pqr7.jpg', 'image/jpeg', '2019-06-26 11:19:09'),
(23, 46, 'NID', 'ID', 'National id. No: xxxxxxxxxxxxxx', 'pqr8.jpg', 'image/jpeg', '2019-06-26 22:33:30'),
(24, 46, 'BSc in CSE', 'Certificate', 'Bachelor of CSE certificate', 'pqr9.jpg', 'image/jpeg', '2019-06-26 22:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `name` varchar(128) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_type` enum('1','2','3','4') NOT NULL,
  `superior_verifier` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `email_verification` tinyint(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone_verification` tinyint(1) NOT NULL,
  `country` varchar(16) NOT NULL,
  `address` varchar(264) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `account_balance` int(12) NOT NULL,
  `points` int(10) NOT NULL,
  `service` varchar(128) NOT NULL,
  `dp_logo` varchar(264) NOT NULL,
  `password` varchar(64) NOT NULL,
  `signup_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `user_name`, `user_type`, `superior_verifier`, `email`, `email_verification`, `phone`, `phone_verification`, `country`, `address`, `currency`, `account_balance`, `points`, `service`, `dp_logo`, `password`, `signup_date`) VALUES
(42, 'Dhaka university', 'du', '1', '', 'du@du.com', 0, '', 0, '', '', '', 0, 0, '', '', '202cb962ac59075b964b07152d234b70', '2019-06-10 03:19:09'),
(44, 'Rokon', 'rukon', '4', '', 'rok@gmil.com', 0, '', 0, '', '', '', 0, 0, '', '', '202cb962ac59075b964b07152d234b70', '2019-06-10 14:06:29'),
(45, 'Salman', 'salman', '4', '', 'infosalmanbd@gmail.com', 0, '', 0, '', '', '', 0, 0, '', '', '202cb962ac59075b964b07152d234b70', '2019-06-10 16:23:33'),
(46, 'Rokon', 'rokon', '4', '', 'rokon@gmail.com', 0, '', 0, '', '', '', 0, 0, '', '', '202cb962ac59075b964b07152d234b70', '2019-06-10 16:28:20'),
(47, 'ABC', 'abc', '4', '', 'abc@email.com', 0, '', 0, '', '', '', 0, 0, '', '', '900150983cd24fb0d6963f7d28e17f72', '2019-06-10 20:07:57'),
(48, 'City University', 'cu', '1', '', 'cityuniversity@gm.vom', 0, '', 0, '', '', '', 0, 0, '', '', '202cb962ac59075b964b07152d234b70', '2019-06-21 21:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `verification_request`
--

CREATE TABLE `verification_request` (
  `req_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `verifier_id` int(10) NOT NULL,
  `verification_status` tinyint(1) NOT NULL COMMENT '0=requested,1=verified,2=rejected',
  `verifier_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verification_request`
--

INSERT INTO `verification_request` (`req_id`, `doc_id`, `verifier_id`, `verification_status`, `verifier_comment`) VALUES
(7, 22, 42, 0, ''),
(8, 22, 48, 0, ''),
(9, 15, 48, 0, ''),
(10, 17, 48, 0, ''),
(11, 0, 0, 0, ''),
(12, 17, 48, 0, ''),
(13, 17, 48, 0, ''),
(14, 17, 48, 0, ''),
(15, 15, 48, 0, ''),
(16, 15, 48, 0, ''),
(17, 15, 48, 0, ''),
(18, 15, 48, 0, ''),
(19, 22, 48, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document_data`
--
ALTER TABLE `document_data`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `verification_request`
--
ALTER TABLE `verification_request`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document_data`
--
ALTER TABLE `document_data`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `verification_request`
--
ALTER TABLE `verification_request`
  MODIFY `req_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
