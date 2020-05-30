
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = 'WS'
)
CREATE DATABASE WS
Use WS;
ALTER DATABASE WS CHARACTER SET utf8 COLLATE utf8_unicode_ci;
CREATE TABLE users
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    name VARCHAR(500) ,
    email VARCHAR(500),
    password VARCHAR(500),
    moblie VARCHAR(500)
    -- specify more columns here
);


CREATE TABLE posts
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    user_id INT,
    title VARCHAR(500),
    author VARCHAR(500),
    content VARCHAR,
    tag VARCHAR(500),
    image VARCHAR(500),
    -- specify more columns here
    FOREIGN KEY (user_id) REFERENCES users(id)  on delete cascade on update cascade
);

CREATE TABLE comments
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    name VARCHAR(500),
    email VARCHAR(500),
    content VARCHAR(500)
);


CREATE TABLE post_comment
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    post_id INT,
    comment_id INT,
    FOREIGN KEY (post_id) REFERENCES posts(id)  on delete cascade on update cascade,
    FOREIGN KEY (comment_id) REFERENCES comments(id)  on delete cascade on update cascade
);

CREATE TABLE menus
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    name VARCHAR(500),
    price double,
    shortDesc VARCHAR(10000),
    image VARCHAR(500),
    category VARCHAR(500)
);

CREATE TABLE feedbacks
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    name VARCHAR(500),
    email VARCHAR(500),
    content VARCHAR(10000)
);

CREATE TABLE reservations
(
    id INT NOT NULL PRIMARY KEY  auto_increment, -- primary key column
    date VARCHAR(500),
    time VARCHAR(500),
    address VARCHAR(500),
    phone VARCHAR(500),
    cus_name VARCHAR(500),
    no_of_guests int,
    type_combo VARCHAR(500),
    status VARCHAR(500),
    totalPrice double
);



