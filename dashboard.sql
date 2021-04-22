DROP TABLE dm_article;

CREATE TABLE dm_article (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    presentation_image VARCHAR(255),
    title VARCHAR(255) NOT NULL,
    chapo VARCHAR(255) NOT NULL,
    fields JSON NOT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    update_date DATETIME ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO dm_article (title, chapo, fields) VALUES
(
    'Géneral Hygiene Rules at the Office',
    'Dadamanga is committed to caring for the health and well-being of our employees, service providers, partners and beloved clients. 
    Below, you will find detailed information about the latest decisions being made by the local authorities and actions being taken in preparation for reopening the borders.',
    '{
        "data": [
            {
                "type": 1,
                "paragraph": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            },
            {
                "type": 2,
                "url": "1.jpg"
            }
        ]
    }'
);