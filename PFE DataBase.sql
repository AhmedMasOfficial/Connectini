-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mai 2023 à 04:29
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `codefac` int(11) NOT NULL,
  `nomfac` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`codefac`, `nomfac`, `mail`, `password`) VALUES
(1001, 'ISIMG', 'isimg@isimg.tn', 'f-4001'),
(12345678, 'ISIMS', 'idara@admin.fr', 'f-830');

-- --------------------------------------------------------

--
-- Structure de la table `approvedstud`
--

CREATE TABLE `approvedstud` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `theme` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ecandrer`
--

CREATE TABLE `ecandrer` (
  `mail` varchar(150) NOT NULL,
  `id_prof` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `picture` varchar(200) NOT NULL,
  `nom_etud` varchar(100) NOT NULL,
  `prenom_etud` varchar(100) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `nom_fac` varchar(150) NOT NULL,
  `filiere` varchar(150) NOT NULL,
  `encadrant` int(11) DEFAULT NULL,
  `stage` int(11) DEFAULT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`picture`, `nom_etud`, `prenom_etud`, `mail`, `nom_fac`, `filiere`, `encadrant`, `stage`, `password`) VALUES
('', 'amin', 'hadj kacem', 'amin2003hk@gmail.com', 'ISIMS', 'PLSI', NULL, NULL, '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `etudier`
--

CREATE TABLE `etudier` (
  `mail` varchar(150) NOT NULL,
  `code_fac` int(11) NOT NULL,
  `nom_fac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `nom_prof` varchar(150) NOT NULL,
  `prenom_prof` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `nom_fac` varchar(150) NOT NULL,
  `capacite` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`nom_prof`, `prenom_prof`, `mail`, `nom_fac`, `capacite`, `id_prof`, `password`) VALUES
('flen', 'fouleni', 'flenfouleni@isims-ens.tn', 'ISIMS', 5, 4, 'flenfouleni'),
('hamed', 'kozdoghli', 'kozzhamed@isims-ens.tn', 'ISIMS', 0, 1020, 'hamed'),
('salah', 'ben ali', 'salah@isimg.ens.tn', 'ISIMG', 3, 1234, 'salihhh'),
('salah abdeslem', 'ben jarbouaa', 'salahjarbouaa@isims-ens.tn', 'ISIMS', 6, 102, 'salihho');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `filiere` varchar(30) NOT NULL,
  `mailetud` varchar(300) NOT NULL,
  `theme` varchar(150) NOT NULL,
  `mailprof` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id_soc` int(11) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `nom_soc` varchar(100) NOT NULL,
  `numtel` int(11) NOT NULL,
  `capacite` int(11) NOT NULL,
  `local_soc` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `societe`
--

INSERT INTO `societe` (`id_soc`, `mail`, `nom_soc`, `numtel`, `capacite`, `local_soc`, `password`) VALUES
(12345678, 'society@domaine.com', 'socité', 74, 10, 'Rte Mahdia 4.5km', 'societe');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `mail` varchar(150) NOT NULL,
  `id_soc` int(11) NOT NULL,
  `theme` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`codefac`,`nomfac`),
  ADD KEY `nomfac` (`nomfac`);

--
-- Index pour la table `approvedstud`
--
ALTER TABLE `approvedstud`
  ADD PRIMARY KEY (`mail`),
  ADD KEY `mail` (`mail`);

--
-- Index pour la table `ecandrer`
--
ALTER TABLE `ecandrer`
  ADD PRIMARY KEY (`mail`,`id_prof`),
  ADD KEY `mail` (`mail`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`mail`),
  ADD KEY `nom_fac` (`nom_fac`),
  ADD KEY `mail` (`mail`),
  ADD KEY `mail_2` (`mail`),
  ADD KEY `encadrant` (`encadrant`),
  ADD KEY `stage` (`stage`);

--
-- Index pour la table `etudier`
--
ALTER TABLE `etudier`
  ADD PRIMARY KEY (`mail`,`code_fac`,`nom_fac`),
  ADD KEY `mail` (`mail`),
  ADD KEY `code_fac` (`code_fac`),
  ADD KEY `nom_fac` (`nom_fac`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`mail`,`id_prof`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Index pour la table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`mailetud`,`mailprof`),
  ADD KEY `fk_mailprof` (`mailprof`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id_soc`),
  ADD KEY `id_soc` (`id_soc`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`mail`,`id_soc`),
  ADD KEY `mail` (`mail`),
  ADD KEY `id_soc` (`id_soc`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `approvedstud`
--
ALTER TABLE `approvedstud`
  ADD CONSTRAINT `fk_mailetud1` FOREIGN KEY (`mail`) REFERENCES `requests` (`mailetud`);

--
-- Contraintes pour la table `ecandrer`
--
ALTER TABLE `ecandrer`
  ADD CONSTRAINT `ecandrer_ibfk_2` FOREIGN KEY (`mail`) REFERENCES `etudier` (`mail`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_idprof21` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`id_prof`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`stage`) REFERENCES `societe` (`id_soc`),
  ADD CONSTRAINT `fk2_idprof` FOREIGN KEY (`encadrant`) REFERENCES `professeur` (`id_prof`),
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`nom_fac`) REFERENCES `administration` (`nomfac`) ON DELETE CASCADE;

--
-- Contraintes pour la table `etudier`
--
ALTER TABLE `etudier`
  ADD CONSTRAINT `etudier_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `etudiant` (`mail`) ON DELETE CASCADE,
  ADD CONSTRAINT `etudier_ibfk_2` FOREIGN KEY (`code_fac`) REFERENCES `administration` (`codefac`) ON DELETE CASCADE,
  ADD CONSTRAINT `etudier_ibfk_3` FOREIGN KEY (`nom_fac`) REFERENCES `administration` (`nomfac`) ON DELETE CASCADE;

--
-- Contraintes pour la table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `fk_mailetud` FOREIGN KEY (`mailetud`) REFERENCES `etudiant` (`mail`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_mailprof` FOREIGN KEY (`mailprof`) REFERENCES `professeur` (`mail`) ON DELETE CASCADE;

--
-- Contraintes pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD CONSTRAINT `stagiaire_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `etudiant` (`mail`) ON DELETE CASCADE,
  ADD CONSTRAINT `stagiaire_ibfk_2` FOREIGN KEY (`id_soc`) REFERENCES `societe` (`id_soc`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
