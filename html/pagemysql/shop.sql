-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 05 Septembre 2019 à 22:47
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `boards`
--

CREATE TABLE `boards` (
  `id` int(11) NOT NULL,
  `boards` text NOT NULL,
  `serialBoards` varchar(40) NOT NULL,
  `id_boards` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

--
-- Contenu de la table `boards`
--

INSERT INTO `boards` (`id`, `boards`, `serialBoards`, `id_boards`) VALUES
(1, '8_IO_BUTTON_BOARD_V1-00', 'BUT_010119', 0),
(2, 'I2C_BUFFER_BOARD_V0.10', 'BUF_020219', 1),
(4, 'USBTO4UART V1-10', 'USB_030319', 2),
(72, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-192210', 3),
(73, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-192209', 3),
(74, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-192208', 3),
(75, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-192207', 3),
(76, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-191806', 3),
(77, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-191805', 3),
(78, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-190404', 3),
(79, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-190403', 3),
(80, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-190202', 3),
(81, 'Electronical_Main_Board_V1-50', 'ElecMainBoard-184901', 3);

-- --------------------------------------------------------

--
-- Structure de la table `boardsRequirements`
--

CREATE TABLE `boardsRequirements` (
  `id` int(5) NOT NULL,
  `rep_topo` varchar(40) NOT NULL,
  `id_boards` int(5) NOT NULL,
  `id_composant` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `boardsRequirements`
--

INSERT INTO `boardsRequirements` (`id`, `rep_topo`, `id_boards`, `id_composant`) VALUES
(1, 'D201', 1, 10104001),
(2, 'C201', 1, 10010003),
(3, 'C202', 1, 10010003),
(4, 'R201', 1, 10000015),
(5, 'R204', 1, 10000015),
(6, 'R206', 1, 10000015),
(7, 'R208', 1, 10000015),
(8, 'R202', 1, 10000014),
(9, 'R205', 1, 10000014),
(10, 'R207', 1, 10000014),
(11, 'R209', 1, 10000014),
(12, 'R203', 1, 10000001);

-- --------------------------------------------------------

--
-- Structure de la table `boitierComposant`
--

CREATE TABLE `boitierComposant` (
  `id` int(5) NOT NULL,
  `typeBoitier` varchar(40) NOT NULL,
  `id_typeBoitier` int(11) NOT NULL,
  `printBoitierComposant` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `boitierComposant`
--

INSERT INTO `boitierComposant` (`id`, `typeBoitier`, `id_typeBoitier`, `printBoitierComposant`) VALUES
(1, '0603', 0, 1),
(2, '0805', 1, 1),
(3, '1206', 2, 1),
(4, 'sot-23', 3, 1),
(5, 'sot-323', 4, 1),
(6, 'soic-8', 5, 1),
(7, 'soic-14', 6, 1),
(8, 'soic-16', 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

CREATE TABLE `composant` (
  `id` int(11) NOT NULL,
  `valeur_composant` varchar(40) NOT NULL,
  `boitier_composant` varchar(40) NOT NULL,
  `id_typeComposant` int(11) NOT NULL,
  `stock_composant` int(6) NOT NULL,
  `id_composant` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `composant`
--

INSERT INTO `composant` (`id`, `valeur_composant`, `boitier_composant`, `id_typeComposant`, `stock_composant`, `id_composant`) VALUES
(1, '1k', '0', 0, 1, 10000001),
(2, '10k', '0', 0, 1, 10000002),
(3, '100k', '0', 0, 0, 10000003),
(4, '1', '0', 0, 0, 10000004),
(5, '10', '0', 0, 0, 10000005),
(6, '100', '0', 0, 0, 10000006),
(7, '1M', '0', 0, 0, 10000007),
(8, '10M', '0', 0, 0, 10000008),
(9, '22', '0', 0, 0, 10000009),
(10, '220', '0', 0, 0, 10000010),
(11, '2.2k', '0', 0, 0, 10000011),
(12, '22k', '0', 0, 0, 10000012),
(13, '220k', '0', 0, 0, 10000013),
(14, '100n', '0', 1, 0, 10010001),
(15, '10n', '0', 1, 1, 10010002),
(16, '1n', '0', 1, 0, 10010003),
(17, '22n', '0', 1, 0, 10010004),
(18, '220n', '0', 1, 0, 10010005),
(19, '330n', '0', 1, 0, 10010006),
(20, '33n', '0', 1, 0, 10010007),
(21, '47n', '0', 1, 0, 10010008),
(22, '4.7n', '0', 1, 0, 10010009),
(28, '1N4148', '3', 3, 1, 10303001),
(29, 'N148', '2', 3, 1, 10203001),
(30, '3.3n', '0', 1, 1, 10010020),
(33, '1µ', '2', 2, 10, 10202001),
(36, 'vert', '1', 4, 1, 10104001),
(38, '1k', '1', 0, 1, 10100001),
(39, '10k', '1', 0, 1, 10100002),
(40, '2.1k', '0', 0, 1, 10000014),
(41, '0', '0', 0, 1, 10000015),
(42, '4546456', '0', 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `typeComposant`
--

CREATE TABLE `typeComposant` (
  `id` int(11) NOT NULL,
  `typecomposant` varchar(40) NOT NULL,
  `numTypeComposant` int(5) NOT NULL,
  `printTypeComposant` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `typeComposant`
--

INSERT INTO `typeComposant` (`id`, `typecomposant`, `numTypeComposant`, `printTypeComposant`) VALUES
(1, 'resistance', 0, 1),
(2, 'condensateur', 1, 1),
(3, 'inductance', 2, 1),
(4, 'diode', 3, 0),
(5, 'led', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom_utilisateur` varchar(40) NOT NULL,
  `mot_de_passe` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom_utilisateur`, `mot_de_passe`) VALUES
(1, 'toto', '1234');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boardsRequirements`
--
ALTER TABLE `boardsRequirements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boitierComposant`
--
ALTER TABLE `boitierComposant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `composant`
--
ALTER TABLE `composant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_composant` (`id_composant`);

--
-- Index pour la table `typeComposant`
--
ALTER TABLE `typeComposant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `boards`
--
ALTER TABLE `boards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `boardsRequirements`
--
ALTER TABLE `boardsRequirements`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `boitierComposant`
--
ALTER TABLE `boitierComposant`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `composant`
--
ALTER TABLE `composant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `typeComposant`
--
ALTER TABLE `typeComposant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
