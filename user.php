<?php require("dbconnect.php"); session_start();?>

<div id="user">
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="user_helper.js"></script>
	
	<div id="info">
	  <div class="error">
	    
	  </div>
	  
	  <div id="account">
	    
	  </div>
	</div>
	
	<div id="login_container">
	  <a href="#">I want to log in!</a>
	  <div class="error">
	    
	  </div>
	  <form action="login.php" method="post" id="login">
	    <label>User Name:</label><input type="text" name="username" />
	    <label>Password:</label><input type="password" name="password"/>
	    <input id="button_login" type="submit" value="Log in!"/>
	  </form>
	</div>
	
	<div id="register_container">
	  <a href="#">I want to register!</a>
	  <div class="error">
	    
	  </div>
	  <form action="register.php" method="post" id="register">
	    <label>User Name:</label><input type="text" name="username" />
	    <label>Email:</label><input type="email" name="email"/>
	    <label>Password:</label><input type="password" name="password"/>
	    <label>Password again:</label><input type="password" name="password_again"/>
		<input id="button_register" type="submit" value="Register!"/>
	  </form>
	</div>
	
	<div id="logout_container">
	  <div class="error">
	    
	  </div>
	  <form action='logout.php' method='post' id="logout"><input id='button_logout' type='submit' value='Log out' /></form>
	</div>
	<script>
		$("#user #register").on("submit", function(e){
			e.preventDefault();
			$.post("register.php", $(this).serialize(), function(data){
				//Use Ajax to display user info
				if(data["success"]==1)
				{
					$("#user #login_container").hide(500);
					$("#user #register_container").hide(500);
					$("#uesr #login_container").remove();
					$("#user #register_container").remove();
					$("#user #logout_container").show(500);
					
					$("#user #account").html("<p>Welcome "+data["current_user"]["username"]+"</p>");
					display_user_info(data);
					
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
					$("#user #login_container").hide(500);
					$("#user #register_container").hide(500);
					$("#uesr #login_container").remove();
					$("#user #register_container").remove();
					$("#user #logout_container").show(500);
					
					$("#user #account").html("<p>Welcome "+data["current_user"]["username"]+"</p>");
					display_user_info(data);
					
					
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
	
		$("#user #logout").on("submit", function(e){
			$.post("logout.php", $(this).serialize(), function(data){
				if(data["success"]==1)
				{
					var refresh=confirm("You are logged out! Click OK to refresh the page");
					if(refresh)
					{
						window.location.reload();
					}
					else
					{
						destroy_user_info();
					}
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

<?php if(count($ERRORS)==0):?>
	<!-- If the user has already logged in and he refreshes the page -->
	<?php if(isset($_SESSION["user"])):?>
		<?php 
			
		?>
		<script>
			$("#user #login_container").remove();
			$("#user #register_container").remove();
			$("#user #logout_container").show(500);

			$.post("login.php", {refresh: true}, function(data){
				//Use Ajax to display user info
				if(data["success"]==1)
				{
					$("#user #info").append("<p>Welcome "+data["current_user"]["username"]+"</p>");
					display_user_info(data);
					
				}
				else if(data["success"]==0)
				{
					alert("Login failed! "+data["error"]);
				}
				else
				{
					alert("Unknown error! "+ data);
				}
			}).fail(function(){
				alert("failed to register!");
				//Use Ajax to display error info
				
			});
			
		</script>
	<!-- If the user has not logged in and he just refreshed the page -->
	<?php else:?>
		<script>
			$("#user #login").hide();
			$("#user #register").hide();
			$("#user #logout_container").hide();
			$("#user #login_container a").on("click", function(){
				$(this).parent().find("form").first().slideToggle(300);
			});
			
			$("#user #register_container a").on("click", function(){
				$(this).parent().find("form").first().slideToggle(300);
			});
			
			destroy_user_info();
		</script>
	<?php endif;?>
<?php else: ?>
	<script>
		$("#user #info").html("<p>Sorryyy. We encoutered some errors in database connection!</p>");
	</script>
<?php endif; ?>
