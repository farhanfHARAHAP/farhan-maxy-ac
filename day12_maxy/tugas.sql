-- 1. Buatkan nama mahasiswa dan nilai mata kuliah yang memiliki nilai tertinggi dalam mata kuliah ‘A03’

SELECT *
FROM (
    SELECT mahasiswa.mahasiswa_nim AS NIM, 
        mahasiswa.mahasiswa_nama AS NAMA, 
        ambil_mk.ambil_mk_nilai AS NILAI
    FROM ambil_mk
    LEFT JOIN mahasiswa
    ON mahasiswa.mahasiswa_id = ambil_mk.mahasiswa_id
    WHERE matkul_id = "A03"    
) AS subquery
ORDER BY NILAI
LIMIT 1;

--  2. Dari data mahasiswa yang terdaftar, siapa sajakah mahasiswa yang tidak mengambil matakuliah ‘A01’?

SELECT mahasiswa_nim, mahasiswa_nama
FROM mahasiswa
WHERE mahasiswa_id NOT IN (
    SELECT mahasiswa_id
    FROM ambil_mk
    WHERE ambil_mk.matkul_id = "A01"
);

-- 3. Berapakah nilai terendah dari mahasiswa yang bernama Viyella?

SELECT matkul.matkul_id AS ID, matkuL.matkul_nama AS NAMA, subquery.nilai AS NILAI
FROM (
    SELECT matkul_id, ambil_mk_nilai AS nilai
    FROM ambil_mk
    WHERE mahasiswa_id = (
        SELECT mahasiswa_id
        FROM mahasiswa
        WHERE mahasiswa_nama = 'VIYELLA'
    )
    ORDER BY ambil_mk_nilai
) AS subquery
LEFT JOIN matkul
ON matkul.matkul_id = subquery.matkul_id
LIMIT 1;

-- 4. Jelaskan secara singkat tentang jenis-jenis subquery serta berikan contoh penggunaannya 

-- a. Skalar, di clause WHERE dengan operator (=,<,>,dll)

SELECT matkul_id AS MATKUL_FARHAN
FROM ambil_mk
WHERE mahasiswa_id = (
    SELECT mahasiswa_id
    FROM mahasiswa WHERE mahasiswa_nama LIKE '%FARHAN%'
);

-- b. Multiple Row, di clause WHERE dengan IN, ANY, ALL

SELECT mahasiswa_nama AS MAHASISWA_A02
FROM mahasiswa
WHERE mahasiswa_id IN (
    SELECT mahasiswa_id
    FROM ambil_mk WHERE matkul_id = 'A02'
);

-- c. Nested, seperti soal No. 3

-- d. Multiple Column, di clause FROM

SELECT mahasiswa.mahasiswa_nama AS MAHASISWA_A01, subquery.ambil_mk_nilai AS NILAI
FROM (
    SELECT *
    FROM ambil_mk
    WHERE matkul_id = 'A01'
) AS subquery
LEFT JOIN mahasiswa
ON mahasiswa.mahasiswa_id = subquery.mahasiswa_id;


