<?php 
/**
 * Thermal Max Error (Wicked)
 *
 * @author Richard Underwood
 * @date September 2015
 * @email c4po187@gmail.com
 *
 * @package thermalmax
 *
 * @summary
 * Server script for Thermal Max Error report page.
 */

/** Prerequisites **/

require 'obj/tmcsrv.class.php';

tmcsrv::get_singleton()->init_global_smarty_params('/home/thermalm/public_html/wicked.php');
tmcsrv::get_singleton()->get_smarty()->display('wicked.tpl');

?>