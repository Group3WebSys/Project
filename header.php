<!doctype html>
<html>
	<head>
		<!--Favicon icon-->
		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAC4/9UAAFklAMT/5gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIhESEiEiEiIiEiISISISIiIREhIRIhIiIhIiESEiEiIiERISISERIiIiIgIiIiIiIhIiERIREiIiEiIhIhIhIiIREiEiEiEiIhIiISISISIiERIREhESIiIiIiIiIiIiIhESERISISIiEiISEhIRIiISIhISESEiIhESERISISIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />
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
		<?php } ?>
	</head>
	<body>
		<div id="header">
			<div id="user">

			<?php require("dbconnect.php");?>
			<?php if(count($ERRORS)==0):?>
				<p>Database connected successfully!</p>
			<?php else: ?>
				<p>Database connection failed!</p>
			<?php endif; ?>
				<p>This is the user section. You can view your user account information here! If you are not logged in, please log in first. If you have not registered, please register!</p>
			<?php if(isset($_SESSION["user"])):?>
				<!-- Use Ajax to display the user info -->
				<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
				<script>
				  var username=<?php $_SESSION["user"]["username"]?>;
				  $("#user").append("<p id='greeting'></p>");
				  $("#greeting").html("Hello "+username);
				  //User Info Here!
				    //First check data.error for login status
				</script>
	  
			<?php else:?>
				<p>I want to log in!</p>
			    <div>
				  <form action="login.php" method="post" id="login">
				    <label>User Name:</label><input type="text" name="username" />
				    <label>Password:</label><input type="password" name="password"/>
				    <input id="button_login" type="submit" value="Log in!"/>
				  </form>
				</div>
				<p>I want to register:</p>
				<div>
				  <form action="register.php" method="post" id="register">
				    <label>User Name:</label><input type="text" name="username" />
				    <label>Email:</label><input type="email" name="email"/>
				    <label>Password:</label><input type="password" name="password"/>
				    <label>Password again:</label><input type="password" name="password_again"/>
					<input id="button_register" type="submit" value="Register!"/>
				  </form>
				</div>
				<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
				<script>
					$("#user #register").on("submit", function(e){
						$.post("register.php", $(this).serialize(), function(data){
							//Use Ajax to display user info
							  //First check data.error for login status
							
							if(data["success"]==1)
							{
								
							}
						}).error(function(){
							//Use Ajax to display error info
						});
						e.preventDefault();
					});
					
					$("#user #login").on("submit", function(e){
						$.post("login.php", $(this).serialize(), function(data){
							if(data["success"]==1)
							{
								
							}
						}).error(function(){
							//Use Ajax to display error info
						});
						//e.preventDefault();
					});
				</script>
				
			</div>
			<?php endif;?>
			<!-- Logo, site name here -->
			<!--Our awesome header here-->
			<?php 
				// functions to display log in form or something else
				// ifloggedin() { output nothing or member info }
				// else {output login form and register here}
			?>
		</div>