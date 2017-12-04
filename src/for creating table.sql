CREATE TABLE users (
   id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   nickname text NOT NULL, 
   login text NOT NULL,
   password text NOT NULL,
   photopath text NOT NULL
);
