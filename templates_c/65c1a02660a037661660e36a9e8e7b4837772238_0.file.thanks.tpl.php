<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-08 16:29:51
         compiled from "C:\xampp\htdocs\workspace\thermalmax\thanks.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56167ddfe55bd1_41855885',
  'file_dependency' => 
  array (
    '65c1a02660a037661660e36a9e8e7b4837772238' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\thanks.tpl',
      1 => 1444314588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_56167ddfe55bd1_41855885')) {
function content_56167ddfe55bd1_41855885 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Thank You",'page_style'=>"style/thanks.css"), 0, false)->render();
?>

		<div class="centralize">
			<h1>Thank You!</h1>
			<pre id="t_msg">Your booking has been entered into our database, you will hear from us shortly.</pre>
		</div>
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
