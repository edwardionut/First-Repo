USE classicmodels;

SELECT MIN(orderDate) AS min_date
FROM orders;

SELECT MAX(orderDate) AS max_date
FROM orders;

SELECT COUNT(DISTINCT productCode) AS vanzari
FROM orderdetails;

SELECT AVG(priceEach) AS medie
FROM orderdetails;

SELECT round(AVG(priceEach),2) AS medie
FROM orderdetails;

SELECT SUM(priceEach * quantityOrdered) AS total
FROM orderdetails;

SELECT customerName,
	CONCAT(addressLine1, " ", city, " ", country) AS address
FROM customers;

SELECT customerName,
	CONCAT_WS(" ", addressLine1, city, country) AS address
FROM customers;

SELECT c.customerNumber, c.customerName AS nume_client,
	COUNT(o.customerNumber) AS comenzi
FROM orders AS o
JOIN customers AS c
ON o.customerNumber = c.customerNumber
GROUP BY o.customerNumber;

SELECT c.customerNumber, c.customerName AS nume_client,
	COUNT(o.customerNumber) AS comenzi
FROM orders AS o
JOIN customers AS c
ON o.customerNumber = c.customerNumber
GROUP BY o.customerNumber
HAVING comenzi > 3 AND comenzi < 17 #Dupa 'GROUP BY' folosim doar 'HAVING', nu putem folosi 'WHERE'
ORDER BY comenzi DESC;

SELECT c.customerNumber, c.customerName AS nume_client,
	COUNT(o.customerNumber) AS comenzi
FROM orders AS o
JOIN customers AS c
ON o.customerNumber = c.customerNumber
GROUP BY o.customerNumber
HAVING comenzi > 3 AND comenzi < 17
ORDER BY comenzi DESC
LIMIT 20,10;