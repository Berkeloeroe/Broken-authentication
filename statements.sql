Create database if not exists brokenauth;

Use brokenauth;

CREATE table if not EXISTS user (
    ID int not null AUTO_INCREMENT ,
    Email varchar(255) not null,
    Password varchar(255) not null,
    primary key (id)
);