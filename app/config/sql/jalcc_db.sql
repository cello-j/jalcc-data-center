--
-- Create Database
--
CREATE DATABASE IF NOT EXISTS jalcc_db;
GRANT SELECT, INSERT, UPDATE, DELETE ON jalcc_db.* TO jalcc_root@localhost IDENTIFIED BY 'jalcc_root';
FLUSH PRIVILEGES;

--
-- Create tables
--

USE jalcc_db;

CREATE TABLE IF NOT EXISTS user (
id     	     INT UNSIGNED NOT NULL AUTO_INCREMENT,
username     VARCHAR(32) NOT NULL,
password     VARCHAR(32) NOT NULL,
member_flag  INT(1) UNSIGNED DEFAULT 1, -- 1 (member), 2 (officer), 3(admin), 0 (non-member)
gender	     VARCHAR(1) NOT NULL, -- M (male), F (Female)
sy	     INT(1), -- 1 (First Year), 2(Second Year), 3(Third Year)
course	     VARCHAR(32),

created	     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
)ENGINE=InnoDB;
