CREATE TABLE public.user
( id            SERIAL          NOT NULL PRIMARY KEY
, username      VARCHAR(100)    NOT NULL UNIQUE
, password      VARCHAR(100)    NOT NULL
);

CREATE TABLE public.resort
( id            SERIAL          NOT NULL PRIMARY KEY
, name          VARCHAR(100)    NOT NULL
, city          VARCHAR(100)    NOT NULL
, state         VARCHAR(100)    NOT NULL
, cost          INT             
, rating        REAL            NOT NULL
);

CREATE TABLE public.review
( id            SERIAL          NOT NULL PRIMARY KEY
, place         INT             NOT NULL REFERENCES resort(id)
, person        VARCHAR(100)    NOT NULL REFERENCES public.user(username)
, date          DATE            NOT NULL
, rating        REAL            NOT NULL
);

