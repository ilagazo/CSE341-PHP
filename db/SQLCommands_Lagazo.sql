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
	
CREATE TABLE customer_order (
 	order_id SERIAL PRIMARY KEY,
	customer_id int REFERENCES customer(customer_id),
	payment_id int REFERENCES payment(payment_id),
	product_id int REFERENCES product(product_id)
);

CREATE TABLE customer (
	customer_id SERIAL PRIMARY KEY,
	first_name VARCHAR (50) NOT NULL,
	last_name VARCHAR (50) NOT NULL,
	email VARCHAR (50) NOT NULL,
	phone_number int NOT NULL,
	address_id int REFERENCES address(address_id)
);

CREATE TABLE address (
	address_id SERIAL PRIMARY KEY,
	address_st VARCHAR (50) NOT NULL,
	city VARCHAR (50) NOT NULL,
	country VARCHAR (50) NOT NULL,
	postal_code VARCHAR (10) NOT NULL
);

CREATE TABLE payment (
	payment_id SERIAL PRIMARY KEY,
	payment_type VARCHAR (50) NOT NULL,
	card_number INT NOT NULL,
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
	phone_number int NOT NULL,
	occupation VARCHAR (50) NOT NULL
);