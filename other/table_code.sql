CREATE TABLE forum
(
    forumId int(16) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    forumMessage varchar(256) NOT NULL,
    forumUser varchar(32) NOT NULL DEFAULT 'Anonymous',
    forumTime varchar(16) NOT NULL
);