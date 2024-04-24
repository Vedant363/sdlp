CREATE DATABASE bookstore;
USE bookstore;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);
CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);
INSERT INTO users (username, email) VALUES ('John Doe', 'john@example.com');
INSERT INTO users (username, email) VALUES ('Jane Smith', 'jane@example.com');

INSERT INTO books (title, author, price) VALUES ('The Great Gatsby', 'F. Scott Fitzgerald', 10.99);
INSERT INTO books (title, author, price) VALUES ('To Kill a Mockingbird', 'Harper Lee', 12.99);
