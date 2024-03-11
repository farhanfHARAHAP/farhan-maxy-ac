-- Siswa: id, NIS, nama, TTL, gender, alamat

CREATE TABLE IF NOT EXISTS siswa (
    siswa_id INT(11) AUTO_INCREMENT NOT NULL,
    PRIMARY KEY (siswa_id),
    siswa_nis VARCHAR(8) NOT NULL,
    siswa_birth DATE NOT NULL,
    siswa_sex VARCHAR(1) NOT NULL,
    siswa_address VARCHAR(20) NOT NULL
);

-- Nilai: id, nilai_IPA, nilai_IPS, nilai_MTK

CREATE TABLE IF NOT EXISTS nilai (
    siswa_id INT(11) NOT NULL,
    FOREIGN KEY (siswa_id) REFERENCES siswa(siswa_id),
    nilai_ipa int(11) NOT NULL,
    nilai_ips int(11) NOT NULL,
    nilai_mtk int(11) NOT NULL
);
