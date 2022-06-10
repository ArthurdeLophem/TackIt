-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2022 at 08:45 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

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
(1, 'park de Ham', '2022-06-13 00:00:00', '2022-06-30 00:00:00', 1000, '2022-06-13 00:00:00', '2022-06-15 00:00:00', '2022-06-29 00:00:00', 'park'),
(2, 'kruidtuin straat', '2022-06-11 00:00:00', '2022-06-30 00:00:00', 1000, '2022-06-11 00:00:00', '2022-06-14 00:00:00', '2022-06-29 00:00:00', 'verkeer');

-- --------------------------------------------------------

--
-- Table structure for table `project_items`
--

CREATE TABLE `project_items` (
  `id` int(11) NOT NULL,
  `items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_items`
--

INSERT INTO `project_items` (`id`, `items`, `user_id`, `project_id`, `status`, `budget`) VALUES
(22, '[{\"coordinates\":{\"lat\":51.02610844145942,\"lng\":4.477755046722859},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02562050044223,\"lng\":4.477382131400436},\"itemType\":\"fontein\"}]', 5, 2, 'finished', 'eenbudget'),
(23, '[{\"coordinates\":{\"lat\":51.026170911045746,\"lng\":4.478012599751322},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.026013892736174,\"lng\":4.4778274835121055},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.026088181034964,\"lng\":4.477913334521606},\"itemType\":\"straatlamp\"}]', 6, 2, 'finished', 'eenbudget'),
(24, '[{\"coordinates\":{\"lat\":51.025858562272184,\"lng\":4.477604807456271},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02605441364116,\"lng\":4.4779294315858875},\"itemType\":\"bank\"},{\"coordinates\":{\"lat\":51.026103376354136,\"lng\":4.477746998190738},\"itemType\":\"fontein\"}]', 7, 2, 'finished', 'eenbudget');

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
(4, 'testG', 'testG@test.com', '$2y$12$g2DIRHfSkwnnqqsvbzMb9uQpGLXyrCKFcs0TbSvKIvH63dSybh34y', NULL, 1),
(5, 'adl', 'adl@gmail.com', '$2y$12$Yt//eY8X6f0Vo/xIRsfDt.QQZtYDci/WT.y.TAoAfzQyCZyyHooZe', NULL, 0),
(6, 'dllaaaa', 'aaddd@g.com', '$2y$12$n3rdq1WHLVnAA4QpUaUY8eZ.421vGBBBJ.JLWHe9TAsCmqekh./ca', NULL, 0),
(7, 'imag', 'imag@gmail.com', '$2y$12$bn8KXYQrLv1oROnIVgNUnelvVNqYikilu.WMRtyZFeTYOSDTWokzq', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vereisten`
--

CREATE TABLE `vereisten` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `voter_id`) VALUES
(80, 6, 7);

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
-- Indexes for table `vereisten`
--
ALTER TABLE `vereisten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vereisten`
--
ALTER TABLE `vereisten`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
