ALTER TABLE `categories_publication` ADD `type_publication` INT NOT NULL AFTER `titre`, ADD INDEX (`type_publication`);
ALTER TABLE `categories_publication` ADD `icon` VARCHAR(30) NULL AFTER `titre`;