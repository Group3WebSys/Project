<?php require("dbconnect.php"); session_start(); header('Content-Type: text/html; charset=utf-8'); ?>

<div id="user">
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="user_helper.js"></script>
	
	<div id="info">
	  <div class="error">
	  <?php if(isset($_SESSION["error"]) && $_SESSION["error"]!=""){ echo "<p>"+$_SESSION["error"]+"</p>";}?>
	  	
	  </div>
	  
	  <div id="account">
	    <div id="greeting"></div>
	    <div id="level"></div>
	    <div id="avatar"></div>
	    <div id="progress"></div>
	    <div id="personal_goal1"></div>
	    <div id="personal_goal2"></div>
	    <div id="personal_goal3"></div>
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
	  <form enctype="multipart/form-data" action="register.php" method="post" id="register">
	    <div class="left_c">
	    	<label>User Name*:</label><input type="text" name="username" /><br />
	    	<label>Email*:</label><input type="email" name="email"/><br />
	    	<label>Password*:</label><input type="password" name="password"/><br />
	    	<label>Password again*:</label><input type="password" name="password_again"/><br />
		    <label>Gender:</label>
		    <select name="gender" style="float:right"><br />
		      <option selected value="unspecified">unspecified</option>
		      <option value="male">male</option>
		      <option value="female">female</option>
		    </select>
		</div>
		<div class="right_c">
		    <label>Date of birth(mm/dd/yyyy):</label><input type="text" name="DOB"/><br />
		    <label>Personal goal1: </label><input type="text" name="pg1"/><br />
		    <label>Personal goal2: </label><input type="text" name="pg2"/><br />
		    <label>Personal goal3: </label><input type="text" name="pg3"/><br />
		    <input id="button_register" type="submit" value="Register!"/>
		    <p>* required</p>
		</div>
		
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
				if(data["success"]==1)
				{
					$("#user #login_container").hide(500);
					$("#user #register_container").hide(500);
					$("#uesr #login_container").remove();
					$("#user #register_container").remove();
					$("#user #logout_container").show(500);
					
					display_user_info(data);
					
				}
				else if(data["success"]==0)
				{
					$("#user #info .error").html("<p>"+data["error"]+"</p>");
				}
				else
				{
					$("#user #info .error").html("<p>"+"We encountered an unknown error!"+"</p>");
				}
			}, "json").fail(function(jqXHR, textStatus, errorThrown){
				$("#user #info .error").html("<p>"+"Some serious error has occurred: "+textStatus + ", " + errorThrown+","+jqXHR.responseText+"</p>");
				
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
					
					display_user_info(data);
					
					
				}
				else if(data["success"]==0)
				{
					$("#user #info .error").html("<p>"+data["error"]+"</p>");
				}
				else 
				{
					$("#user #info .error").html("<p>"+"We encountered an unknown error!"+"</p>");
				}
			}, "json").fail(function(jqXHR, textStatus, errorThrown){
				$("#user #info .error").html("<p>"+"Some serious error has occurred: "+textStatus + ", " + errorThrown+"</p>");
			});
			
		});
	
		$("#user #logout").on("submit", function(e){
			e.preventDefault();
			$.post("logout.php", $(this).serialize(), function(data){
				if(data["success"]==1)
				{
					var refresh=alert("You are logged out! Click OK to refresh the page");
					window.location.reload();
				}
				else if(data["success"]==0)
				{
					$("#user #info .error").html("<p>"+data["error"]+"</p>");
				}
				else
				{
					$("#user #info .error").html("<p>"+"We encountered an unknown error!"+"</p>");
				}
			}, "json").fail(function(jqXHR, textStatus, errorThrown){
				$("#user #info .error").html("<p>"+"Some serious error has occurred: "+textStatus + ", " + errorThrown+"</p>");
			});
			
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
					display_user_info(data);
					
				}
				else if(data["success"]==0)
				{
					$("#user #info .error").html("<p>"+data["error"]+"</p>");
				}
				else
				{
					$("#user #info .error").html("<p>"+"We encountered an unknown error!"+"</p>");
				}
			}).fail(function(){
				
				$("#user #info .error").html("<p>"+"Some serious error has occurred: "+textStatus + ", " + errorThrown+"</p>");
				
			});
			
		</script>
	<!-- If the user has not logged in and he just refreshed the page -->
	<?php else:?>
		<script>
			$("#user form#login").hide();
			$("#user form#register").hide();
			$("#user #logout_container").hide();
			$("#user #login_container a").on("click", function(){
				$("#user form#login").slideToggle(300);
			});
			
			$("#user #register_container a").on("click", function(){
				$("#user form#register").slideToggle(300);
			});
			
			destroy_user_info();
		</script>
	<?php endif;?>
<?php else: ?>
	<script>
		$("#user #info .error").html("<p>Sorryyy. We encoutered some errors in database connection!</p>");
	</script>
<?php endif; ?>
