-- Create the database
CREATE DATABASE IF NOT EXISTS simple_website;

-- Use the database
USE simple_website;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);


