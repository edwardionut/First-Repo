USE classicmodels;

SELECT orders.orderNumber,
		customers.customerName,
		customers.city,
		customers.country
		
FROM orders
INNER JOIN customers
#ON orders.customerNumber = customers.customerNumber;
USING (customerNumber);

SELECT orders.orderNumber,
		customers.customerName,
		customers.city,
		customers.country
		
FROM orders
LEFT JOIN customers
#ON orders.customerNumber = customers.customerNumber;
USING (customerNumber);

SELECT orders.orderNumber,
		customers.customerName,
		customers.city,
		customers.country
		
FROM orders
RIGHT JOIN customers
#ON orders.customerNumber = customers.customerNumber;
USING (customerNumber);

SELECT orders.orderNumber,
		customers.customerName,
		customers.city,
		customers.country
		
FROM orders
CROSS JOIN customers;

#TEMA CAP 19

#1
SELECT DISTINCT country, city
FROM customers
JOIN payments ON customers.customerNumber = payments.customerNumber;

#2
SELECT DISTINCT offices.city
FROM offices
JOIN employees ON offices.officeCode = employees.officeCode
JOIN customers ON employees.employeeNumber = customers.salesRepEmployeeNumber;

#3
SELECT phone
FROM customers
WHERE salesRepEmployeeNumber IS NULL;

#4
SELECT DISTINCT customerName
FROM customers
JOIN orders ON customers.customerNumber = orders.customerNumber
WHERE orders.status = 'Shipped';

#5
SELECT DISTINCT customers.city
FROM customers
JOIN orders ON customers.customerNumber = orders.customerNumber
WHERE YEAR(orderDate) = 2004;

#6
SELECT DISTINCT customerName
FROM customers
JOIN orders ON customers.customerNumber = orders.customerNumber
WHERE orders.status = 'Cancelled';

#7
SELECT customers.customerName, productlines.productLine
FROM customers
JOIN orders ON customers.customerNumber = orders.customerNumber
JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
JOIN products ON orderdetails.productCode = products.productCode
JOIN productlines ON products.productLine = productlines.productLine
GROUP BY customers.customerName, productlines.productLine;

#8
SELECT SUM(orderdetails.quantityOrdered) AS totalProducts
FROM orderdetails
JOIN products ON orderdetails.productCode = products.productCode
WHERE products.productScale = '1:18';
