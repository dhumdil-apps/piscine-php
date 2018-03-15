`USE `db_adsabau`;

SELECT REVERSE(RIGHT(`phone_number`,9)) AS `rebmunenohp` FROM `distrib` WHERE LEFT(`phone_number`,2) LIKE '05';