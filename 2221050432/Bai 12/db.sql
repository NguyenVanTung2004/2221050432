

-- 1. TAO CO SO DU LIEU


CREATE DATABASE IF NOT EXISTS netflix
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE netflix;


-- 2. BANG NGUOI DUNG


CREATE TABLE nguoi_dung (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR(30) NOT NULL,
    mat_khau VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    ho_ten VARCHAR(50) NOT NULL,
    ngay_sinh DATE NOT NULL,
    so_dien_thoai VARCHAR(10) NOT NULL,
    gioi_tinh BOOLEAN NOT NULL
);


-- 3. BANG THE LOAI


CREATE TABLE the_loai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai VARCHAR(255) NOT NULL
);


-- 4. BANG DIEN VIEN


CREATE TABLE dien_vien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR(100) NOT NULL,
    ngay_sinh DATE
);


-- 5. BANG DAO DIEN


CREATE TABLE dao_dien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR(100) NOT NULL,
    ngay_sinh DATE
);


-- 6. BANG PHIM


CREATE TABLE phim (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ten_phim VARCHAR(255) NOT NULL,
    quoc_gia VARCHAR(100),
    dao_dien_id INT,
    nam YEAR,
    do_tuoi INT,
    mo_ta VARCHAR(255),

    FOREIGN KEY (dao_dien_id)
    REFERENCES dao_dien(id)
);


-- 7. BANG PHIM_THE_LOAI


CREATE TABLE phim_the_loai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    the_loai_id INT NOT NULL,

    FOREIGN KEY (phim_id)
    REFERENCES phim(id),

    FOREIGN KEY (the_loai_id)
    REFERENCES the_loai(id),

    UNIQUE (phim_id, the_loai_id)
);


-- 8. BANG PHIM_DIEN_VIEN


CREATE TABLE phim_dien_vien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phim_id INT NOT NULL,
    dien_vien_id INT NOT NULL,

    FOREIGN KEY (phim_id)
    REFERENCES phim(id),

    FOREIGN KEY (dien_vien_id)
    REFERENCES dien_vien(id),

    UNIQUE (phim_id, dien_vien_id)
);
