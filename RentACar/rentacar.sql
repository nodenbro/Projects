-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2023 at 03:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentacar`
--

-- --------------------------------------------------------

--
-- Table structure for table `automjetet`
--

CREATE TABLE `automjetet` (
  `automjetiid` int(11) NOT NULL,
  `kategoriid` int(11) DEFAULT NULL,
  `emri` varchar(50) DEFAULT NULL,
  `nrregjistrimi` varchar(50) DEFAULT NULL,
  `vitiprodhimit` int(6) DEFAULT NULL,
  `cmimi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `automjetet`
--

INSERT INTO `automjetet` (`automjetiid`, `kategoriid`, `emri`, `nrregjistrimi`, `vitiprodhimit`, `cmimi`) VALUES
(1, 1, 'BMW', '01-555-KB', 2022, '600'),
(2, 1, 'Magna eum ipsam dolo', 'Qui reprehenderit un', 1999, '510'),
(3, 2, 'Quis reiciendis quib', 'Molestias pariatur ', 1946, '460');

-- --------------------------------------------------------

--
-- Table structure for table `kategorit`
--

CREATE TABLE `kategorit` (
  `kategoriid` int(11) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `pershkrimi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategorit`
--

INSERT INTO `kategorit` (`kategoriid`, `emri`, `pershkrimi`) VALUES
(1, 'BMW', 'Kategoria 2'),
(2, 'Porsche', 'Kategoria 1');

-- --------------------------------------------------------

--
-- Table structure for table `klientet`
--

CREATE TABLE `klientet` (
  `klientiid` int(11) NOT NULL,
  `emri` varchar(50) DEFAULT NULL,
  `mbiemri` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klientet`
--

INSERT INTO `klientet` (`klientiid`, `emri`, `mbiemri`) VALUES
(1, 'Erblin', 'Berisha'),
(2, 'Endrit', 'Jashanica'),
(3, 'Gent', 'Brovina');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `perdoruesiid` int(11) NOT NULL,
  `emri` varchar(50) DEFAULT NULL,
  `mbiemri` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefoni` varchar(30) DEFAULT NULL,
  `fjalekalimi` varchar(30) DEFAULT NULL,
  `nrpersonal` bigint(20) DEFAULT NULL,
  `roli` bit(1) DEFAULT NULL,
  `adresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`perdoruesiid`, `emri`, `mbiemri`, `email`, `telefoni`, `fjalekalimi`, `nrpersonal`, `roli`, `adresa`) VALUES
(1, 'Erblin', 'Berisha', 'erblin.berisha@gmail.com', '045-444-444', '123', 123323213, b'1', ''),
(2, 'Gent', 'Brovina', 'gent.brovina@gmail.com', '045-222-222', '123456', 12341234, NULL, 'Prishtine'),
(3, 'Endrit', 'Jashanica', 'endrit.jashanica@gmail.com', '045-333-333', '123456', 1234122334, NULL, 'Prishtine'),
(5, 'Nodenbro', 'Obcaecati porro obca', 'kekap@mailinator.com', 'In distinctio Exerc', '123', 0, b'1', ''),
(6, 'Ragip', 'Berisha', 'ragip@gmail.com', '045-555-555', '123', 1234567890, NULL, 'Prishtine');

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `rezervimiid` int(11) NOT NULL,
  `datamarrjes` date NOT NULL,
  `datakthimit` date NOT NULL,
  `automjetiid` int(11) NOT NULL,
  `klientiid` int(11) NOT NULL,
  `perdoruesiid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervimet`
--

INSERT INTO `rezervimet` (`rezervimiid`, `datamarrjes`, `datakthimit`, `automjetiid`, `klientiid`, `perdoruesiid`) VALUES
(1, '2023-10-12', '2023-10-27', 2, 1, 2),
(2, '1984-08-21', '1992-06-04', 3, 1, 2),
(3, '2012-01-14', '1986-07-13', 1, 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automjetet`
--
ALTER TABLE `automjetet`
  ADD PRIMARY KEY (`automjetiid`),
  ADD KEY `kategoriid` (`kategoriid`);

--
-- Indexes for table `kategorit`
--
ALTER TABLE `kategorit`
  ADD PRIMARY KEY (`kategoriid`);

--
-- Indexes for table `klientet`
--
ALTER TABLE `klientet`
  ADD PRIMARY KEY (`klientiid`);

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`perdoruesiid`);

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`rezervimiid`),
  ADD KEY `automjetiid` (`automjetiid`),
  ADD KEY `klientiid` (`klientiid`),
  ADD KEY `perdoruesiid` (`perdoruesiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automjetet`
--
ALTER TABLE `automjetet`
  MODIFY `automjetiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategorit`
--
ALTER TABLE `kategorit`
  MODIFY `kategoriid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `klientet`
--
ALTER TABLE `klientet`
  MODIFY `klientiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `perdoruesiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `rezervimiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `automjetet`
--
ALTER TABLE `automjetet`
  ADD CONSTRAINT `automjetet_ibfk_1` FOREIGN KEY (`kategoriid`) REFERENCES `kategorit` (`kategoriid`);

--
-- Constraints for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD CONSTRAINT `rezervimet_ibfk_1` FOREIGN KEY (`automjetiid`) REFERENCES `automjetet` (`automjetiid`),
  ADD CONSTRAINT `rezervimet_ibfk_2` FOREIGN KEY (`klientiid`) REFERENCES `klientet` (`klientiid`),
  ADD CONSTRAINT `rezervimet_ibfk_3` FOREIGN KEY (`perdoruesiid`) REFERENCES `perdoruesit` (`perdoruesiid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
