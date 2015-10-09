<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-08 16:31:08
         compiled from "C:\xampp\htdocs\workspace\thermalmax\footer.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56167e2c46cf78_16413165',
  'file_dependency' => 
  array (
    'c40312e0aaa7c68236a240da5a56137161a7fad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\footer.tpl',
      1 => 1444314659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_56167e2c46cf78_16413165')) {
function content_56167e2c46cf78_16413165 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\workspace\\thermalmax\\smarty\\libs\\plugins\\modifier.capitalize.php';
?>
		<!-- Start Footer -->
		<footer class="centralize">
			<div id="share_buttons">
				<a href="http://www.facebook.com/sharer.php?u=#" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['fb_share']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['sb']->value;
echo $_smarty_tpl->tpl_vars['fb']->value;?>
.png" alt="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['fb']->value);?>
" />
				</a>
				<a href="https://twitter.com/share?url=#" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['tw_share']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['sb']->value;
echo $_smarty_tpl->tpl_vars['tw']->value;?>
.png" alt="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['tw']->value);?>
" />
				</a>
				<a href="https://plus.google.com/share?url=#" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['gg_share']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['sb']->value;
echo $_smarty_tpl->tpl_vars['gg']->value;?>
.png" alt="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['gg']->value);?>
" />
				</a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=#" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['li_share']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['sb']->value;
echo $_smarty_tpl->tpl_vars['li']->value;?>
.png" alt="LinkedIn" />
				</a>
			</div>
			<pre>&copy; 2015 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. All rights reserved. | Site by <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['bl']->value[1];?>
)</pre>
		</footer>
	</body>
</html>
<!-- End Footer --><?php }
}
