-- create the database --
DROP TABLE IF EXISTS customer_order;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS purchase;
DROP TABLE IF EXISTS job;

CREATE TABLE admin
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL
, password      VARCHAR(150)    NOT NULL
, email         VARCHAR(200)    NOT NULL
);

CREATE TABLE customer
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL
, password      VARCHAR(150)    NOT NULL
, email         VARCHAR(200)    NOT NULL
, phone         VARCHAR(150)    NOT NULL
);

CREATE TABLE purchase
( id            SERIAL          NOT NULL PRIMARY KEY
, number_order  INT
, estimate      FLOAT
);

CREATE TABLE job
( id            SERIAL          NOT NULL PRIMARY KEY
, name          VARCHAR(200)    NOT NULL
, cost          INT             NOT NULL
, time_estimate INT             NOT NULL
);

CREATE TABLE customer_order
( id            SERIAL          NOT NULL PRIMARY KEY
, customer_id   INT             NOT NULL REFERENCES customer(id)
, order_id      INT             NOT NULL REFERENCES purchase(id)
, job_id        INT             NOT NULL REFERENCES job(id)
);

-- populate the intial database --
INSERT INTO job(name, cost, time_estimate) VALUES("Queen Bed", 700, 15);
