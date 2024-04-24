CREATE DATABASE IF NOT EXISTS college_admission;

USE college_admission;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    admission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
