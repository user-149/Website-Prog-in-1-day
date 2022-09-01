-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 08:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `Pelatihan_ID` int(11) NOT NULL,
  `Pelatihan_Ruang` varchar(25) NOT NULL,
  `Pelatihan_Tanggal` datetime NOT NULL,
  `Pelatihan_Materi` varchar(50) NOT NULL,
  `Pengajar_ID` int(11) NOT NULL,
  `Peserta_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`Pelatihan_ID`, `Pelatihan_Ruang`, `Pelatihan_Tanggal`, `Pelatihan_Materi`, `Pengajar_ID`, `Peserta_ID`) VALUES
(1, 'Meeting Room 1', '2022-08-29 00:00:00', 'Edukasi HTML', 1, 4),
(3, 'Meeting room 5', '2022-08-29 00:00:00', 'Edukasi 4M', 4, 2),
(4, 'Meeting Room 2', '0000-00-00 00:00:00', 'Edukasi PHP', 1, 3),
(5, 'JOJO Reference', '2022-08-29 00:00:00', 'Edukasi Stand', 5, 5),
(6, 'JOJO Reference', '2022-08-29 00:00:00', 'Edukasi Stand', 5, 7),
(7, 'JOJO Reference', '2022-08-29 00:00:00', 'Edukasi Stand', 5, 8),
(8, 'JOJO Reference', '2022-08-29 00:00:00', 'Edukasi Stand', 5, 9),
(9, 'JOJO Reference', '2022-08-29 00:00:00', 'Edukasi Stand', 5, 10),
(10, 'SAO Reference', '2022-08-29 00:00:00', 'Edukasi VRMMO', 6, 6),
(11, 'SAO Reference', '2022-08-29 00:00:00', 'Edukasi VRMMO', 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `Pengajar_ID` int(11) NOT NULL,
  `Pengajar_Name` varchar(50) NOT NULL,
  `Pengajar_BirthDay` datetime NOT NULL,
  `Pengajar_Usia` int(11) NOT NULL,
  `Pengajar_Kelamin` varchar(6) DEFAULT NULL,
  `Pengajar_Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`Pengajar_ID`, `Pengajar_Name`, `Pengajar_BirthDay`, `Pengajar_Usia`, `Pengajar_Kelamin`, `Pengajar_Status`) VALUES
(1, 'A Rindang', '1998-02-01 00:00:00', 24, 'Pria', 0),
(2, 'A Fahmi', '1992-02-01 00:00:00', 30, 'Pria', 1),
(4, 'Usman', '2022-08-30 00:00:00', 25, 'Pria', 1),
(5, 'Dio Brando', '2022-08-29 00:00:00', 99, 'Pria', 0),
(6, 'Kirigaya Kazuto', '2022-08-29 00:00:00', 17, 'Pria', 0),
(7, 'Maria Ozawa', '2022-08-21 00:00:00', 21, 'Wanita', 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Peserta_ID` int(11) NOT NULL,
  `Peserta_Name` varchar(50) NOT NULL,
  `Peserta_BirthDay` datetime NOT NULL,
  `Peserta_Usia` int(11) NOT NULL,
  `Peserta_Kelamin` varchar(6) DEFAULT NULL,
  `Peserta_Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Peserta_ID`, `Peserta_Name`, `Peserta_BirthDay`, `Peserta_Usia`, `Peserta_Kelamin`, `Peserta_Status`) VALUES
(3, 'Fajri', '2022-08-29 00:00:00', 0, 'Wanita', 1),
(4, 'Nurul', '2022-08-18 00:00:00', 18, 'Wanita', 1),
(5, 'Jonathan Joestar', '2022-08-29 00:00:00', 17, 'Pria', 0),
(6, 'Akihiko Kayaba', '2022-08-29 00:00:00', 30, 'Pria', 0),
(7, 'Robert E. O. Speedwagon', '2022-08-29 00:00:00', 28, 'Wanita', 1),
(8, 'Giorno Giovana', '2022-08-29 00:00:00', 19, 'Pria', 1),
(9, 'Jotaro Kujo', '2022-08-29 00:00:00', 20, 'Pria', 1),
(10, 'Joseph Joestar', '2022-08-29 00:00:00', 19, 'Pria', 1),
(11, 'Akeno Himejima', '2022-08-18 00:00:00', 18, 'Wanita', 0),
(12, 'Yuki Asuna', '2022-08-19 00:00:00', 19, 'Wanita', 0),
(13, 'Violet Evergarden', '2022-08-21 00:00:00', 21, 'Wanita', 0),
(15, '', '0000-00-00 00:00:00', 0, 'Wanita', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pelatihan`
-- (See below for the actual view)
--
CREATE TABLE `view_pelatihan` (
`Pelatihan_ID` int(11)
,`Pelatihan_Ruang` varchar(25)
,`Pelatihan_Tanggal` datetime
,`Pelatihan_Materi` varchar(50)
,`Pengajar_ID` varchar(50)
,`Peserta_ID` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_pelatihan`
--
DROP TABLE IF EXISTS `view_pelatihan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pelatihan`  AS SELECT `latih`.`Pelatihan_ID` AS `Pelatihan_ID`, `latih`.`Pelatihan_Ruang` AS `Pelatihan_Ruang`, `latih`.`Pelatihan_Tanggal` AS `Pelatihan_Tanggal`, `latih`.`Pelatihan_Materi` AS `Pelatihan_Materi`, `guru`.`Pengajar_Name` AS `Pengajar_ID`, `murid`.`Peserta_Name` AS `Peserta_ID` FROM ((`pelatihan` `latih` join `pengajar` `guru`) left join `peserta` `murid` on(`guru`.`Pengajar_ID` = `latih`.`Pengajar_ID`)) WHERE `murid`.`Peserta_ID` = `latih`.`Peserta_ID``Peserta_ID`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`Pelatihan_ID`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`Pengajar_ID`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Peserta_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `Pelatihan_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `Pengajar_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `Peserta_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
