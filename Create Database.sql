create database timeclock;
create table user( id int not null auto_increment, name varchar (50), date_created datetime, primary key (id));

INSERT INTO user (name, date_created) VALUES ('Esther Sasson', now());
INSERT INTO user (name, date_created) VALUES ('Danny Schoemann', now());
INSERT INTO user (name, date_created) VALUES ('Chaya Taub', now());
INSERT INTO user (name, date_created) VALUES ('Mimi Lowenbraun', now());
