<?php include 'header.php';?>

<div class = "wrapmeup">
 	<div class = "bodyBlock">
		<h1>JOURNAL</h1>
		
		<!--Displays jounal entries-->
		<!--I keep getting an error that says the foreach arguments are invalid but I don't see anything
		wrong with the, anyone see something I'm mising?-->
		<?php  

    	  	$prev =  get_journal_entries($_SESSION["user"]["id"], $db);
    	  	$prevOut = "";
    	  	echo $prev;

    	  	// iterate through each mission and generate the appropriate HTML for it
			foreach ($prev as $key => $value) {

				$innerdiv = $value['id'].$value['subject'];
				$output = "";
				$output .= "<div id='$value[id]'>\n";
				$output .= "<h3 class='$value[subject]'><a href='#' onclick=\"toggle_visibility('$innerdiv'); return false;\">$value[subject]</a></h3>\n";
				$output .= "<div id='$innerdiv' style='display:none;'>\n";
				$output .= "<p class='{$value['id']}desc'>$value[entry]</p>\n</div>\n";

				$prevOut .= "$output";

			}

			echo $prevOut;
  	?>

			<form action="addJEntry.php" method="post" id="journal">
				<input type='hidden' name='id' id='id' value='<?php echo $_SESSION["user"]["id"]; ?>'>
				<input type='hidden' name='uname' id='uname' value='<?php echo $_SESSION["user"]["username"]; ?>'>
				<input type="text" name="subject" style="width:500px;"/><br>
				<input type="hidden" name="entryid"/>
				<textarea id="enid" name="entry" rows='15' cols='70'></textarea><br>
				<input id="button_journal" type="submit" value="Post"/>
			</form>
	</div>
	<?php include 'leftsidebar.php'; ?>
	<?php include 'rightsidebar.php'; ?>
</div>
<?php include 'footer.php'; ?>
