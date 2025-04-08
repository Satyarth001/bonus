CREATE DATABASE IF NOT EXISTS algoma_university;
USE algoma_university;
CREATE TABLE IF NOT EXISTS users ( id INT AUTO_INCREMENT PRIMARY KEY, first_name VARCHAR(50), last_name VARCHAR(50), username VARCHAR(50) UNIQUE, email VARCHAR(100), password VARCHAR(255), address VARCHAR(255), city VARCHAR(50), province VARCHAR(50), postal_code VARCHAR(20) );
