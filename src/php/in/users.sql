

CREATE TABLE IF NOT EXISTS `users` 
(
`id` int(11) NOT NULL,
  
 `nickname` text COLLATE utf8_polish_ci NOT NULL, 
 `login` text COLLATE utf8_polish_ci NOT NULL,

 `password` text COLLATE utf8_polish_ci NOT NULL,
 `photopath` text COLLATE utf8_polish_ci NOT NULL
) 

ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;





INSERT INTO `users` (`id`, `nickname`, `login`, `password`, `photopath`) 
VALUES

       (1, 'marenakms', 'marenakms@gmail.com', 'hello', 'http:'),

       (2, 'kotok', 'kotok@gmail.com', 'hello', 'http:');


ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), 
                    ADD UNIQUE KEY `id` (`id`),
                    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;


