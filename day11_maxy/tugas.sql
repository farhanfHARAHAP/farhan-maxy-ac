-- 1. Tentukanlah pelanggan yang tidak pernah membuat pesanan!

SELECT * FROM customer
WHERE customer_id NOT IN (
    SELECT customer.customer_id
    FROM customer
    RIGHT JOIN orders
    ON customer.customer_id = orders.customer_id
);

-- 2. Tentukan total banyak pembelian yang dilakukan oleh setiap pelanggan!

SELECT customer.customer_id, customer.customer_name, count(*) AS 'transactions'
FROM orders
LEFT JOIN customer
ON customer.customer_id = orders.customer_id
GROUP BY orders.customer_id;

-- 3. Tentukan nama pelanggan beserta total banyak pesanan yang dilakukan!

SELECT customer.customer_id, customer.customer_name, SUM(orders.orders_amount) AS 'total'
FROM orders
LEFT JOIN customer
ON customer.customer_id = orders.customer_id
GROUP BY orders.customer_id;

-- 4. Cari nilai max, min dan rata-rata dari amountnya! 

SELECT MIN(total) AS 'min_total', AVG(total) AS 'avg_total', MAX(total) AS 'max_total'
FROM (
    SELECT customer.customer_id, customer.customer_name, SUM(orders.orders_amount) AS total
    FROM orders
    LEFT JOIN customer ON customer.customer_id = orders.customer_id
    GROUP BY orders.customer_id
) AS subquery;


