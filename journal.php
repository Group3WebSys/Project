<?php include 'header.php';
session_start();
  // Connect to the database
  try {
    $dbname = 'test1';
    $user = 'root';
    $pass = '';
    $dbconn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
  }
  catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
  
//entering the journal
if (isset($_SESSION['username']) ) :

	if (!isset($_POST['subject']) || !isset($_POST['entry']) || empty($_POST['subject']) || empty($_POST['entry']) ) {
	      $msg = "Please fill in all form fields.";
	    }

	else{
	 $stmt = $dbconn->prepare("INSERT INTO journals (uid, author, content, date) VALUES (:uid, :author, :content, :date)");
	      $stmt->execute(array(':uid' => $_POST['name'], ':author' => $_SESSION['username'], ':content' => $_POST['entry'], ':date' => date("Y/m/d") ));
	      $msg = "Journal entry recorded.";
	}
?>





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
<?php include 'footer.php'; ?>
