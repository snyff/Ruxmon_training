


create database photoblog;
use photoblog;
GRANT ALL PRIVILEGES ON photoblog.* TO ruxcon@'localhost' IDENTIFIED BY 'training4lulz';
create table users (id MEDIUMINT NOT NULL AUTO_INCREMENT, login VARCHAR(50), password VARCHAR(50), PRIMARY KEY (id));
create table categories (id MEDIUMINT NOT NULL AUTO_INCREMENT, title VARCHAR(50), PRIMARY KEY (id));
create table pictures (id MEDIUMINT NOT NULL AUTO_INCREMENT, title VARCHAR(50), img VARCHAR(50), cat MEDIUMINT, PRIMARY KEY (id));


INSERT INTO `users` (login,password) VALUES ('admin','8efe310f9ab3efeae8d410a8e0166eb2');
INSERT INTO `categories` (title) VALUES ('test'), ('ruxcon'), ('2010'); 


INSERT INTO `pictures` (title, img, cat) VALUES ('Hacker','hacker.png',2);
INSERT INTO `pictures` (title, img, cat) VALUES ('Ruby','ruby.jpg',1);
INSERT INTO `pictures` (title, img, cat) VALUES ('Cthulhu','cthulhu.png',1);

