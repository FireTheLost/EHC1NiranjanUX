CREATE TABLE forum
(
    forumId int(16) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    forumMessage text NOT NULL,
    forumUser varchar(32) NOT NULL,
    forumTime varchar(16) NOT NULL
);