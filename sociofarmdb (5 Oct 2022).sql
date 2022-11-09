-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2022 at 05:26 AM
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
-- Table structure for table `tbl_mitra`
--

CREATE TABLE `tbl_mitra` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `proyek` int(16) NOT NULL,
  `deskripsi` text NOT NULL,
  `img_url` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mitra`
--

INSERT INTO `tbl_mitra` (`id`, `nama`, `alamat`, `proyek`, `deskripsi`, `img_url`) VALUES
(1, 'Bapak Zainuddin', 'Colomadu, Karanganyar', 10, '-', 'mitra1.png'),
(2, 'Bapak Agus', 'Gondangrejo, Karanganyar', 9, '-', 'mitra2.png'),
(3, 'Bapak Mukidi', 'Jumantono, Karanganyar', 8, '-', 'mitra3.png'),
(4, 'Bapak Adhi', 'Gondangrejo, Karanganyar', 6, '-', 'mitra2.png'),
(5, 'Bapak Supratman', 'Jumantono, Karanganyar', 5, '-', 'mitra5.png'),
(6, 'Bapak Zulkifli', 'Colomadu, Karanganyar', 4, '-', 'mitra6.png'),
(7, 'Bapak Amirudin', 'Jumantono, Karanganyar', 4, '-', 'mitra7.png'),
(8, 'Bapak Haris', 'Karangpandan, Karanganyar', 3, '-', 'mitra8.png'),
(9, 'Bapak Ridwan', 'Colomadu, Karanganyar', 1, '-', 'mitra9.png');

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
(1, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 500000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 10, 'proyek1.png', '-', '-', '#'),
(2, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 8, 'proyek2.png', '-', '-', '#'),
(3, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 500000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 7, 10, 'proyek3.png', '-', '-', '#'),
(4, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 12, 14, 'proyek4.png', '-', '-', '#'),
(5, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 500000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 8, 10, 'proyek5.png', '-', '-', '#'),
(6, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4, 8, 'proyek6.png', '-', '-', '#'),
(7, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 500000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 7, 10, 'proyek7.png', '-', '-', '#'),
(8, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 12, 14, 'proyek8.png', '-', '-', '#'),
(9, 'Proyek Kambing Ternak Bpk. Zainudin - Part 2', 250000, 0, 0, 0, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 12, 14, 'proyek9.png', '-', '-', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0 = guest, 1 = investor, 2 = admin',
  `portfolio` longtext NOT NULL COMMENT 'objects contain project_key, buying_volume, and return attributes\r\n[\r\n[project_key, buying_volume, return],\r\n[project_key, buying_volume, return],\r\n[project_key, buying_volume, return]\r\n]',
  `img_url` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `bank` text NOT NULL,
  `nama_bank` varchar(128) NOT NULL,
  `norek` text NOT NULL,
  `nama_rekening` text NOT NULL,
  `telepon` int(128) NOT NULL,
  `ttl` text NOT NULL,
  `gender` text NOT NULL,
  `cabang_bank` text NOT NULL,
  `ktp_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `password`, `email`, `address`, `role`, `portfolio`, `img_url`, `pekerjaan`, `bank`, `nama_bank`, `norek`, `nama_rekening`, `telepon`, `ttl`, `gender`, `cabang_bank`, `ktp_url`) VALUES
(2, 'Maisyah', 'mai123', 'mai@gmail.com', 'Klaten', 1, '', 'test_img', '', '', '', '', '', 0, '', '', '', 'test_ktp'),
(3, 'Alfan H', 'alfanmask1', 'alfan@gmail.com', 'Temanggung', 1, '', 'test_img', '', '', '', '', '', 0, '', '', '', 'test_ktp'),
(4, 'Siti', '$2y$10$4NWsBBFnJMc2VeB9WXr3Ies7iq0NuYPzOX8BvTwdMc2CpkRJC6nfe', 'siti@gmail.com', 'asd', 1, '', 'test_img', '', '', '', '', '', 0, '', '', '', 'test_ktp'),
(5, 'siti', '$2y$10$SmGlJTHNVQAs7w9nxD5tCOMUiU9Y3Dc2TXEU4oufV6hrvOBQnSb0G', 'sitisiti@gmai.com', 'asd', 1, '', 'test_img', '', '', '', '', '', 0, '', '', '', 'test_ktp'),
(6, 'Alfan Mask', '$2y$10$thvx4KsLfRuak7mv.wqJqu3dA3VjctYYAl9FbooGRUHRrgwIupBQu', 'alf@gmail.com', 'asd', 1, '', 'IMG_20220424_080118_603.jpg', 'Programmer', '', 'BRI', '128319823', 'alfanmask', 2147483647, 'Surakarta, 20 Sept 2001', 'Laki-laki', 'Solo', 'dzikir_3_3.png'),
(7, 'luthfi', '$2y$10$PUlA2cfMxSALVKZ5AI2dw.4GouWzSi/Ouslpuu91AZiZzFQpJdRt2', 'lupi@gmail.com', 'kjhasdjka', 1, '', 'test_img', '', '', '', '', '', 0, '', '', '', 'test_ktp'),
(8, 'yagsd', '$2y$10$k8Pydd.Gu0N63GBztW6wIe4E7pk/u8pTjPiBc/4Sfye/cyl7EURju', 'ajksdh@gmail.com', 'asd', 1, '', 'test_img', '', '', '', '', '', 0, '', '', '', 'test_ktp'),
(9, 'Alfan Hidayat', '$2y$10$qh3lgfDxphJhdz4ONmL3PumsGPlB6MfSqpDKNf5NsJkErGwq/EDVa', 'alfh@gmail.com', 'Temanggun RT 99 RW 99', 1, '', 'IMG_20220424_080118_6031.jpg', 'Marketer', '', 'BRI', '0817230717', 'Alfan Hidayat', 2147483647, 'Temanggung, 20 Agustus 2022', 'Laki-laki', 'Surakarta', ''),
(10, 'aasd', '$2y$10$AJFgKfEfBkKJZQ/.5b7a0Octb7zEhS0ziCSkjHMqX4n0dE0ufk6gm', 'a@gmail.com', 'Di sini', 1, '', '', '', '', '', '', '', 0, '', '', '', ''),
(11, 'Alfan Hidayat', '$2y$10$2HhW7ap6hcXa0sX2.X2at.yQlahuwloooIPWWuH/fdlqhiicO.aFS', 'alfanh@gmail.com', 'Temanggung', 1, '', 'Screenshot_2021-07-05_11-11-24.png', '', '', 'BRI', '123123', '', 123123123, 'Temanggung, 25 September 2000', 'Perempuan', '', ''),
(12, 'Maya', '$2y$10$wxBcXfPpGCVNP8LdThrGsuYFJIANUFcW8ZZm8JjSsQ5jqVMw5EDfC', 'maya@gmail.com', 'Karanganyar', 1, '', 'ski_ft_small_size.png', '', '', 'BRI', '', '', 0, '', 'Perempuan', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
