<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-11 07:14:26
         compiled from "C:\xampp\htdocs\workspace\thermalmax\about.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5619f032d93300_52268173',
  'file_dependency' => 
  array (
    '1ae5350bd5a3277c4339efda229bf835c8193c8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\about.tpl',
      1 => 1444540451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5619f032d93300_52268173')) {
function content_5619f032d93300_52268173 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"About",'page_style'=>"style/about.css"), 0, false)->render();
?>

	<div class="centralize">
		<div id="top_about">
			<div id="left_top">
				<h1 class="heading_about">What are we about?</h1>
				<div id="left_content">
<pre>A friendly, local, professional
supplier of double and triple
glazed windows, doors, soffits
fascias and conservatories
based in Derby, Burton and
Nottingham.</pre>
				</div>
			</div>
			<div id="right_top">
				<h1 class="heading_about">Our Services</h1>
				<div id="right_content">
					<ul id="list">
						<li>Windows</li>
						<li>Doors</li>
						<li>Conservatories</li>
						<li>Soffits</li>
						<li>Fascias</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="bottom_about">
			<h1 class="heading_about"><?php echo $_smarty_tpl->tpl_vars['ben']->value;?>
</h1>
			<img id="triple" src="img/triple_benefit.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['ben']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ben']->value;?>
" />
		</div>
	</div>
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
