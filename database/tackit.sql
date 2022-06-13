-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 04:01 PM
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
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `projectId` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `file_path`, `projectId`, `file_name`) VALUES
(28, 'test', 'http://res.cloudinary.com/dgypufy9k/image/upload/v1655069215/info_files/gzv3fnqqhr2fcuulmlzi.webp', 30, 'yes.png');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `budget` int(11) NOT NULL,
  `start_date_cocreatie` date NOT NULL,
  `start_date_voting` date NOT NULL,
  `end_date_cocreatie_voting` date NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Fase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `start_date`, `end_date`, `budget`, `start_date_cocreatie`, `start_date_voting`, `end_date_cocreatie_voting`, `Type`, `Fase`) VALUES
(28, 'wilgenpark', '2022-06-10', '2022-06-29', 20000, '2022-06-11', '2022-06-13', '2022-06-19', 'renovatie', 0),
(29, 'zwaluenstraat', '2022-06-16', '2022-06-24', 400000, '2022-06-11', '2022-06-12', '2022-06-22', 'renovatie', 0),
(30, 'Bloemenpark', '2022-06-10', '2022-06-23', 700000, '2022-06-10', '2022-06-24', '2022-07-09', 'renovatie', 0);

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
(28, '[{\"coordinates\":{\"lat\":51.02615396109944,\"lng\":4.478019322268666},\"itemType\":\"straatlamp\"}]', 0, 0, 'finished', 'eenbudget'),
(29, '[{\"coordinates\":{\"lat\":51.02610501842129,\"lng\":4.477995182387531},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02556833324973,\"lng\":4.477338041178883},\"itemType\":\"boom\"}]', 4, 30, 'finished', 'eenbudget'),
(30, '[{\"coordinates\":{\"lat\":51.026076327861766,\"lng\":4.4780246866866955},\"itemType\":\"straatlamp\"}]', 4, 28, 'winner', 'eenbudget'),
(31, '[{\"coordinates\":{\"lat\":51.026577566258254,\"lng\":4.477477516047657},\"itemType\":\"fontein\"},{\"coordinates\":{\"lat\":51.02610164306226,\"lng\":4.477818156592549},\"itemType\":\"bank\"},{\"coordinates\":{\"lat\":51.025561582453285,\"lng\":4.477338041178883},\"itemType\":\"fontein\"},{\"coordinates\":{\"lat\":51.02609995538265,\"lng\":4.478070284239948},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.025590273331375,\"lng\":4.4778530253097415},\"itemType\":\"straatlamp\"},{\"coordinates\":{\"lat\":51.02615396109944,\"lng\":4.476165915839375},\"itemType\":\"struik\"}]', 4, 29, 'finished', 'eenbudget'),
(32, '[{\"coordinates\":{\"lat\":51.02657587859597,\"lng\":4.47629466187209},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02649824606494,\"lng\":4.47641536127776},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02643580241299,\"lng\":4.4765548361465335},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.026371671007226,\"lng\":4.47667285334319},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.026300788823924,\"lng\":4.47679355274886},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02625184630076,\"lng\":4.476924980990589},\"itemType\":\"boom\"},{\"coordinates\":{\"lat\":51.02648136941052,\"lng\":4.476715768687428},\"itemType\":\"fontein\"},{\"coordinates\":{\"lat\":51.02632779157318,\"lng\":4.4771610153839},\"itemType\":\"straatlamp\"},{\"coordinates\":{\"lat\":51.026253533974824,\"lng\":4.477356816641987},\"itemType\":\"straatlamp\"},{\"coordinates\":{\"lat\":51.02619615302191,\"lng\":4.477512384764851},\"itemType\":\"straatlamp\"},{\"coordinates\":{\"lat\":51.026126958248895,\"lng\":4.477686728350819},\"itemType\":\"straatlamp\"},{\"coordinates\":{\"lat\":51.02666701227087,\"lng\":4.47653606068343},\"itemType\":\"struik\"},{\"coordinates\":{\"lat\":51.02663494673902,\"lng\":4.476549471728505},\"itemType\":\"struik\"},{\"coordinates\":{\"lat\":51.02660288118499,\"lng\":4.4766567600891},\"itemType\":\"struik\"},{\"coordinates\":{\"lat\":51.02656744028369,\"lng\":4.476686264388263},\"itemType\":\"struik\"},{\"coordinates\":{\"lat\":51.026467868082584,\"lng\":4.476831103675068},\"itemType\":\"struik\"},{\"coordinates\":{\"lat\":51.026442553082106,\"lng\":4.476924980990589},\"itemType\":\"struik\"},{\"coordinates\":{\"lat\":51.02638517236318,\"lng\":4.476978625170887}},{\"coordinates\":{\"lat\":51.02636323265773,\"lng\":4.477061773650349}},{\"coordinates\":{\"lat\":51.026683888857676,\"lng\":4.4763804925605655}},{\"coordinates\":{\"lat\":51.02630922718475,\"lng\":4.477053727023304}}]', 3, 28, 'finished', 'eenbudget'),
(33, '[]', 3, 30, 'finished', 'eenbudget');

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

--
-- Dumping data for table `vereisten`
--

INSERT INTO `vereisten` (`id`, `item`, `amount`, `project_id`) VALUES
(41, 'bomen', 1, 11),
(42, 'struik', 2, 11),
(43, 'bank', 3, 11),
(44, 'fontein', 2, 11),
(45, 'struik', 25, 11),
(51, 'fontein', 2, 26),
(52, 'bomen', 26, 26),
(83, 'bomen', 3, 30),
(84, 'fontein', 2, 30),
(85, 'struik', 5, 30);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `user_id`, `voter_id`, `project_id`) VALUES
(80, 6, 7, 2),
(81, 5, 6, 2),
(82, 7, 6, 2),
(84, 4, 3, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `project_items`
--
ALTER TABLE `project_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vereisten`
--
ALTER TABLE `vereisten`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
