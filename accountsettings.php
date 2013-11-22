<?php 
if(!empty($_POST))
{
	
	require("dbconnect.php");
	header("Content-Type: application/json");
	session_start();
	
	if(isset($_SESSION["user"]))
	{
		//Get the id of the user
		$uid=$_SESSION["user"]["id"];
		
		//If user sends an update request for username
		if(isset($_POST["username"]))
		{
			//Make an update to the users table where user id matches
			try
			{
				$query="UPDATE `users` SET `username`=:username WHERE `id`=:uid";
				$stmt=$db->prepare($query);
				$query_params=array(":username"=> $_POST["username"], ":uid"=>$uid);
				$result=$stmt->execute($query_params);
				
			}
			catch(PDOException $ex)
			{
				$error_msg="Username update failed. Failed to run query: ".$ex->getMessage();
				echo json_encode(array("error"=>$error_msg, "success"=>0));
				die();
			}
		}
		
		
		//If user sends an update request for email
		else if(isset($_POST["email"]))
		{
			//Make an update to the users table where user id matches
			try
			{
				$query="UPDATE `users` SET `email`=:email WHERE `id`=:uid";
				$stmt=$db->prepare($query);
				$query_params=array(":email"=>$_POST["email"], ":uid"=>$uid);
				$result=$stmt->execute($query_params);
			}
			catch(PDOException $ex)
			{
				$error_msg="Email update failed. Failed to run query: ".$ex->getMessage();
				echo json_encode(array("error"=>$error_msg, "success"=>0));
				die();
			}
		}
		
		//If user sends an update request for password
		else if(isset($_POST["password"]))
		{
			try
			{
				
				//Check if the old password entered matches with the old password in the database
				$query="SELECT `password`, `salt` FROM `users` WHERE `id`=:uid";
				$query_params=array(":uid"=>$uid);
				$stmt=$db->prepare($query);
				$result=$stmt->execute($query_params);
				$row=$stmt->fetch();
				
				$check_password = hash('sha256', $_POST["old_password"] . $row["salt"]);
				for($round = 0; $round < 65536; $round++)
				{
					$check_password = hash('sha256', $check_password . $row["salt"]);
				}
				if($check_password!=$row["password"])
				{
					$error_msg="You enter an incorrect password";
					echo json_encode(array("error"=>$error_msg, "success"=>0));
					die();
				}

				//Update the password
				$salt=dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
				$password=hash('sha256', $_POST["password"].$salt);
				for($round = 0; $round < 65536; $round++)
				{
					$password = hash('sha256', $password . $salt);
				}
				
				$query="UPDATE `users` SET `password`=:password, `salt`=:salt WHERE `id`=:uid";
				$query_params=array(":password"=>$password, ":salt"=>$salt, ":uid"=>$uid);
				$stmt=$db->prepare($query);
				$result=$stmt->execute($query_params);
				
			}
			catch(PDOException $ex)
			{
				$error_msg="Failed to run query: ".$ex->getMessage();
				echo json_encode(array("error"=>$error_msg, "success"=>0));
				die();
			}
			
		}
		
		
		//If user sends an update request for personal goals
		else if(isset($_POST["pg1"]) && isset($_POST["pg2"]) && isset($_POST["pg3"]))
		{
			if(!empty($_POST["pg1"]))
			{
				$pg=$_POST["pg1"];
				$query="UPDATE `users` SET `personalgoal1`=:pg WHERE `id`=:uid";
				$query_params=array(":pg"=>$pg, ":uid"=>$uid);
				$stmt=$db->prepare($query);
				$result=$stmt->execute($query_params);
			}
			else if(!empty($_POST["pg1"]))
			{
				$pg=$_POST["pg2"];
				$query="UPDATE `users` SET `personalgoal2`=:pg";
				$query_params=array(":pg"=>$pg, ":uid"=>$uid);
				$stmt=$db->prepare($query);
				$result=$stmt->execute($query_params);
			}
			else if(!empty($_POST["pg1"]))
			{
				$pg=$_POST["pg3"];
				$query="UPDATE `users` SET `personalgoal3`=:pg";
				$query_params=array(":pg"=>$pg, ":uid"=>$uid);
				$stmt=$db->prepare($query);
				$result=$stmt->execute($query_params);
			}
			else
			{
				$error_msg="You must enter at least some words to describe your goals";
				echo json_encode(array("error"=>$error_msg, "success"=>0));
				die();
			}
			
		}
		
		//Query for the latest user info and return it to the caller
		try
		{
			$query="SELECT * FROM `users` WHERE `id`=:uid";
			$query_params=array(":uid"=>$uid);
			$stmt=$db->prepare($query);
			$result=$stmt->execute($query_params);
			$user=$stmt->fetch();
			
			//Extra query to fetch the tasks the user has completed 
			$query="SELECT `tasks`.`title`, `tasks`.`star` FROM
		            		`tasks` WHERE
		            		`tasks`.`id` IN
		            		(SELECT `completedtasks`.`tid` FROM
		            		`completedtasks` WHERE
		            		`completedtasks`.`uid`=:userId)";
			
			$query_params=array(":userId"=>$user["id"]);
			$stmt=$db->prepare($query);
			$result=$stmt->execute($query_params);
			
			$completedTasks=array();
			$completedTasks=$stmt->fetchAll();
			$user["completedTasks"]=$completedTasks;
		}
		catch(PDOException $ex)
		{
			$error_msg="Failed to run query: ".$ex->getMessage();
			echo json_encode(array("error"=>$error_msg, "success"=>0));
			die();
		}
		
		echo json_encode(array("error"=>"None", "success"=>1,  "sid"=>session_id(), "current_user"=>$user));
		die();
	}
}

?>

