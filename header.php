echo '
<html>
	<head>
		<!--Favicon icon-->
		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAC4/9UAAFklAMT/5gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIhESEiEiEiIiEiISISISIiIREhIRIhIiIhIiESEiEiIiERISISERIiIiIgIiIiIiIhIiERIREiIiEiIhIhIhIiIREiEiEiEiIhIiISISISIiERIREhESIiIiIiIiIiIiIhESERISISIiEiISEhIRIiISIhISESEiIhESERISISIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />
		<title>Best project EVER, yo. </title>
		<?php 
			if (basename($_SERVER['PHP_SELF']) == "index.php") echo "Index";
			else if (basename($_SERVER['PHP_SELF']) == "missions.php") echo "Missions";
			// etc
		?>
		<link rel="stylesheet" type="text/css" href= "style/format.css">
	</head>
	<body>
		<div id="header">
			<!-- Logo, site name here -->
			<p>Our awesome header here</p>
			<!--<?php 
				// functions to display log in form or something else
				// ifloggedin() { output nothing or member info }
				// else {output login form and register here}
			?>-->
		</div>	
	</body>
</html>';
