-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 04 sep. 2023 à 16:49
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `!_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `codes_promo`
--

CREATE TABLE `codes_promo` (
  `id_promo` int(11) NOT NULL,
  `code` varchar(14) NOT NULL,
  `montant` int(11) NOT NULL,
  `valide` tinyint(1) NOT NULL DEFAULT 1,
  `admin_create` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `codes_promo`
--

INSERT INTO `codes_promo` (`id_promo`, `code`, `montant`, `valide`, `admin_create`) VALUES
(1, 'XIT3-XNT1-5PJT', 10, 1, 'silica'),
(2, 'XGQU-O86V-NFJU', 10, 1, 'silica'),
(3, 'Y4UU-2ODT-LVOL', 10, 1, 'silica'),
(4, '5MLA-EFF3-DRMC', 10, 1, 'silica'),
(5, 'W3UR-PSRQ-J7XS', 10, 1, 'silica'),
(6, '3254-HILJ-FKQB', 10, 1, 'silica'),
(7, 'N0KB-UVTV-OCFT', 10, 1, 'silica'),
(8, 'ZGBI-TDQT-ISS8', 10, 1, 'silica'),
(9, 'AFM2-W3VY-U54K', 10, 1, 'silica'),
(10, 'SK0Y-ZOXG-H2N8', 10, 1, 'silica'),
(11, '6SEH-GBPC-IW7Z', 10, 1, 'silica'),
(12, 'W08B-T601-09J7', 10, 1, 'silica'),
(13, 'S1OC-0F49-CCDQ', 10, 1, 'silica'),
(14, 'A36J-95Y5-EIWX', 10, 1, 'silica'),
(15, 'XGL6-7OVW-L887', 10, 1, 'silica'),
(16, 'IO2V-QPO7-O8I1', 10, 1, 'silica'),
(17, 'P7IG-KBMZ-G295', 10, 1, 'silica'),
(18, 'ELYI-KM0M-OSI3', 10, 1, 'silica'),
(19, 'MSS9-3BQJ-D8SE', 10, 1, 'silica'),
(20, '6HU1-06T4-8PY6', 10, 1, 'silica'),
(21, 'NDXD-BZGU-6GPX', 10, 1, 'silica'),
(22, '0R82-ZGDM-WIVE', 10, 1, 'silica'),
(23, 'DVUY-907H-M9X4', 10, 1, 'silica'),
(24, '6FVF-ZVXE-2HG3', 10, 1, 'silica'),
(25, 'OLE8-SYQ5-UZ32', 10, 1, 'silica'),
(26, 'ELMT-SKLY-QQIM', 10, 1, 'silica'),
(27, 'QOTQ-BO2S-1WON', 10, 1, 'silica'),
(28, 'I6IU-0B1X-GY86', 10, 1, 'silica'),
(29, '19I6-6ANL-F1Q6', 10, 1, 'silica'),
(30, '4IOD-2UXL-SVPP', 10, 1, 'silica'),
(31, 'RZ65-IFRO-AZFF', 10, 1, 'silica'),
(32, 'QRRF-G8T1-PDN6', 10, 1, 'silica'),
(33, '3RU7-IX53-9H1N', 10, 1, 'silica'),
(34, 'XCL9-OL3B-OTIA', 10, 1, 'silica'),
(35, 'JKF4-8VPI-74K2', 10, 1, 'silica'),
(36, 'P5I0-OYWY-Q6NV', 10, 1, 'silica'),
(37, 'W9FP-C79E-HK6R', 10, 1, 'silica'),
(38, '5T4O-9DCJ-M6N8', 10, 1, 'silica'),
(39, 'PFUI-T9NF-XWGL', 10, 1, 'silica'),
(40, 'YDWR-YR1U-284J', 10, 1, 'silica'),
(41, 'QZDG-ZKAP-DWPW', 10, 1, 'silica'),
(42, '0CQY-AZVF-IAGL', 10, 1, 'silica'),
(43, '45N8-3H18-6592', 10, 1, 'silica'),
(44, 'IWXP-J3DR-0KIM', 10, 1, 'silica'),
(45, 'QVG4-KTR0-ECUU', 10, 1, 'silica'),
(46, '48U0-Y6KA-ATMG', 10, 1, 'silica'),
(47, 'NYUI-ZQMD-N1ZG', 10, 1, 'silica'),
(48, 'IIDY-K0KO-QSP6', 10, 1, 'silica'),
(49, 'SLIJ-IV0Z-ATZ0', 10, 1, 'silica'),
(50, 'HI0E-7LWJ-3RRC', 10, 1, 'silica');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_nam` varchar(30) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `img` varchar(20) NOT NULL DEFAULT 'defaux.png',
  `sold` double NOT NULL DEFAULT 0,
  `role` enum('admin','client') NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `email`, `login_nam`, `pseudo`, `mdp`, `img`, `sold`, `role`) VALUES
(1, 'alexissimoes94@gmail.com', 'anilexs', 'anilexs', '$2y$10$28z2oC8FaE6U7AQ//N/Ql.Xrdhboll9vWPiJRdV0UmTMsxeCzQp8W', 'defaux.png', 0, 'client'),
(2, 'silica@sao.com', 'silica', 'silica', '$2y$10$znSXIQPSUjQ3IFBI9sWlbuc9bv7uzsMYBhwkq.LPvftk10IFLp10i', 'defaux.png', 0, 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codes_promo`
--
ALTER TABLE `codes_promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login_nam` (`login_nam`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codes_promo`
--
ALTER TABLE `codes_promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
