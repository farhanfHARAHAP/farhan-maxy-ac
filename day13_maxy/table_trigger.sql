-- Product: id,nama,harga

CREATE TABLE IF NOT EXISTS product (
    product_id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (product_id),
    product_nama VARCHAR(20) NOT NULL,
    product_harga INT(11) NOT NULL
);

-- Stock: id, quantity

CREATE TABLE IF NOT EXISTS stock (
    product_id INT(11) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    stock_quantity INT(11) NOT NULL
);

-- Msg: id, msg

CREATE TABLE IF NOT EXISTS msg(
    product_id INT(11) NOT NULL,
    FOREIGN KEY (product_id) REFERENCES product(product_id),
    msg_str VARCHAR(50)
)