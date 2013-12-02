<?php include 'header.php'; 
if (isset($_POST['submit'])) {
	echo "dosomething";
}
?>
	<div class = "bodyBlock">
			<h1>MISSIONS</h1>
			<?php 
			$yo = get_current_level($_SESSION['user']['id'], $db);
			echo $yo['level'];
			?>
			<ul id = "missionsList">
			<br/>
			<!-- each mission will have its own title, description, and feedback box -->
			<form action="" name="missionid" id="missionid">
				<textarea rows="4" cols="50">Enter your feedback here</textarea>
				<input type="submit" value="Submit">
			</form>
			<li>(This list will have to be replaced with a jquery menu)</li>
			<li>Be real</li>
			<li>Be freaky</li>
			<li>Be awesome</li>
			<li>Be ballin</li>
			<li>Be Taha</li>
		</ul>
	</div>
	<?php include 'leftsidebar.php'; ?>
	<?php include 'rightsidebar.php'; ?>
<?php include 'footer.php'; ?>
