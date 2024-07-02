-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2024 at 08:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logements_etudiants`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `password`) VALUES
(1, 'Admin', 'houzez');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `images` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `numero`, `images`) VALUES
(1, 'Mr Justin Howard', 672507275, '../img/man-4568761_640.jpg'),
(2, 'Mr Alain N. Moore', 699619811, '../img/entrepreneur-593358_640.jpg'),
(3, 'Mme Alice Kamga', 675582735, '../img/happy-successful-business-trainer-holding-pen_74855-2308.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `idavis` int NOT NULL,
  `nomuser` varchar(255) DEFAULT NULL,
  `mailuser` varchar(255) DEFAULT NULL,
  `teluser` int DEFAULT NULL,
  `sujet` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`idavis`, `nomuser`, `mailuser`, `teluser`, `sujet`, `message`) VALUES
(1, 'richard de reyes', 'richardtiomela@gmail.com', 345678, 'interface', 'Vous pouvez faire mieux'),
(2, 'richard de reyes', 'richardtiomela@gmail.com', 345678, 'interface', 'Vous pouvez faire mieux'),
(3, 'richard de reyes', 'richardtiomela@gmail.com', 345678, 'interface', 'LOL'),
(4, 'richard de reyes', 'richardtiomela@gmail.com', 345678, 'interface', 'LOL'),
(5, 'richard de reyes', 'richardtiomela@gmail.com', 345678, 'interface', 'LOL'),
(6, 'richard de reyes', 'richardtiomela@gmail.com', 2345678, 'interface', 'FGVHJ'),
(7, 'richard de reyes', 'richardtiomela@gmail.com', 3456789, 'TYUI', 'Entrer votre commentaire '),
(8, 'richard de reyes', 'richardtiomela@gmail.com', 3456789, 'TYUI', 'Entrer votre commentaire '),
(9, 'richard de reyes', 'richardtiomela@gmail.com', 3456789, 'TYUI', 'Entrer votre commentaire '),
(10, 'richard de reyes', 'richardtiomela@gmail.com', 3456789, 'TYUI', 'Entrer votre commentaire '),
(11, 'richard de reyes', 'richardtiomela@gmail.com', 3456789, 'TYUI', 'Entrer votre commentaire '),
(12, 'richard de reyes', 'richardtiomela@gmail.com', 3456789, 'TYUI', 'Entrer votre commentaire ');

-- --------------------------------------------------------

--
-- Table structure for table `ecoles`
--

CREATE TABLE `ecoles` (
  `idecole` int NOT NULL,
  `nomecole` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `abreviation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ecoles`
--

INSERT INTO `ecoles` (`idecole`, `nomecole`, `ville`, `abreviation`) VALUES
(1, 'Institut universitaire de la cote', 'Douala', 'IUC'),
(2, 'Institut universitaire du golfe de guinée', 'Douala', 'IUG'),
(3, 'Institut superieur de Technologie Avancée et management', 'Douala', 'ISTAMA'),
(4, 'Institut universitaire des grandes ecoles tropiques', 'Douala', 'IUGET');

-- --------------------------------------------------------

--
-- Table structure for table `logements`
--

CREATE TABLE `logements` (
  `id` int NOT NULL,
  `idclient` int DEFAULT NULL,
  `statuts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prixmensuel` int DEFAULT NULL,
  `prixannuel` double DEFAULT NULL,
  `Images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Image2` text,
  `Image3` text,
  `Dateajout` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Emplacement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Reservations` int DEFAULT '0',
  `superficie` int DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logements`
--

INSERT INTO `logements` (`id`, `idclient`, `statuts`, `prixmensuel`, `prixannuel`, `Images`, `Image2`, `Image3`, `Dateajout`, `Emplacement`, `Description`, `Reservations`, `superficie`, `type`) VALUES
(55, 22, 'occupé', 40000, 480000, '../img/interior-4226020_640.jpg', '../img/kitchen-1687121_640.webp', '../img/home-5835289_640.jpg', '2024-06-22', 'LOGBESSOU IUC ', 'En entrant dans la chambre, vous pouvez trouver une cuisine ouverte avec tous les appareils électro-ménagers nécessaires, une table,', 3, 20, ' Chambre '),
(56, 22, 'occupé', 45000, 540000, '../img/bedroom-4696556_640.jpg', '../img/apartment-2558277_640.jpg', '../img/furniture-3243991_640.jpg', '2024-06-22', 'LOGPOM', 'En evous pouvez trouver une cuisine ouverte avec tous les appareils électro-ménagers nécessaires, une table,', 5, 35, ' Studio '),
(57, NULL, 'libre', 20000, 240000, '../img/apartment-185777_640.jpg', '../img/apartment-5346460_640.jpg', '../img/kitchen-4691472_640.jpg', '2024-06-22', 'MVOG-ADA', 'Superbe appartement 3 pièces au cœur des Goudes à Marseille avec vue mer. Ce T3 lumineux de 60 m2 est situé dans une résidence sécurisée proche des commerces et autres commodités.', 0, 15, ' Appartement '),
(58, NULL, 'libre', 30000, 360000, '../img/nyc-7710506_640.webp', '../img/bed-6830011_640.jpg', '../img/living-room-2155376_640.jpg', '2024-06-22', 'LOGPOM', 'L’appartement à entièrement été refait à neuf, il est intégralement équipé (cuisine comprise). Le logement se trouve au 1er étage d’un immeuble avec ascenseur et dispose d’un balcon de 12 m2 ainsi que d’une vue sur la mer.', 2, 20, ' Chambre '),
(59, NULL, 'libre', 25000, 300000, '../img/wall-416060_640.jpg', '../img/apartment-406901_640.jpg', '../img/bedroom-6778193_640.jpg', '2024-06-22', 'BEPANDA ', 'le logement se trouve au 1er étage d’un immeuble avec ascenseur et dispose d’un balcon de 12 m2 ainsi que d’une vue sur la mer.', 0, 5, ' Appartement '),
(60, NULL, 'libre', 20000, 240000, '../img/bedroom-416062_640.jpg', '../img/bedroom-5772286_1920.jpg', '../img/bedroom-1137939_1920.jpg', '2024-06-22', 'BONAMOUSSADI', 'Il est simple, confortable, moderne et lumineux. vous pouvez trouver une cuisine ouverte avec tous les appareils électro-ménagers nécessaires, une table', 0, 5, ' Chambre '),
(61, NULL, 'libre', 30000, 360000, '../img/home-3625018_640.jpg', '../img/home-5835289_640.jpg', '../img/bedroom-4696556_640.jpg', '2024-07-01', 'Yaounde', 'vous pouvez trouver une cuisine ouverte avec tous les appareils électro-ménagers nécessaires, une table,', 0, 20, ' Studio ');

-- --------------------------------------------------------

--
-- Table structure for table `proximite`
--

CREATE TABLE `proximite` (
  `idlogement` int NOT NULL,
  `idecole` int NOT NULL,
  `distance` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `proximite`
--

INSERT INTO `proximite` (`idlogement`, `idecole`, `distance`) VALUES
(55, 1, 85),
(55, 2, 2000),
(55, 4, 1190),
(56, 1, 88),
(56, 2, 2500),
(57, 1, 95),
(57, 2, 2590),
(58, 2, 2690),
(58, 3, 750),
(59, 1, 80),
(59, 2, 2680),
(59, 4, 700),
(60, 1, 105),
(60, 3, 650),
(60, 4, 1175),
(61, 1, 800),
(61, 3, 450);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `idreservation` int NOT NULL,
  `idlogement` int DEFAULT NULL,
  `idclient` int DEFAULT NULL,
  `nomc` varchar(255) DEFAULT NULL,
  `adressec` varchar(255) DEFAULT NULL,
  `numeroc` double DEFAULT NULL,
  `situationc` varchar(255) DEFAULT NULL,
  `salaire` double DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `duree de location` varchar(255) DEFAULT NULL,
  `cout` varchar(255) DEFAULT NULL,
  `statuts` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'En attente',
  `dater` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`idreservation`, `idlogement`, `idclient`, `nomc`, `adressec`, `numeroc`, `situationc`, `salaire`, `date`, `duree de location`, `cout`, `statuts`, `dater`) VALUES
(42, 54, 24, 'orly', 'logbessou IUC', 67554509, 'Stagiaire', 35000, '2024-06-15', '6 ', '180000', 'validé', '2024-06-23'),
(43, 54, 22, 'de reyes', 'richardtiomela4@gmail.com', 3456789, 'Stagiaire', 329134, '2024-06-30', '9 ', '270000', 'validé', '2024-06-24'),
(44, 54, 22, 'de reyes', 'richardtiomela4@gmail.com', 23456, 'Apprentis', 91335, '2024-06-21', '8 ', '240000', 'validé', '2024-06-24'),
(45, 54, 22, 'de reyes', 'richardtiomela4@gmail.com', 23456, 'Apprentis', 91335, '2024-06-21', '8 ', '240000', 'Annulé', '2024-06-24'),
(46, 55, 22, 'de reyes', 'richardtiomela4@gmail.com', 234567, 'Salarié', 380245, '2024-06-20', '4 ', '160000', 'validé', '2024-06-24'),
(47, 55, 22, 'de reyes', 'richardtiomela4@gmail.com', 234567, 'Salarié', 380245, '2024-06-20', '4 ', '160000', 'validé', '2024-06-24'),
(84, 56, 22, 'Orlane', 'Yassa', 67557865, 'Etudiant sans Garant', 30000, '2024-07-25', '7 ', '315000', 'validé', '2024-07-02'),
(85, 56, 22, 'Orlaner', 'Yassa', 67557865, 'Etudiant sans Garant', 30000, '2024-07-25', '7 ', '315000', 'validé', '2024-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `telephone`, `password`, `role`) VALUES
(22, 'Richardghost', 'richardtiomela4@gmail.com', '672507275', 'RICHARD', NULL),
(23, 'Orlane', 'orlane@gmail.com', '658254027', 'orlane', NULL),
(24, 'Baby', 'baby@gmail.com', '675582735', 'cameroun', NULL),
(25, 'Gilles', 'gilles@gmail.com', '675564534', 'richard', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idavis`);

--
-- Indexes for table `ecoles`
--
ALTER TABLE `ecoles`
  ADD PRIMARY KEY (`idecole`);

--
-- Indexes for table `logements`
--
ALTER TABLE `logements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idclient` (`idclient`);

--
-- Indexes for table `proximite`
--
ALTER TABLE `proximite`
  ADD PRIMARY KEY (`idlogement`,`idecole`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`idreservation`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `idavis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ecoles`
--
ALTER TABLE `ecoles`
  MODIFY `idecole` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logements`
--
ALTER TABLE `logements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `idreservation` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logements`
--
ALTER TABLE `logements`
  ADD CONSTRAINT `logements_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `utilisateurs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
