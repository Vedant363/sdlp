CREATE DATABASE grocery_store;

USE grocery_store;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT NOT NULL
);

INSERT INTO products (name, price, quantity) VALUES
('Apple', 1.99, 50),
('Banana', 0.59, 100),
('Orange', 0.79, 75),
('Grapes', 2.49, 30),
('Mango', 1.89, 40),
('Pineapple', 2.99, 25),
('Watermelon', 4.99, 20),
('Strawberries', 3.49, 45);
