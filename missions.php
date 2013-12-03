<?php include 'header.php'; 
if (isset($_POST['submit'])) {
	echo "dosomething";
}
?>
	<div class = "bodyBlock">
			<h1>MISSIONS</h1>
			<?php 
			$missions = get_available_missions($_SESSION['user']['id'], $db);
					
			$output1star = "";
			$output2star = "";
			$output3star = "";
			// iterate through each mission and generate the appropriate HTML for it
			foreach ($missions as $key => $value) {
				$innerdiv = $value['id'].$value['title'];
				$output = "";
				$output .= "<div id='$value[id]'>\n";
				$output .= "<h3 class='$value[title]'><a href='#' onclick=\"toggle_visibility('$innerdiv'); return false;\">$value[title]</a></h3>\n";
				$output .= "<div id='$innerdiv' style='display:none;'>\n";
				$output .= "<p class='{$value['id']}desc'>$value[desc]</p>\n";
				$output .= "<form action='' name='$value[id]' id='$value[id]'>\n";
				$output .= "<textarea rows='4' cols='50'>Enter your feedback here</textarea>\n";
				$output .= "<input type='submit' value='Submit'>\n";
				$output .= "</form>\n</div>\n</div>\n";				
				if ($value['star'] == 1) {
					$output1star .= "$output";
				}
				else if ($value['star'] == 2) {
					$output2star .= "$output";
				}
				else if ($value['star'] == 3) {
					$output3star .= "$output";
				}
				else { echo "Invalid mission!"; }
				//print_r($value);
			}
			if ($output1star != "") {
				echo "<p class='missionheading'>1 Star Missions</p>".$output1star."<br/>";
			}
			if ($output2star != "") {
				echo "<p class='missionheading'>2 Star Missions</p>".$output2star."<br/>";
			}
			if ($output3star != "") {
				echo "<p class='missionheading'>3 Star Missions</p>".$output3star."<br/>";
			}
			?>
			
		<script>  
                function toggle_visibility(id) {
                  $("#" + id).toggle();
                } 
		</script>

	</div>
	<?php include 'leftsidebar.php'; ?>
	<?php include 'rightsidebar.php'; ?>
<?php include 'footer.php'; ?>
