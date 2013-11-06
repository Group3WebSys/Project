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
	<script>
	  //User Info Here!
	</script>
	  <p>Your account information!</p>
	  <p>...</p>
	  <p>...</p>
	  <p>...</p>
<?php else:?>
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
<?php endif;?>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script>
		$("#user #register").on("submit", function(e){
			$.post("register.php", $(this).serialize(), function(data){
				//Use Ajax to display user info
				
			}).error(function(){
				//Use Ajax to display error info
			});
			e.preventDefault();
		});
	</script>
	
</div>