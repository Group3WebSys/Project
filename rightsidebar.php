<div id = "rightsidebar">
<?php if(isset($_SESSION["user"])) { ?>
	<img width=150 height=150 src = "users/
	<?php if (($_SESSION["user"]["avatar"]) == "default.jpg") { ?>
		default.jpg
	<?php } else { ?>
	<?php echo $_SESSION["user"]["username"]; ?>/<?php echo $_SESSION["user"]["avatar"]; } ?>"</img><br/>
	<p>Welcome <?php echo $_SESSION["user"]['username']; ?>!</p>
  <p>Level <?php echo $_SESSION["user"]['level']; ?>!</p>
  <p>Missions status:</p>
  <p>[][][][][][][]</p>
  <p><a href = "accountsettings.php">Account settings</a></p>
  <p><a href = "logout.php">Logout</a></p>
<?php } else { ?>
	Please log in to see some cool stuff about your account!
<?php } ?>
</div>
