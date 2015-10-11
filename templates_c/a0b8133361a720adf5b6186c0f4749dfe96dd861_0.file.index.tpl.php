<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-11 01:55:06
         compiled from "C:\xampp\htdocs\workspace\thermalmax\index.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5619a55a210a75_57643759',
  'file_dependency' => 
  array (
    'a0b8133361a720adf5b6186c0f4749dfe96dd861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\index.tpl',
      1 => 1444521304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5619a55a210a75_57643759')) {
function content_5619a55a210a75_57643759 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_style'=>"style/home.css"), 0, false)->render();
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
					<button id="rtask" class="task_button" onclick="location.href='contact.php';">
						<p>Make an appointment</p>
					</button>
				</div>
			</div>
			<div id="hc_right">
				<img src="<?php echo $_smarty_tpl->tpl_vars['showcase']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['exq_aes']->value;?>
" id="showcase" title="<?php echo $_smarty_tpl->tpl_vars['exq_aes']->value;?>
" />
				<img src="<?php echo $_smarty_tpl->tpl_vars['rosette']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['r10y']->value;?>
" id="rosette" title="<?php echo $_smarty_tpl->tpl_vars['r10y']->value;?>
" />
			</div>
		</div>
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
