CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    complaint TEXT NOT NULL,
    resolved BOOLEAN DEFAULT 0
);
