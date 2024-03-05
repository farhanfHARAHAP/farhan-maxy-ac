-- Create Table

CREATE TABLE IF NOT EXISTS customer(
    customer_id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (customer_id),
    customer_name VARCHAR(20) NOT NULL,
    customer_city VARCHAR(20) NOT NULL
);

CREATE TABLE IF NOT EXISTS salesman(
    salesman_id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (salesman_id),
    salesman_name VARCHAR(20) NOT NULL,
    salesman_city VARCHAR(20) NOT NULL,
    salesman_commission INT(11)
);

CREATE TABLE IF NOT EXISTS orders(
    orders_id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (orders_id),
    orders_date DATE NOT NULL,
    orders_amount INT(11) NOT NULL,
    customer_id INT(11) NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
    salesman_id INT(11) NOT NULL,
    FOREIGN KEY (salesman_id) REFERENCES salesman(salesman_id)
);