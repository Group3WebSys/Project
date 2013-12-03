<?php
if (!isset($_SESSION['user']) && (basename($_SERVER['PHP_SELF']) == "missions.php")) 
	header ('Location: index.php');
?>
	<!doctype html>
<html>
	<head>
		<!--Favicon icon-->
		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAANliAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABERAAAAAAARERERAAAAARERERERAAABEREREREQABEREAERERAAEREAABEREAAREQAAEREQAAEREAABEQAAAREREAAAAAAAERERAAAAAAABEREQAAAAAAABERAAAAAAAAEREAAAAAAAABEAAAAAAAAAEAAAAAAAAAEAAAAAD4fwAA4B8AAMAHAADAAwAAgwMAAIeDAACHgwAAw8cAAMD/AADgfwAA8D8AAPw/AAD8PwAA/n8AAP7/AAD9/wAA" rel="icon" type="image/x-icon" />		<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<title>Confiden | 
		<?php 
			if (basename($_SERVER['PHP_SELF']) == "index.php") echo "Welcome";
			else if (basename($_SERVER['PHP_SELF']) == "missions.php") echo "Missions";
			else if (basename($_SERVER['PHP_SELF']) == "contact.php") echo "Contact";
			else if (basename($_SERVER['PHP_SELF']) == "faq.php") echo "FAQ";
			else if (basename($_SERVER['PHP_SELF']) == "resources.php") echo "Resources";
			else if (basename($_SERVER['PHP_SELF']) == "privacypolicy.php") echo "Privacy Policy";
			else if (basename($_SERVER['PHP_SELF']) == "termsandconditions.php") echo "Terms and Conditions";
			else if (basename($_SERVER['PHP_SELF']) == "journal.php") echo "Journal";
			else if (basename($_SERVER['PHP_SELF']) == "accountsettings.php") echo "Settings";
			// etc
		?>
		</title>
		<?php
			if (basename($_SERVER['PHP_SELF']) == "index.php") { ?>
			<link rel="stylesheet" type="text/css" href="style/slider.css" />
			<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
			<script type="text/javascript" src="scripts/coda-slider.1.1.1.pack.js"></script>
			<script type="text/javascript" src="scripts/jquery-easing-1.3.pack.js"></script>
			<script type="text/javascript" src="scripts/jquery-easing-compatibility.1.2.pack.js"></script>
			
			<script type="text/javascript" src="scripts/slider.js"></script>
		<?php } ?>
		<link rel="stylesheet" type="text/css" href= "style/format.css">
		<!-- <script src="http://code.jquery.com/jquery-1.9.0.js"></script> -->
		<!--<script src="scripts/jquery-1.7.1.js"></script>-->
		<?php
			if (basename($_SERVER['PHP_SELF']) == "contact.php") {
		?>
		<link rel="STYLESHEET" type="text/css" href="contact.css" />
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		
		<?php } ?>
	</head>
	<body>
		<div id="header">
			<?php include("user.php")?>
			
			<!-- Logo, site name here -->
			<!--Our awesome header here-->
			
		</div>
