CREATE OR REPLACE TABLE users (
   id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   nickname text NOT NULL,
   login text NOT NULL,
   password text NOT NULL,
   photopath text NOT NULL
);

CREATE OR REPLACE TABLE comment
( idComment int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nickname text NOT NULL,
date date NOT NULL,
message text NOT NULL,
idVideo int(11) NOT NULL
);

CREATE OR REPLACE TABLE playlists (
    idPlaylist int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title text NOT NULL,
    amVid int(11) NOT NULL,
    type text NOT NULL,
    idUser int(11) NOT NULL
);

CREATE OR REPLACE TABLE videos (
    idVideos int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    path text NOT NULL,
    title text NOT NULL,
    likes int(11) NOT NULL,
    dislikes int(11) NOT NULL,
    views int(11) NOT NULL,
    description text NOT NULL
);
INSERT INTO `videos`(`idVideos`, `path`,`title`, `likes`, `dislikes`, `views`, `description`) VALUES
(NULL,'https://www.youtube.com/embed/qi2m4V21bw4','Cooking Spaghetti','0','0','0','Mr Bean tries to cook spaghetti for Irma but it will not fit in the pan. He tries to boil it in his bath instead. From animated episode Dinner for Two.'),
(NULL,'https://www.youtube.com/embed/tZ-CGpN1wyk','Penguins of Madagascar','0','0','0','Official opening minutes from The Penguins of Madagascar'),
(NULL,'https://www.youtube.com/embed/ahp9vqeLCd4','Behind the Scenes With The Cast','0','0','0','Mr Bean tries to cook spaghetti for Irma but it will not fit in the pan. He tries to boil it in his bath instead. From animated episode Dinner for Two.'),
(NULL,'https://www.youtube.com/embed/twU2WaVPDdY','Helga Has Self-Respect | Hey Arnold! | The Splat','0','0','0','The Splat is your late-night destination for your favorite childhood Nickelodeon cartoons and live-action shows. We don’t question football-shaped heads, but embrace them – along with Reptar bars, a Big Ear of Corn, orange soda, and even slime for Pete (and Pete’s) sake.'),
(NULL,'https://www.youtube.com/embed/1bsFNjmAUF4','Lilo and Stitch Meets The Proud Family','0','0','0','In no particular order, intros, outros, and inbetweentros of shows from the late 80s, 90s, and early 00s. I could by no means find all of the shows I wanted to include.'),
(NULL,'https://www.youtube.com/embed/2pk2QqfygBc','Disneys Proud Family Movie: Dance Off','0','0','0','A scene from the Disneys Proud Family Movie where Penny and her friends dance battle the peanuts.'),
(NULL,'https://www.youtube.com/embed/r31CXkRUUAw','Masha And The Bear','0','0','0','Masha and the Hare are having an epic game of hockey. When the game is at its peak, Masha goes off to find the missing puck and stumbles upon a broom. Now this is much better than a hockey.'),
(NULL,'https://www.youtube.com/embed/YqA_BKFQeL0','Handsome Squidward ~ The Short Version','0','0','0','Squidward becomes handsome after a few door slams from Spongbob square pants.'),
(NULL,'https://www.youtube.com/embed/ZSdrf5wGNzI','SpongeBob SquarePants | Krabby Patty Contest | Nickelodeon UK','0','0','0','It is the Krabby Patty contest, the Visitors vs. the Krusty Krab, whoever can eat the most Krabby Pattys is the winner!'),
(NULL,'https://www.youtube.com/embed/HbSQbzwQYjg','SpongeBob SquarePants | Kenny the Cat | Nickelodeon UK','0','0','0','SpongeBob and Patrick spend all night waiting for the legendary Kenny the Cat to arrive in Bikini Bottom!  When Kenny finally arrives, SpongeBob invites him for a signature Krabby Patty at the Krusty Krab... Only to find out Kennys secret!'),
(NULL,'https://www.youtube.com/embed/cXQYyE3DQGY','SpongeBob SquarePants','0','0','0','Welcome to the official Nickelodeon UK YouTube channel! We share sneak-peeks, behind the scenes gossip and hilarious videos from all of your favourite Nickelodeon shows!'),
(NULL,'https://www.youtube.com/embed/RoFglgMdaeE','Mr Bean: cartoon "Artful Bean"','0','0','0','Mr Bean cartoon/animation  Complete Collection Like me on Facebook Friends!  For free new movies!');

