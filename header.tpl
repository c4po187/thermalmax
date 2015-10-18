<!DOCTYPE html>
<!-- Start Header -->
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="keywords" content="{$name},{$name} Windows,window,fitting,fitter,PVC,uPVc,soffit,fascia,derby,double,triple,glazing,Roy,Jenkins,{$bl[0]},{$author}" />
		<meta name="description" content="{$name} | uPVC Solutions | Official Website" />
		<meta name="author" content="{$author}" />
		<title>{$title|default: $name}</title>
		<link rel="icon" href="img/icon.png" type="image/png" sizes="16x16" />
		<link rel="stylesheet" type="text/css" href="style/common.css" />
		<link rel="stylesheet" type="text/css" href="{$page_style}" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		{literal}
		<script>
			onresize = onload = function() {
				document.body.style.fontSize = window.innerWidth + "px";
			}
		</script>
		{/literal}
		<!-- Head-wrapper -->
		<div class="centralize" id="head_wrapper">
			<div id="logo_container">
				<a href="index.php"><img src="img/logo.png" alt="{$name}_logo" title="{$name}" /></a>
			</div>
			<div id="nav_container">
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="uc.php">Product Profile</a></li>
						<li><a href="uc.php">Install/Upgrade</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
<!-- End Header -->