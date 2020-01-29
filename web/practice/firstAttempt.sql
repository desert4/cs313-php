CREATE TABLE public.user
(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    display_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.resort
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(250) NOT NULL
);
