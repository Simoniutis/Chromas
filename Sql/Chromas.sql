-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `chromas`
--

-- --------------------------------------------------------

--
-- Table structure for table `isimintos_prekes`
--

CREATE TABLE `isimintos_prekes` (
  `pirkejo_id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `kaina` float NOT NULL,
  `tel_nr` varchar(255) DEFAULT NULL,
  `vieta` varchar(255) DEFAULT NULL,
  `ar_prekyboje` bit(1) NOT NULL,
  `id_isiminta_preke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isimintos_prekes`
--

INSERT INTO `isimintos_prekes` (`pirkejo_id`, `pavadinimas`, `kaina`, `tel_nr`, `vieta`, `ar_prekyboje`, `id_isiminta_preke`) VALUES
(1, 'dsaads', 2, '52251', NULL, b'0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `klientai`
--

CREATE TABLE `klientai` (
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `el_pastas` varchar(255) NOT NULL,
  `slaptazodis` varchar(255) NOT NULL,
  `tel_nr` varchar(255) DEFAULT NULL,
  `ivertinimas` float DEFAULT NULL,
  `id_klientas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientai`
--

INSERT INTO `klientai` (`vardas`, `pavarde`, `el_pastas`, `slaptazodis`, `tel_nr`, `ivertinimas`, `id_klientas`) VALUES
('Aa', 'Aa', 'aaa@gmail.com', 'aaaaaa', '+37061126147', NULL, 1),
('Dasda', 'Ddedewq', 'feds@gmail.com', 'fsdfdsf', '+37061124741', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `pavadinimas` varchar(255) NOT NULL,
  `kaina` float NOT NULL,
  `aprasas` varchar(255) NOT NULL,
  `nuolaida` int(11) DEFAULT NULL,
  `tel_nr` varchar(255) DEFAULT NULL,
  `vieta` varchar(255) DEFAULT NULL,
  `id_preke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`pavadinimas`, `kaina`, `aprasas`, `nuolaida`, `tel_nr`, `vieta`, `id_preke`) VALUES
('dsaads', 2, 'dsadasd', 2, '52251', 'cdscds', 1),
('dasdsa', 20, 'dasas', 20, '55554', 'das', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prekes_ikelimas`
--

CREATE TABLE `prekes_ikelimas` (
  `pavadinimas` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `kategorija` varchar(255) NOT NULL,
  `bukle` varchar(255) NOT NULL,
  `kaina` int(11) NOT NULL,
  `telefonas` int(11) NOT NULL,
  `miestas` varchar(255) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `Filename` varchar(255) NOT NULL,
  `aprasymas` tinytext NOT NULL,
  `Filename_second` varchar(255) NOT NULL,
  `Filename_third` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prekes_ikelimas`
--

INSERT INTO `prekes_ikelimas` (`pavadinimas`, `id`, `kategorija`, `bukle`, `kaina`, `telefonas`, `miestas`, `adresas`, `Filename`, `aprasymas`, `Filename_second`, `Filename_third`) VALUES
('Laivas', 1, 'Kompiuteris', 'Nauja', 20, 2555, 'csafsa', 'sadsa', 'Screenshot_18.png', 'fasfd', 'Screenshot_18.png', 'Screenshot_18.png'),
('Statula', 2, 'Kompiuteris', 'Nauja', 20, 20, 'dasdsa', 'dasda', 'k.png', 'sadsadasd', 'k.png', 'k.png'),
('Kompiuteris', 3, 'Kompiuteris', 'Nauja', 200, 500, 'csad', 'sdad', 'download.jpg', 'dsadas', 'download.jpg', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isimintos_prekes`
--
ALTER TABLE `isimintos_prekes`
  ADD PRIMARY KEY (`id_isiminta_preke`);

--
-- Indexes for table `klientai`
--
ALTER TABLE `klientai`
  ADD PRIMARY KEY (`id_klientas`);

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id_preke`);

--
-- Indexes for table `prekes_ikelimas`
--
ALTER TABLE `prekes_ikelimas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isimintos_prekes`
--
ALTER TABLE `isimintos_prekes`
  MODIFY `id_isiminta_preke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klientai`
--
ALTER TABLE `klientai`
  MODIFY `id_klientas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id_preke` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prekes_ikelimas`
--
ALTER TABLE `prekes_ikelimas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
