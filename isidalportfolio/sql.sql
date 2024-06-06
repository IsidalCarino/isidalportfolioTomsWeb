CREATE TABLE comments (
	cid int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    date datetime not null,
    message TEXT not null,
);


CREATE TABLE user (
	id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    uid varchar(128) not null,
    pwd varchar(128) not null,
    email varchar(128) not null,
    CHECK (email REGEXP '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$')
);


INSERT INTO user (uid, pwd, email) VALUES ('admin', '1234567890', 'testaccount@yahoo.com');
