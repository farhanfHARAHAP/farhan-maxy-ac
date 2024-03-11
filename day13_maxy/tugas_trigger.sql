-- Delete to proceed

DROP TRIGGER IF EXISTS triggerInsertProduct;
DROP TRIGGER IF EXISTS triggerStockAlert;

-- 3. Buatlah sebuah trigger yang akan memastikan bahwa 
-- setiap kali sebuah produk baru ditambahkan ke dalam tabel 
-- Products, informasi terkait produk tersebut juga otomatis 
-- dimasukkan ke dalam tabel Stocks dengan nilai awal stok 0. 
-- Tuliskan perintah SQL untuk membuat trigger yang memenuhi 
-- permintaan tersebut.

DELIMITER $$

CREATE TRIGGER triggerInsertProduct
AFTER INSERT ON product
FOR EACH ROW

BEGIN

IF NEW.product_id IS NOT NULL THEN
    INSERT INTO stock VALUES (NEW.product_id, 0);
    INSERT INTO msg VALUES (NEW.product_id, NULL);
END IF;

END$$

DELIMITER ;

-- Insert Product Data untuk tess

INSERT INTO product (
    product_nama, product_harga
) VALUES
('Beras', 16),
('Terigu', 20),
('Mocaf', 13),
('Tapioka', 14),
('Kedelai', 16);

-- Select

SELECT * FROM product;
SELECT * FROM stock;

--  4. Sebagai seorang pengembang database, Anda telah membuat 
-- sebuah trigger yang akan mengecek stok setiap kali ada perubahan 
-- data pada tabel Stocks. Trigger tersebut akan menampilkan pesan 
-- peringatan jika stok kurang dari 10. Tuliskan perintah SQL untuk 
-- membuat trigger yang mencapai fungsi tersebut. 

DELIMITER $$

CREATE TRIGGER triggerStockAlert
AFTER UPDATE ON stock
FOR EACH ROW
BEGIN
    IF NEW.stock_quantity < 10 THEN
        UPDATE msg SET msg_str = 'Stok barang kritis!' WHERE product_id = NEW.product_id;
    END IF;
END$$

DELIMITER ;

-- Update Stock barang

UPDATE stock SET stock_quantity = 20 WHERE product_id = 1;
UPDATE stock SET stock_quantity = 5 WHERE product_id = 2;
UPDATE stock SET stock_quantity = 30 WHERE product_id = 3;
UPDATE stock SET stock_quantity = 8 WHERE product_id = 4;
UPDATE stock SET stock_quantity = 10 WHERE product_id = 5;

-- Select

SELECT * FROM stock;
SELECT * FROM msg;