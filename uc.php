<?php 
/**
 * Thermal Max Under Construction 
 *
 * @author Richard Underwood
 * @date October 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Server script for Thermal Max Under Construction page.
 */
 
/** Prerequisites **/	
require 'obj/tmcsrv.class.php';

session_start();

tmcsrv::get_singleton()->init_global_smarty_params('/home/thermalm/public_html/uc.php');
tmcsrv::get_singleton()->get_smarty()->display('uc.tpl');

?>