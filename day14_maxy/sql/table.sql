CREATE TABLE IF NOT EXISTS buku(
    buku_id INT(11) NOT NULL,
    PRIMARY KEY (buku_id),
    buku_name TEXT NOT NULL,
    buku_description TEXT,
    buku_available VARCHAR(1) NOT NULL
);

CREATE TABLE IF NOT EXISTS member(
    member_id INT(11) NOT NULL,
    PRIMARY KEY (member_id),
    member_name TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS ledger(    
    buku_id INT(11) NOT NULL,
    FOREIGN KEY (buku_id) REFERENCES buku(buku_id),
    member_id INT(11) NOT NULL    
);