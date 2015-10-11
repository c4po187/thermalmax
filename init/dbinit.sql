SET FOREIGN_KEY_CHECKS = 0;
DROP DATABASE IF EXISTS thermalmax;
CREATE DATABASE thermalmax;
USE thermalmax;

CREATE TABLE customers (
	customer_id INTEGER NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(255),
	surname VARCHAR(255) NOT NULL,
	addr_house_name VARCHAR(255),
	addr_street VARCHAR(255) NOT NULL,
	addr_district VARCHAR(255),
	addr_town_city VARCHAR(255) NOT NULL,
	addr_county VARCHAR(255) NOT NULL,
	post_code VARCHAR(8) NOT NULL,
	phone VARCHAR(15),
	mobile VARCHAR(15),
	email VARCHAR(255),
	PRIMARY KEY(customer_id)
);

ALTER TABLE customers ADD CONSTRAINT c_customer0 UNIQUE(first_name, surname, post_code, mobile);

CREATE TABLE employees (
	employee_id INTEGER NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(255),
	surname VARCHAR(255) NOT NULL,
	addr_house_name VARCHAR(255),
	addr_street VARCHAR(255) NOT NULL,
	addr_district VARCHAR(255),
	addr_town_city VARCHAR(255) NOT NULL,
	addr_county VARCHAR(255) NOT NULL,
	post_code VARCHAR(8) NOT NULL,
	phone VARCHAR(11),
	mobile VARCHAR(11),
	email VARCHAR(255),
	employment_date VARCHAR(50) NOT NULL,
	role VARCHAR(255) NOT NULL,
	hourly_salary DECIMAL(13, 4) NOT NULL,
	status ENUM('Active', 'Inactive', 'Holiday') NOT NULL,
	is_manager BIT(1) NOT NULL,
	PRIMARY KEY(employee_id)
);

ALTER TABLE employees ADD CONSTRAINT c_employees0 UNIQUE(first_name, surname, employment_date, role);

CREATE TABLE suppliers (
	supplier_id INTEGER NOT NULL,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY(supplier_id)
);

ALTER TABLE suppliers ADD CONSTRAINT c_suppliers0 UNIQUE(supplier_id, name);

INSERT INTO suppliers VALUES(080433, 'Supplier_1');
INSERT INTO suppliers VALUES(085889, 'Supplier_2');
INSERT INTO suppliers VALUES(177019, 'Supplier_3');

CREATE TABLE products (
	product_id INTEGER NOT NULL,
	name VARCHAR(255) NOT NULL,
	attributes VARCHAR(255),
	unit_price DECIMAL(13, 4) NOT NULL,
	supplier_id INTEGER NOT NULL,
	PRIMARY KEY(product_id),
	FOREIGN KEY(supplier_id) REFERENCES suppliers(supplier_id)
);

ALTER TABLE products ADD CONSTRAINT c_products0 UNIQUE(product_id);

INSERT INTO products VALUES(820629, 'Window', 'White', 45.0000, 177019);
INSERT INTO products VALUES(531353, 'Window', 'Antique Teak', 52.0000, 080433);
INSERT INTO products VALUES(146446, 'Door', 'Cherry', 48.0000, 080433);
INSERT INTO products VALUES(873351, 'Door', 'Black', 50.0000, 085889);
INSERT INTO products VALUES(125353, 'Conservatory', 'White', 2650.4900, 177019);
INSERT INTO products VALUES(665198, 'Soffit', 'White', 5.0000, 085889);
INSERT INTO products VALUES(706844, 'Soffit', 'Red', 5.9900, 085889);
INSERT INTO products VALUES(241116, 'Fascia', 'Chartwell Green', 6.2500, 080433);
INSERT INTO products VALUES(645887, 'Fascia', 'Black', 6.4900, 085889);

