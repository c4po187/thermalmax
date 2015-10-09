<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-06 05:25:48
         compiled from "C:\xampp\htdocs\workspace\thermalmax\index.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56133f3ce5d5e0_44881522',
  'file_dependency' => 
  array (
    'a0b8133361a720adf5b6186c0f4749dfe96dd861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\index.tpl',
      1 => 1444101947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_56133f3ce5d5e0_44881522')) {
function content_56133f3ce5d5e0_44881522 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2123156133f3cdfe005_14635970';
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('page_style'=>"style/home.css"), 0, false)->render();
?>

		<!-- Main Body -->
		<?php echo '<script'; ?>
 src="script/featurette.js" type="text/javascript"><?php echo '</script'; ?>
>
		<div class="centralize" id="home_content">
			<div id="hc_left">
				<div id="outer_features">
					<div id="inner_features">
						<pre id="feature"></pre>
					</div>
				</div>
				<div id="task_shortcuts">
					<button id="ltask" class="task_button" onclick="location.href='booking.php';">
						<p>Make a booking<p>
					</button>
					<button id="rtask" class="task_button">
						<p>Make an appointment</p>
					</button>
				</div>
			</div>
			<div id="hc_right">
				<img src="img/rosette.png" alt="10 year guarantee"  id="rosette" />
			</div>
		</div>
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
