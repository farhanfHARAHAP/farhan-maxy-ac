-- Data mahasiswa

INSERT INTO mahasiswa (
    mahasiswa_nim, mahasiswa_nama, mahasiswa_alamat
) VALUES
('01017','FARHAN FADILLAH HARAHAP','JL. BAHAGIA, JAKSEL'),
('01018','KRISHNA SAMUEL','JL. SEMANGAT, JAKBAR'),
('01020','CHRISTOPER LEBE','JL. MAKMUR, JAKBAR'),
('01005','MUHAMMAD JALAL','JL. PELOPOR, JAKTIM'),
('02014','PAULUS SIMANJUNTAK','JL. MAJU JAYA, JAKUT'),
('02028','HERMAN SRIJAYA','JL. MAWAR, JAKUT'),
('02069','VIYELLA','JL. KEBAGUSAN, JAKTIM');

-- Data matkul

INSERT INTO matkul(
    matkul_id, matkul_nama, matkul_sks
) VALUES
('A01','PEMROGRAMAN DASAR',3),
('A02','PEMROGRAMAN WEB',3),
('A03','PEMROGRAMAN ANDROID',3),
('B01','KEWIRAUSAHAAN',2),
('B02','KEWARGANEGARAAN',2);

-- Data ambil_mk

INSERT INTO ambil_mk(
    matkul_id, mahasiswa_id, ambil_mk_nilai
) VALUES
('A01',1,9),
('A01',2,4),
('A01',3,7),
('A01',4,9),
('A02',2,9),
('A02',3,4),
('A02',4,7),
('A02',5,9),
('A03',3,9),
('A03',4,4),
('A03',5,7),
('A03',6,9),
('B01',4,9),
('B01',5,4),
('B01',6,7),
('B01',1,9),
('B02',5,9),
('B02',6,4),
('B02',1,7),
('B02',2,9),
('A01',7,9),
('A02',7,8),
('A03',7,9),
('B01',7,4),
('B02',7,6);