CREATE TABLE IF NOT EXISTS siswa(
    siswa_nis VARCHAR(5) NOT NULL,
    PRIMARY KEY (siswa_nis),
    siswa_name TEXT NOT NULL,
    nilai_IPA INT(11) NOT NULL,
    nilai_IPS INT(11) NOT NULL,
    nilai_PKN INT(11) NOT NULL
);

INSERT INTO siswa VALUES
('21001', 'Rahmat', 8, 8, 8),
('21002', 'Hakim', 3, 8, 7),
('21003', 'Kartini', 6, 7, 8),
('21004', 'Dian', 5, 8, 5),
('21005', 'Syifa', 3, 7, 8),
('21006', 'Puan', 5, 6, 8),
('21007', 'Dimas', 8, 6, 8),
('21008', 'Akbar', 7, 6, 7),
('21009', 'Farhan', 10, 9, 10),
('21010', 'Fadillah', 9, 10, 10);

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS insertSiswa(
    xsiswa_nis VARCHAR(5),
    xsiswa_name TEXT,
    xnilai_IPA INT(11),
    xnilai_IPS INT(11),
    xnilai_PKN INT(11)
)
BEGIN
    INSERT INTO siswa VALUES(
        xsiswa_nis,
        xsiswa_name,
        xnilai_IPA,
        xnilai_IPS,
        xnilai_PKN
    );
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS getSiswaByNIPA()
BEGIN
    SET @row_number = 0;
    SELECT @row_number:=@row_number+1 AS NOMOR, siswa_nis AS NIS, siswa_name AS NAMA, nilai_IPA AS NILAI
    FROM siswa
    ORDER BY NILAI DESC;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS getSiswaByNIPS()
BEGIN
    SET @row_number = 0;
    SELECT @row_number:=@row_number+1 AS NOMOR, siswa_nis AS NIS, siswa_name AS NAMA, nilai_IPS AS NILAI
    FROM siswa
    ORDER BY NILAI DESC;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS getSiswaByNPKN()
BEGIN
    SET @row_number = 0;
    SELECT @row_number:=@row_number+1 AS NOMOR, siswa_nis AS NIS, siswa_name AS NAMA, nilai_PKN AS NILAI
    FROM siswa
    ORDER BY NILAI DESC;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS getSiswaByAvg()
BEGIN
    SET @row_number = 0;
    SELECT @row_number:=@row_number+1 AS NOMOR, siswa_nis AS NIS, siswa_name AS NAMA, ((nilai_PKN+nilai_IPS+nilai_PKN)/3) AS NILAI
    FROM siswa
    ORDER BY NILAI DESC;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS getSiswaByAll()
BEGIN
    SET @row_number = 0;
    SELECT 
        @row_number:=@row_number+1 AS NOMOR,
        siswa_nis AS NIS, 
        siswa_name AS NAMA, 
        ((nilai_PKN+nilai_IPS+nilai_PKN)/3) AS RATA2, 
        nilai_IPS AS IPS, 
        nilai_IPA AS IPA,
        nilai_PKN AS PKN
    FROM siswa
    ORDER BY RATA2 DESC;
END$$
DELIMITER ;