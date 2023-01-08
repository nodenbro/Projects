-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 03:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smp`
--

-- --------------------------------------------------------

--
-- Table structure for table `antaret`
--

CREATE TABLE `antaret` (
  `antariid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `datalindjes` date DEFAULT NULL,
  `nrpersonal` bigint(20) DEFAULT NULL,
  `telefoni` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `fjalekalimi` varchar(30) DEFAULT NULL,
  `roli` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antaret`
--

INSERT INTO `antaret` (`antariid`, `emri`, `mbiemri`, `datalindjes`, `nrpersonal`, `telefoni`, `email`, `fjalekalimi`, `roli`) VALUES
(12, 'Erblin', 'Berisha', '2000-12-18', 123456789, '045-444-444', 'erblin.berisha@gmail.com', '123456', b'1'),
(13, 'Endrit', 'Jashanica', NULL, NULL, '045-111-111', 'endrit.jashanica@gmail.com', '123456', b'0'),
(14, 'Gent ', 'Brovina', NULL, NULL, '045-222-222', 'gent.brovina@gmail.com', '123456', b'0'),
(15, 'Shkodran', 'Latifi', NULL, NULL, '045-333-333', 'shkodran.latifi@gmail.com', '123456', b'0'),
(16, 'Leart ', 'Gashi', NULL, NULL, '045-444-4444', 'leart.gashi@gmail.com', '123456', b'0'),
(17, 'Bajram', 'Gashi', NULL, NULL, '045-555-555', 'bajram.gashi@gmail.com', '123456', b'0'),
(18, 'Blend', 'Vorfaj', NULL, NULL, '045-666-666', 'blend.vorfaj@gmail.com', '123456', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `projektet`
--

CREATE TABLE `projektet` (
  `projektiid` int(11) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `pershkrimi` text DEFAULT NULL,
  `datafillimit` date NOT NULL,
  `datambarimit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projektet`
--

INSERT INTO `projektet` (`projektiid`, `emri`, `pershkrimi`, `datafillimit`, `datambarimit`) VALUES
(1, 'PROBIT', 'Web faqja per probit', '2019-01-17', '2019-10-03'),
(2, 'Mini Financa', 'Projekti per menaxhimin e financave', '2019-01-17', '2021-10-03'),
(3, 'Probit Academy', 'Projekti per menaxhimin e studentave', '2020-01-17', '2022-10-03'),
(4, 'Student Project', 'Projekti per publikimin e punëve te studentave', '2019-01-17', '2022-10-03'),
(5, 'Probit Web ', 'Projekti per publikimin e informatve per shkollen ', '2016-01-17', '2017-10-03'),
(6, 'PROBIT', 'Projeket per klientat', '2019-01-17', '2021-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `punet`
--

CREATE TABLE `punet` (
  `punaid` int(11) NOT NULL,
  `antariid` int(11) NOT NULL,
  `projektiid` int(11) DEFAULT NULL,
  `data` datetime NOT NULL,
  `pershkrimi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `punet`
--

INSERT INTO `punet` (`punaid`, `antariid`, `projektiid`, `data`, `pershkrimi`) VALUES
(1, 12, 1, '2019-07-15 00:00:00', 'krijimi i html\r\ncss'),
(2, 12, 1, '2019-07-16 00:00:00', 'permirsimi i html css'),
(3, 12, 5, '2020-10-17 00:00:00', 'Dizajnimi i faqes dhe kthimi ne Bootstrap'),
(4, 12, 5, '2020-10-20 00:00:00', 'Krijimi i DB'),
(5, 12, 5, '2020-10-21 00:00:00', 'Kodimi i pjeses per shtimin modifikimin dhe fshirjen e studentit'),
(6, 12, 5, '2020-10-23 00:00:00', 'Kodimi i pjeses per shtimin modifikimin dhe fshirjen e projekteve'),
(7, 12, 5, '2020-10-25 00:00:00', 'Kodimi i pjeses per shtimin modifikimin dhe fshirjen e trajnimeve'),
(8, 12, 5, '2020-10-30 00:00:00', 'Kodimi i home page per paraqitjen e shenimeve'),
(9, 12, 5, '2020-11-20 00:00:00', 'Analizimi i kerkesave te reja'),
(10, 12, 5, '2020-11-30 00:00:00', 'Kodimi i faqes per paraqitjen e projekteve per nje student'),
(11, 12, 5, '2020-12-05 00:00:00', 'Kodimi i faqes per paraqitjen e nje projekti per nje student'),
(12, 12, 1, '2019-07-17 00:00:00', 'Filtrime me jquery'),
(13, 12, 1, '2019-07-16 00:00:00', 'Formen per regjistrimin e antareve'),
(14, 12, 1, '2019-07-18 00:00:00', 'krijimin e databazes'),
(15, 12, 1, '2019-07-19 00:00:00', 'permirsimi i db'),
(16, 12, 1, '2019-07-20 00:00:00', 'permirsimi i db'),
(17, 12, 1, '2019-07-21 00:00:00', 'pyetsor per anetaret CRUD'),
(18, 12, 1, '2019-07-21 00:00:00', 'PHP funksionet per CRUD te anetaret'),
(19, 12, 1, '2019-07-16 00:00:00', 'PHP permirsime te anetaret'),
(20, 12, 1, '2019-07-16 00:00:00', 'permirsimi i db'),
(21, 12, 1, '2019-07-16 00:00:00', 'permirsimi i html css');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antaret`
--
ALTER TABLE `antaret`
  ADD PRIMARY KEY (`antariid`);

--
-- Indexes for table `projektet`
--
ALTER TABLE `projektet`
  ADD PRIMARY KEY (`projektiid`);

--
-- Indexes for table `punet`
--
ALTER TABLE `punet`
  ADD PRIMARY KEY (`punaid`),
  ADD KEY `antariid` (`antariid`),
  ADD KEY `projektiid` (`projektiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antaret`
--
ALTER TABLE `antaret`
  MODIFY `antariid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `projektet`
--
ALTER TABLE `projektet`
  MODIFY `projektiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `punet`
--
ALTER TABLE `punet`
  MODIFY `punaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `punet`
--
ALTER TABLE `punet`
  ADD CONSTRAINT `punet_ibfk_1` FOREIGN KEY (`antariid`) REFERENCES `antaret` (`antariid`),
  ADD CONSTRAINT `punet_ibfk_2` FOREIGN KEY (`projektiid`) REFERENCES `projektet` (`projektiid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
