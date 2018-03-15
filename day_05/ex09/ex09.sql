USE `db_mlakatos`;

SELECT COUNT(`duration`) AS `nb_short-films` FROM `film`
WHERE `duration` <= 42;
