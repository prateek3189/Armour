<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo TITLE;?></title>
		<link rel='shortcut icon' href='<?php echo IMAGE_PATH_HTTP;?>logo.png' type='image/x-icon'/ >
		<!-- Including CSS -->
		<?php 
			if(count($AddCSS)) {
				foreach($AddCSS as $css) {
		?>
		<link href='<?php echo CSS_PATH_HTTP.$css;?>.css' type='text/css' rel="stylesheet"/ >
		<?php 
				}
			}
			if(count($AddJS)) {
				foreach($AddJS as $js) {
		?>
		<script src="<?php echo JS_PATH_HTTP.$js; ?>.js" type="text/javascript"></script>
		<?php 
				}
			}
		?>
		
	</head>
	<body>
		<header>
			<img src="<?php echo IMAGE_PATH_HTTP;?>/logo.png" class="logo-image" width="60px" height="60px;"/>
			<span class="logo-text">Armour Solution</span>
			<ul class="navigation">
				<li><a href="<?php echo FOLDER_PATH_HTTP;?>coming-soon.php">Our Technologies</a></li>
				<li><a href="<?php echo FOLDER_PATH_HTTP;?>coming-soon.php">Our Clients</a></li>
				<li><a href="<?php echo FOLDER_PATH_HTTP;?>coming-soon.php">Projects</a></li>
				<li><a href="<?php echo FOLDER_PATH_HTTP;?>coming-soon.php">About Us</a></li>
				<li><a href="<?php echo FOLDER_PATH_HTTP;?>coming-soon.php">Contact Us</a></li>
				
			</ul>
			<!-- <div class="search-box">
				<input type="text" class="search-text" name="search_box" id="search_box"/>
				<a href=""><img src="<?php echo IMAGE_PATH_HTTP;?>search-icon.png" class="small-icon search-icon"/></a>
			</div>
			-->
		</header>