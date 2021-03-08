-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 08 mars 2021 à 22:45
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `akoy_prestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories_publication`
--

CREATE TABLE `categories_publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `user_create` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text,
  `ville` int(11) NOT NULL,
  `user_create` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `label`, `description`, `ville`, `user_create`, `created_at`, `updated_at`, `statut`) VALUES
(1, 'UAM', 'IAI', 1, 0, '2021-02-27 18:00:12', NULL, 1),
(2, 'test', 'tdtd', 2, 0, '2021-02-27 21:39:44', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `statut` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_url`, `file_type`, `file_size`, `created_at`, `statut`) VALUES
(1, 'Capture d’écran de 2021-02-16 12-43-04.png', 'public/img/2021.02.20.18.27.17Capture d’écran de 2021-02-16 12-43-04.png', 'image/png', 54941, NULL, 1),
(2, 'Capture d’écran de 2021-02-16 09-35-46.png', 'public/img/2021.02.20.19.25.28Capture d’écran de 2021-02-16 09-35-46.png', 'image/png', 177492, NULL, 1),
(3, '3482839.jpg', 'public/img/2021.02.20.20.33.563482839.jpg', 'image/jpeg', 8203940, NULL, 1),
(4, '3482839.jpg', 'public/img/2021.02.27.18.47.203482839.jpg', 'image/jpeg', 8203940, NULL, 1),
(5, '3482839.jpg', 'public/img/2021.02.28.12.45.343482839.jpg', 'image/jpeg', 8203940, NULL, 1),
(6, 'Capture d’écran de 2021-02-27 23-35-01.png', 'public/img/2021.02.28.17.26.00Capture d’écran de 2021-02-27 23-35-01.png', 'image/png', 243301, NULL, 1),
(7, 'Capture d’écran de 2021-03-08 11-08-25.png', 'public/img/2021.03.08.21.34.23Capture d’écran de 2021-03-08 11-08-25.png', 'image/png', 568268, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`id`, `code`, `titre`, `statut`) VALUES
(1, 'HS', 'Hausa', 1),
(2, 'ZR', 'Zarma', 1),
(3, 'FR', 'Francais', 1),
(4, 'FL', 'Fulfude', 1),
(5, 'Ar', 'Arabe', 1),
(6, 'trdfgt', 'ssdf', 0),
(7, 'KI', 'Kanuri', 1),
(8, 'EN', 'English', 1);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `description` text,
  `action_url` varchar(100) DEFAULT NULL,
  `sub_module` int(11) DEFAULT NULL,
  `is_menu` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `user_create` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
