<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-11 03:25:01
         compiled from "C:\xampp\htdocs\workspace\thermalmax\contact.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5619ba6d9eed04_84061469',
  'file_dependency' => 
  array (
    '84f2a617b3e43845c985d37f8398b37838c13dde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\contact.tpl',
      1 => 1444526700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5619ba6d9eed04_84061469')) {
function content_5619ba6d9eed04_84061469 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Contact",'page_style'=>"style/thanks.css"), 0, false)->render();
?>

	<div class="centralize">
		<h1>Contact Us</h2>
		<pre id="t_msg">
			<div id="contact_wrapper">
				<img src="img/contact_icon.png" alt="Contact Us" title="Contact Us" />
				<pre>
					<b>Email: </b>  <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['ema']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ema']->value;?>
</a>
					<b>Phone: </b>01332 987642 <a href="callto://+441332987642"><img id="skype_logo" src="img/skype-icon.png" alt="Skype" title="Call with Skype" /></a> 
				</pre>
			</div>
		</pre>
	</div>
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
