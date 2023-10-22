-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 09:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'admin',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(2, 'Arogya', 'Pharmacy', 'supportcare@arogyapharamacy.com', '9567213456', '$2y$10$eWo/GWhzd7dn3Eoa8AqdGuKe1VvYtW5iSpWx5qzMB9H/LUwnDAkMq', 'admin', 'medicine pharmacy logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'manager',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(8, 'Joshua', 'D', 'joshua@gmail.com', '9245716440', '$2y$10$ly1lsJIQVkYw.1BwGMIaVOBPiK57hl9sESL88lphFFTOq6v3.lExi', 'manager', 'avatar.png'),
(9, 'Hari', 'Krishnan', 'harikrishnan@gmail.com', '8446721380', '$2y$10$nFc2FyCZpnaaerUlZMXWw.gH12CxUPgh9apSCfrZVVPmVcoR5MtjS', 'manager', 'avatar.png'),
(10, 'Vengat', 'Subramaniam', 'venkat@gmail.com', '7387902310', '$2y$10$pTfvMf2m.vi2HMhAhdheGuHIGZoOaJNVoHQ62lcOOD0CXpfbX.nIa', 'manager', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacists`
--

CREATE TABLE `pharmacists` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'pharmacist',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pharmacists`
--

INSERT INTO `pharmacists` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(11, 'Vinoth', 'Kumar', 'vinoth@gmail.com', '8562905312', '$2y$10$i4K9qM77goGJLHSv6SB7R.puGVRcJ/Fz784LABYffO3E1psucpzcS', 'pharmacist', 'avatar.png'),
(12, 'Siva', 'P', 'siva@gmail.com', '7456092175', '$2y$10$vTUBwadYixw7x7paW/nGAOuIFqSGiUbFLJduGahmaqUhw6kFLPKn.', 'pharmacist', 'avatar.png'),
(13, 'Raj', 'Kumar', 'raj@gmail.com', '8921475012', '$2y$10$W.Ko5I6RKtoXPvNVO/G6luL503BT0FjBDPnU5f1av./Qhm7Wpkl3C', 'pharmacist', 'avatar.png'),
(14, 'Franklin', 'B', 'franklin@gmail.com', '7200316780', '$2y$10$kzDWshQK/.M3/CF45/kKJeOUHGjeRsBQzPAwOvoM..zx2.s/eRkj2', 'pharmacist', 'avatar.png'),
(15, 'Prakash', 'K', 'prakash@gmail.com', '8034517200', '$2y$10$eOgHjFCxOhGSB4Qipe7LC.Uzm1L11aNBs.wJGAl1c4LmEyCT8swT2', 'pharmacist', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `salesmans`
--

CREATE TABLE `salesmans` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'salesman',
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salesmans`
--

INSERT INTO `salesmans` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `role`, `avatar`) VALUES
(10, 'Joseph', 'raj', 'joseph@gmail.com', '6335620187', '$2y$10$8H8OsmNsNokHLjq96hAnqeZlOHqrNAPKV5Vrk13hI84Tt6q8ZH2Km', 'salesman', 'avatar.png'),
(11, 'Vasanth', 'Kumar', 'vasanth@gmail.com', '8900452134', '$2y$10$L0RY0hMj1Rcg/banXR4Kh.8Vxa3760VnfAs1JT/dFenHiS10/e3Bm', 'salesman', 'avatar.png'),
(12, 'Abdul', 'Gaffar', 'abdul@gmail.com', '7537908725', '$2y$10$G4Sb5JoseMTQD6XGNjSjkuVm3q26Eji4YMRtsABnZeGyAG5Ph8SGi', 'salesman', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pharmacists`
--
ALTER TABLE `pharmacists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `salesmans`
--
ALTER TABLE `salesmans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pharmacists`
--
ALTER TABLE `pharmacists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `salesmans`
--
ALTER TABLE `salesmans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