INSERT INTO `videos`(`idVideos`, `path`,`title`, `likes`, `dislikes`, `views`, `description`) VALUES
(NULL,'../img/home_pictures/1.png','Cooking Spaghetti','0','0','0','Mr Bean tries to cook spaghetti for Irma but it will not fit in the pan. He tries to boil it in his bath instead. From animated episode Dinner for Two.'),
(NULL,'../img/home_pictures/2.png','Penguins of Madagascar','0','0','0','Official opening minutes from The Penguins of Madagascar'),
(NULL,'../img/home_pictures/3.png','Behind the Scenes With The Cast','0','0','0','Mr Bean tries to cook spaghetti for Irma but it will not fit in the pan. He tries to boil it in his bath instead. From animated episode Dinner for Two.'),
(NULL,'../img/home_pictures/4.png','Helga Has Self-Respect | Hey Arnold! | The Splat','0','0','0','The Splat is your late-night destination for your favorite childhood Nickelodeon cartoons and live-action shows. We don’t question football-shaped heads, but embrace them – along with Reptar bars, a Big Ear of Corn, orange soda, and even slime for Pete (and Pete’s) sake.'),
(NULL,'../img/home_pictures/5.png','Lilo and Stitch Meets The Proud Family','0','0','0','In no particular order, intros, outros, and inbetweentros of shows from the late 80s, 90s, and early 00s. I could by no means find all of the shows I wanted to include.'),
(NULL,'../img/home_pictures/6.png','Disneys Proud Family Movie: Dance Off','0','0','0','A scene from the Disneys Proud Family Movie where Penny and her friends dance battle the peanuts.'),
(NULL,'../img/home_pictures/7.png','Masha And The Bear','0','0','0','Masha and the Hare are having an epic game of hockey. When the game is at its peak, Masha goes off to find the missing puck and stumbles upon a broom. Now this is much better than a hockey.'),
(NULL,'../img/home_pictures/8.png','Handsome Squidward ~ The Short Version','0','0','0','Squidward becomes handsome after a few door slams from Spongbob square pants.'),
(NULL,'../img/home_pictures/9.png','SpongeBob SquarePants | Krabby Patty Contest | Nickelodeon UK','0','0','0','It is the Krabby Patty contest, the Visitors vs. the Krusty Krab, whoever can eat the most Krabby Pattys is the winner!'),
(NULL,'../img/home_pictures/10.png','SpongeBob SquarePants | Kenny the Cat | Nickelodeon UK','0','0','0','SpongeBob and Patrick spend all night waiting for the legendary Kenny the Cat to arrive in Bikini Bottom!  When Kenny finally arrives, SpongeBob invites him for a signature Krabby Patty at the Krusty Krab... Only to find out Kennys secret!'),
(NULL,'../img/home_pictures/11.png','SpongeBob SquarePants','0','0','0','Welcome to the official Nickelodeon UK YouTube channel! We share sneak-peeks, behind the scenes gossip and hilarious videos from all of your favourite Nickelodeon shows!'),
(NULL,'../img/home_pictures/12.png','Mr Bean: cartoon "Artful Bean"','0','0','0','Mr Bean cartoon/animation  Complete Collection Like me on Facebook Friends!  For free new movies!');

CREATE OR REPLACE TABLE favLists (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idUser int(11) NOT NULL,
    idPlaylist int(11) NOT NULL
);

CREATE OR REPLACE TABLE favVid (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idVideo int(11) NOT NULL,
    idPlaylist int(11) NOT NULL
);
