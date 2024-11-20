use music;

drop table Artist;

CREATE TABLE Artist (
	`id` int NOT NULL,
    `ArtistName` nchar(250) NOT NULL,
    `country` nchar(250)
);

ALTER TABLE Artist ADD PRIMARY KEY (id);