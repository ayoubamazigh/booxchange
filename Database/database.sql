DROP DATABASE IF EXISTS BOOXCHANGE;

CREATE DATABASE BOOXCHANGE;

USE BOOXCHANGE;

CREATE TABLE User(
    firstname VARCHAR(25) NOT NULL,
    lastname VARCHAR(25) NOT NULL,
    date DATE NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    gender VARCHAR(2) NOT NULL,
    picture VARCHAR(100) NOT NULL
)ENGINE = INNODB;


CREATE TABLE accounts(
    email VARCHAR(100) NOT NULL,
    password VARCHAR(50) NOT NULL,
    vkey VARCHAR(50) NOT NULL,
    enabled smallint NOT NULL
)ENGINE = INNODB;

CREATE TABLE Book(
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(25) NOT NULL,
    description VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL,
    catigory VARCHAR(20) NOT NULL,
    language VARCHAR(20) NOT NULL,
    picture VARCHAR(50) NOT NULL,
    ville VARCHAR(15) NOT NULL,
    code_user VARCHAR(100) NOT NULL
)ENGINE = INNODB;

insert into accounts VALUES ('account@booxchange.book','password','XXXXXXXXXXXXXXXXXXXXXX',1);
INSERT INTO User values ('Mark', 'Steaven', '11-04-2003','account@booxchange.book','+2126XX8696858','m','null');


















