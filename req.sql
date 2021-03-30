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


ALTER TABLE `publications` ADD `ville` INT NULL AFTER `statut`, ADD `entreprise` INT NULL AFTER `ville`, ADD INDEX (`ville`), ADD INDEX (`entreprise`); 
ALTER TABLE `entreprise` ADD `statut` INT NULL DEFAULT '1' AFTER `titre`;

<<<<<<< HEAD
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `id` int(11) NOT NULL,
  `titre` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
(51, 'Filière', NULL, 'Gestion des filières', 'filieres', 2, 1, '2021-03-14 14:56:16', NULL, 1, 4);

INSERT INTO `module_role` (`id`, `role_id`, `module`, `create_at`) VALUES
(48, 1, 51, '2021-03-14 15:10:33'),
(49, 2, 51, '2021-03-14 15:10:40');

ALTER TABLE `filieres` CHANGE `titre` `titre` VARCHAR(40) NOT NULL;

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
(52, 'Clients', 'fa fa-customer', 'Gestion des clients', NULL, NULL, 1, '2021-03-14 16:24:45', NULL, 1, 4),
(53, 'Nos clients', NULL, 'liste des clients', 'clients', 52, 1, '2021-03-14 16:25:57', NULL, 1, 4),
(54, 'CV', NULL, 'liste des cv', 'cv', 52, 1, '2021-03-14 16:26:22', NULL, 1, 4);

INSERT INTO `module_role` (`id`, `role_id`, `module`, `create_at`) VALUES
(52, 1, 52, '2021-03-14 16:28:10'),
(53, 1, 53, '2021-03-14 16:28:15'),
(54, 1, 54, '2021-03-14 16:28:18'),
(55, 2, 52, '2021-03-14 16:28:34'),
(56, 2, 53, '2021-03-14 16:28:37'),
(57, 2, 54, '2021-03-14 16:28:38');

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
(55, 'Evenement', NULL, 'Ajout des evenements', 'addEvents', 40, 1, '2021-03-14 16:33:35', NULL, 1, 4),
(56, 'Offre', NULL, 'Ajout des offres', 'addOffres', 40, 1, '2021-03-14 16:33:59', NULL, 1, 4),
(57, 'Bourse', NULL, 'Ajout des bourses', 'addBourses', 40, 1, '2021-03-14 16:35:25', NULL, 1, 4);

INSERT INTO `module_role` (`id`, `role_id`, `module`, `create_at`) VALUES
(58, 1, 55, '2021-03-14 16:36:36'),
(59, 1, 56, '2021-03-14 16:36:37'),
(60, 1, 57, '2021-03-14 16:36:38'),
(61, 2, 55, '2021-03-14 16:36:47'),
(62, 2, 56, '2021-03-14 16:36:48'),
(63, 2, 57, '2021-03-14 16:36:49');

TODO --modif côté SQL
$sql = "SELECT *, t.titre type_publication, c.titre categories_publication FROM type_publication t, categories_publication c, categorie_type_publication ct
                WHERE t.id=ct.type_publication AND c.id=ct.categories_publication AND c.statut=1 AND t.statut=1 AND t.id=?";

                ALTER TABLE `publications` ADD `experience` VARCHAR(50) NULL AFTER `entreprise`, ADD `sexe` INT(3) NULL AFTER `experience`, ADD `nombre_candidat` INT NULL AFTER `sexe`, ADD `diplome` VARCHAR(50) NULL AFTER `nombre_candidat`;
-- Creation tables vues
CREATE TABLE `akoy_prestation`.`vues` ( `id` INT NOT NULL AUTO_INCREMENT , `id_publication` INT NOT NULL , `created_at` TIMESTAMP NOT NULL , `nb` INT NULL , PRIMARY KEY (`id`), INDEX (`id_publication`)) ENGINE = InnoDB;

--Ajout attribut num ofrre
ALTER TABLE `publications` ADD `num_offre` VARCHAR(45) NULL AFTER `category_publication`; 
