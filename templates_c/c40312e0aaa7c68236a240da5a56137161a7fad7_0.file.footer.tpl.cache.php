<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-01 23:42:22
         compiled from "C:\xampp\htdocs\workspace\thermalmax\footer.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_560da8be17d780_89596129',
  'file_dependency' => 
  array (
    'c40312e0aaa7c68236a240da5a56137161a7fad7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\footer.tpl',
      1 => 1443734621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_560da8be17d780_89596129')) {
function content_560da8be17d780_89596129 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14744560da8be172067_32892975';
?>
		<!-- Footer -->
		<footer class="centralize">
			<div id="share_buttons">
				<!-- Change destination URLs once we have obtained account info from client -->
				<a href="http://www.facebook.com/sharer.php?u=#" target="_blank">
					<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
				</a>
				<a href="https://twitter.com/share?url=#" target="_blank">
					<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
				</a>
				<a href="https://plus.google.com/share?url=#" target="_blank">
					<img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
				</a>
				<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=#" target="_blank">
					<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
				</a>
			</div>
			<pre>&copy; 2015 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. All rights reserved. | Site by <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['bl']->value[1];?>
)</pre>
		</footer>
	</body>
</html><?php }
}
