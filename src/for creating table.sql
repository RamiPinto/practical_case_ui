CREATE TABLE users (
   id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   nickname text NOT NULL, 
   login text NOT NULL,
   password text NOT NULL,
   photopath text NOT NULL
);

CREATE TABLE comment 
( idComment int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
nickname text NOT NULL, 
date date NOT NULL, 
message text NOT NULL, 
idVideo int(11) NOT NULL 
)

CREATE TABLE playlists ( 
    idPlaylists int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    title text NOT NULL, 
    amVid int(11) NOT NULL, 
    type text NOT NULL, 
    idUser int(11) NOT NULL 
)

CREATE TABLE videos ( 
    idVideos int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    path text NOT NULL, 
    likes int(11) NOT NULL, 
    dislikes int(11) NOT NULL, 
    views int(11) NOT NULL,
    description text NOT NULL
)

CREATE TABLE favLists ( 
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    idUser int(11) NOT NULL, 
    idPlaylist int(11) NOT NULL
)

CREATE TABLE favVid ( 
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    idVideo int(11) NOT NULL, 
    idPlaylist int(11) NOT NULL
)
