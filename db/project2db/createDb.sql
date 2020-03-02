DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS order;
DROP TABLE IF EXISTS job;
DROP TABLE IF EXISTS customer_order;

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

CREATE TABLE order
( id            SERIAL          NOT NULL PRIMARY KEY
, order         INT
, estimate      FLOAT
);

CREATE TABLE job
( id            SERIAL          NOT NULL PRIMARY KEY
, name          VARCHAR(200)    NOT NULL
, cost          INT             NOT NULL
);

CREATE TABLE customer_order
( id            SERIAL          NOT NULL PRIMARY KEY
, customer_id   INT             NOT NULL REFERENCES customer(id)
, order_id      INT             NOT NULL REFERENCES order(id)
, job_id        INT             NOT NULL REFERENCES job(id)
);
