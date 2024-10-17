CREATE DATABASE IF NOT EXISTS bookingcare;

USE bookingcare;

-- Bảng TAIKHOAN
CREATE TABLE TAIKHOAN (
    MaTK INT AUTO_INCREMENT PRIMARY KEY,
    TenDN VARCHAR(50),
    MatKhau VARCHAR(50),
    LoaiTK VARCHAR(20),
    Email VARCHAR(30),
    SDT VARCHAR(10)
);

-- Bảng BENHNHAN
CREATE TABLE BENHNHAN (
    MaBN INT AUTO_INCREMENT PRIMARY KEY,
    HoTen VARCHAR(100),
    NgaySinh DATE,
    GioiTinh VARCHAR(5)
);

-- Bảng BENHAN
CREATE TABLE BENHAN (
    MaBA INT AUTO_INCREMENT PRIMARY KEY,
    MaBN INT,
    ThongTinBA VARCHAR(100),
    FOREIGN KEY (MaBN) REFERENCES BENHNHAN(MaBN)
);

-- Bảng BACSI
CREATE TABLE BACSI (
    MaBS INT AUTO_INCREMENT PRIMARY KEY,
    HoTen VARCHAR(50),
    ChuyenMon VARCHAR(50),
    GioLam TIME
);

-- Bảng LICHKHAM
CREATE TABLE LICHKHAM (
    MaLK INT AUTO_INCREMENT PRIMARY KEY,
    MaBS INT,
    MaBN INT
    NgayGio DATETIME,
    FOREIGN KEY (MaBS) REFERENCES BACSI(MaBS),
    FOREIGN KEY (MaBN) REFERENCES BENHNHAN(MaBN)
);

-- Bảng DICHVU
CREATE TABLE DICHVU (
    MaDV INT AUTO_INCREMENT PRIMARY KEY,
    TenDV VARCHAR(30),
    ChiPhi DECIMAL(10,2),
    ThongTinDV VARCHAR(100)
);

-- Bảng BENHNHAN_DICHVU (liên kết giữa BENHNHAN và DICHVU)
CREATE TABLE BENHNHAN_DICHVU (
    MaBN INT,
    MaDV INT,
    PRIMARY KEY (MaBN, MaDV),
    FOREIGN KEY (MaBN) REFERENCES BENHNHAN(MaBN),
    FOREIGN KEY (MaDV) REFERENCES DICHVU(MaDV)
);

