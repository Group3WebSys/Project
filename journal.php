<?php include 'header.php';?>

<div class = "wrapmeup">
 	<div class = "bodyBlock">
			<h1>JOURNAL</h1>
			<!--STILL NEEDS CODE TO ADD INPUT DATA TO TABLE-->
			<form action=""  method="post" id="journal">
				<label>Subject: </label>
				<input type="text" name="subject" /><br>
				<input type="text" name="entry" style="width:750px; height:400px;"/><br>
				<input id="button_journal" type="submit" value="Post"/>
			</form>
	</div>
	<?php include 'leftsidebar.php'; ?>
	<?php include 'rightsidebar.php'; ?>
</div>
<?php include 'footer.php'; ?>
