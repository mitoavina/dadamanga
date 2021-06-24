-- 02/06/2021
CREATE TABLE dm_language (
    id TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    dm_language VARCHAR(100)
);

INSERT INTO dm_language (dm_language) VALUES 
('English'),
('French'),
('Malagasy');

ALTER TABLE dm_travefy_trip
    ADD dm_language_id TINYINT UNSIGNED NOT NULL DEFAULT 1 AFTER travefy_trip_id,
    ADD dm_trip_price MEDIUMINT UNSIGNED AFTER dm_language_id,
    ADD CONSTRAINT FOREIGN KEY (dm_language_id) REFERENCES dm_language(id);

CREATE VIEW dm_travefy_trip_complete AS (
SELECT 
    a.id, a.travefy_trip_id, a.dm_trip_price,
    b.id as dm_language_id, b.dm_language
FROM dm_travefy_trip as a JOIN dm_language as b ON a.dm_language_id = b.id
)

--24/06/2021
ALTER TABLE dm_travefy_trip 
    DROP FOREIGN KEY dm_travefy_trip_ibfk_1;
ALTER TABLE dm_travefy_trip 
	DROP INDEX  dm_language_id;
ALTER TABLE dm_travefy_trip
    DROP dm_language_id;

CREATE TABLE dm_travefy_trip_language (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    travefy_trip_id INT UNSIGNED NOT NULL, 
    language_id TINYINT UNSIGNED NOT NULL,
    CONSTRAINT travefy_trip_fk FOREIGN KEY (travefy_trip_id) REFERENCES dm_travefy_trip(id),
    CONSTRAINT language_fk FOREIGN KEY (language_id) REFERENCES dm_language(id),
    CONSTRAINT unique_fk UNIQUE (travefy_trip_id, language_id)
);

DROP VIEW dm_travefy_trip_complete;

CREATE VIEW dm_travefy_trip_language_complete AS (
SELECT
    a.*, b.dm_language
FROM dm_travefy_trip_language as a JOIN dm_language as b ON a.language_id=b.id
);