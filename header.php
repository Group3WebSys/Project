<!doctype html>
<html>
	<head>
		<!--Favicon icon-->
		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAC4/9UAAFklAMT/5gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIhESEiEiEiIiEiISISISIiIREhIRIhIiIhIiESEiEiIiERISISERIiIiIgIiIiIiIhIiERIREiIiEiIhIhIhIiIREiEiEiEiIhIiISISISIiERIREhESIiIiIiIiIiIiIhESERISISIiEiISEhIRIiISIhISESEiIhESERISISIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />
		<link href='http://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		<title>Best project EVER, yo. | 
		<?php 
			if (basename($_SERVER['PHP_SELF']) == "index.php") echo "Index";
			else if (basename($_SERVER['PHP_SELF']) == "missions.php") echo "Missions";
			else if (basename($_SERVER['PHP_SELF']) == "contact.php") echo "Contact";
			// etc
		?>
		</title>
		<link rel="stylesheet" type="text/css" href= "style/format.css">
		<?php
			if (basename($_SERVER['PHP_SELF']) == "contact.php") {
		?>
		<link rel="STYLESHEET" type="text/css" href="contact.css" />
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		<script type='text/javascript' src='scripts/javascript.js'></script>
		<?php } ?>
	</head>
	<body>
		<div id="header">
			<?php include("user.php")?>
			
			<!-- Logo, site name here -->
			<!--Our awesome header here-->
			<?php 
				// functions to display log in form or something else
				// ifloggedin() { output nothing or member info }
				// else {output login form and register here}
			?>
		</div>
