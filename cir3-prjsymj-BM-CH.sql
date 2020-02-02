-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2020 at 04:54 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covoit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `categorie`) VALUES
(1, 'Adulte'),
(2, 'Etudiant'),
(3, 'enfant'),
(4, 'senior');

-- --------------------------------------------------------

--
-- Table structure for table `co2`
--

CREATE TABLE `co2` (
  `id` int(11) NOT NULL,
  `val_co2` float NOT NULL,
  `actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `co2`
--

INSERT INTO `co2` (`id`, `val_co2`, `actif`) VALUES
(1, 42, 1),
(2, 503, 1),
(3, 2432, 1);

-- --------------------------------------------------------

--
-- Table structure for table `covoiturage`
--

CREATE TABLE `covoiturage` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_co2` int(11) DEFAULT NULL,
  `id_type_covoit` int(11) NOT NULL,
  `id_trajet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `covoiturage`
--

INSERT INTO `covoiturage` (`id`, `created`, `updated`, `id_utilisateur`, `id_co2`, `id_type_covoit`, `id_trajet`) VALUES
(1, '2020-01-01 00:00:00', '2020-01-10 00:00:00', 1, 1, 1, 1),
(2, '2020-01-09 00:00:00', '2020-01-10 00:00:00', 2, 1, 2, 2),
(8, '2020-01-31 14:27:10', '2020-01-31 14:27:10', 1, 1, 2, 2),
(10, '2020-02-02 00:00:00', '2020-02-02 00:00:00', 3, 3, 1, 3),
(11, '2020-02-01 00:00:00', '2020-02-01 00:00:00', 3, 2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `marque` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`id`, `marque`) VALUES
(1, 'Renaud'),
(2, 'Tesla'),
(3, 'peugeot'),
(4, 'audi'),
(5, 'ford'),
(6, 'opel'),
(7, 'toyota'),
(8, 'BMW'),
(9, 'Fiat'),
(10, 'Nissan');

-- --------------------------------------------------------

--
-- Table structure for table `possede`
--

CREATE TABLE `possede` (
  `id` int(11) NOT NULL,
  `immatriculation` varchar(15) COLLATE utf8_bin NOT NULL,
  `nb_place` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_voiture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `possede`
--

INSERT INTO `possede` (`id`, `immatriculation`, `nb_place`, `id_utilisateur`, `id_voiture`) VALUES
(1, '528AGM29', 5, 1, 1),
(2, '529AGM35', 5, 2, 2),
(3, '3666XZ', 4, 1, 2),
(4, 'AA-000-AA', 9, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `trajet`
--

CREATE TABLE `trajet` (
  `id` int(11) NOT NULL,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `nb_place` int(11) NOT NULL,
  `duree` float DEFAULT NULL,
  `commentaire` text COLLATE utf8_bin,
  `nb_km` float NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_ville_ville_arrivee` int(11) NOT NULL,
  `id_possede` int(11) NOT NULL,
  `id_type_trajet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `trajet`
--

INSERT INTO `trajet` (`id`, `date_depart`, `heure_depart`, `nb_place`, `duree`, `commentaire`, `nb_km`, `id_ville`, `id_ville_ville_arrivee`, `id_possede`, `id_type_trajet`) VALUES
(1, '2020-01-01', '09:15:38', 5, 3.3, 'surper covoiturage', 30, 1, 2, 1, 1),
(2, '2020-01-16', '21:32:00', 5, 4, 'un autre commentaire', 60, 2, 1, 2, 2),
(3, '2020-02-21', '22:10:00', 5, 2.3, 'commentaire', 200, 1, 2, 1, 1),
(4, '2020-02-06', '22:20:00', 5, 1, 'commentaire ssssxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\r\n', 22, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `type_covoit`
--

CREATE TABLE `type_covoit` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type_covoit`
--

INSERT INTO `type_covoit` (`id`, `type`) VALUES
(1, 'Conducteur'),
(2, 'Passager');

-- --------------------------------------------------------

--
-- Table structure for table `type_trajet`
--

CREATE TABLE `type_trajet` (
  `id` int(11) NOT NULL,
  `type_trajet` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type_trajet`
--

INSERT INTO `type_trajet` (`id`, `type_trajet`) VALUES
(1, 'Ponctuel'),
(2, 'Regulier');

-- --------------------------------------------------------

--
-- Table structure for table `type_vehicule`
--

CREATE TABLE `type_vehicule` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `type_vehicule`
--

INSERT INTO `type_vehicule` (`id`, `type`) VALUES
(1, '4x4'),
(2, 'mini'),
(3, 'autobus'),
(4, 'tracteur'),
(5, 'fourgonette'),
(6, 'camion'),
(7, 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(150) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `id_ville` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mail`, `nom`, `prenom`, `password`, `telephone`, `adresse`, `id_ville`, `id_categorie`) VALUES
(1, 'roger@mail.com', 'roger', 'robert', 'mdproger', '07xxxxxxxx', 'XX rue', 1, 1),
(2, 'dupond@mail.fr', 'dupond', 'dupond', 'mdpdupond', '06--------', '30 rue...', 2, 2),
(3, 'cv@mail.com', 'christophe', 'Vignaud', 'cvpass', '06xxxxxxxx', 'x rue ..', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `code_insee` varchar(5) COLLATE utf8_bin NOT NULL,
  `ville` varchar(50) COLLATE utf8_bin NOT NULL,
  `code_postal` varchar(5) COLLATE utf8_bin NOT NULL,
  `dep` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id`, `code_insee`, `ville`, `code_postal`, `dep`) VALUES
(1, '29019', 'Brest', '29200', '29'),
(2, '35238', 'Renne', '35000', '35'),
(3, '75012', 'paris', '75112', '75'),
(4, '56121', 'lorient', '56100', '56'),
(5, '29232', 'Quimper', '29000', '29'),
(6, '56260', 'Vanne', '56000', '56'),
(7, '44109', 'Nante', '44000', '44');

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `modele` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_marque` int(11) NOT NULL,
  `id_type_vehicule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `voiture`
--

INSERT INTO `voiture` (`id`, `modele`, `id_marque`, `id_type_vehicule`) VALUES
(1, 'clio', 1, 2),
(2, 'tesla', 2, 2),
(3, 'modele', 7, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co2`
--
ALTER TABLE `co2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covoiturage`
--
ALTER TABLE `covoiturage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `covoiturage_utilisateur_FK` (`id_utilisateur`),
  ADD KEY `covoiturage_co20_FK` (`id_co2`),
  ADD KEY `covoiturage_type_covoit1_FK` (`id_type_covoit`),
  ADD KEY `covoiturage_trajet2_FK` (`id_trajet`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `possede_utilisateur_FK` (`id_utilisateur`),
  ADD KEY `possede_voiture0_FK` (`id_voiture`);

--
-- Indexes for table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trajet_ville_FK` (`id_ville`),
  ADD KEY `trajet_ville0_FK` (`id_ville_ville_arrivee`),
  ADD KEY `trajet_possede1_FK` (`id_possede`),
  ADD KEY `trajet_type_trajet2_FK` (`id_type_trajet`);

--
-- Indexes for table `type_covoit`
--
ALTER TABLE `type_covoit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_trajet`
--
ALTER TABLE `type_trajet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_ville_FK` (`id_ville`),
  ADD KEY `utilisateur_categorie0_FK` (`id_categorie`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voiture_marque_FK` (`id_marque`),
  ADD KEY `voiture_type_vehicule0_FK` (`id_type_vehicule`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `co2`
--
ALTER TABLE `co2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `covoiturage`
--
ALTER TABLE `covoiturage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `possede`
--
ALTER TABLE `possede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trajet`
--
ALTER TABLE `trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `type_covoit`
--
ALTER TABLE `type_covoit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type_trajet`
--
ALTER TABLE `type_trajet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `covoiturage`
--
ALTER TABLE `covoiturage`
  ADD CONSTRAINT `covoiturage_co20_FK` FOREIGN KEY (`id_co2`) REFERENCES `co2` (`id`),
  ADD CONSTRAINT `covoiturage_trajet2_FK` FOREIGN KEY (`id_trajet`) REFERENCES `trajet` (`id`),
  ADD CONSTRAINT `covoiturage_type_covoit1_FK` FOREIGN KEY (`id_type_covoit`) REFERENCES `type_covoit` (`id`),
  ADD CONSTRAINT `covoiturage_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `possede_voiture0_FK` FOREIGN KEY (`id_voiture`) REFERENCES `voiture` (`id`);

--
-- Constraints for table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `trajet_possede1_FK` FOREIGN KEY (`id_possede`) REFERENCES `possede` (`id`),
  ADD CONSTRAINT `trajet_type_trajet2_FK` FOREIGN KEY (`id_type_trajet`) REFERENCES `type_trajet` (`id`),
  ADD CONSTRAINT `trajet_ville0_FK` FOREIGN KEY (`id_ville_ville_arrivee`) REFERENCES `ville` (`id`),
  ADD CONSTRAINT `trajet_ville_FK` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_categorie0_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `utilisateur_ville_FK` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`);

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_marque_FK` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `voiture_type_vehicule0_FK` FOREIGN KEY (`id_type_vehicule`) REFERENCES `type_vehicule` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
