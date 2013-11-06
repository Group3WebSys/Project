<!doctype html>
<html>
	<head>
		<!--Favicon icon-->
		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAC4/9UAAFklAMT/5gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIhESEiEiEiIiEiISISISIiIREhIRIhIiIhIiESEiEiIiERISISERIiIiIgIiIiIiIhIiERIREiIiEiIhIhIhIiIREiEiEiEiIhIiISISISIiERIREhESIiIiIiIiIiIiIhESERISISIiEiISEhIRIiISIhISESEiIhESERISISIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />
		<title>Best project EVER, yo. |
		<?php 
			if (basename($_SERVER['PHP_SELF']) == "index.php") echo "Index";
			else if (basename($_SERVER['PHP_SELF']) == "missions.php") echo "Missions";
			// etc
		?>
		</title>
		<link rel="stylesheet" type="text/css" href= "style/format.css">
	</head>
	<body>
	<div id="header">
		<!-- Logo, site name here -->
		Our awesome header here
		<?php 
			// functions to display log in form or something else
			// ifloggedin() { output nothing or member info }
			// else {output login form and register here}
		?>
	</div>	
	<div id ="container">