/*
 * dbinit.sql 
 *
 * @author Richard Underwood 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 * 
 * @summary
 * This script can be run to completely reset/initialise the database.
 */

/* Prevent foriegn key constarint issues prior to deleting the database */ 
SET FOREIGN_KEY_CHECKS = 0;

/* Delete the database if it exists */
DROP DATABASE IF EXISTS thermalmax;

/* Create the 'Thermsl Max' database */
CREATE DATABASE thermalmax;

/* Switch to the database, so we can use it */
USE thermalmax;

/*-------------------*/
/* Create the tables */
/*-------------------*/

/* Customer Essential Information */
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
	phone VARCHAR(11),
	mobile VARCHAR(11),
	email VARCHAR(255),
	PRIMARY KEY(customer_id)
);

/* Employees */
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
	employment_date DATE NOT NULL, /* YYYY-MM-DD */
	role VARCHAR(255) NOT NULL,
	hourly_salary DECIMAL(13, 4) NOT NULL,
	status ENUM('Active', 'Inactive', 'Holiday') NOT NULL,
	is_manager BIT(1) NOT NULL, /* BOOL (0 = FALSE, 1 = TRUE) */
	PRIMARY KEY(employee_id)
);

/* Suppliers */
CREATE TABLE suppliers (
	supplier_id INTEGER NOT NULL,
	name VARCHAR(255) NOT NULL,
	PRIMARY KEY(supplier_id)
);

/* Products */
CREATE TABLE products (
	product_id INTEGER NOT NULL,
	name VARCHAR(255) NOT NULL,
	attributes VARCHAR(255), /* Colour, material etc... */
	unit_price DECIMAL(13, 4) NOT NULL,
	supplier_id INTEGER NOT NULL,
	PRIMARY KEY(product_id),
	FOREIGN KEY(supplier_id) REFERENCES suppliers(supplier_id)
);

/* Defines Tasks, eg. Double/Triple Glazing, Soffits, Fascias etc... */
CREATE TABLE tasks (
	task_id INTEGER NOT NULL,
	task_type VARCHAR(255) NOT NULL,
	product_id INTEGER NOT NULL,
	unit_modifier DOUBLE NOT NULL, /* Unit Price * X - eg. 20m Soffits */
	PRIMARY KEY(task_id),
	FOREIGN KEY(product_id) REFERENCES products(product_id)
);

/* Keeps a record of appointments with customers */
CREATE TABLE appointments (
	appt_id INTEGER NOT NULL AUTO_INCREMENT,
	location VARCHAR(255),	/* Set to NULL if customer's home address */
	date_time DATETIME NOT NULL, /* YYYY-MM-DD HH:MM:SS */
	customer_id INTEGER NOT NULL,
	PRIMARY KEY(appt_id),
	FOREIGN KEY(customer_id) REFERENCES customers(customer_id)
);

/* Keeps a record of the bookings */
CREATE TABLE bookings (
	booking_id INTEGER NOT NULL AUTO_INCREMENT,
	customer_id INTEGER NOT NULL,
	task_id INTEGER NOT NULL,
	stamp TIMESTAMP NOT NULL, /* PHP will generate this! */
	PRIMARY KEY(booking_id),
	FOREIGN KEY(customer_id) REFERENCES customers(customer_id),
	FOREIGN KEY(task_id) REFERENCES tasks(task_id)
);

/* Awarded Jobs */
CREATE TABLE jobs (
	job_id INTEGER NOT NULL AUTO_INCREMENT,
	related_booking_id INTEGER, /* May not of been booked, NULLIFY if so */
	supervising_employee_id INTEGER NOT NULL,
	start_date DATE NOT NULL,
	end_date DATE,
	is_completed BIT(1) NOT NULL,
	/*--------------------------------------------------------------------*/
	/* The following fields do not need to be entered if we have a booking 
	/* id - as it will contain all the following information! 			  */
	task_id INTEGER,
	customer_id INTEGER,
	/*--------------------------------------------------------------------*/
	PRIMARY KEY(job_id),
	FOREIGN KEY(related_booking_id) REFERENCES bookings(booking_id),
	FOREIGN KEY(supervising_employee_id) REFERENCES employees(employee_id),
	FOREIGN KEY(task_id) REFERENCES tasks(task_id),
	FOREIGN KEY(customer_id) REFERENCES customers(customer_id)
);

/* Current Stock */
CREATE TABLE stock (
	product_id INTEGER NOT NULL,
	quantity INTEGER NOT NULL,
	FOREIGN KEY(product_id) REFERENCES products(product_id)
);

/* Sales */
CREATE TABLE sales (
	sale_id INTEGER NOT NULL AUTO_INCREMENT,
	job_id INTEGER NOT NULL,
	total DECIMAL(13, 4) NOT NULL,
	payment_method ENUM('Card', 'Cash', 'Cheque', 'Transfer'),
	PRIMARY KEY(sale_id),
	FOREIGN KEY(job_id) REFERENCES jobs(job_id)
);

/* Administrator Credentials */
CREATE TABLE admins (
	username VARCHAR(16) NOT NULL,
	pwd VARCHAR(24) NOT NULL,
	PRIMARY KEY(username);
);

/* Finally commit the sql */
COMMIT;

/* END OF FILE */