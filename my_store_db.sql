CREATE DATABASE IF NOT EXISTS my_store_db;

USE my_store_db;

CREATE TABLE IF NOT EXISTS tb_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    description TEXT
);

INSERT INTO tb_products (product_name, price, stock, description) VALUES 
('เมาส์เกมมิ่ง', 590.00, 15, 'เมาส์มีไฟ RGB'),
('คีย์บอร์ดไร้สาย', 1290.00, 10, 'คีย์บอร์ดบลูทูธเสียงเงียบ');