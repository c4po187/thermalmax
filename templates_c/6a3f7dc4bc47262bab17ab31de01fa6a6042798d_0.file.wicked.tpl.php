<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-08 23:13:37
         compiled from "C:\xampp\htdocs\workspace\thermalmax\wicked.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5616dc817e5ca3_85910947',
  'file_dependency' => 
  array (
    '6a3f7dc4bc47262bab17ab31de01fa6a6042798d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\wicked.tpl',
      1 => 1444338615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5616dc817e5ca3_85910947')) {
function content_5616dc817e5ca3_85910947 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Error",'page_style'=>"style/thanks.css"), 0, false)->render();
?>

	<div class="centralize">
		<h1>Oops, Something wicked happened!</h1>
	</div>
<?php $_smarty_tpl->setupSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
}
}
