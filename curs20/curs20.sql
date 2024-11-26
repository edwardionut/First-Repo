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

#TEMA CAP 20

#1
SELECT city, COUNT(customerNumber) AS numberOfCustomers
FROM customers
GROUP BY city;

#2
SELECT 
    SUM(customerName LIKE 'A%') AS customersStartingWithA,
    SUM(customerName LIKE 'S%') AS customersStartingWithS,
    SUM(customerName LIKE 'M%') AS customersStartingWithM,
    SUM(customerName LIKE 'T%') AS customersStartingWithT
FROM customers;

#3
SELECT offices.country, COUNT(DISTINCT customers.customerNumber) AS numberOfCustomers
FROM offices
JOIN employees ON offices.officeCode = employees.officeCode
JOIN customers ON employees.employeeNumber = customers.salesRepEmployeeNumber
WHERE offices.country IN ('USA', 'France', 'Japan', 'Australia', 'UK')
GROUP BY offices.country;

#4
SELECT orders.orderNumber, SUM(orderdetails.quantityOrdered * orderdetails.priceEach) AS totalOrderValue
FROM orders
JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
GROUP BY orders.orderNumber;

#5
SELECT c.customerNumber, c.customerName
FROM customers c
JOIN payments p ON c.customerNumber = p.customerNumber
GROUP BY c.customerNumber, c.customerName
HAVING COUNT(p.checkNumber) > 3;

#6
SELECT manager.employeeNumber AS managerID, 
       CONCAT(manager.firstName, ' ', manager.lastName) AS managerName,
       SUM(orderdetails.quantityOrdered * orderdetails.priceEach) AS totalSales
FROM employees AS manager
JOIN employees AS subordinate ON manager.employeeNumber = subordinate.reportsTo
JOIN customers ON subordinate.employeeNumber = customers.salesRepEmployeeNumber
JOIN orders ON customers.customerNumber = orders.customerNumber
JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
WHERE manager.jobTitle LIKE '%Manager%'
GROUP BY manager.employeeNumber, managerName;
