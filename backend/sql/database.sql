CREATE DATABASE IF NOT EXISTS test_db DEFAULT CHARACTER SET UTF8MB4;
USE test_db;
DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
	usr_id INT AUTO_INCREMENT,
	usr_username VARCHAR(50) NOT NULL,
	usr_email VARCHAR(50) NOT NULL,
	usr_pass VARCHAR(100) NOT NULL,
	usr_firstname VARCHAR(50) NOT NULL,
	usr_lastname VARCHAR(50) NOT NULL,
	usr_createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT PK_users PRIMARY KEY(usr_id, usr_username)
) DEFAULT CHARACTER SET UTF8MB4;
INSERT INTO users(usr_username, usr_email, usr_pass, usr_firstname, usr_lastname) VALUES
	('bbelmar', 'borisbelmarm@gmail.com', 'bbelmar123', 'Boris', 'Belmar');