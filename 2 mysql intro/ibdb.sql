CREATE SCHEMA ibdb;

use ibdb;
CREATE TABLE Artists(
	`id` int NOT NULL PRIMARY KEY,
    `name` nchar(128) NOT NULL,
    `type` int,
    `country` int,
    `debut year` int
);

CREATE TABLE Albums(
	`id` int NOT NULL PRIMARY KEY,
    `name` nchar(254) NOT NULL,
    `Release Date` date,
    `length` time,
    `genre` nchar(50)
);

CREATE TABLE Countries( 
	`id` int NOT NULL PRIMARY KEY,
    `name` nchar(100) NOT NULL
);

ALTER TABLE ibdb.Artists ADD FOREIGN KEY (`country`) REFERENCES Countries(id);
ALTER TABLE ibdb.Albums ADD COLUMN `artist` int;
ALTER TABLE ibdb.Albums ADD FOREIGN KEY (`artist`) REFERENCES Artists(id);

INSERT INTO `Countries` (`id`, `name`)  VALUES (1, 'United States');
INSERT INTO `Countries` (`id`, `name`)  VALUES
	(2, 'England'),
    (3, 'Scotland'),
    (4, 'Australia'),
    (5, 'South Korea'),
    (6, 'Japan'),
    (7, 'Mexico'),
    (8, 'Argentina'),
    (9, 'Colombia'),
    (10, 'Chile');
    

SELECT * FROM `Countries`;