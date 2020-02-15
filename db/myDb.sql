DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS person;
DROP TABLE IF EXISTS resort;

CREATE TABLE person
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL UNIQUE
, password      VARCHAR(100)    NOT NULL
, email         VARCHAR(200)    NOT NULL
);

CREATE TABLE resort
( id            SERIAL          NOT NULL PRIMARY KEY
, name          VARCHAR(100)    NOT NULL
, city          VARCHAR(100)    NOT NULL
, state         VARCHAR(100)    NOT NULL
, cost          INT             
, rating        REAL            NOT NULL
, runs          INT
);

CREATE TABLE review
( id            SERIAL          NOT NULL PRIMARY KEY
, place         INT             NOT NULL REFERENCES resort(id)
, reviewer        INT           NOT NULL REFERENCES person(id)
, date          DATE            NOT NULL DEFAULT CURRENT_DATE
, rating        REAL            NOT NULL
);

-- insert default values --
INSERT INTO resort(name, city, state, cost, rating, runs) VALUES('Kelly Canyon', 'Ririe', 'Idaho', 49, 3.8, 27);
INSERT INTO person(username, password, email) VALUES('desert4','blah', 'email@email.com');
INSERT INTO review(place, reviewer, rating) VALUES(1, 1, 4.3);

-- populate resorts --
INSERT INTO resort(name, city, state, rating, runs) VALUES('Pebble Creek', 'Inkom', 'Idaho', 3.8, 54);
INSERT INTO resort(name, city, state, rating, runs) VALUES('Grand Targhee', 'Alta', 'Wyoming', 4.2, 97);
INSERT INTO resort(name, city, state, rating, runs) VALUES('Snow King Moutain', 'Jackson', 'Wyoming', 4.3, 33);
INSERT INTO resort(name, city, state, rating, runs) VALUES('Park City', 'Park City', 'Utah', 4.8, 341);
INSERT INTO resort(name, city, state, rating, runs) VALUES('Big Sky', 'Big Sky', 'Montana', 4.8, 249);
INSERT INTO resort(name, city, state, rating, runs) VALUES('Cherry Peak', 'Richmond', 'Utah', 3.8, 31);

-- populate users --
INSERT INTO person(username, password, email) VALUES('guest', 'cs313', 'email@email.com');
INSERT INTO person(username, password, email) VALUES('Thor', 'Odinson', 'email@email.com');
INSERT INTO person(username, password, email) VALUES('IronMan', 'Millionare', 'email@email.com');

-- populate reviews --
INSERT INTO review(place, reviewer, rating) VALUES(1, 1, 4.3);
INSERT INTO review(place, reviewer, rating) VALUES(1, 1, 4.2);
INSERT INTO review(place, reviewer, rating) VALUES(3, 1, 4.8);
INSERT INTO review(place, reviewer, rating) VALUES(2, 1, 3.2);
INSERT INTO review(place, reviewer, rating) VALUES(4, 1, 4.3);