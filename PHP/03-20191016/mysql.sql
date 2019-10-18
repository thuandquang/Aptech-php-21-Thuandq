CREATE DATABASE APTECH;
DROP DATABASE APTECH;
-- tao table users
CREATE TABLE APTECH.users(
    id int,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) unique,
    created_at datetime,
    modified_at datetime,
    deleted_at datetime
);

-- xoa table users
DROP TABLE APTECH.users;

-- chinh sua table 
	-- them cot ngay sinh
ALTER TABLE APTECH.users 
	ADD dob date; 
    -- xoa cot ngay sinh
ALTER TABLE APTECH.users 
	DROP COLUMN DOB; 
    
-- nhap du lieu cho table
INSERT INTO APTECH.users
    (id,last_name, first_name, email, created_at)
VALUES
    (1, 'Nam', 'Nguyen', 'namnh.website@gmail.com', NOW()),
    (2, 'John', 'Cenna', 'cenna.john@hotmail.com', NOW()),
    (3, 'Henry', 'Tran', 'tranhe@resolutioninc.com', NOW()),
    (4, 'Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', NOW()),
    (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com', NOW());
    
-- hien thi tat ca thong tin trong users 
SELECT * FROM APTECH.users;
-- hien thi ten
SELECT DISTINCT last_name
FROM APTECH.users;
-- hien thi top 3 dau tien
SELECT * FROM APTECH.users
	LIMIT 3; 
-- hien thi nguoi ten Nam
SELECT * FROM APTECH.users
	WHERE last_name = 'Nam';
 
-- tim ho Tran doi ten thanh Dan
UPDATE APTECH.users 
	SET last_name = 'Dan'
	WHERE first_name = 'Tran';
-- xoa nguoi co id la 5
DELETE FROM APTECH.users
WHERE id = 5;

-- dat id la khoa chinh(Primary key) va set cho tu dong tang dan
ALTER TABLE APTECH.users
	ADD PRIMARY KEY(id);
ALTER TABLE APTECH.users
	MODIFY COLUMN id int NOT NULL AUTO_INCREMENT ;
    
INSERT INTO APTECH.users
    (last_name, first_name, email, created_at)
VALUES
    ('Stark', 'Tony', 'ironman_stack@gmail.com', NOW());
