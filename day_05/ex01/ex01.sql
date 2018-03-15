USE `db_mlakatos`;

DROP TABLE IF EXISTS `ft_table`;

CREATE TABLE `ft_table` (
	`id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	`login` VARCHAR(255) DEFAULT 'toto' NOT NULL,
	`group` ENUM('staff', 'student', 'other') NOT NULL,
	`creation_date` DATE NOT NULL
);
