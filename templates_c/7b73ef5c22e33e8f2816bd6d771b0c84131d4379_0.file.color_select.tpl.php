<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-08 23:42:24
         compiled from "C:\xampp\htdocs\workspace\thermalmax\color_select.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5616e340a4fc52_96349186',
  'file_dependency' => 
  array (
    '7b73ef5c22e33e8f2816bd6d771b0c84131d4379' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\color_select.tpl',
      1 => 1444340198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5616e340a4fc52_96349186')) {
function content_5616e340a4fc52_96349186 ($_smarty_tpl) {
?>
<!-- uPVC Color Selector Template -->
<div class="cust_select">
	<select class="color_selections" name="<?php echo $_smarty_tpl->tpl_vars['color_s']->value;?>
">
		<option value="white">White</option>
		<option value="antique_teak">Antique Teak</option>
		<option value="irish_oak">Irish Oak</option>
		<option value="golden_oak">Golden Oak</option>
		<option value="mahogany">Mahogany</option>
		<option value="cream">Cream</option>
		<option value="soft_cherry">Soft Cherry</option>
		<option value="rustic_cherry">Rustic Cherry</option>
		<option value="rosewood">Rosewood</option>
		<option value="black">Black</option>
		<option value="grey">Grey</option>
		<option value="charwell_green">Chartwell Green</option>
		<option value="green">Green</option>
		<option value="red">Red</option>
		<option value="stahlblau">Stahlblau</option>
	</select>
</div><?php }
}
