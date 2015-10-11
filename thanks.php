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
	
	// Check that mysqli is ok, if not display our error page
	if (tmcsrv::get_singleton()->get_mysql()->connect_error) {
		tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');
	} else {
		tmcsrv::get_singleton()->get_smarty()->display('thanks.tpl');
	}
	
	$n = 'N/A';
	$id = 0;
	
	/*
	$task_count = count($_POST['req']);
	echo "<h2>".$task_count."</h2>";
	*/
	
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
	$cw = isset($_POST['color_windows']) ? $_POST['color_windows'] : null;
	$cd = isset($_POST['color_doors']) ? $_POST['color_doors'] : null;
	$cc = isset($_POST['color_conservatories']) ? $_POST['color_conservatories'] : null;
	$cs = isset($_POST['color_soffits']) ? $_POST['color_soffits'] : null;
	$cf = isset($_POST['color_fascias']) ? $_POST['color_fascias'] : null;

	/* We have our values, let's add them to the database */
	
	// First up, create a query to add the customer 
	$qry_cust = "INSERT INTO customers VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
	$null_ = null;
	
	// Create a statement object, bind our parameters and execute the query
	$stmt_cust = tmcsrv::get_singleton()->get_mysql()->prepare($qry_cust);
	$stmt_cust->bind_param('isssssssssss', $null_, $fn, $sn, $hn, $a1, $a2, $tc, $cy, $pc, $ph, $mo, $em);
	$stmt_cust->execute();
	$stmt_cust->store_result();
	$stmt_cust->close();
	
	// We need the new id of the customer for the booking form, we can simply create a query gets the max id
	$qry_last = "SELECT MAX(customer_id) FROM customers";
	$stmt_last = tmcsrv::get_singleton()->get_mysql()->prepare($qry_last);
	$stmt_last->execute();
	$stmt_last->store_result();
	
	
	// Get the number of rows
	$stmt_last->bind_result($id);
	$stmt_last->fetch();
	$stmt_last->close();
	
	//echo "<h2>".$id."</h2>";
	
	$reqs = array(0 => $null_, 1 => $null_, 2 => $null_, 3 => $null_, 4 => $null_);
	
	/* We need to reorganize our POST requirements array and fill up the reqs array, 
	   in order for the indices to match the colors array below. */
	
	foreach ($_POST['req'] as $req) {
		if ($req === 'Window') $reqs[0] = $req;
		elseif ($req === 'Door') $reqs[1] = $req;
		elseif ($req === 'Conservatory') $reqs[2] = $req;
		elseif ($req === 'Soffit') $reqs[3] = $req;
		elseif ($req === 'Fascia') $reqs[4] = $req;
	}
	
	// Create indexed array for the colors
	$colors = array(0 => $cw, 1 => $cd, 2 => $cc, 3 => $cs, 4 => $cf);
	
	for ($i = 0; $i < 5; ++$i) {
		$run = false;
		
		if ($reqs[0] === 'Window' and $i === 0) $run = true;
		elseif ($reqs[1] === 'Door' and $i === 1) $run = true;
		elseif ($reqs[2] === 'Conservatory' and $i === 2) $run = true;
		elseif ($reqs[3] === 'Soffit' and $i === 3) $run = true;
		elseif ($reqs[4] === 'Fascia' and $i === 4) $run = true;
		
		$row = null;
		
		if ($run) {
			// Get the product id
			$pid = 0;
			$req_i = $reqs[$i];
			$color_i = $colors[$i];
			$qry_prod = "SELECT product_id FROM products WHERE name = ? AND attributes = ?";
			$stmt_prod = tmcsrv::get_singleton()->get_mysql()->prepare($qry_prod);
			$stmt_prod->bind_param('ss', $req_i, $color_i);
			$stmt_prod->execute();
			$stmt_prod->bind_result($pid);
			$stmt_prod->fetch();
			$stmt_prod->close();
			
			// Get task id
			$tid = 0;
			$qry_task = "SELECT task_id FROM tasks WHERE product_id = ?";
			$stmt_task = tmcsrv::get_singleton()->get_mysql()->prepare($qry_task);
			$stmt_task->bind_param('i', $pid);
			$stmt_task->execute();
			$stmt_task->bind_result($tid);
			$stmt_task->fetch();
			$stmt_task->close();
			
			$mod = 1.0;
			$date_time = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
			
			// Finally add the booking
			$qry_book = "INSERT INTO bookings VALUES(?, ?, ?, ?, ?)";
			$stmt_book = tmcsrv::get_singleton()->get_mysql()->prepare($qry_book);
			$stmt_book->bind_param('iiids', $null_, $id, $tid, $mod, $date_time);
			$stmt_book->execute();
			$stmt_book->store_result();
			$stmt_book->close();
		}
	}
	
	tmcsrv::get_singleton()->get_mysql()->close();
	
} else {
	tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');
}
	
?>