CREATE TABLE IF NOT EXISTS category(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE 
);
CREATE TABLE IF NOT EXISTS product( --IF NOT EXISTS: NẾU KHÔNG TỒN TẠI
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    price float(5,3) NULL DEFAULT '0',  -- float(5,3): 5 ký tự và 3 dấu phẩy
    sale_price float(5,3) NULL DEFAULT '0',
    content TEXT NULL ,
    category_id INTEGER NOT NULL,
    created_at DATE NULL
);
--LIÊN KẾT KHÓA PHỤ VÀ KHÓA CHÍNH
ALTER TABLE product ADD FOREIGN KEY FK_product_category_id(category_id) REFERENCES category(id);

--XÓA BẢNG
DROP TABLE IF EXISTS product; -- IF EXISTS: NẾU TỒN TẠI
DROP TABLE IF EXISTS category;
DROP TABLE IF EXISTS users;
--XÓA DATABASE
DROP DATABASE ph1808lm_demo;

--THÊM THUỘC TÍNH VÀO SAU 1 THUỘC TÍNH KHÁC TRONG BẢNG
ALTER TABLE product ADD `image` VARCHAR(200) NULL AFTER `name`;

--DEMO THÊM DỮ LIỆU VÀO CÁC CỘT TRONG BẰNG
INSERT INTO `category` (`id`, `name`) VALUES (NULL, 'áo thun');
INSERT INTO category (name) VALUES ('quần đùi');
INSERT INTO category (name) VALUES ('quần dài');
INSERT INTO category (name) VALUES ('áo khoác');
INSERT INTO category (name) VALUES ('áo 3 lỗ');

INSERT INTO product (name,price,sale_price,content,category_id,created_at) VALUES ('produc demo 3',500000,0,'nội dung demo',3,NOW());

--HIỂN THỊ RA CỘT MÌNH MUỐN TÌM Ở BẢNG NÀO RA MÀN HÌNH
SELECT id,name FROM category;

--HIỂN THỊ RA CỘT MÌNH MUỐN TÌM Ở BẰNG NÀO VÀ VALUES CỦA CỘT ĐÓ BẰNG GÌ 
SELECT id,name FROM category WHERE id = 5;

--HIỂN THỊ TỔNG SỐ DÒNG TRONG CỘT
SELECT COUNT(id) AS "ID" FROM category;

--CHỈNH SỬA
UPDATE product SET content = "nội dung demo" where id = 1;

--XÓA
DELETE FROM category WHERE name = "áo 3 lỗ";
