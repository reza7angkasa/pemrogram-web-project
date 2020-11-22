-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 12:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rkh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namee` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `namee`, `photo`, `date`) VALUES
(17, 'percobaanlagi123', 'partner123@test.com', '$2y$10$qZ1g9Yaub/qGlQfk3l41tO4zstfiZm9Nvjen..UvOclDdLv/yaTQK', 'percobaan baru123', '04112020180722ewdwe.jpg', '2020-11-04 17:05:10'),
(19, 'galahad7', 'shazam@gmail.com', '$2y$10$XS/b/Vf3TgoRU.KTNDNbTuCy.vOTuCjcEjuJEM1Sypf9gqC9h/kOK', 'Billy Batson Is Shazam', '191120201913569.jpg', '2020-11-04 19:27:28'),
(20, 'teseract123', 'partner@test.com', '$2y$10$po7EMQOzegvg4biFlyKkg.M5.BKOhizHghiAic.v9CfE2QfWpTvNS', 'teseract', 'default.svg', '2020-11-06 03:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tag` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `displaypict` varchar(255) NOT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `deskripsi`, `tag`, `foto`, `displaypict`, `penulis`, `tgl_input`) VALUES
(21, 'latihan', 'latihan', 'latihan', '19112020181834Untitled5.jpg', '', 'Bruce Wayner Is Batman', '2020-11-01 18:45:24'),
(23, 'try again', 'never give up', 'ok soka', '19112020181909Untitled.jpg', '', 'Barry Allen Is The Flash', '2020-11-01 19:17:32'),
(24, 'efwef', 'ewfewfwe', 'wefwefw', '19112020181946Untitled3.jpg', '', 'Barry Allen Is The Flash', '2020-11-01 20:16:12'),
(25, 'Albert Einstein', 'Logic will take you from A to B, while imagination takes you everywhere', 'Science', '19112020181934the-hobbit-lonely-mountain-erebor-art-sredizeme.jpg', '', 'Galahad Aelah Santuy', '2020-11-02 23:26:11'),
(26, '', 'dwqdqwdqw', '', '19112020181959New_Shazam_Logo.png', '17112020100615mark-zuckerberg-quotes-the-biggest-mistake.jpg', 'Ahmad Rifqi Baidhowi', '2020-11-17 09:48:59'),
(27, 'terserah', 'dasdasdas', 'asdasda', 'ewdwe.jpg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-22 11:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fileupload`
--

CREATE TABLE `tbl_fileupload` (
  `id` int(11) NOT NULL,
  `title` varchar(5000) DEFAULT NULL,
  `synopsis` text,
  `avatar` varchar(5000) DEFAULT NULL,
  `displaypict` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_fileupload`
--

INSERT INTO `tbl_fileupload` (`id`, `title`, `synopsis`, `avatar`, `displaypict`, `identity`, `date`) VALUES
(1, 'nona manis janganlah dicium sayang kalau dicium merahlah pipinya', 'anak manis janganlah menangis sayang kalau menangis nanti dapat tampele', '01112020210342Mark-Zuckerberg-Quotes-1-.jpg', '', 'Barry Allen Is The Flash', '2020-11-01 19:08:07'),
(2, 'wqdqw', 'ewfcesewfwe dsdsfwe ewfwec evwevew', 'mark-zuckerberg-quotes-on-social-media.jpg', '', 'Barry Allen Is The Flash', '2020-11-01 20:15:35'),
(7, 'efwefw', 'wfewefwefw', 'aaaaaaaaaaa.jpg', '', 'Billy Batson Is Shazam', '2020-11-09 06:27:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_fileupload`
--
ALTER TABLE `tbl_fileupload`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_fileupload`
--
ALTER TABLE `tbl_fileupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
