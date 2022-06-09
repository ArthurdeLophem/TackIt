-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 05:46 PM
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
-- Database: `tackit`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `budget` int(11) NOT NULL,
  `start_date_cocreatie` datetime NOT NULL,
  `start_date_voting` datetime NOT NULL,
  `end_date_cocreatie_voting` datetime NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `start_date`, `end_date`, `budget`, `start_date_cocreatie`, `start_date_voting`, `end_date_cocreatie_voting`, `Type`) VALUES
(1, 'weeble', '2022-06-02 00:00:00', '2022-06-10 00:00:00', 654165, '2022-07-01 00:00:00', '2022-06-12 00:00:00', '2022-06-29 00:00:00', 'renovatie'),
(2, 'weeble', '2022-06-02 00:00:00', '2022-06-10 00:00:00', 654165, '2022-07-01 00:00:00', '2022-06-12 00:00:00', '2022-06-29 00:00:00', 'renovatie');

-- --------------------------------------------------------

--
-- Table structure for table `project_items`
--

CREATE TABLE `project_items` (
  `id` int(11) NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`items`)),
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_items`
--

INSERT INTO `project_items` (`id`, `items`, `user_id`, `project_id`, `status`, `budget`) VALUES
(8, '[{\"itemType\": \"boom\", \"coordinates\": {\"lat\": 50.81462244629948, \"lng\": 4.885061749853978}}, {\"itemType\": \"fontein\", \"coordinates\": {\"lat\": 50.81435833697735, \"lng\": 4.885372658123429}}]', 1, 1, 'finished', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ProfilePicture` varchar(2000) DEFAULT NULL,
  `Type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `ProfilePicture`, `Type`) VALUES
(1, 'burger', 'test@test.com', '$2y$12$0aEeqD8GSuVMM3a/ML.7D.gcIIDNMzE/jF3NvamIR8SWMiMEVqTsS', NULL, 0),
(2, 'testGemeente', 'test2@test.com', '$2y$12$nG/HZmGWP6qoItPCBzxXxeAAfz2chYG.bwbYKpMDYsy4nulv6PqPK', NULL, 1),
(3, 'testB', 'testB@test.com', '$2y$12$.lWQbnLSsBBB1SJDvt2SM.GtFoo1mxHsWXyf7JiSGHv75igHygBTC', NULL, 0),
(4, 'testG', 'testG@test.com', '$2y$12$g2DIRHfSkwnnqqsvbzMb9uQpGLXyrCKFcs0TbSvKIvH63dSybh34y', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_items`
--
ALTER TABLE `project_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_items`
--
ALTER TABLE `project_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
