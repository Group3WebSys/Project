<?php include 'header.php';?>

<div class = "wrapmeup">
         <div class = "bodyBlock">
                <h1>JOURNAL</h1>
                

                        <form action="addJEntry.php" method="post" id="journal">
                                <input type='hidden' name='id' id='id' value='<?php echo $_SESSION["user"]["id"]; ?>'>
                                <input type='hidden' name='uname' id='uname' value='<?php echo $_SESSION["user"]["username"]; ?>'>
                                <input type="text" name="subject" style="width:500px;"/><br>
                                <input type="hidden" name="entryid"/>
                                <textarea id="enid" name="entry" rows='15' cols='70'></textarea><br>
                                <input id="button_journal" type="submit" value="Post"/>
                        </form>
                        
      <!--Displays jounal entries-->
      <!--Old problem fixed, still trying to get the onclick display to work though-->
		    <div id = "journalarchive">
		    <h3>Journal Archive</h3>
		      <?php  
		
		    	  	$prev =  get_journal_entries($_SESSION["user"]["id"], $db);
		    	  	$prevOut = "";
		
		    	  	// iterate through each mission and generate the appropriate HTML for it
					foreach ($prev as $key => $value) {
		
						$innerdiv = $value['id'].$value['subject'];
						$output = "";
		                		$output .= "<sub>$value[date]</sub>\n";
						$output .= "<div id='$value[id]'>\n";
						$output .= "<h3 class='$value[subject]'><a href='#' onclick=\"toggle_visibility('$innerdiv'); return false;\">$value[subject]</a></h3>";
						$output .= "<div id='$innerdiv' style='display:none;'>\n";
						$output .= "<p>$value[content]</p></div>\n</div>\n";
		
						$prevOut .= $output;
		
					}
		
				echo $prevOut;
		
		  	?>                        
		    </div>                    
                        
        </div>
        <?php include 'leftsidebar.php'; ?>
        <?php include 'rightsidebar.php'; ?>
</div>
<?php include 'footer.php'; ?>
