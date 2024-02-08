-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 06:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(10) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `heading`, `image`, `content`) VALUES
(1, 'About', 'about.png', 'I am passionate towards Software and Web Development. I am currently doing internship in senchola university.I have done my graduation in Bachelor of Engineering at miet Engineering College at 2022 passed out by securing a good CGPA of 8.64.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_home`
--

CREATE TABLE `tb_home` (
  `id` int(100) NOT NULL,
  `menu1` varchar(255) NOT NULL,
  `menu2` varchar(255) NOT NULL,
  `menu3` varchar(255) NOT NULL,
  `menu4` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `button1` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `button2` varchar(255) NOT NULL,
  `button3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_home`
--

INSERT INTO `tb_home` (`id`, `menu1`, `menu2`, `menu3`, `menu4`, `image`, `button1`, `name`, `button2`, `button3`) VALUES
(1, 'Home', 'About', 'Skills', 'Contact', 'developer.webp', 'login', 'Faisal Haq', 'Contact', 'Sign');

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'demo', 'universe@gmail.com', '2420289', 'good try to completely fully'),
(2, 'sample', 'sample@gmail.com', '12345', 'good but complete the admin part'),
(3, 'trydone', 'learnmore@gmail.com', '9879083213', 'learning is knowledge'),
(4, 'trydone1', 'try@gmail.com', '9879083213', '-----'),
(5, 'trydone1', 'try@gmail.com', '9879083213', '-----'),
(6, 'test1', 'test1@gmail.com', '9786522356', 'demo is trail by error'),
(10, 'Developer', 'develop@gmail.com', '12345', 'Nicely done bro');

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`id`, `name`, `gender`, `username`, `password`) VALUES
(1, 'allah', 'male', 'allah@gmail.com', '12'),
(2, 'Faisal Haq', 'male', 'faisal@gmail.com', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skills`
--

CREATE TABLE `tb_skills` (
  `id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `skillname` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_skills`
--

INSERT INTO `tb_skills` (`id`, `image`, `skillname`, `percentage`) VALUES
(4, 'html5-icon-1.png', 'HTML', '85'),
(5, 'css.png', 'CSS', '80'),
(6, 'javascripticon.png', 'JavaScript', '60'),
(7, 'Bootstrap_logo.png', 'Bootstrap', '58'),
(8, 'PHP.png', 'PHP', '45'),
(9, 'sqlicon.png', 'SQL', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_test`
--

INSERT INTO `tb_test` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'sample@gmail.com', 'sample@gmail.com', '12', 'good try to improve'),
(2, 'sample@gmail.com', 'sample@gmail.com', 'a1b2c3d4e', 'good keep on going'),
(3, 'universe@gmail.com', 'universe@gmail.com', 'allahtheone', 'good completely fully'),
(4, 'universe@gmail.com', 'universe@gmail.com', '2420289', 'try to improve'),
(5, 'demo', 'universe@gmail.com', '2420289', 'good try to improve more'),
(6, 'demo', 'universe@gmail.com', '2420289', 'good to try improve completely'),
(7, 'trydone', 'try@gmail.com', '1234', 'demo piece');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `gender`, `username`, `password`) VALUES
(1, 'Admin', 'male', 'admin@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_skills`
--
ALTER TABLE `tb_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_person`
--
ALTER TABLE `tb_person`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_skills`
--
ALTER TABLE `tb_skills`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
