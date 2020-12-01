CREATE DATABASE IF NOT EXISTS TPExplorer;
use TPExplorer;
CREATE TABLE files (
                      id INT UNSIGNED NOT NULL AUTO_INCREMENT,
                      name VARCHAR(255) NOT NULL,
                      slug VARCHAR(255) NOT NULL,
                      url VARCHAR(255) NOT NULL,
                      created_at DATETIME NOT NULL,
                      PRIMARY KEY (id)
);
CREATE TABLE user (
                      id INT UNSIGNED NOT NULL AUTO_INCREMENT,
                      username VARCHAR(255) NOT NULL,
                      password VARCHAR(255) NOT NULL,
                      PRIMARY KEY (id)
)