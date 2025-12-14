CREATE DATABASE assignmentPersistence;

USE assignmentPersistence;

CREATE TABLE Person (

	id INT UNIQUE NOT NULL AUTO_INCREMENT,
    birth_city VARCHAR(70),
    birth_date DATETIME,
    favorite_color VARCHAR(70),
    favorite_food VARCHAR(70),
    height decimal(3, 2),
    intimacy float NOT NULL,
    life_dream VARCHAR(70),
    quality VARCHAR(70),
    whole_name VARCHAR(70) NOT NULL,
    
    PRIMARY KEY (id)

);



