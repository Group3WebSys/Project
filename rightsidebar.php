<div id = "rightsidebar">
<?php if(isset($_SESSION["user"])) { ?>
	<img src = "style/resources/iconfiller.jpg"</a><br/>
	<p>Username</p>
  <p>Level 9</p>
  <p>Missions status:</p>
  <p>[][][][][][][]</p>
  <p><a href = "accountsettings.php">Account settings</a></p>
  <p><a href = "logout.php">Logout</a></p>
<?php } else { ?>
	Please log in to see some cool stuff about your account!
<?php } ?>
</div>
