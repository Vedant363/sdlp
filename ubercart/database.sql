CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image VARCHAR(255)
);

INSERT INTO products (name, price, description, image) VALUES
('Smartphone', 599.99, 'A powerful smartphone with high-resolution display.', 'smartphone.jpg'),
('Laptop', 999.99, 'A high-performance laptop for work and entertainment.', 'laptop.jpg'),
('Headphones', 149.99, 'Wireless headphones with noise-canceling technology.', 'headphones.jpg'),
('Tablet', 399.99, 'A lightweight and portable tablet for browsing and entertainment.', 'tablet.jpg'),
('Smartwatch', 199.99, 'A stylish smartwatch with fitness tracking and notifications.', 'smartwatch.jpg');
