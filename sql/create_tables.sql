CREATE TABLE Player(
  id SERIAL PRIMARY KEY,
  name varchar(50) NOT NULL,
  password varchar(50) NOT NULL
);

CREATE TABLE Game(
  id SERIAL PRIMARY KEY,
  user_id INTEGER REFERENCES Player(id),
  name varchar(50) NOT NULL,
  played boolean,
  description varchar(400),
  published DATE,
  publisher varchar(50),
  added DATE
);