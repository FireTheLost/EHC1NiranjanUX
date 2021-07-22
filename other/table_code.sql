CREATE TABLE forum
(
    forumId int(16) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    forumMessage varchar(256) NOT NULL,
    forumUser varchar(32) NOT NULL DEFUALT 'Anonymous',
    forumTime varchar(16) NOT NULL
);