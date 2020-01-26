-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 12:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evaluasipegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_training`
--

CREATE TABLE `data_training` (
  `no` int(5) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `masa_kerja` int(5) NOT NULL,
  `usia` int(5) NOT NULL,
  `pendidikan` enum('SMA','SARJANA','MAGISTER') NOT NULL,
  `kinerja` enum('BAIK','BIASA','BURUK') NOT NULL,
  `hasil_evaluasi` enum('PROMOSI','MUTASI', 'PHK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_training`
--

INSERT INTO `data_training` (`no`, `nama_pegawai`, `masa_kerja`, `usia`, `pendidikan`, `kinerja`, `hasil_evaluasi`) VALUES
(1, 'Ali Topan', 10, 35, 'SARJANA','BAIK', 'PROMOSI'),
(2, 'Sartika', 15, 32,'SMA', 'BAIK', 'PROMOSI'),
(3, 'Mika', 5, 25, 'SARJANA', 'BIASA', 'MUTASI'),
(4, 'Ruby', 8, 30, 'MAGISTER', 'BIASA', 'PROMOSI'),
(5, 'Bian Utami', 20, 45, 'MAGISTER', 'BURUK',  'MUTASI'),
(6, 'Riandari', 17, 42, 'SARJANA', 'BIASA', 'MUTASI'),
(7, 'Uli Alwan', 23, 50, 'SMA', 'BAIK', 'PROMOSI'),
(8, 'Kanita', 18, 48, 'SARJANA', 'BIASA', 'PROMOSI'),
(9, 'Sarini', 2, 32, 'SMA', 'YA', 'PHK'),
(10, 'Rafina', 7, 37, 'SARJANA', 'BAIK', 'PROMOSI'),
(11, 'Budiman', 15, 48, 'MAGISTER', 'BURUK', 'MUTASI'),
(12, 'Sartika', 15, 32, 'SMA', 'BAIK', 'PROMOSI'),
(13, 'Mika', 5, 25, 'SARJANA', 'BIASA',  'MUTASI'),
(14, 'Ruby', 8, 30, 'MAGISTER', 'BIASA',  'PHK'),
(15, 'Kanita', 18, 47, 'SARJANA', 'BIASA',  'PROMOSI'),
(16, 'Sarita', 2, 32, 'SMA', 'BURUK', 'PHK'),
(17, 'Budian', 15, 40, 'SARJANA', 'BAIK',  'MUTASI'),
(18, 'Sartika', 11, 32, 'SMA', 'BAIK', 'PROMOSI'),
(19, 'Miko', 6, 25, 'SARJANA', 'BIASA', 'MUTASI'),
(20, 'Riandani', 17, 48, 'SARJANA', 'BIASA',  'PHK'),
(21, 'Ulilwan', 24, 52, 'SMA', 'BAIK', 'MUTASI'),
(22, 'Kanisa', 18, 48,'SARJANA', 'BIASA', 'PROMOSI'),
(23, 'Sarina', 3, 32, 'SMA', 'BURUK', 'PHK'),
(24, 'Budiana', 15, 48, 'SARJANA', 'BAIK', 'MUTASI'),
(25, 'Santika', 16, 32, 'SMA', 'BAIK', 'PROMOSI'),
(26, 'Safira', 11, 32, 'SMA', 'BAIK',  'PROMOSI'),
(27, 'Mira', 26, 50, 'SARJANA', 'BIASA','MUTASI'),
(28, 'Rianti', 17, 48, 'MAGISTER', 'BIASA',  'PHK'),
(29, 'Cici', 11, 32, 'SMA', 'BAIK','PROMOSI'),
(30, 'Ina', 6, 25, 'SARJANA', 'BIASA','MUTASI'),
(31, 'Mima', 11, 32, 'SMA', 'BAIK', 'PROMOSI'),
(32, 'Naya', 6, 25, 'SARJANA', 'BIASA', 'MUTASI'),
(33, 'Sarina', 11, 32, 'SMA', 'BAIK', 'PROMOSI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_training`
--
ALTER TABLE `data_training`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
