ALTER TABLE `pharmacies` ADD `image` INT NULL AFTER `tel`;
ALTER TABLE `groupe_pharmacies` ADD `code_groupe` VARCHAR(60) NULL AFTER `id`;
ALTER TABLE `pharmacies` ADD `code_pharma` VARCHAR(60) NULL AFTER `id`;

CREATE TABLE `programmation` (
  `id_program` int(11) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  `user_create` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `programmation`
--
ALTER TABLE `programmation`
  ADD PRIMARY KEY (`id_program`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `programmation`
--
ALTER TABLE `programmation`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT;

  CREATE TABLE `programmation_has_groupe_pharm` (
  `id` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `programmation_has_groupe_pharm`
--
ALTER TABLE `programmation_has_groupe_pharm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `programmation_has_groupe_pharm`
--
ALTER TABLE `programmation_has_groupe_pharm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;