/*
* DML - Data Modification Language
* DML is used for adding (inserting), deleting, and modifying (updating) data in a database
*/

INSERT INTO client (first_name, last_name, address, city, zip) 
VALUES 
('jon', 'shallow', '1 main st', 'concord', '12345'),
('John', 'doe', '5 sprint st', 'manchester', '09876'),
('Jan', 'Smith', '17 apple rd', 'nashua', '55443');

INSERT INTO pet (client_id, name, species) 
VALUES 
(1, 'Jake', 'Dog'),
(2, 'Burpy', 'Fish'),
(3, 'Fluffy', 'Cat');