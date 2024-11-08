#CREATE DATABASE `curs14`;
#USE curs14; selecteaza baza de date pe care se fac query-uri

CREATE TABLE laptops (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`cpu` DOUBLE NOT NULL,
	`memory` DOUBLE NOT NULL,
	display INT NOT NULL,
	gpu DOUBLE NOT NULL,
	achizitie DATE
);

INSERT INTO laptops(`cpu`, `memory`, display, gpu, achizitie)
VALUES 
	(2000.22, 4096, 14, 1500.33, '2024-11-05'),
	(1800.50, 8192, 16, 2200.92, '2023-11-05');
	
SELECT id, display, gpu, achizitie
FROM laptops;

INSERT INTO laptops(`cpu`, `memory`, display, gpu, achizitie)
VALUES
	(1200.6, 2048, 14, 1800.9, CURRENT_DATE());
	
SELECT COUNT(id) AS total FROM laptops;

UPDATE laptops
SET achizitie = '2024-11-04'
WHERE id = 1;

DELETE FROM laptops;
#WHERE id=2;

TRUNCATE TABLE laptops;

SELECT * FROM laptops
WHERE 
(`cpu`>1000 AND display>=14)
ORDER BY gpu DESC,
`memory` ASC;

SELECT `cpu` + gpu AS total_memory, id, display
FROM laptops
ORDER BY total_memory DESC;

CREATE TABLE accounts (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	account_number INT NOT NULL,
	`status` ENUM('open', 'closed', 'pending', 'approved') NOT NULL
);

INSERT INTO accounts
VALUES
	(null,123, 'open'),
	(null,124, 'closed'),
	(null,125, 'pending'),
	(null,126, 'approved');
	
SELECT * FROM accounts
ORDER BY FIELD(`status`, 'approved', 'open', 'pending', 'closed');

#TEMA

#EX1
CREATE TABLE produse (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nume_produs VARCHAR(100) NOT NULL,
	descriere_produs VARCHAR(255) NOT NULL,
	pret DECIMAL(10, 2) NOT NULL,
	stoc INT DEFAULT 0 NOT NULL,
	locatie VARCHAR(100) NOT NULL,
	discount DECIMAL(5, 2) DEFAULT 0 NOT NULL,
	data_adaugare DATETIME DEFAULT CURRENT_TIMESTAMP
);

#EX2
INSERT INTO produse (nume_produs, descriere_produs, pret, stoc, locatie, discount, data_adaugare) VALUES
('Laptop gaming', 'Laptop performant', 4500.00, 0, 'Depozit 1', 0.00, '2024-11-06 10:00:00'),
('Monitor LED', 'Monitor Full HD', 800.00, 15, 'Depozit 2', 0.00, '2024-11-06 11:00:00'),
('Tastatura mecanica', 'Tastatura iluminata', 250.00, 20, 'Depozit 1', 0.00, '2024-11-06 12:00:00'),
('Mouse wireless', 'Mouse ergonomic', 150.00, 25, 'Depozit 3', 0.00, '2024-11-06 13:00:00'),
('Imprimanta laser', 'Imprimanta multifunctionala', 700.00, 8, 'Depozit 4', 0.00, '2024-11-06 14:00:00'),
('Sistem desktop', 'PC pentru birou', 3000.00, 0, 'Depozit 2', 0.00, '2024-11-06 15:00:00'),
('Boxe stereo', 'Boxe Bluetooth', 400.00, 18, 'Depozit 1', 0.00, '2024-11-06 16:00:00'),
('Router WiFi', 'Router dual-band', 350.00, 22, 'Depozit 3', 0.00, '2024-11-06 17:00:00'),
('SSD 512GB', 'SSD performant', 450.00, 30, 'Depozit 2', 0.00, '2024-11-06 18:00:00'),
('Placa video', 'Placa video gaming', 2200.00, 0, 'Depozit 4', 0.00, '2024-11-06 19:00:00');

#EX3
SELECT * FROM produse;

#EX4
UPDATE produse
SET discount = 10;

#EX5
DELETE FROM produse
WHERE stoc = 0;

#EX6
DELETE FROM produse
WHERE stoc < 20;

#EX7
DELETE FROM produse
WHERE pret < 300;
