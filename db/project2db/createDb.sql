-- create the database --
DROP TABLE IF EXISTS customer_order;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS purchase;
DROP TABLE IF EXISTS job;

-- the admin user --
CREATE TABLE admin
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL
, password      VARCHAR(150)    NOT NULL
, email         VARCHAR(200)    NOT NULL
);

-- customer account --
CREATE TABLE customer
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL
, password      VARCHAR(150)    NOT NULL
, email         VARCHAR(200)    NOT NULL
, phone         VARCHAR(150)    NOT NULL
);

-- tracks a order --
CREATE TABLE purchase
( id            SERIAL          NOT NULL PRIMARY KEY
, number_order  INT
, estimate      FLOAT
);

-- different products availible
CREATE TABLE job
( id            SERIAL          NOT NULL PRIMARY KEY
, name          VARCHAR(200)    NOT NULL
, cost          INT             NOT NULL
, time_estimate INT             NOT NULL
);

-- links customers and their orders --
CREATE TABLE customer_order
( id            SERIAL          NOT NULL PRIMARY KEY
, customer_id   INT             NOT NULL REFERENCES customer(id)
, order_id      INT             NOT NULL REFERENCES purchase(id)
, job_id        INT             NOT NULL REFERENCES job(id)
);

-- populate the intial database --

-- populate jobs --
INSERT INTO job(name, cost, time_estimate) VALUES("Single Bed", 350, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Twin Bed", 400, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Bunk Bed", 800, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Queen Bed", 500, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("King Bed", 600, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Outdoor Railing", 24, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Indoor Railing", 28, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Outdoor Stair Railing", 34, 5);
INSERT INTO job(name, cost, time_estimate) VALUES("Indoor Stair Railing", 34, 5);

-- populate admin --