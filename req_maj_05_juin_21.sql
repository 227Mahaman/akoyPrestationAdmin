ALTER TABLE `publicites` CHANGE `delai` `date_debut_delai` DATE NULL DEFAULT NULL;

ALTER TABLE `publicites` ADD `date_fin_delai` DATE NULL AFTER `date_debut_delai`;

