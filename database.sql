CREATE DATABASE IF NOT EXISTS laravelproducts;
USE laravelproducts;

CREATE TABLE products(
	id int(255) auto_increment not null,
	name varchar(20),
	reference varchar(255),
	price int(255),
	created_at datetime DEFAULT NULL,
	updated_at datetime DEFAULT NULL,
	CONSTRAINT pk_products PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE variations(
	id int(255) auto_increment not null,
	product_id int(255) not null,
	reference varchar(255),
	price int(255),
	created_at datetime DEFAULT NULL,
	updated_at datetime DEFAULT NULL,
	CONSTRAINT pk_variations PRIMARY KEY(id),
	CONSTRAINT fk_variations_products FOREIGN KEY(product_id) REFERENCES products(id);
)ENGINE=InnoDb;