(1, 'Administration', NULL, 'Le module d\'administration', NULL, NULL, 1, '2021-02-01 20:10:50', NULL, 1, 1),
(2, 'Configuration', 'fa-gears', 'Configuration de l\'application', NULL, NULL, 1, '2021-02-01 20:10:50', NULL, 1, 1),
(5, 'Rôle', NULL, 'Gestion des rôle', 'role', 1, 1, '2021-02-01 20:12:33', NULL, 1, 1),
(6, 'Module', NULL, 'Gestion des modules', 'module', 1, 1, '2021-02-01 20:12:33', NULL, 1, 1),
(19, 'Ajouter utilisateur', NULL, 'permet d\'Ajouter un utilisateur', 'addUser', 1, 1, '2021-02-13 17:25:09', NULL, 1, 4),
(20, 'Liste des utilisateurs', NULL, 'permet  de voir les utilisateur', 'showUser', 1, 1, '2021-02-13 17:25:09', NULL, 1, 4),
(21, 'Types agents', NULL, 'permet d\'ajouter et voirs  les  types d\'agents', 'type', 1, 1, '2021-02-13 17:25:09', NULL, 1, 4),
(22, 'Ville', NULL, 'Gestion des villes', 'ville', 2, 1, '2021-02-13 17:25:09', NULL, 1, 4),
(23, 'Pays', NULL, 'Gestion des pays', 'pays', 2, 1, '2021-02-13 17:25:09', NULL, 1, 4),
(24, 'Langue', NULL, 'Gestion des langues', 'langue', 2, 1, '2021-02-13 17:25:09', NULL, 1, 4),
(25, 'logout', ' ', 'déconnexion du site', 'logout', NULL, 0, '2021-02-14 07:32:59', NULL, 1, 4),
(26, 'Permission', 'fa-fa-smile', 'pour donner des permissions', 'permission', NULL, 0, '2021-02-15 19:42:08', NULL, 1, 4),
(28, 'a', 'a', 'a', NULL, NULL, 1, '2021-02-17 18:53:48', NULL, 0, NULL),
(29, 'aa', 'aaa', 'aa', NULL, NULL, 1, '2021-02-17 19:03:25', NULL, 0, NULL),
(30, 'aaaa', NULL, 'aaaaa', 'aaaa-undefined', 28, 0, '2021-02-17 19:03:42', NULL, 0, NULL),
(31, 'ab', 'ab', 'ab', NULL, NULL, 0, '2021-02-17 20:07:46', NULL, 0, NULL),
(32, 'abc', 'abc', 'abc', NULL, NULL, 0, '2021-02-17 20:08:22', NULL, 0, NULL),
(33, 'testing', 'testeyr', 'testeur', NULL, NULL, 1, '2021-02-17 20:21:22', NULL, 0, NULL),
(34, 'tttaaa', 'gtttt', 'tttt', NULL, NULL, 1, '2021-02-17 20:27:08', NULL, 0, NULL),
(35, 'alloTo', 'alloTo', 'allo', NULL, NULL, 1, '2021-02-17 21:55:28', NULL, 0, NULL),
(36, 'qui', 'qi', 'qi', NULL, NULL, 1, '2021-02-17 22:04:34', NULL, 0, NULL),
(37, 'Type plublication', NULL, 'Gestion de la categorisation des publications', 'typePlublication', 2, 1, '2021-02-26 16:18:33', NULL, 1, NULL),
(38, 'aa', NULL, 'aaa', 'aa-undefined', NULL, 1, '2021-02-26 16:22:03', NULL, 0, NULL),
(39, 'Ecoles', NULL, 'Gestion des ecoles', 'ecoles', 2, 1, '2021-02-26 16:31:28', NULL, 1, NULL),
(40, 'Publications', 'fa fa-info', 'Gestion des Publications', NULL, NULL, 1, '2021-02-27 22:27:03', NULL, 1, NULL),
(41, 'aaa', 'aaa', 'aaa', NULL, NULL, 1, '2021-02-27 22:27:53', NULL, 0, NULL),
(42, 'aaa', 'aaa', 'aaaa', NULL, NULL, 1, '2021-02-28 11:33:11', NULL, 0, NULL),
(43, 'Ajouter une publication', NULL, 'Création des publications', 'addPublication', 40, 1, '2021-02-28 22:03:00', NULL, 1, NULL),
(44, 'Liste des publications', NULL, 'Gestion des publications', 'listPublication', 40, 1, '2021-03-08 20:36:56', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module`, `create_at`) VALUES
(1, 1, 1, '2021-02-01 20:14:26'),
(2, 1, 2, '2021-02-01 20:14:26'),
(3, 1, 5, '2021-02-01 20:14:26'),
(4, 1, 6, '2021-02-01 20:14:26'),
(5, 2, 1, '2021-02-01 20:14:26'),
(6, 2, 2, '2021-02-01 20:14:26'),
(7, 2, 5, '2021-02-01 20:14:26'),
(8, 2, 6, '2021-02-01 20:14:26'),
(18, 1, 19, '2021-02-14 13:56:42'),
(19, 1, 20, '2021-02-14 13:56:46'),
(20, 1, 21, '2021-02-14 13:56:49'),
(21, 1, 22, '2021-02-14 13:56:51'),
(22, 1, 23, '2021-02-14 13:57:06'),
(23, 1, 24, '2021-02-14 13:57:08'),
(24, 1, 25, '2021-02-14 13:57:09'),
(25, 1, 26, '2021-02-15 19:43:12'),
(26, 1, 28, '2021-02-17 19:02:09'),
(27, 3, 28, '2021-02-17 19:02:36'),
(28, 3, 30, '2021-02-17 19:04:42'),
(29, 3, 29, '2021-02-17 19:04:46'),
(30, 1, 30, '2021-02-17 19:05:28'),
(31, 1, 29, '2021-02-17 19:05:29'),
(32, 2, 37, '2021-02-26 16:19:42'),
(33, 1, 37, '2021-02-26 16:19:53'),
(34, 1, 39, '2021-02-26 16:33:28'),
(35, 2, 39, '2021-02-26 16:33:37'),
(36, 1, 40, '2021-02-27 22:27:32'),
(37, 2, 40, '2021-02-27 22:27:42'),
(38, 2, 43, '2021-02-28 22:04:46'),
(39, 1, 43, '2021-02-28 22:04:55'),
(40, 2, 44, '2021-03-08 20:38:28'),
(41, 1, 44, '2021-03-08 20:38:33');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `name`) VALUES
(1, 'AFGHANISTAN'),
(2, 'ALBANIA'),
(3, 'ALGERIA'),
(4, 'AMERICAN SAMOA'),
(5, 'ANDORRA'),
(6, 'ANGOLA'),
(7, 'ANGUILLA'),
(8, 'ANTARCTICA'),
(9, 'ANTIGUA AND BARBUDA'),
(10, 'ARGENTINA'),
(11, 'ARMENIA'),
(12, 'ARUBA'),
(13, 'AUSTRALIA'),
(14, 'AUSTRIA'),
(15, 'AZERBAIJAN'),
(16, 'BAHAMAS'),
(17, 'BAHRAIN'),
(18, 'BANGLADESH'),
(19, 'BARBADOS'),
(20, 'BELARUS'),
(21, 'BELGIUM'),
(22, 'BELIZE'),
(23, 'BENIN'),
(24, 'BERMUDA'),
(25, 'BHUTAN'),
(26, 'BOLIVIA'),
(27, 'BOSNIA AND HERZEGOVINA'),
(28, 'BOTSWANA'),
(29, 'BOUVET ISLAND'),
(30, 'BRAZIL'),
(31, 'BRITISH INDIAN OCEAN TERRITORY'),
(32, 'BRUNEI DARUSSALAM'),
(33, 'BULGARIA'),
(34, 'BURKINA FASO'),
(35, 'BURUNDI'),
(36, 'CAMBODIA'),
(37, 'CAMEROON'),
(38, 'CANADA'),
(39, 'CAPE VERDE'),
(40, 'CAYMAN ISLANDS'),
(41, 'CENTRAL AFRICAN REPUBLIC'),
(42, 'CHAD'),
(43, 'CHILE'),
(44, 'CHINA'),
(45, 'CHRISTMAS ISLAND'),
(46, 'COCOS (KEELING) ISLANDS'),
(47, 'COLOMBIA'),
(48, 'COMOROS'),
(49, 'CONGO'),
(50, 'CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
(51, 'COOK ISLANDS'),
(52, 'COSTA RICA'),
(53, 'COTE D\'IVOIRE'),
(54, 'CROATIA'),
(55, 'CUBA'),
(56, 'CYPRUS'),
(57, 'CZECH REPUBLIC'),
(58, 'DENMARK'),
(59, 'DJIBOUTI'),
(60, 'DOMINICA'),
(61, 'DOMINICAN REPUBLIC'),
(62, 'ECUADOR'),
(63, 'EGYPT'),
(64, 'EL SALVADOR'),
(65, 'EQUATORIAL GUINEA'),
(66, 'ERITREA'),
(67, 'ESTONIA'),
(68, 'ETHIOPIA'),
(69, 'FALKLAND ISLANDS (MALVINAS)'),
(70, 'FAROE ISLANDS'),
(71, 'FIJI'),
(72, 'FINLAND'),
(73, 'FRANCE'),
(74, 'FRENCH GUIANA'),
(75, 'FRENCH POLYNESIA'),
(76, 'FRENCH SOUTHERN TERRITORIES'),
(77, 'GABON'),
(78, 'GAMBIA'),
(79, 'GEORGIA'),
(80, 'GERMANY'),
(81, 'GHANA'),
(82, 'GIBRALTAR'),
(83, 'GREECE'),
(84, 'GREENLAND'),
(85, 'GRENADA'),
(86, 'GUADELOUPE'),
(87, 'GUAM'),
(88, 'GUATEMALA'),
(89, 'GUINEA'),
(90, 'GUINEA-BISSAU'),
(91, 'GUYANA'),
(92, 'HAITI'),
(93, 'HEARD ISLAND AND MCDONALD ISLANDS'),
(94, 'HOLY SEE (VATICAN CITY STATE)'),
(95, 'HONDURAS'),
(96, 'HONG KONG'),
(97, 'HUNGARY'),
(98, 'ICELAND'),
(99, 'INDIA'),
(100, 'INDONESIA'),
(101, 'IRAN, ISLAMIC REPUBLIC OF'),
(102, 'IRAQ'),
(103, 'IRELAND'),
(104, 'ISRAEL'),
(105, 'ITALY'),
(106, 'JAMAICA'),
(107, 'JAPAN'),
(108, 'JORDAN'),
(109, 'KAZAKHSTAN'),
(110, 'KENYA'),
(111, 'KIRIBATI'),
(112, 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF'),
(113, 'KOREA, REPUBLIC OF'),
(114, 'KUWAIT'),
(115, 'KYRGYZSTAN'),
(116, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC'),
(117, 'LATVIA'),
(118, 'LEBANON'),
(119, 'LESOTHO'),
(120, 'LIBERIA'),
(121, 'LIBYAN ARAB JAMAHIRIYA'),
(122, 'LIECHTENSTEIN'),
(123, 'LITHUANIA'),
(124, 'LUXEMBOURG'),
(125, 'MACAO'),
(126, 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF'),
(127, 'MADAGASCAR'),
(128, 'MALAWI'),
(129, 'MALAYSIA'),
(130, 'MALDIVES'),
(131, 'MALI'),
(132, 'MALTA'),
(133, 'MARSHALL ISLANDS'),
(134, 'MARTINIQUE'),
(135, 'MAURITANIA'),
(136, 'MAURITIUS'),
(137, 'MAYOTTE'),
(138, 'MEXICO'),
(139, 'MICRONESIA, FEDERATED STATES OF'),
(140, 'MOLDOVA, REPUBLIC OF'),
(141, 'MONACO'),
(142, 'MONGOLIA'),
(143, 'MONTSERRAT'),
(144, 'MOROCCO'),
(145, 'MOZAMBIQUE'),
(146, 'MYANMAR'),
(147, 'NAMIBIA'),
(148, 'NAURU'),
(149, 'NEPAL'),
(150, 'NETHERLANDS'),
(151, 'NETHERLANDS ANTILLES'),
(152, 'NEW CALEDONIA'),
(153, 'NEW ZEALAND'),
(154, 'NICARAGUA'),
(155, 'NIGER'),
(156, 'NIGERIA'),
(157, 'NIUE'),
(158, 'NORFOLK ISLAND'),
(159, 'NORTHERN MARIANA ISLANDS'),
(160, 'NORWAY'),
(161, 'OMAN'),
(162, 'PAKISTAN'),
(163, 'PALAU'),
(164, 'PALESTINIAN TERRITORY, OCCUPIED'),
(165, 'PANAMA'),
(166, 'PAPUA NEW GUINEA'),
(167, 'PARAGUAY'),
(168, 'PERU'),
(169, 'PHILIPPINES'),
(170, 'PITCAIRN'),
(171, 'POLAND'),
(172, 'PORTUGAL'),
(173, 'PUERTO RICO'),
(174, 'QATAR'),
(175, 'REUNION'),
(176, 'ROMANIA'),
(177, 'RUSSIAN FEDERATION'),
(178, 'RWANDA'),
(179, 'SAINT HELENA'),
(180, 'SAINT KITTS AND NEVIS'),
(181, 'SAINT LUCIA'),
(182, 'SAINT PIERRE AND MIQUELON'),
(183, 'SAINT VINCENT AND THE GRENADINES'),
(184, 'SAMOA'),
(185, 'SAN MARINO'),
(186, 'SAO TOME AND PRINCIPE'),
(187, 'SAUDI ARABIA'),
(188, 'SENEGAL'),
(189, 'SERBIA AND MONTENEGRO'),
(190, 'SEYCHELLES'),
(191, 'SIERRA LEONE'),
(192, 'SINGAPORE'),
(193, 'SLOVAKIA'),
(194, 'SLOVENIA'),
(195, 'SOLOMON ISLANDS'),
(196, 'SOMALIA'),
(197, 'SOUTH AFRICA'),
(198, 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
(199, 'SPAIN'),
(200, 'SRI LANKA'),
(201, 'SUDAN'),
(202, 'SURINAME'),
(203, 'SVALBARD AND JAN MAYEN'),
(204, 'SWAZILAND'),
(205, 'SWEDEN'),
(206, 'SWITZERLAND'),
(207, 'SYRIAN ARAB REPUBLIC'),
(208, 'TAIWAN, PROVINCE OF CHINA'),
(209, 'TAJIKISTAN'),
(210, 'TANZANIA, UNITED REPUBLIC OF'),
(211, 'THAILAND'),
(212, 'TIMOR-LESTE'),
(213, 'TOGO'),
(214, 'TOKELAU'),
(215, 'TONGA'),
(216, 'TRINIDAD AND TOBAGO'),
(217, 'TUNISIA'),
(218, 'TURKEY'),
(219, 'TURKMENISTAN'),
(220, 'TURKS AND CAICOS ISLANDS'),
(221, 'TUVALU'),
(222, 'UGANDA'),
(223, 'UKRAINE'),
(224, 'UNITED ARAB EMIRATES'),
(225, 'UNITED KINGDOM'),
(226, 'UNITED STATES'),
(227, 'UNITED STATES MINOR OUTLYING ISLANDS'),
(228, 'URUGUAY'),
(229, 'UZBEKISTAN'),
(230, 'VANUATU'),
(231, 'VENEZUELA'),
(232, 'VIET NAM'),
(233, 'VIRGIN ISLANDS, BRITISH'),
(234, 'VIRGIN ISLANDS, U.S.'),
(235, 'WALLIS AND FUTUNA'),
(236, 'WESTERN SAHARA'),
(237, 'YEMEN'),
(238, 'ZAMBIA'),
(239, 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `type_publication` int(11) NOT NULL,
  `category_publication` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text,
  `lieu` varchar(255) DEFAULT NULL,
  `date_annee_bourse` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `ecole` int(11) DEFAULT NULL,
  `date_elaboration` varchar(50) DEFAULT NULL,
  `file` int(11) DEFAULT NULL,
  `user_create` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `type_publication`, `category_publication`, `titre`, `description`, `lieu`, `date_annee_bourse`, `date_debut`, `date_fin`, `ecole`, `date_elaboration`, `file`, `user_create`, `create_at`, `updated_at`, `statut`) VALUES
(1, 1, NULL, 'Test', 'test', 'Niamey', '2921', '0000-00-00', '0000-00-00', 1, '2021-03-01', 7, 4, '2021-03-08 20:34:23', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `statut`) VALUES
(1, 'Super Administrateur', 'Il a tout les droits', 1),
(2, 'Administrateur', 'Il a tout les droits', 1),
(3, 'ok', 'oki', 0);

-- --------------------------------------------------------

--
-- Structure de la table `types_user`
--

CREATE TABLE `types_user` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `types_user`
--

INSERT INTO `types_user` (`id`, `label`, `statut`) VALUES
(1, 'Super Administrateur', 1),
(2, 'Administrateur', 1),
(3, 'aaa', 0),
(4, 'Entité', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_publication`
--

CREATE TABLE `type_publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_publication`
--

INSERT INTO `type_publication` (`id`, `titre`, `statut`) VALUES
(1, 'Annonce', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `type_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `photo` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password_` varchar(80) DEFAULT NULL,
  `statut` int(11) DEFAULT '0',
  `statut_delete` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `type_user`, `created_at`, `updated_at`, `photo`, `role`, `password_`, `statut`, `statut_delete`) VALUES
(1, 'ZALKILPHILY Abass', 'Mahaman Tahirou', '+22796962435', 1, '2021-02-01 20:08:38', '2021-02-06 11:22:01', NULL, 1, '$2y$10$cAn46Cpd.286rfpurY490O2zcLxx1o2OkoooFUbsbQ6BrZCssvXRG', 1, 1),
(4, 'Abdoul Razak', 'Adamou', '+22798960382', 2, '2021-02-13 16:52:12', NULL, NULL, 1, '$2y$10$ygiJopuOlQRY0g0R5T3O.O13HB7u6tCBcHDQLPA9fcm4p0/SYT1Bq', 1, 1),
(6, 'Zalki', 'aaa', '+22791627058', 1, '2021-02-20 12:14:17', NULL, NULL, 1, NULL, 0, 0),
(7, 'aab', 'aab', '+22796279997', 1, '2021-02-20 17:27:17', NULL, 1, 1, NULL, 0, 0),
(8, 'ali', 'ali', '+22796969696', 2, '2021-02-20 18:25:28', '2021-02-20 07:33:43', 2, 2, '$2y$10$uBxjNUG3iKAf2OI.mAyToOWLsCYN92A.T0nHkp2TPtQiyA7RSwkEu', 0, 0),
(10, 'Zalkilphily Abass', 'Mahaman Tahirou', '+22796962435', 1, '2021-02-20 19:33:56', NULL, 6, 1, NULL, 0, 1),
(11, 'Zalki', 'Abass', '+22791627058', 1, '2021-02-27 17:47:20', NULL, 4, 1, NULL, 0, 1),
(12, 'Abass', 'Abass', '+22791627058', 4, '2021-02-28 11:45:34', NULL, 5, 2, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `pays` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `titre`, `pays`, `statut`) VALUES
(1, 'Niamey', 155, 1),
(2, 'Kano', 156, 1),
(3, 'Zinder', 155, 1),
(4, 'ok', 1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories_publication`
--
ALTER TABLE `categories_publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file` (`file`),
  ADD KEY `user_create` (`user_create`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville` (`ville`),
  ADD KEY `user_create` (`user_create`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_at` (`created_at`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_url` (`action_url`),
  ADD KEY `user_create` (`user_create`),
  ADD KEY `sub_module` (`sub_module`);

--
-- Index pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `module_id` (`module`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file` (`file`),
  ADD KEY `user_create` (`user_create`),
  ADD KEY `category_publication` (`category_publication`),
  ADD KEY `type_publication` (`type_publication`),
  ADD KEY `ecole` (`ecole`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types_user`
--
ALTER TABLE `types_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_publication`
--
ALTER TABLE `type_publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone_number` (`phone_number`),
  ADD KEY `photo` (`photo`),
  ADD KEY `role` (`role`),
  ADD KEY `type_user` (`type_user`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pays` (`pays`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories_publication`
--
ALTER TABLE `categories_publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `types_user`
--
ALTER TABLE `types_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_publication`
--
ALTER TABLE `type_publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`file`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `cv_ibfk_2` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`category_publication`) REFERENCES `categories_publication` (`id`),
  ADD CONSTRAINT `publications_ibfk_2` FOREIGN KEY (`file`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `publications_ibfk_6` FOREIGN KEY (`ecole`) REFERENCES `ecole` (`id`),
  ADD CONSTRAINT `publications_ibfk_7` FOREIGN KEY (`type_publication`) REFERENCES `type_publication` (`id`),
  ADD CONSTRAINT `publications_ibfk_8` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type_user`) REFERENCES `types_user` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`photo`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
