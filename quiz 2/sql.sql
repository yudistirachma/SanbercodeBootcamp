CREATE TABLE customers (
    `id` int AUTO_INCREMENT,
    `name` varchar(255),
    `email` varchar(255),
    `password` varchar(255),
    PRIMARY KEY (`id`)
);

CREATE TABLE orders (
    `id` int AUTO_INCREMENT,
    `amount` int,
    `customer_id` int,
    PRIMARY KEY (`id`),
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);


INSERT INTO `customers` (`id`, `name`, `email`, `password`) 
VALUES 
(NULL, 'John Doe', 'john@doe.com', 'john123'), 
(NULL, 'Jane Doe', 'jane@doe.com', 'jenita123');

INSERT INTO `orders` (`id`, `amount`, `customer_id`) 
VALUES 
(NULL, '500', '1'), 
(NULL, '200', '2'), 
(NULL, '750', '2'), 
(NULL, '250', '1'), 
(NULL, '400', '2');

SELECT DISTINCT customers.name as customer_name, SUM(orders.amount) as total_amount
FROM customers
INNER JOIN orders
ON customers.id = orders.customer_id
GROUP BY customers.name