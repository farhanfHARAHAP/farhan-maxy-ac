-- Siswa

INSERT INTO siswa (
    siswa_nis, siswa_birth, siswa_sex, siswa_address
) VALUES
('01001','2012-05-24','M','KOMPLEK A'),
('01001','2012-07-22','M','KAMPUNG C'),
('01001','2012-03-02','M','KOMPLEK B'),
('01001','2012-10-27','F','KAMPUNG C'),
('01001','2012-03-16','F','KOMPLEK A'),
('01001','2012-01-18','M','KAMPUNG D');

SELECT * FROM siswa;

-- Nilai

INSERT INTO nilai VALUES
(1, 7, 8, 9),
(2, 8, 8, 9),
(3, 8, 8, 6),
(4, 7, 8, 7),
(5, 7, 6, 8),
(6, 7, 8, 7);

SELECT * FROM nilai;

