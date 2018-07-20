-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 11:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `email`) VALUES
(14, 'Test', 'Accepted', 1, ''),
(28, 'Request Diterima', 'a', 1, 'd@d.com'),
(29, 'Request Diterima', 'Selamat', 1, 'pilih@mail');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nama` varchar(30) NOT NULL,
  `company` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nama`, `company`, `kategori`, `notelp`, `email`, `alamat`, `username`, `password`, `image`) VALUES
('dela', 'Telkom Jaya', 'Mitra', '1234', 'd@d.com', 'Bekasi Barat', 'dela', '12', ''),
('Kaka', 'Jayabaya', 'Customer', '12345', 'pilih@mail', 'Alamat Perusahaan 1', 'test', 'test', ''),
('Kamu', 'Perusahaan 3', 'Customer', '123', 'kamu@kamu.mai', 'Alamat Perusahaan 3', 'kamu', 'kamu', 0x747464642e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `company` varchar(50) NOT NULL,
  `name1` varchar(30) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `name3` varchar(30) NOT NULL,
  `name4` varchar(30) NOT NULL,
  `name5` varchar(30) NOT NULL,
  `name6` varchar(30) NOT NULL,
  `name7` varchar(30) NOT NULL,
  `name8` varchar(30) NOT NULL,
  `name9` varchar(30) NOT NULL,
  `name10` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `jam` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`company`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `name9`, `name10`, `address`, `phone`, `email`, `job`, `hari`, `tanggal`, `jam`) VALUES
('Telkom', 'farah', 'syafa', 'najwa', 'salman', 'salman', '', '', '', '', '', 'Bandung', '123455', 'aaa@aaa.com', 'Maintenance', 'selasa', '2 agustus 2018', '10.00 s/d 12.00'),
('dddd', 'qw', 'ew', 'rr', 'qww', '', '', '', '', '', '', 'dadadada', '121212', 'yaya@yaya.com', 'Site Visit', 'Selasa', '1 januari 2019', '10.00 s/d 12.00'),
('XXXX', 'dela', 'rosa', 'kusuma', '', '', '', '', '', '', '', 'Jatinangor', '321432', 'dela@dela.com', 'Maintenance', 'Jumat', '2 Agustus 2018', '13.00 s/d 15.00'),
('wwww', 'www', 'www', 'www', 'www', 'www', '', '', '', '', '', 'www', '1234', 'haha@hahaha.com', 'Site Visit', 'Kamis', '2018-06-03', '09.00'),
('sfhfh', 'sdfhf', 'dfhsd', 'sdfhd', 'dfhdf', 'dfhdh', '', '', '', '', '', 'sdfhdhdfhdfh', '135534646', 'haha@hahaha.com', 'Maintenance', 'Selasa', '2018-06-18', '09.00'),
('Jayabaya', 'Farah', 'Dela', 'Evita', 'Windy', '', '', '', '', '', '', 'Alamat Perusahaan 1', '12345', 'pilih@mail', 'Site Visit', 'Senin', '2019-12-12', '18:00');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` smallint(6) NOT NULL,
  `company` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `nper1` varchar(100) NOT NULL,
  `merk1` varchar(100) NOT NULL,
  `rack1` varchar(100) NOT NULL,
  `ket1` varchar(100) NOT NULL,
  `nper2` varchar(100) NOT NULL,
  `merk2` varchar(100) NOT NULL,
  `rack2` varchar(100) NOT NULL,
  `ket2` varchar(100) NOT NULL,
  `nper3` varchar(100) NOT NULL,
  `merk3` varchar(100) NOT NULL,
  `rack3` varchar(100) NOT NULL,
  `ket3` varchar(100) NOT NULL,
  `nper4` varchar(100) NOT NULL,
  `merk4` varchar(100) NOT NULL,
  `rack4` varchar(100) NOT NULL,
  `ket4` varchar(100) NOT NULL,
  `nper5` varchar(100) NOT NULL,
  `merk5` varchar(100) NOT NULL,
  `rack5` varchar(100) NOT NULL,
  `ket5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `company`, `name`, `address`, `phone`, `tanggal`, `nper1`, `merk1`, `rack1`, `ket1`, `nper2`, `merk2`, `rack2`, `ket2`, `nper3`, `merk3`, `rack3`, `ket3`, `nper4`, `merk4`, `rack4`, `ket4`, `nper5`, `merk5`, `rack5`, `ket5`) VALUES
(1, 'gaggagaga', 'qwerty', 'dddd', '123456778', '12 juli 1990', 'fasfasf', 'afsafa', 'gsdgsdg', 'sdsdgs', 'gggsdg', 'sdsdg', 'dsdg', 'sdgdsg', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ccc', 'tes', 'vvv', '087965', '12 juli 1990', 'gg', 'ff', 'dd', 'h', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'hahaha', 'yayaya', 'bandung', '123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'hahaha', 'yayaya', 'bandung', '123', '26 juni 2018', 'server', 'idm 1000', '4.2.1', 'mohon restart', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'Test', 'Test', 'Test', '12', '2002-12-12', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'Jaja', 'Jaja', 'kaka', '12', '2001-10-10', '1', '2', '3', '4', '5', '6', '7', '8', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'Perusahaan 1', 'aaa', 'Alamat Perusahaan 1', '12', '2002-12-12', 'Kamu', 'Ada', 'Dimana', 'Kamu', 'apa', 'ini', 'yak', 'yak', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'tes', 'dela', 'Alamat Perusahaan 2', '00', '2002-12-12', '12', '12', '12', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
