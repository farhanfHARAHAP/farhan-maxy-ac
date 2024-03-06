-- Create Table

CREATE TABLE IF NOT EXISTS mahasiswa(
    mahasiswa_id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (mahasiswa_id),
    mahasiswa_nim VARCHAR(12) NOT NULL,
    mahasiswa_nama VARCHAR(20) NOT NULL,
    mahasiswa_alamat TINYTEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS matkul(
    matkul_id VARCHAR(3) NOT NULL,
    PRIMARY KEY (matkul_id),
    matkul_nama VARCHAR(20) NOT NULL,
    matkul_sks INT(11) NOT NULL
);

CREATE TABLE IF NOT EXISTS ambil_mk(
    ambil_mk_id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (ambil_mk_id),
    mahasiswa_id INT(11) NOT NULL,
    FOREIGN KEY (mahasiswa_id) REFERENCES mahasiswa(mahasiswa_id),
    matkul_id VARCHAR(3) NOT NULL,
    FOREIGN KEY (matkul_id) REFERENCES matkul(matkul_id),
    ambil_mk_nilai INT(11)
);