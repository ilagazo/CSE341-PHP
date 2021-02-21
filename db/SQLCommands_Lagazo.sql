-- Database: ecommerce_project

-- DROP DATABASE ecommerce_project;

CREATE DATABASE ecommerce_project
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'English_United States.1252'
    LC_CTYPE = 'English_United States.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
    -- Table Creation 
CREATE TABLE customer_order (
 	order_id SERIAL NOT NULL PRIMARY KEY,
	customer_id int NOT NULL REFERENCES customer(customer_id),
	payment_id int NOT NULL REFERENCES payment(payment_id),
	product_id int NOT NULL REFERENCES product(product_id),
    address_id int NOT NULL REFERENCES address(address_id)
);

CREATE TABLE customer (
	customer_id SERIAL PRIMARY KEY,
	first_name VARCHAR (50) NOT NULL,
	last_name VARCHAR (50) NOT NULL,
	email VARCHAR (50) NOT NULL,
	phone_number VARCHAR (11) NOT NULL
);

CREATE TABLE address (
	address_id SERIAL PRIMARY KEY,
	address_st VARCHAR (50) NOT NULL,
	city VARCHAR (50) NOT NULL,
	state VARCHAR (50) NOT NULL,
	postal_code VARCHAR (10) NOT NULL
);

CREATE TABLE payment (
	payment_id SERIAL PRIMARY KEY,
	payment_type VARCHAR (50) NOT NULL,
	card_number VARCHAR (16) NOT NULL,
	security_code INT NOT NULL,
	exp_month smallint NOT NULL,
	exp_year smallint NOT NULL,
	name_on_card VARCHAR (255) NOT NULL
);

CREATE TABLE product (
	product_id SERIAL PRIMARY KEY,
	product_name VARCHAR(50) NOT NULL,
	price int NOT NULL,
	quantity int NOT NULL
);

CREATE TABLE employee (
	employee_id SERIAL PRIMARY KEY,
	username VARCHAR (50) UNIQUE NOT NULL,
	employee_password VARCHAR (50) UNIQUE NOT NULL,
	email VARCHAR (50) UNIQUE NOT NULL,
	first_name VARCHAR (50) NOT NULL,
	last_name VARCHAR (50) NOT NULL,
	phone_number VARCHAR (11) NOT NULL,
	occupation VARCHAR (50) NOT NULL
);

-- INSERT Example Customer #1
INSERT INTO address (address_st, city, state, postal_code) 
VALUES ('905 N Hargrave St', 'Banning', 'CA', '92220');

INSERT INTO customer (first_name, last_name, email, phone_number)
VALUES ('BOB', 'BOBBY', 'bob.bobby@gmail.com', '9511111111');

INSERT INTO payment (payment_type, card_number, security_code, exp_month, exp_year, name_on_card)
VALUES ('VISA', '4242424242424242', '123', '01', '25', 'Bob Bobby');

INSERT INTO product (product_name, price, quantity)
VALUES ('Hot Stone Massage', '120', '1');

INSERT INTO employee (username, employee_password, email, first_name, last_name, phone_number, occupation)
VALUES ('jill.korn', 'jill.korn121', 'jill.korn@gmail.com', 'Jill', 'Korn', '9512222222', 'Manager');

INSERT INTO customer_order (customer_id, payment_id, product_id, address_id)
VALUES ((SELECT customer_id from customer), (SELECT payment_id from payment), (SELECT product_id from product), (SELECT address_id from address));

-- INSERT Example Customer #2
INSERT INTO address (address_st, city, state, postal_code) 
VALUES ('1500 s 1000 w', 'Logan', 'UT', '84321');

INSERT INTO customer (first_name, last_name, email, phone_number)
VALUES ('Ivan', 'Russian', 'ivan.russian@gmail.com', '9522222222');

INSERT INTO payment (payment_type, card_number, security_code, exp_month, exp_year, name_on_card)
VALUES ('MasterCard', '4111111111111111', '321', '02', '26', 'Ivan Russian');

INSERT INTO product (product_name, price, quantity)
VALUES ('Swedish Massage Package', '120', '2');

INSERT INTO employee (username, employee_password, email, first_name, last_name, phone_number, occupation)
VALUES ('josie.russian', 'josie.russian212', 'josie.russian@gmail.com', 'Josie', 'Russian', '9522222222', 'Therapist');

INSERT INTO customer_order (customer_id, payment_id, product_id, address_id)
VALUES ((SELECT customer_id from customer WHERE customer_id = '2'), (SELECT payment_id from payment where payment_id = '2'), (SELECT product_id from product WHERE product_id = '2'), (SELECT address_id from address WHERE address_id = '2'));

--  INSERT Example Customer #3
INSERT INTO address (address_st, city, state, postal_code) 
VALUES ('Poop Lane', 'Kansas City', 'KS', '58999');

INSERT INTO customer (first_name, last_name, email, phone_number)
VALUES ('Chief', 'Football', 'cheif@gmail.com', '9533333333');

INSERT INTO payment (payment_type, card_number, security_code, exp_month, exp_year, name_on_card)
VALUES ('VISA', '5555555555554444', '789', '03', '27', 'Chief Football');

INSERT INTO product (product_name, price, quantity)
VALUES ('Couples Massage', '120', '1');

