<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-06 22:51:56
         compiled from "C:\xampp\htdocs\workspace\thermalmax\header.tpl" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5614346c37ca30_88508428',
  'file_dependency' => 
  array (
    '0124e015d1571eaf59670c8151aeb3fa457a306a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\workspace\\thermalmax\\header.tpl',
      1 => 1444162427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5614346c37ca30_88508428')) {
function content_5614346c37ca30_88508428 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '121275614346c0cdfe8_84888769';
?>
<!DOCTYPE html>
<!-- Default Header template -->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,window,fitting,fitter,PVC,uPVc,soffit,fascia,derby,double,triple,glazing,Roy,Jenkins,<?php echo $_smarty_tpl->tpl_vars['bl']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 | uPVC Solutions | Official Website" />
		<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" />
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['name']->value : $tmp);?>
</title>
		<link rel="icon" href="img/icon.png" type="image/png" sizes="16x16" />
		<link rel="stylesheet" type="text/css" href="style/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['page_style']->value;?>
" />
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<!-- Head-wrapper -->
		<div class="centralize" id="head_wrapper">
			<div id="logo_container">
				<a href="index.php"><img src="img/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_logo" /></a>
			</div>
			<div id="nav_container">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Product Profile</a></li>
						<li><a href="#">Install/Upgrade</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div><?php }
}