DROP DATABASE IF EXISTS instatop;

CREATE DATABASE instatop;

USE instatop;

CREATE TABLE users(
	user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_name VARCHAR(20) NOT NULL,
	user_real_name VARCHAR(45),
	user_description VARCHAR(255)
);
CREATE TABLE amigos(
	amigo_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	amigo_user_id INT NOT NULL,
	amigo_amigo_user_id INT NOT NULL,
	FOREIGN KEY (amigo_user_id) REFERENCES users (user_id),
	FOREIGN KEY (amigo_amigo_user_id) REFERENCES users (user_id)
);
CREATE TABLE mensagens(
	mensagem_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	mensagem_origem_user_id INT NOT NULL,
	mensagem_destino_user_id INT NOT NULL,
	FOREIGN KEY (mensagem_origem_user_id) REFERENCES users (user_id),
	FOREIGN KEY (mensagem_destino_user_id) REFERENCES users (user_id)
);
CREATE TABLE fotos(
	foto_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	foto_user_id INT NOT NULL,
	foto_diretorio VARCHAR (50) NOT NULL,
	FOREIGN KEY (foto_user_id) REFERENCES users(user_id)
);
CREATE TABLE curtidas(
	curtida_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	curtida_foto_id INT NOT NULL,
	curtida_user_id INT NOT NULL,
	FOREIGN KEY (curtida_user_id) REFERENCES users (user_id),
	FOREIGN KEY (curtida_foto_id) REFERENCES fotos (foto_id)
);