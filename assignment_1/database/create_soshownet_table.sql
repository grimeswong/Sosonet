
-- drop database if exists socialnetwork;
-- create database socialnetwork;
-- use socialnetwork;

-- /* create tables */



drop table if exists post;
create table post (    
    post_id integer not null primary key autoincrement,   
    title varchar(50) not null,    
    message varchar(150) not null,
    name varchar(50) not null
); 


drop table if exists comment;
create table comment (
    comment_id integer not null primary key autoincrement,
    com_post_id integer not null,
    message varchar(150) not null,
    name varchar(50) not null,
    
    foreign key (com_post_id) references comments(com_post_id)
);



-- /* create data */
insert into post values (null, "My own words",  "Never say goodbye", "John Smith");
insert into post values (null, "You're not alone", "Just beat it", "Michael");
insert into post values (null, "My Street Fighter favourite player", "Ryu", "Ken");
insert into post values (null, "Flying in the Sky", "I believe I can fly", "Peter Pan");
insert into post values (null, "Darker night",  "I'm lonely at night", "Batman");


insert into comment values (null, 05, "Hehe, you're not alone", "Joker");
insert into comment values (null, 05, "We have party every night", "Robin");
insert into comment values (null, 04, "I believe I can touch the sky", "Superman");
insert into comment values (null, 04, "Why did we make aeroplane for?", "The Wright brothers");

