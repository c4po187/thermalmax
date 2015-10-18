<?php 
/**
 * Thermal Max About
 *
 * @author Richard Underwood
 * @date October 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Server script for Thermal Max about page.
 */
 
/** Prerequisites **/

require 'obj/tmcsrv.class.php';

// Start session caching
session_start();

// Display the booking template, providing our server is OK
if (tmcsrv::get_singleton()->essentials_up()) {
	tmcsrv::get_singleton()->init_global_smarty_params('/home/thermalm/public_html/about.php');
	//tmcsrv::get_singleton()->get_smarty()->display('about.tpl');
	// Open Under construction page until we design a better about page (it was rather rushed)
	tmcsrv::get_singleton()->get_smarty()->display('uc.tpl');
} else {
	tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');
}
 
?>