CREATE DATABASE IF NOT EXISTS iat;

-- CREATE USER 'iatusr'@'localhost' IDENTIFIED BY 'iat0822';
-- GRANT ALL PRIVILEGES ON iat.* TO 'iatusr'@'localhost';

USE iat;


CREATE TABLE IF NOT EXISTS iatTest(
    id BIGINT NOT NULL AUTO_INCREMENT,
    subject_id INT NOT NULL,
    block_id INT NOT NULL,
    trial INT NOT NULL,
    word VARCHAR(20) NOT NULL,
    error_num INT NOT NULL,
    reaction_time INT NOT NULL,
    created_at TIMESTAMP(6) NOT NULL DEFAULT current_timestamp(6), 
    PRIMARY KEY(id)
);

CREATE TABLE IF NOT EXISTS question(
    id BIGINT NOT NULL AUTO_INCREMENT,
    subject_id INT NOT NULL, 
    question_id VARCHAR(20) NOT NULL, 
    answer VARCHAR(500), 
    PRIMARY KEY(id)
);
