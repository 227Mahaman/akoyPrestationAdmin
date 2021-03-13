ALTER TABLE `categories_publication` ADD `type_publication` INT NOT NULL AFTER `titre`, ADD INDEX (`type_publication`);
ALTER TABLE `categories_publication` ADD `icon` VARCHAR(30) NULL AFTER `titre`;

-- TODO modif côté SQL
ALTER TABLE `categories_publication` DROP `type_publication`;
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 13 mars 2021 à 14:34
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `akoy_prestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_type_publication`
--

CREATE TABLE `categorie_type_publication` (
  `id` int(11) NOT NULL,
  `categories_publication` int(11) NOT NULL,
  `type_publication` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie_type_publication`
--
ALTER TABLE `categorie_type_publication`
  ADD KEY `categories_publication` (`categories_publication`),
  ADD KEY `type_publication` (`type_publication`);
COMMIT;

INSERT INTO `module` (`name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
( 'categorie type publication', 'fa fa-tasks', 'associé la catégorie à un type publication', 'categorieTypePublication', NULL, 0, '2021-03-13 15:42:25', NULL, 1, 4);
