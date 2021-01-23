-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 12:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(100) NOT NULL,
  `qs_num` int(100) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `qs_num`, `is_correct`, `text`) VALUES
(1, 1, 1, 'php : hyper text preprocessor'),
(2, 1, 0, 'public home page'),
(3, 1, 0, 'plove homi plone'),
(4, 1, 0, 'private home page'),
(5, 2, 0, 'print\" hello world\"'),
(6, 2, 1, ' echo \"hello world\"'),
(7, 2, 0, '\"hello world\"'),
(8, 2, 0, 'document.write(\"hello world\")'),
(65, 6, 1, ' print'),
(66, 6, 0, 'display'),
(67, 6, 0, 'delete'),
(68, 6, 0, 'close'),
(69, 3, 1, ' print'),
(70, 3, 0, 'display'),
(71, 3, 0, 'delete'),
(72, 3, 0, 'close');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qs_id` int(100) NOT NULL,
  `qs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qs_id`, `qs`) VALUES
(1, 'What does PHP stand for?'),
(2, 'How do you write \"Hello World\" in PHP'),
(3, 'what does echo do');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
