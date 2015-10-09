<?php 
/**
 * Thermal Max Bookings
 *
 * @author Richard Underwood
 * @date September 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Server script for Thermal Max booking page.
 */
 
/** Prerequisites **/

require 'obj/tmcsrv.class.php';

// Start session caching
session_start();

// Display the booking template, providing our server is OK
if (tmcsrv::get_singleton()->essentials_up()) {
	tmcsrv::get_singleton()->init_global_smarty_params($_SERVER['REQUEST_URI']);
	tmcsrv::get_singleton()->get_smarty()->display('booking.tpl');
} else {
	tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');
}
 
?>