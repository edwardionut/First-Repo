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
CROSS JOIN customers