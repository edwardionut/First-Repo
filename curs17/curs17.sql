CREATE TABLE toys(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(50) NOT NULL,
	color VARCHAR(20) NOT NULL,
	material VARCHAR(50),
	price DOUBLE NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO toys(`name`, color, material, price)
VALUES
	('car', 'red', 'plastic', 20.99),
	('car', 'blue', 'wood', 22.99),
	('doll', 'pink', 'silicon', 25.99),
	('plane', 'white', NULL, 150.05);
	
SELECT * FROM toys
WHERE (`name`='car' OR material='wood')
		AND (price > 21 OR color='white')
ORDER BY price DESC, color DESC;

SELECT * FROM toys
WHERE NOT material='NULL';

SELECT * FROM toys
WHERE created_at > '2024-11-14 18:40:00' AND material != 'NULL';

SELECT * FROM toys
WHERE price BETWEEN 10 AND 25;

#FACE ACELASI LUCRU CA BETWEEN
SELECT * FROM toys
WHERE price >= 10 AND price <= 25;

SELECT * FROM toys
WHERE created_at
NOT BETWEEN '2024-11-11 00:00:00' AND '2024-11-13 23:59:59';

SELECT * FROM toys
WHERE color LIKE 'whit%'; # "%" INLOCUIESTE MAI MULTE LITERE

SELECT * FROM toys
WHERE `name` LIKE 'c_r'; # "_" INLOCUIESTE O SINGURA LITERA

SELECT * FROM toys
WHERE id IN (5,8,9);

SELECT * FROM toys
WHERE material IS NOT NULL;

SELECT DISTINCT `name` FROM toys;

SELECT DISTINCT `name`, COUNT(`name`) AS Total FROM toys
GROUP BY `name`;