CREATE DATABASE feedback;
USE feedback;

CREATE TABLE feedback_table(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    feedback TEXT NOT NULL,
    PRIMARY KEY (id)
);
