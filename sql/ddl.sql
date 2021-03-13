/*
* DDL - Data Definition Language
* DDL is the SQL commands for creating and modifying database objects such as tables, indices, and users.
*/

DROP DATABASE IF EXISTS animocity;
CREATE DATABASE animocity;
USE animocity;

CREATE TABLE client (
    `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `zip` CHAR(5) NOT NULL,
    `notes` VARCHAR(255)
); 

CREATE TABLE pet(
    `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
    `client_id` INT(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `species` VARCHAR(255) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES client(id)
);