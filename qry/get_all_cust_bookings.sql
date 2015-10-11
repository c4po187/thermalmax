SELECT b.booking_id, c.customer_id, c.first_name, c.surname, t.task_type, p.attributes, b.date_time
FROM bookings b
INNER JOIN customers c ON b.customer_id = c.customer_id
INNER JOIN tasks t ON b.task_id = t.task_id
INNER JOIN products p ON t.product_id = p.product_id;

/* If you want to find a booking record of a specific Customer -
   Remove the semi-colon at the end and drop in the following line (replace the semi-colon at the very end of the query!)
   
   ** Get Customer by ID **
   WHERE c.customer_id = <your desired ID>;
   
   ** Get Customer by Surname **
   WHERE c.surname = '<your desired surname>';
*/