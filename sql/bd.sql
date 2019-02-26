DROP DATABASE IF EXISTS instatop;

CREATE DATABASE instatop;

DROP USER  IF EXISTS 'insta'@'localhost';

CREATE USER 'insta'@'localhost' IDENTIFIED BY 'edu';

GRANT DELETE, UPDATE, SELECT, INSERT ON instatop . * TO 'insta'@'localhost'; 

USE instatop;

CREATE TABLE users(
	user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_name VARCHAR(20) NOT NULL,
	user_real_name VARCHAR(45),
	user_description VARCHAR(255),
	user_email VARCHAR(40) NOT NULL,
	user_password VARCHAR(32)NOT NULL
);
CREATE TABLE friends(
	friend_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	friend_user_id INT NOT NULL,
	friend_friend_user_id INT NOT NULL,
	FOREIGN KEY (friend_user_id) REFERENCES users (user_id),
	FOREIGN KEY (friend_friend_user_id) REFERENCES users (user_id)
);
CREATE TABLE message(
	message_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	message_source_user_id INT NOT NULL,
	message_receiver_user_id INT NOT NULL,
	FOREIGN KEY (message_source_user_id) REFERENCES users (user_id),
	FOREIGN KEY (message_receiver_user_id) REFERENCES users (user_id)
);
CREATE TABLE fotos(
	foto_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	foto_user_id INT NOT NULL,
	foto_directory VARCHAR (50) NOT NULL,
	FOREIGN KEY (foto_user_id) REFERENCES users(user_id)
);
CREATE TABLE curtidas(
	curtida_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	curtida_foto_id INT NOT NULL,
	curtida_user_id INT NOT NULL,
	FOREIGN KEY (curtida_user_id) REFERENCES users (user_id),
	FOREIGN KEY (curtida_foto_id) REFERENCES fotos (foto_id)
);