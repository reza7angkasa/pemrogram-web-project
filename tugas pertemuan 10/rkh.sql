-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:37 AM
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
(17, 'percobaanlagi123', 'partner123@test.com', '$2y$10$qZ1g9Yaub/qGlQfk3l41tO4zstfiZm9Nvjen..UvOclDdLv/yaTQK', 'percobaan baru123', '29112020203646Ni2.jpeg', '2020-11-04 17:05:10'),
(19, 'galahad7', 'shazam@gmail.com', '$2y$10$XS/b/Vf3TgoRU.KTNDNbTuCy.vOTuCjcEjuJEM1Sypf9gqC9h/kOK', 'Billy Batson Is Shazam', '191120201913569.jpg', '2020-11-04 19:27:28'),
(21, 'berhasiliklini', 'partner@test.com', '$2y$10$y9fGVlDdGIMsC0JnSIwFaulXByMP1YpjLK3RMGlAOPL1JtuGPBofK', 'is that this simple?', '291120202024101559693904004.png', '2020-11-29 19:14:21');

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
(28, 'sadsad', 'sadsadasdas', 'sadasdas', '29112020204252Ni1.jpg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-29 19:42:35'),
(29, 'Mercy', 'One more', 'Right then and there', 'S1.jpeg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-29 19:43:26'),
(30, 'i would glad to', 'so to speak', 'aneh kadang2', 'S13.jpeg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-29 19:44:37');

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
(8, 'latihan-latihan', 'mencoba membuat create', '15.jpg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-29 18:40:18'),
(10, 'bikin 3', 'ayok bikin 3 muter', '586620304-jordan-wallpaper.jpg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-29 19:45:20'),
(11, 'muter lagi', 'muter trus apaan tuh', 'S14.jpeg', '191120201913569.jpg', 'Billy Batson Is Shazam', '2020-11-29 19:45:42');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_fileupload`
--
ALTER TABLE `tbl_fileupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
