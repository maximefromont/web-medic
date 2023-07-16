-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2022 at 08:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osteobdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  `motif` varchar(250) NOT NULL,
  `traitement` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `id_patient`, `date`, `motif`, `traitement`) VALUES
(1, 1, '23/03/2008', 'Douleurs lombaires', 'Massage du dos'),
(4, 2, '30/08/2021', 'Douleur au crane', 'Massage du crane');

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE `medecin` (
  `Id_medecin` int(10) UNSIGNED NOT NULL,
  `Nom_medecin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`Id_medecin`, `Nom_medecin`) VALUES
(1, 'Dr Tournesol'),
(2, 'Dr Manhatan'),
(7, 'Dr Rioux');

-- --------------------------------------------------------

--
-- Table structure for table `mutuelle`
--

CREATE TABLE `mutuelle` (
  `Id_mutuelle` int(10) UNSIGNED NOT NULL,
  `Nom_mutuelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mutuelle`
--

INSERT INTO `mutuelle` (`Id_mutuelle`, `Nom_mutuelle`) VALUES
(2, 'BoomMutuelle'),
(3, 'Agis');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `firstname` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `birthdate` varchar(500) DEFAULT NULL,
  `adresse` varchar(500) DEFAULT NULL,
  `housephone` varchar(500) DEFAULT NULL,
  `prophone` varchar(500) DEFAULT NULL,
  `cellphone` varchar(500) DEFAULT NULL,
  `mail` varchar(500) DEFAULT NULL,
  `sentby` varchar(500) DEFAULT NULL,
  `nummut` varchar(500) DEFAULT NULL,
  `job` varchar(500) DEFAULT NULL,
  `situation` varchar(500) DEFAULT NULL,
  `childrens` varchar(500) DEFAULT NULL,
  `note` varchar(5000) DEFAULT NULL,
  `id_medecin` int(11) DEFAULT NULL,
  `id_mutuelle` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `firstname`, `gender`, `birthdate`, `adresse`, `housephone`, `prophone`, `cellphone`, `mail`, `sentby`, `nummut`, `job`, `situation`, `childrens`, `note`, `id_medecin`, `id_mutuelle`, `id_user`) VALUES
(1, 'Dupont', 'Pierre', 'Homme', '15/01/1960', NULL, NULL, NULL, '0102030405', 'dupontpierre@netrunner.com', 'Tintin', NULL, 'Détective', 'Célibataire', '0', 'Légère douleur à la tête', 1, 2, 1),
(2, 'Dupond', 'Jean', 'Homme', '01/15/1960', 'Liege', NULL, NULL, '0504030201', NULL, 'Pierre dupont', NULL, 'Détective', 'Célibataire', '0', NULL, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$Rq.1l4At7wwpEh5vD6SuXOSx6LHbzjzyn7nY2STlhuT5VmXwWw2SK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`Id_medecin`);

--
-- Indexes for table `mutuelle`
--
ALTER TABLE `mutuelle`
  ADD PRIMARY KEY (`Id_mutuelle`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `Id_medecin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mutuelle`
--
ALTER TABLE `mutuelle`
  MODIFY `Id_mutuelle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
