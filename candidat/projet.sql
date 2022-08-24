-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 02:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidat`
--

CREATE TABLE `candidat` (
  `candidat_id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL,
  `telephone` int(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `diplome` varchar(50) NOT NULL,
  `titrediplome` varchar(50) NOT NULL,
  `datediplome` date NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `logiciel` varchar(50) NOT NULL,
  `themef` varchar(50) NOT NULL,
  `placef` varchar(50) NOT NULL,
  `datef` date DEFAULT NULL,
  `categorie` varchar(50) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidat`
--

INSERT INTO `candidat` (`candidat_id`, `nom`, `prenom`, `birthday`, `telephone`, `adresse`, `diplome`, `titrediplome`, `datediplome`, `fonction`, `employer`, `logiciel`, `themef`, `placef`, `datef`, `categorie`, `statut`) VALUES
(109, 'kati', 'merlo', '2022-09-05', 789563632, 'rue national n 12', 'diplome', 'diplome', '2022-03-22', 'doctorat', 'ensignient', 'css', 'themef', 'bomerdes', '2022-08-24', ' Retraité IAP', 0),
(110, 'MOHAMED', 'LIMAR', '2012-08-21', 78961236, 'RUE NATIONAL N36', 'INGENERIE', 'DEV WEB', '2015-08-21', 'ENSIGNIENT', 'ENSIGNIENT', 'CSS/JAVA', '', 'ALGER', '2020-08-14', 'INTERNE IAP', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidatlogin`
--

CREATE TABLE `candidatlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidatlogin`
--

INSERT INTO `candidatlogin` (`id`, `name`, `email`, `password`) VALUES
(1, 'candidat', 'candidat@gmail.com', '$2y$10$GN0VFZWM9HLjWODoQgWj1upUt.t5bzkb3/BwaHK8sV2ilFg1LvTlW');

-- --------------------------------------------------------

--
-- Table structure for table `depertement`
--

CREATE TABLE `depertement` (
  `depertement_id` int(11) NOT NULL,
  `depertement_code` varchar(255) NOT NULL,
  `depertement_name` varchar(255) NOT NULL,
  `depertement_numr` int(11) NOT NULL,
  `deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `domaine`
--

CREATE TABLE `domaine` (
  `domaine_id` int(11) NOT NULL,
  `domaine_code` varchar(5) NOT NULL,
  `domaine_name` varchar(255) NOT NULL COMMENT 'nom de domaine',
  `domaine_desc` varchar(255) NOT NULL,
  `deleted` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domaine`
--

INSERT INTO `domaine` (`domaine_id`, `domaine_code`, `domaine_name`, `domaine_desc`, `deleted`) VALUES
(1, 'FOP', 'Forage Production', 'Le pétrole résulte de la dégradation thermique de matières organiques contenues dans les roches-mères.', '1'),
(2, 'GGR', 'Geologie Geophysique Reservoir', 'La géophysique concerne l\'étude des propriétés physiques des sols et des roches dans le but de caractériser leurs constituants et leur géométrie.', '1'),
(5, 'MIT', 'Maintenance Industrielle et Transport des Hydrocarbures', 'Pour assurer une formation qui vise à mieux comprendre et à améliorer les con-naissances dans le domaine du contrôle et de l’ instrumentation pétrolière', '1'),
(6, 'CSIE', 'Chimie, Securite Industrielle et Environnement', 'Le HSE désigne une méthodologie de maîtrise des risques et de management des entreprises dans les domaines de l’hygiène, de la santé/sécurité et de l’environnement.', '1'),
(7, 'GRP', 'Gaz, Raffinage et Petrochimie', 'La pétrochimie représente un secteur clé de l\'industrie moderne. À partir de ressources fossiles ou de biomasse, elle fournit des matières intermédiaires qui servent de base à la fabrication de nombreux objets du quotidien.', '1'),
(8, 'ECP', 'Economie Petroliere', 'Cette formation est destinée à toute personne du secteur énergétique et pétrolier, partenaires industriels, commerciaux et financiers, personnel de l’administration publique.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ensignientlogin`
--

CREATE TABLE `ensignientlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ensignientlogin`
--

INSERT INTO `ensignientlogin` (`id`, `name`, `email`, `password`) VALUES
(3, 'ensignient', 'ensignient@gmail.com', '$2y$10$CFTeERIIYHOqYsXVHnvQROl6JDPbnjrdrK28pPgjkgIYWEOIm20Ju');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `speciality_id` int(11) NOT NULL,
  `domaine_code` varchar(50) NOT NULL,
  `speciality_code` varchar(255) NOT NULL,
  `speciality_name` varchar(255) NOT NULL,
  `speciality_desc` varchar(255) NOT NULL,
  `deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`speciality_id`, `domaine_code`, `speciality_code`, `speciality_name`, `speciality_desc`, `deleted`) VALUES
(15, 'FOR', '', 'Chimie des Fluides de Forage', '', ''),
(16, 'FOR', '', 'Ingénierie des Fluides de Forage', '', ''),
(17, 'GGR', '', 'Ingénierie des	\r\nGeologie ', 'Agir en tant que le représentant sur site de l\'équipe géologique\r\nde l\'entreprise\r\n-', ''),
(18, 'GGR', '', 'Ingénierie des	\r\nGeoPHISIQUE', '', ''),
(19, 'FOR', '', 'Chimie des Fluides de Forage', '', ''),
(20, 'FOR', '', 'Ingénierie des Fluides de Forage', '', ''),
(21, 'GGR', '', 'Ingénierie des	\r\nGeologie ', 'Agir en tant que le représentant sur site de l\'équipe géologique\r\nde l\'entreprise\r\n-', ''),
(22, 'GGR', '', 'Ingénierie des	\r\nGeoPHISIQUE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `email`, `password`) VALUES
(11, 'admin', 'admin@gmail.com', '$2y$10$58MRNjSZakGrL0Nk8epBnOd.AxfzIxVCD0iNhmZTrJh.OjNUrAKDC');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `util_id` int(11) NOT NULL,
  `util_role` varchar(255) NOT NULL,
  `util_dept` int(11) NOT NULL,
  `util_speciality` varchar(255) NOT NULL,
  `deleted` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`util_id`, `util_role`, `util_dept`, `util_speciality`, `deleted`) VALUES
(8, 'ensignent', 5, 'ge', '1'),
(10, 'admin', 5, 'genie', '1'),
(12, 'admin', 12, 'gpg', ''),
(13, 'yjuytu', 55, 'yutyut', ''),
(14, 'uy', 0, 'ç_çç', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidat`
--
ALTER TABLE `candidat`
  ADD PRIMARY KEY (`candidat_id`);

--
-- Indexes for table `candidatlogin`
--
ALTER TABLE `candidatlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depertement`
--
ALTER TABLE `depertement`
  ADD PRIMARY KEY (`depertement_id`);

--
-- Indexes for table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`domaine_id`),
  ADD UNIQUE KEY `domaine_name` (`domaine_name`);

--
-- Indexes for table `ensignientlogin`
--
ALTER TABLE `ensignientlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`speciality_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`util_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidat`
--
ALTER TABLE `candidat`
  MODIFY `candidat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `candidatlogin`
--
ALTER TABLE `candidatlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `depertement`
--
ALTER TABLE `depertement`
  MODIFY `depertement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `domaine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ensignientlogin`
--
ALTER TABLE `ensignientlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `util_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
