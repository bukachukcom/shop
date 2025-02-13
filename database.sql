CREATE TABLE category (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL);
CREATE TABLE product (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, price DECIMAL(12, 2));
ALTER TABLE product ADD COLUMN categoryId INT DEFAULT NULL;
ALTER TABLE product ADD COLUMN description VARCHAR(255) DEFAULT NULL;
ALTER TABLE product ADD COLUMN img VARCHAR(255) DEFAULT NULL;
CREATE TABLE orders (id INT AUTO_INCREMENT PRIMARY KEY, address VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, price DECIMAL(12, 2) NOT NULL, productId INT NOT NULL);
ALTER TABLE orders ADD COLUMN createdAt DATETIME DEFAULT NULL;