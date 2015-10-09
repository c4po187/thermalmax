<?php 
/**
 * Thermal Max Thank You 
 *
 * @author Richard Underwood
 * @date September 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Server script for Thermal Max thanks page.
 */
 
/** Prerequisites **/	
require 'obj/tmcsrv.class.php';

session_start();

// Display the thanks template, providing our server is OK
if (tmcsrv::get_singleton()->essentials_up()) {
	tmcsrv::get_singleton()->init_global_smarty_params($_SERVER['REQUEST_URI']);
	tmcsrv::get_singleton()->get_smarty()->display('thanks.tpl');
	
	$n = 'N/A';
	$count = 0;
	$task_count = 0;
	$task_id = null;
	
	// Grab all existing booking form values from POST
	$fn = isset($_POST['first_name']) ? $_POST['first_name'] : $n;
	$sn = isset($_POST['surname']) ? $_POST['surname'] : $n;
	$hn = isset($_POST['house_name']) ? $_POST['house_name'] : $n;
	$a1 = isset($_POST['addr_line1']) ? $_POST['addr_line1'] : $n;
	$a2 = isset($_POST['addr_line2']) ? $_POST['addr_line2'] : $n;
	$tc = isset($_POST['town_city']) ? $_POST['town_city'] : $n;
	$cy = isset($_POST['county']) ? $_POST['county'] : $n;
	$pc = isset($_POST['postcode']) ? $_POST['postcode'] : $n;
	$ph = isset($_POST['phone']) ? $_POST['phone'] : $n;
	$mo = isset($_POST['mobile']) ? $_POST['mobile'] : $n;
	$em = isset($_POST['email']) ? $_POST['email'] : $n;
	$rw = isset($_POST['req'][0]) ? $_POST['req'][0] : null;
	$rd = isset($_POST['req'][1]) ? $_POST['req'][1] : null;
	$rc = isset($_POST['req'][2]) ? $_POST['req'][2] : null;
	$rs = isset($_POST['req'][3]) ? $_POST['req'][3] : null;
	$rf = isset($_POST['req'][4]) ? $_POST['req'][4] : null;
	$cw = isset($_POST['color_windows']) ? $_POST['color_windows'] : null;
	$cd = isset($_POST['color_doors']) ? $_POST['color_doors'] : null;
	$cc = isset($_POST['color_conservatories']) ? $_POST['color_conservatories'] : null;
	$cs = isset($_POST['color_soffits']) ? $_POST['color_soffits'] : null;
	$cf = isset($_POST['color_fascias']) ? $_POST['color_fascias'] : null;
	
	// Check that we have our mandatory values, if not show error page
	if ($fn === $n or $sn === $n or $a1 === $n or $tc === $n or $cy === $n or $pc === $n or $mo === $n or
		$rw === null or $rd === null or $rc === null or $rs === null or $rf === null or
		$cw === null or $cd === null or $cc === null or $cs === null or $cf === null or
		tmcsrv::get_singleton()->get_mysql()->connect_error) {
		tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');
	}
	
	/* We have our values, let's add them to the database */
	
	// First up, create a query to add the customer 
	$qry_insert = "INSERT INTO customers VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
	// Create a statement object, bind our parameters and execute the query
	$stmt_insert = tmcsrv::get_singleton()->get_mysql()->prepare($qry_insert);
	$stmt_insert->bind_param('sssssssssss', $fn, $sn, $hn, $a1, $a2, $tc, $cy, $pc, $ph, $mo, $em);
	$stmt_insert->execute();
	
	// We need the new id of the customer for the booking form, we can simply create a query that counts the number of rows
	$qry_count = "SELECT COUNT(*) FROM customers";
	$stmt_count = tmcsrv::get_singleton()->get_mysql()->prepare($qry_count);
	$stmt_count->execute();
	$stnt_count->store_result();
	
	// Get the number of rows
	$stmt_count->bind_result($count);
	
	// Create a query to add the booking
	$qry_book = "INSERT INTO bookings VALUES(?, ?, ?)";
	$stmt_book = tmcsrv::get_singleton()->get_mysql()->prepare($qry_book);
	$stmt_book->bind_param('iis', $count, $task_id, $_SERVER['REQUEST_TIME']);
	$stmt_book->execute();
	
	/*
	if ($rw) $qry .= '\''.$rw.'\',';
	if ($rd) $qry .= '\''.$rd.'\',';
	if ($rc) $qry .= '\''.$rc.'\',';
	if ($rs) $qry .= '\''.$rs.'\',';
	if ($rf) $qry .= '\''.$rf.'\',';
	*/
	
} else {
	tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');
}
	
?>