-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2022 at 09:54 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sociofarmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `id` int(8) NOT NULL,
  `name` tinytext NOT NULL,
  `price` int(8) NOT NULL COMMENT 'price per piece',
  `value` int(128) NOT NULL COMMENT 'max capacity of projects value',
  `capacity_left` int(128) NOT NULL COMMENT 'project value capacity left',
  `project_return` int(128) NOT NULL COMMENT 'total return when project is done',
  `open` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'is project still open',
  `description` text NOT NULL,
  `roi_bot` tinyint(8) NOT NULL,
  `roi_top` tinyint(8) NOT NULL,
  `img_url` varchar(32) NOT NULL,
  `proposal_url` varchar(32) NOT NULL,
  `video_url` varchar(32) NOT NULL,
  `project_url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `name`, `price`, `value`, `capacity_left`, `project_return`, `open`, `description`, `roi_bot`, `roi_top`, `img_url`, `proposal_url`, `video_url`, `project_url`) VALUES
(1, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 500000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 10, 'bg-portfolio-card.jpg', '-', '-', '#'),
(2, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 8, 'bg-portfolio-card.jpg', '-', '-', '#'),
(3, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 500000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 7, 10, 'bg-portfolio-card.jpg', '-', '-', '#'),
(4, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 12, 14, 'bg-portfolio-card.jpg', '-', '-', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0 = investors, 1 = admin',
  `portfolio` longtext NOT NULL COMMENT 'objects contain project_key, buying_volume, and return attributes\r\n[\r\n[project_key, buying_volume, return],\r\n[project_key, buying_volume, return],\r\n[project_key, buying_volume, return]\r\n]',
  `img_url` varchar(32) NOT NULL,
  `pekerjaan` text NOT NULL,
  `bank` text NOT NULL,
  `norek` text NOT NULL,
  `nama_bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
