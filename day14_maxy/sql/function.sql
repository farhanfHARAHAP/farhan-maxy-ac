DELIMITER $$
CREATE PROCEDURE funcPinjam(
    xbuku_id INT(11),
    xmember_id INT(11)
)
BEGIN
INSERT INTO ledger VALUES (
    xbuku_id, 
    xmember_id
);
UPDATE buku
SET buku_available = 'F'
WHERE buku_id = xbuku_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE funcBalikan(
    xbuku_id INT(11),
    xmember_id INT(11)
)
BEGIN
DELETE FROM ledger 
WHERE buku_id = xbuku_id AND member_id = xmember_id;
UPDATE buku
SET buku_available = 'T'
WHERE buku_id = xbuku_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE funcIsAvailable(
    xbuku_id INT(11)
)
BEGIN
SELECT buku_available AS available
FROM buku
WHERE buku_id = xbuku_id;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE funcBukuAvailable()
BEGIN
SELECT buku_id AS id, buku_name AS nama, buku_description as deskripsi
FROM buku WHERE buku_available = 'T';
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE funcBukuDipinjam(
    xmember_id INT(11)
)
BEGIN
SELECT buku_id AS id, buku_name AS nama, buku_description as deskripsi
FROM buku
WHERE buku_id IN (
    SELECT buku_id FROM ledger
    WHERE member_id = xmember_id
);
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE funcNamaMember(
    xmember_id INT(11)
)
BEGIN
SELECT member_name FROM member WHERE member_id = xmember_id;
END$$
DELIMITER ;
