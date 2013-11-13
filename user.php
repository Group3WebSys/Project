<div id="user">

<?php require("dbconnect.php"); session_start();?>
<?php if(count($ERRORS)==0):?>
	<p>Database connected successfully!</p>
<?php else: ?>
	<p>Database connection failed!</p>
<?php endif; ?>
<?php if(isset($_SESSION["user"])):?>
	<div>
	<!-- Use Ajax to display the user info -->
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<?php echo "<p>"."Welcome! ".$_SESSION["user"]["username"]."!</p>"?>
	<form action='logout.php' method='post' id="logout"><input id='button_logout' type='submit' value='Log out' /></form>
	<script>
		$("#user #logout").on("submit", function(e){
			$.post("logout.php", $(this).serialize(), function(data){
				if(data["success"]==1)
				{
					alert("You are logged out!");
				}
				else if(data["success"]==0)
				{
					alert("Log out failed! "+data["error"]);
				}
				else
				{
					alert("Unknown error!");
				}
			}).fail(function(jqXHR, textStatus, errorThrown){
				alert("Logout attempt failed! Error: "+ textStatus + ", " + errorThrown);
			});
			e.preventDefault();
		});
	</script>
	</div>
</div>

<?php else:?>
    <div>
	  <form action="login.php" method="post" id="login">
	  	<p>I want to log in!</p>
	    <label>User Name:</label><input type="text" name="username" />
	    <label>Password:</label><input type="password" name="password"/>
	    <input id="button_login" type="submit" value="Log in!"/>
	  </form>
	</div>
	<div>
	  <form action="register.php" method="post" id="register">
	  	<p>I want to register!</p>
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
			e.preventDefault();
			$.post("register.php", $(this).serialize(), function(data){
				//Use Ajax to display user info
				if(data["success"]==1)
				{
					$("#user #login").hide(500);
					$("#user #register").hide(500);
					$("#user").append("<p>Welcome "+data["current_user"]["username"]+"</p>");
					$("#user").append("<form id='logout' action='logout.php' method='post'><input id='button_logout' type='submit' value='Log out' /></form>");
					$("#user #logout").on("submit", function(e){
						$.post("logout.php", $(this).serialize(), function(data){
							if(data["success"]==1)
							{
								alert("You are logged out!");
							}
							else if(data["success"]==0)
							{
								alert("Log out failed! "+data["error"]);
							}
							else
							{
								alert("Unknown error!");
							}
						}).fail(function(jqXHR, textStatus, errorThrown){
							alert("Logout attempt failed! Error: "+ textStatus + ", " + errorThrown);
						});
						e.preventDefault();
					});
				}
				else if(data["success"]==0)
				{
					alert("Register failed! "+data["error"]);
				}
				else
				{
					alert("Unknown error!");
				}
			}).fail(function(){
				alert("failed to register!");
				//Use Ajax to display error info
				
			});
			
		});
		
		$("#user #login").on("submit", function(e){
			e.preventDefault();
			$.post("login.php", $(this).serialize(), function(data){
				if(data["success"]==1)
				{
					$("#user #login").hide(500);
					$("#user #register").hide(500);
					$("#user").append("<p>Welcome "+data["current_user"]["username"]+"</p>");
					$("#user").append("<form id='logout' action='logout.php' method='post'><input id='button_logout' type='submit' value='Log out' /></form>");
					$("#user #logout").on("submit", function(e){
						e.preventDefault();
						$.post("logout.php", $(this).serialize(), function(data){
							if(data["success"]==1)
							{
								alert("You are logged out!");
							}
							else if(data["success"]==0)
							{
								alert("Log out failed! "+data["error"]);
							}
							else
							{
								alert("Unknown error!");
							}
						}).fail(function(jqXHR, textStatus, errorThrown){
							alert("Logout attempt failed! Error: "+ textStatus + ", " + errorThrown);
						});
					});
					
				}
				else
				{
					alert("Log in failed! Error: "+data["error"]);
				}
			}).fail(function(jqXHR, textStatus, errorThrown){
				alert("Login attempt failed! Error: "+ textStatus + ", " + errorThrown);
				//Use Ajax to display error info
			});
			
		});

		
	</script>
</div>
<?php endif;?>