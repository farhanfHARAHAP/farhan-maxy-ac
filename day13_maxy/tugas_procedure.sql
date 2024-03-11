-- Delete before proceed

DROP PROCEDURE IF EXISTS getSiswaByBorn;
DROP PROCEDURE IF EXISTS getJmlBySex;

-- 1. Buatlah sebuah procedure dengan nama “getSiswaByBorn”
-- yang digunakan menampilkan data siswa pada tabel “datasiswa” 
-- berdasarkan kriteria input tempat lahir!

DELIMITER $$

CREATE PROCEDURE getSiswaByBorn(
    input_date DATE
)
BEGIN

SELECT * FROM siswa
WHERE siswa_birth = input_date
ORDER BY siswa_id;

END $$

DELIMITER ;

CALL getSiswaByBorn ('2012-05-24');

-- 2. Buatlah sebuah function dengan nama “getJmlBySex” 
-- untuk menghitung jumlah siswa pada tabel “datasiswa” 
-- berdasarkan kriteria input gender!

DELIMITER $$

CREATE PROCEDURE getJmlBySex(
    input_sex VARCHAR(1)
)
BEGIN

SELECT COUNT(*) AS JUMLAH_SISWA_BY_SEX
FROM siswa
WHERE siswa_sex = input_sex;

END $$

DELIMITER ;

CALL getJmlBySex ('F');
