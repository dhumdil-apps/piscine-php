USE `db_mlakatos`;

SELECT `title`, `summary` FROM `film`
WHERE `title` LIKE "%42%"
ORDER BY `duration` ASC;
