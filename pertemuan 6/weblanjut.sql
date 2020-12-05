-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 05:26 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `namad` varchar(25) NOT NULL,
  `namab` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`namad`, `namab`, `email`) VALUES
('Reza', 'angkasa', 'ardeanreza7@gmail.com'),
('Reza', 'angkasa', 'raesadrea@gmail.com'),
('wedw', 'angkasa', 'raesadrea@gmail.com'),
('Reza', 'ewf23', 'partner@test.com'),
('Reza', 'ewf23', 'partner@test.com'),
('Reza', 'angkasa', 'ardeanreza7@gmail.com'),
('Reza', 'angkasa', 'ardeanreza7@gmail.com'),
('dasdsa', 'sadasdas', 'ardeanreza7@gmail.com'),
('dasdsa', 'sadasdas', 'ardeanreza7@gmail.com'),
('wqdwqd', 'sadasdas', 'asdasd'),
('sadas', 'wdqwdq', 'ahmad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(30) NOT NULL,
  `kodemk` varchar(30) NOT NULL,
  `namamk` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `sks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kodemk`, `namamk`, `kategori`, `sks`) VALUES
(2, 'asdasd', 'dsadasd', 'MKMA', '5');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `namaDepan` varchar(20) NOT NULL,
  `namaBelakang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`username`, `password`, `email`, `namaDepan`, `namaBelakang`) VALUES
('sdfsfsd', '961222', 'partner@test.com', 'sfdsf', 'sdfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
