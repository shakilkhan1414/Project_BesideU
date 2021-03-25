-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 03:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `besideu`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `email`, `message`) VALUES
(821, 'Riad Opu', 'opu@gmail.com', 'Apex Legends'),
(1555, 'Naeemul Haque', 'naeem@gmail.com', 'Let\'s go'),
(1678, 'saba', 'saba@gmail.com', 'sabas msg'),
(3316, 'Shakil Khan', 'deadless14@gmail.com', 'Last Message'),
(3644, 'Shakil Khan', 'deadless14@gmail.com', 'good'),
(5638, 'Shakil Khan', 'shakil@gmail.com', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(10) NOT NULL,
  `sender_id` varchar(20) NOT NULL,
  `received_id` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `sender_id`, `received_id`, `message`, `time`) VALUES
(9, '6062', '5766', 'hey bro', '25-03-2021 11:23:25 pm'),
(10, '5766', '6062', 'hii', '25-03-2021 11:23:52 pm'),
(11, '6062', '2604', 'whatsup?', '25-03-2021 11:24:37 pm'),
(13, '6', '6062', 'lets play', '25-03-2021 11:25:43 pm'),
(14, '6062', '6', 'ok', '25-03-2021 11:26:14 pm'),
(15, '541885065', '6', 'like cricket?', '25-03-2021 11:29:51 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `job` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `interest` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `profile_picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `name`, `username`, `email`, `password`, `job`, `gender`, `district`, `interest`, `dob`, `profile_picture`) VALUES
(6, 'Riad Opu', 'opu12', 'opu@gmail.com', 'opu', 'Student', 'p_n_t_s', 'Coxs Bazar', 'Game', '2021-03-16', 'apex.jpg'),
(2604, 'Rafid Ahsan', 'rafid', 'rafid@gmail.com', 'rafid', 'Web Developer', 'Male', 'Dhaka', 'Programming', '2021-03-21', 'rocket.jpg'),
(5766, 'Naeemul Haque', 'naeem', 'naeem@gmail.com', 'naeem', 'Singer', 'Male', 'Dinajpur', 'Music', '2021-04-07', 'lil-wayne.jpg'),
(6062, 'Shakil Khan', 'shakil', 'shakil@gmail.com', 'shakil', 'Student', 'Male', 'Rajshahi', 'Programming', '2000-11-19', 'flash.png'),
(9570, 'Nafisha Rahman', 'nafisha', 'nafisha@gmail.com', 'nafisha', 'Doctor', 'Female', 'Khulna', 'Music', '2020-06-09', 'doll.jpg'),
(541885065, 'Saba Ahmed', 'saba', 'saba@gmail.com', 'saba', 'joker', 'Male', 'Narayanganj', 'Cricket', '2021-03-09', '1616251447pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `world_chat`
--

CREATE TABLE `world_chat` (
  `id` int(10) NOT NULL,
  `sender_id` int(20) NOT NULL,
  `send_message` varchar(500) NOT NULL,
  `send_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `world_chat`
--

INSERT INTO `world_chat` (`id`, `sender_id`, `send_message`, `send_time`) VALUES
(26, 2604, 'Hello Guys', '25-03-2021 10:47:17 pm'),
(27, 5766, 'Lets play a game', '25-03-2021 10:47:57 pm'),
(28, 6, 'apex?', '25-03-2021 10:48:38 pm'),
(29, 9570, 'Assemble!!', '25-03-2021 10:49:39 pm'),
(31, 5766, 'Winter is coming', '25-03-2021 10:52:28 pm'),
(45, 6062, 'I want a graphics designer, anyone?', '25-03-2021 11:35:38 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `world_chat`
--
ALTER TABLE `world_chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `world_chat`
--
ALTER TABLE `world_chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
