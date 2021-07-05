-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 03 juil. 2021 à 22:55
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `akoy_prestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `action_url` varchar(100) DEFAULT NULL,
  `sub_module` int(11) DEFAULT NULL,
  `is_menu` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `user_create` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
(1, 'Administration', NULL, 'Le module d\'administration', NULL, NULL, 1, '2021-02-01 19:10:50', NULL, 1, 1),
(2, 'Configuration', 'fa-gears', 'Configuration de l\'application', NULL, NULL, 1, '2021-02-01 19:10:50', NULL, 1, 1),
(5, 'Rôle', NULL, 'Gestion des rôle', 'role', 1, 1, '2021-02-01 19:12:33', NULL, 1, 1),
(6, 'Module', NULL, 'Gestion des modules', 'module', 1, 1, '2021-02-01 19:12:33', NULL, 1, 1),
(19, 'Ajouter utilisateur', NULL, 'permet d\'Ajouter un utilisateur', 'addUser', 1, 1, '2021-02-13 16:25:09', NULL, 1, 4),
(20, 'Liste des utilisateurs', NULL, 'permet  de voir les utilisateur', 'showUser', 1, 1, '2021-02-13 16:25:09', NULL, 1, 4),
(21, 'Types agents', NULL, 'permet d\'ajouter et voirs  les  types d\'agents', 'type', 1, 1, '2021-02-13 16:25:09', NULL, 1, 4),
(22, 'Ville', NULL, 'Gestion des villes', 'ville', 2, 1, '2021-02-13 16:25:09', NULL, 1, 4),
(23, 'Pays', NULL, 'Gestion des pays', 'pays', 2, 1, '2021-02-13 16:25:09', NULL, 1, 4),
(24, 'Langue', NULL, 'Gestion des langues', 'langue', 2, 1, '2021-02-13 16:25:09', NULL, 1, 4),
(25, 'logout', ' ', 'déconnexion du site', 'logout', NULL, 0, '2021-02-14 06:32:59', NULL, 1, 4),
(26, 'Permission', 'fa-fa-smile', 'pour donner des permissions', 'permission', NULL, 0, '2021-02-15 18:42:08', NULL, 1, 4),
(28, 'a', 'a', 'a', NULL, NULL, 1, '2021-02-17 17:53:48', NULL, 0, NULL),
(29, 'aa', 'aaa', 'aa', NULL, NULL, 1, '2021-02-17 18:03:25', NULL, 0, NULL),
(30, 'aaaa', NULL, 'aaaaa', 'aaaa-undefined', 28, 0, '2021-02-17 18:03:42', NULL, 0, NULL),
(31, 'ab', 'ab', 'ab', NULL, NULL, 0, '2021-02-17 19:07:46', NULL, 0, NULL),
(32, 'abc', 'abc', 'abc', NULL, NULL, 0, '2021-02-17 19:08:22', NULL, 0, NULL),
(33, 'testing', 'testeyr', 'testeur', NULL, NULL, 1, '2021-02-17 19:21:22', NULL, 0, NULL),
(34, 'tttaaa', 'gtttt', 'tttt', NULL, NULL, 1, '2021-02-17 19:27:08', NULL, 0, NULL),
(35, 'alloTo', 'alloTo', 'allo', NULL, NULL, 1, '2021-02-17 20:55:28', NULL, 0, NULL),
(36, 'qui', 'qi', 'qi', NULL, NULL, 1, '2021-02-17 21:04:34', NULL, 0, NULL),
(37, 'Type plublication', NULL, 'Gestion de la categorisation des publications', 'typePublication', 2, 1, '2021-02-26 15:18:33', NULL, 1, NULL),
(38, 'aa', NULL, 'aaa', 'aa-undefined', NULL, 1, '2021-02-26 15:22:03', NULL, 0, NULL),
(39, 'Ecoles', NULL, 'Gestion des ecoles', 'ecoles', 2, 1, '2021-02-26 15:31:28', NULL, 1, NULL),
(40, 'Publications', 'fa fa-info', 'Gestion des Publications', NULL, NULL, 1, '2021-02-27 21:27:03', NULL, 1, NULL),
(41, 'aaa', 'aaa', 'aaa', NULL, NULL, 1, '2021-02-27 21:27:53', NULL, 0, NULL),
(42, 'aaa', 'aaa', 'aaaa', NULL, NULL, 1, '2021-02-28 10:33:11', NULL, 0, NULL),
(43, 'Ajouter une publication', NULL, 'Création des publications', 'addPublication', 40, 1, '2021-02-28 21:03:00', NULL, 1, NULL),
(44, 'Liste des publications', NULL, 'Gestion des publications', 'listPublication', 40, 1, '2021-03-08 19:36:56', NULL, 1, NULL),
(45, 'Categorie publication', NULL, 'Gestion des categorie publication', 'categoriePublication', 2, 1, '2021-03-13 08:55:21', NULL, 1, NULL),
(46, 'test', NULL, 'test', 'test-undefined', NULL, 1, '2021-03-13 10:44:51', NULL, 1, NULL),
(47, 'test', NULL, 'ytezt', 'test-undefined', 2, 1, '2021-03-13 10:51:40', NULL, 1, NULL),
(48, 'Annonce', NULL, 'Ajout des annonces', 'annonce-undefined', 43, 1, '2021-03-13 10:54:38', NULL, 1, NULL),
(49, 'categorie type publication', 'fa fa-tasks', 'associé la catégorie à un type publication', 'categorieTypePublication', NULL, 0, '2021-03-13 13:42:25', NULL, 1, 4),
(50, 'Entreprise', NULL, 'Gestion des entreprises', 'entreprises', 2, 1, '2021-03-13 19:52:09', NULL, 1, NULL),
(51, 'Filière', NULL, 'Gestion des filières', 'filieres', 2, 1, '2021-03-14 13:56:16', NULL, 1, 4),
(52, 'Clients', 'fa fa-customer', 'Gestion des clients', NULL, NULL, 1, '2021-03-14 15:24:45', NULL, 1, 4),
(53, 'Nos clients', NULL, 'liste des clients', 'clients', 52, 1, '2021-03-14 15:25:57', NULL, 1, 4),
(54, 'CV', NULL, 'liste des cv', 'cv', 52, 1, '2021-03-14 15:26:22', NULL, 1, 4),
(55, 'Evenement', NULL, 'Ajout des evenements', 'addEvents', 40, 1, '2021-03-14 15:33:35', NULL, 1, 4),
(56, 'Offre', NULL, 'Ajout des offres', 'addOffres', 40, 1, '2021-03-14 15:33:59', NULL, 1, 4),
(57, 'Bourse', NULL, 'Ajout des bourses', 'addBourses', 40, 1, '2021-03-14 15:35:25', NULL, 1, 4),
(58, 'Publicités', '', 'Gestion des Publicités', NULL, NULL, 1, '2021-04-24 21:50:40', NULL, 1, 4),
(59, 'Ajouter une pub', NULL, 'Ajout des pub', 'addPub', 58, 1, '2021-04-24 21:52:37', NULL, 1, 4),
(60, 'Listes des pub', NULL, 'Voir les pub', 'showPub', 58, 1, '2021-04-24 21:53:03', NULL, 1, 4),
(61, 'Pharmacie de Garde', 'fa fa-hospital', 'Gestion des pharmacies de garde', NULL, NULL, 1, '2021-06-12 10:07:41', NULL, 1, 4),
(62, 'Ajouter une pharmacie', NULL, 'Ajouter une pharmacie', 'addPharma', 61, 1, '2021-06-12 10:08:36', NULL, 1, 4),
(63, 'Consulter pharmacie', NULL, 'Consulter les pharmacies', 'showPharma', 61, 1, '2021-06-12 10:09:36', NULL, 1, 4),
(64, 'Ajouter un programmation', NULL, 'Ajouter un programmation', 'addProgram', 61, 1, '2021-06-12 14:05:22', NULL, 1, 4),
(65, 'Consulter programme', NULL, 'Consulter les programmations', 'showProgram', 61, 1, '2021-06-12 14:06:14', NULL, 1, 4),
(66, 'Ajouter pharmacie au programme', NULL, 'Ajouter pharmacie au programmation', 'addGroupeToProgram', 65, 0, '2021-06-19 21:40:37', NULL, 1, 4),
(67, 'Ajouter Groupe pharma', NULL, 'Ajout des groupes de pharmacies', 'addGroupePharma', 61, 1, '2021-06-19 22:19:08', NULL, 1, 4),
(68, 'Consulter groupe pharmacie', NULL, 'Consulter les groupes de pharmacies', 'showGroupePharma', 61, 1, '2021-06-19 22:20:00', NULL, 1, 4),
(69, 'addPharmaToGroupe', NULL, 'Ajouter les pharmacies au groupe', 'addPharmaToGroupe', 68, 0, '2021-06-19 22:20:57', NULL, 1, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_url` (`action_url`),
  ADD KEY `user_create` (`user_create`),
  ADD KEY `sub_module` (`sub_module`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
