-- Tables

CREATE TABLE IF NOT EXISTS pasien (
    pasien_id INT(11) NOT NULL,
    PRIMARY KEY (pasien_id),
    pasien_name TEXT,
    pasien_age INT(11),
    pasien_address TEXT,
    pasien_image TEXT
);

CREATE TABLE IF NOT EXISTS dokter (
    dokter_id INT(11) NOT NULL,
    PRIMARY KEY (dokter_id),
    dokter_name TEXT NOT NULL,
    dokter_image TEXT
);

CREATE TABLE IF NOT EXISTS riwayat (
    pasien_id INT(11),
    FOREIGN KEY (pasien_id) REFERENCES pasien(pasien_id),
    dokter_id INT(11),
    FOREIGN KEY (dokter_id) REFERENCES dokter(dokter_id),
    catatan TEXT,
    waktu DATE
);

-- Datas

INSERT INTO pasien VALUES
    (1,'Bagong Bin Semar', 54, 'JAWA TENGAH', 'KOSONG'),
    (2,'Petruk Bin Semar', 65, 'JAWA TENGAH', 'KOSONG'),
    (3,'Gareng Bin Semar', 59, 'JAWA TENGAH', 'KOSONG');


INSERT INTO dokter VALUES
    (1,'Dr. Farhan Fadillah Harahap', 'KOSONG');

INSERT INTO riwayat VALUES 
    (1, 1, 'Masuk ruang IGD karena serangan jantung.', '2024-03-01'),
    (2, 1, 'Masuk ruang IGD karena sakit tipes.', '2024-03-02'),
    (2, 1, 'Pasien sudah keluar rawat inap', '2024-03-07');

-- Function

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS insertRiwayat(
    pasien_id INT(11),
    dokter_id INT(11),
    catatan TEXT
)
BEGIN
    INSERT INTO riwayat
    VALUES (pasien_id, dokter_id, catatan, CURDATE());
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS insertPasien(
    xpasien_id INT(11),
    xpasien_name TEXT,
    xpasien_age INT(11),
    xpasien_address TEXT
)
BEGIN
    INSERT INTO pasien VALUES
    (xpasien_id, xpasien_name, xpasien_age, xpasien_address, 'KOSONG');
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS insertDokter(
    xdokter_id INT(11),
    xdokter_name TEXT
)
BEGIN 
    INSERT INTO dokter VALUES (xdokter_id, xdokter_name, 'KOSONG');
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS selectPasienAll()
BEGIN
    SELECT 
        pasien_name AS NAMA, 
        pasien_age AS UMUR, 
        pasien_address AS ALAMAT        
    FROM pasien;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS selectDokterAll()
BEGIN
    SELECT 
        dokter_name AS NAMA         
    FROM dokter;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS selectPasien(
    xpasien_id INT(11)
)
BEGIN
    SELECT 
        pasien_name AS NAMA, 
        pasien_age AS UMUR, 
        pasien_address AS ALAMAT
    FROM pasien WHERE pasien_id = xpasien_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS selectDokter(
    xdokter_id INT(11)
)
BEGIN
    SELECT 
        dokter_name AS NAMA
    FROM dokter WHERE dokter_id = xdokter_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS selectRiwayatByPasien(
    xpasien_id INT(11)
)
BEGIN
    SELECT 
        dokter.dokter_name AS DOKTER, 
        riwayat.catatan AS CATATAN, 
        riwayat.waktu AS WAKTU
    FROM riwayat
    LEFT JOIN dokter ON riwayat.dokter_id = dokter.dokter_id
    WHERE riwayat.pasien_id = xpasien_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE deletePasien(
    xpasien_id INT(11)
)
BEGIN
    DELETE FROM riwayat WHERE pasien_id = xpasien_id;
    DELETE FROM pasien WHERE pasien_id = xpasien_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE deleteDokter(
    xdokter_id INT(11)
)
BEGIN
    DELETE FROM dokter WHERE dokter_id = xdokter_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE getImgPasien(
    xpasien_id INT(11)
)
BEGIN
    SELECT pasien_image AS IMAGEFILE FROM pasien WHERE pasien_id = xpasien_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE getImgDokter(
    xdokter_id INT(11)
)
BEGIN
    SELECT dokter_image AS IMAGEFILE FROM dokter WHERE dokter_id = xdokter_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE setImgDokter(
    xdokter_id INT(11),
    xdokter_image TEXT
)
BEGIN
    UPDATE dokter SET dokter_image = xdokter_image
    WHERE dokter_id = xdokter_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE setImgPasien(
    xpasien_id INT(11),
    xpasien_image TEXT
)
BEGIN
    UPDATE pasien SET pasien_image = xpasien_image
    WHERE pasien_id = xpasien_id;
END$$
DELIMITER ;