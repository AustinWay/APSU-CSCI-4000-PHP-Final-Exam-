/*
Name: Austin Way
Course: CSCI 4000 
Final Exam
Purpose: This script creates the database austin_way_final_db  
*/

-- create a MySQL database austin_way_final_db
drop database if exists austin_way_final_db;
create database austin_way_final_db;
use austin_way_final_db;

-- create a coordinate
create table coordinate(
number int(11) auto_increment,
x decimal(10,2),
y decimal(10,2),
primary key(number)
);

drop user if exists austinexam;

-- creating a database username
create user austinexam;
 
 -- grant privileges
grant select, insert, update, delete
on austin_way_final_db.*
to austinexam;
-- identified by 'austindonut';

alter user austinexam
identified by 'austindonut'; 

-- flush-privileges operation to tell the server to reload the grant tables
flush privileges;