INSERT INTO employee (username, employee_password, email, first_name, last_name, phone_number, occupation)
VALUES ('josie.russian', 'josie.russian212', 'josie.russian@gmail.com', 'Josie', 'Russian', '9522222222', 'Therapist');

INSERT INTO customer_order (customer_id, payment_id, product_id, address_id)
VALUES ((SELECT customer_id from customer WHERE customer_id = '3'), (SELECT payment_id from payment where payment_id = '3'), (SELECT product_id from product WHERE product_id = '3'), (SELECT address_id from address WHERE address_id = '3'));

-- Commands needed to update data
UPDATE customer SET first_name='{$first_name}', last_name='{$last_name}', email='{$email}', phone_number='{$phone}' 
WHERE customer_id='{$cust_id}';
    
UPDATE payment SET payment_type='{$cardType}', card_number='{$card_number}', security_code='{$card_security}', exp_month='{$exp_month}', exp_year='{$exp_year}', name_on_card='{$card_name}'
WHERE payment_id='{$pay_id}';

UPDATE address SET address_st='{$address_st}', city='{$city}', state='{$adress_state}', postal_code='{$zipCode}' 
WHERE address_id='{$add_id}';
    
UPDATE employee SET username='{$emp_username}', employee_password='{$emp_pw}', email='{$emp_email}', first_name='{$emp_fn}', last_name='{$emp_ln}', phone_number='{$emp_phone}'
WHERE employee_id='{$emp_id}';
    
-- Delete Data
DELETE FROM customer_order WHERE order_id='{$id}';
DELETE FROM customer WHERE customer_id='{$cust_id}';
DELETE FROM payment WHERE payment_id='{$pay_id}';
DELETE FROM address WHERE address_id='{$add_id}';
DELETE FROM product WHERE product_id='{$prod_id}';


-- Select Specific data to pull from
SELECT employee.first_name, employee.last_name, employee.occupation, employee.phone_number, employee.email, employee.employee_password, employee.username
FROM employee WHERE employee.employee_id = '{$emp_id}';

SELECT employee.first_name, employee.last_name, employee.employee_id, employee.occupation
FROM employee WHERE employee.employee_id = '{$emp_id}';
    
SELECT employee.employee_id, employee.username, employee.employee_password
FROM employee WHERE employee.username = :username;
    
SELECT customer_order.order_id, customer.first_name, customer.last_name, customer.email, customer.phone_number, product.product_name, product.price, product.quantity
FROM customer_order 
INNER JOIN customer ON customer_order.customer_id = customer.customer_id
INNER JOIN product ON customer_order.product_id = product.product_id;

SELECT customer_order.order_id, customer_order.customer_id, customer_order.payment_id, customer_order.product_id, customer_order.address_id,
                                customer.first_name, customer.last_name, customer.email, customer.phone_number, 
                                product.product_name, product.price, product.quantity,
                                address.address_st, address.city, address.postal_code, address.state,
                                payment.payment_type, payment.card_number, payment.name_on_card
                                FROM customer_order 
                                INNER JOIN customer ON customer_order.customer_id = customer.customer_id
                                INNER JOIN payment ON customer_order.payment_id = payment.payment_id
                                INNER JOIN address ON customer_order.address_id = address.address_id
                                INNER JOIN product ON customer_order.product_id = product.product_id
                                WHERE customer_order.order_id = '{$id}';
                                
-- Insert into DB
INSERT INTO customer(first_name, last_name, email, phone_number) 
VALUES('{$first_name}', '{$last_name}', '{$email}', '{$phone}');

INSERT INTO address(address_st, city, state, postal_code) 
VALUES('{$address_st}', '{$city}', '{$address_state}', '{$zipCode}');

INSERT INTO payment(payment_type, card_number, security_code, exp_month, exp_year, name_on_card)
VALUES('{$cardType}', '{$card_number}', '{$card_security}', '{$exp_month}', '{$exp_year}', '{$card_name}');

INSERT INTO product(product_name, price, quantity)
VALUES('{$prod1_name}', '{$prod1_price}', '{$prod1_qty}');  
 
INSERT INTO product(product_name, price, quantity)
VALUES('{$prod2_name}', '{$prod2_price}', '{$prod2_qty}');
    
INSERT INTO product(product_name, price, quantity)
VALUES('{$prod3_name}', '{$prod3_price}', '{$prod3_qty}');

INSERT INTO product(product_name, price, quantity)
VALUES('{$prod4_name}', '{$prod4_price}', '{$prod4_qty}');

INSERT INTO product(product_name, price, quantity)
VALUES('{$prod5_name}', '{$prod5_price}', '{$prod5_qty}');

INSERT INTO customer_order(customer_id, payment_id, product_id, address_id) 
VALUES (
(SELECT customer_id from customer WHERE customer.email = '{$email}' AND customer.phone_number = '{$phone}' AND customer.last_name = '{$last_name}'),
(SELECT payment_id from payment WHERE payment.card_number = '{$card_number}' AND payment.security_code = '{$card_security}'), 
    --  (SELECT product_id from product),
(SELECT address_id from address WHERE address.address_st = '{$address_st}' AND address.postal_code = '{$zipCode}'));