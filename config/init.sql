create database sns_php;

grant all on sns_php. * to dbuser@localhost identified by 'm54uHsif';

use sns_php

create table users (
    id int not null auto_increment primary key,
    email varchar(255) unique,
    password varchar(255),
    created datetime,
    modified datetime
);

create table todos (
    id int not null auto_increment primary key,
    email varchar(255) unique,
    state tinyint(1) default 0, /* 0: not finished, 1:finished */
    title text
);

insert into todos (state, title) values
(0, 'todo 0'),
(0, 'todo 1'),
(1, 'todo 2');


select * from inner join sns_php on email = email;


desc users;

