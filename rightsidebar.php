<div id = "rightsidebar">
<?php if(isset($_SESSION["user"])) { ?>
	<img width=150 height=150 src = "users/
	<?php if (($_SESSION["user"]["avatar"]) == "default.jpg") { ?>
		default.jpg
	<?php } else { ?>
	<?php echo $_SESSION["user"]["username"]; ?>/<?php echo $_SESSION["user"]["avatar"]; } ?>"</img><br/>
	<p>Welcome <?php echo $_SESSION["user"]['username']; ?>!</p>
  <p>Level <?php echo get_current_level($_SESSION["user"]["id"], $db)['level']; ?>!</p>
 <!-- do we need this?
 <p>To level up, you need:</p>
  <?php
  $needed = get_needed_missions((get_current_level($_SESSION["user"]["id"], $db)['level']), $db);
  print_r($needed);
  ?>
  <p>Currently you have:</p>
  <?php
  $current = get_user_level_info($_SESSION["user"]["id"], $db);
  print_r($current);
  ?>
  -->
  <p>Missions status:</p>
  <p>[][][][][][][]</p>
  <hr/>
  <p><a href="#" onclick="return false;">Suggest a mission!</a></p>
  <form action="" method="post">
  <input type='hidden' name='id' id='id' value='<?php echo $_SESSION["user"]["id"]; ?>'>
  <textarea name="suggest" id="suggest" rows="4" cols="20" placeholder="Enter some ideas for missions here"></textarea>
  <input id='suggestmission' name='submit' type='submit' value='Suggest Mission'>
  </form>
<?php } else { ?>
	Please log in to see some cool stuff about your account!
<?php } ?>
</div>
