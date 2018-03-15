USE `db_mlakatos`;

SELECT `title` AS 'Title', `summary` AS 'Summary', `prod_year` FROM `film`
WHERE `film`.`id_genre` = (SELECT `id_genre` FROM `genre` WHERE `name` LIKE 'erotic');