CREATE TABLE tasks (
	task_id INTEGER NOT NULL AUTO_INCREMENT,
	task_type VARCHAR(255) NOT NULL,
	product_id INTEGER NOT NULL,
	PRIMARY KEY(task_id),
	FOREIGN KEY(product_id) REFERENCES products(product_id)
);

ALTER TABLE tasks ADD CONSTRAINT c_tasks0 UNIQUE(task_type, product_id);

INSERT INTO tasks VALUES(null, 'Window', 820629);
INSERT INTO tasks VALUES(null, 'Window', 531353);
INSERT INTO tasks VALUES(null, 'Door', 146446);
INSERT INTO tasks VALUES(null, 'Door', 873351);
INSERT INTO tasks VALUES(null, 'Conservatory', 125353);
INSERT INTO tasks VALUES(null, 'Soffit', 665198);
INSERT INTO tasks VALUES(null, 'Soffit', 706844);
INSERT INTO tasks VALUES(null, 'Fascia', 241116);
INSERT INTO tasks VALUES(null, 'Fascia', 645887);

CREATE TABLE appointments (
	appt_id INTEGER NOT NULL AUTO_INCREMENT,
	location VARCHAR(255),
	date_time VARCHAR(50) NOT NULL,
	customer_id INTEGER NOT NULL,
	PRIMARY KEY(appt_id),
	FOREIGN KEY(customer_id) REFERENCES customers(customer_id)
);

ALTER TABLE appointments ADD CONSTRAINT c_appointments0 UNIQUE(date_time, customer_id);

CREATE TABLE bookings (
	booking_id INTEGER NOT NULL AUTO_INCREMENT,
	customer_id INTEGER NOT NULL,
	task_id INTEGER NOT NULL,
	unit_modifier DOUBLE NOT NULL,
	date_time VARCHAR(50) NOT NULL,
	PRIMARY KEY(booking_id),
	FOREIGN KEY(customer_id) REFERENCES customers(customer_id),
	FOREIGN KEY(task_id) REFERENCES tasks(task_id)
);

ALTER TABLE bookings ADD CONSTRAINT c_bookings0 UNIQUE(customer_id, task_id, unit_modifier);

CREATE TABLE jobs (
	job_id INTEGER NOT NULL AUTO_INCREMENT,
	related_booking_id INTEGER,
	supervising_employee_id INTEGER NOT NULL,
	start_date DATE NOT NULL,
	end_date DATE,
	is_completed BIT(1) NOT NULL,
	task_id INTEGER,
	customer_id INTEGER,
	PRIMARY KEY(job_id),
	FOREIGN KEY(related_booking_id) REFERENCES bookings(booking_id),
	FOREIGN KEY(supervising_employee_id) REFERENCES employees(employee_id),
	FOREIGN KEY(task_id) REFERENCES tasks(task_id),
	FOREIGN KEY(customer_id) REFERENCES customers(customer_id)
);

ALTER TABLE jobs ADD CONSTRAINT c_jobs0 UNIQUE(related_booking_id);

CREATE TABLE stock (
	product_id INTEGER NOT NULL,
	quantity INTEGER NOT NULL,
	FOREIGN KEY(product_id) REFERENCES products(product_id)
);

ALTER TABLE stock ADD CONSTRAINT c_stock0 UNIQUE(product_id);

CREATE TABLE sales (
	sale_id INTEGER NOT NULL AUTO_INCREMENT,
	job_id INTEGER NOT NULL,
	total DECIMAL(13, 4) NOT NULL,
	payment_method ENUM('Card', 'Cash', 'Cheque', 'Transfer'),
	PRIMARY KEY(sale_id),
	FOREIGN KEY(job_id) REFERENCES jobs(job_id)
);

ALTER TABLE sales ADD CONSTRAINT c_sales0 UNIQUE(job_id);

CREATE TABLE admins (
	username VARCHAR(16) NOT NULL,
	pwd VARCHAR(24) NOT NULL,
	PRIMARY KEY(username)
);

ALTER TABLE admins ADD CONSTRAINT c_admins0 UNIQUE(username);

COMMIT;