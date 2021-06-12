ALTER TABLE `pharmacies` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT; 

ALTER TABLE `pharmacies` CHANGE `statut` `statut` INT(11) NULL DEFAULT '1'; 

ALTER TABLE `pharmacies` ADD `ville` INT NULL AFTER `tel`, ADD INDEX (`ville`);