CREATE TABLE user
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL UNIQUE
, password      VARCHAR(100)    NOT NULL
);

CREATE TABLE resort
( id            SERIAL          NOT NULL PRIMARY KEY
, name          VARCHAR(100)    NOT NULL
, city          VARCHAR(100)    NOT NULL
, state         VARCHAR(100)    NOT NULL
, cost          INT             
, rating        REAL            NOT NULL REFERENCES review(rating)
);

CREATE TABLE review
( id            SERIAL          NOT NULL PRIMARY KEY
, place         VARCHAR(100)    NOT NULL REFERENCES resort(id)
, reviewer      VARCHAR(100)    NOT NULL REFERENCES user(username)
, date          DATE            NOT NULL
, rating        REAL            NOT NULL
);