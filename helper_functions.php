<?php 
//A series of helper functions to
//Get the latest data regarding a particular user
//Because they query directly from the database, they are more reliable than SESSION data
//Need to implement helper functions to update the latest data?

//Return values are in all arrays.
//For single-entity queries(e.g. get_current_mission), the array is associative, with key as the column name and the value as the value.
//For multi-entity queries(e.g. get_completed_missions), each entity is an array, and they are nested inside a bigger array

function get_current_mission($uid, $db)
{
	try
	{
		$query="SELECT `currentTask` FROM `users` WHERE `id`=:userId";
		$query_params=array(":userId" => $uid);
		$query_params=array(":userId"=>$uid);
		$stmt=$db->prepare($query);
		$result=$stmt->execute($query_params);
		
		return $stmt->fetch();
	}
	catch(Exception $e)
	{
		return false;
	}
}

function get_completed_missions($uid, $db)
{
	try
	{
		$query="SELECT `tasks`.`title`, `tasks`.`star`, `tasks`.`desc` FROM
		            		`tasks` WHERE
		            		`tasks`.`id` IN
		            		(SELECT `completedtasks`.`tid` FROM
		            		`completedtasks` WHERE
		            		`completedtasks`.`uid`=:userId)";
		
		$query_params=array(":userId"=>$uid);
		$stmt=$db->prepare($query);
		$result=$stmt->execute($query_params);
		
		$completedTasks=array();
		$completedTasks=$stmt->fetchAll();
		return $completedTasks;
		
	}
	catch(Exception $e)
	{
		return false;
	}
}

function get_available_missions($uid, $db)
{
	try {
		$query="SELECT `tasks`.`title`, `tasks`.`star`, `tasks`.`desc` FROM
		            		`tasks` WHERE
		            		`tasks`.`id` NOT IN
		            		(SELECT `completedtasks`.`tid` FROM
		            		`completedtasks` WHERE
		            		`completedtasks`.`uid`=:userId)";
		$query_params=array(":userId"=>$uid);
		$stmt=$db->prepare($query);
		$result=$stmt->execute($query_params);
		
		$availableTasks=array();
		$availableTasks=$stmt->fetchAll();
		return $availableTasks;
	}
	catch(Exception $e)
	{
		return false;
	}
}

function get_current_progress($uid, $db)
{
	try
	{
		$query="SELECT `progress` FROM `users` WHERE `id`=:userId";
		$query_params=array(":userId" => $uid);
		$query_params=array(":userId"=>$uid);
		$stmt=$db->prepare($query);
		$result=$stmt->execute($query_params);
	
		return $stmt->fetch();
	}
	catch(Exception $e)
	{
		return false;
	}
}

function get_current_level($uid, $db)
{
	try
	{
		$query="SELECT `level` FROM `users` WHERE `id`=:userId";
		$query_params=array(":userId" => $uid);
		$query_params=array(":userId"=>$uid);
		$stmt=$db->prepare($query);
		$result=$stmt->execute($query_params);
	
		return $stmt->fetch();
	}
	catch(Exception $e)
	{
		return false;
	}
}

//This is just for password validation
function validate_password($new_password, $new_password_again, $db, $uid, $mode, $old_password="")
{
	//if the user is registering
	if($mode=="register")
	{
		//Compare the new_password and new_password_again
		if($new_password!=$new_password_again)
		{
			$error_msg="Passwords don't match";
			echo json_encode(array("error"=>$error_msg, "success"=>0));
			return false;
		}

		//Check the length of the new_password_again
		if(strlen($new_password)<8)
		{
			$error_msg="Password is too short (needs to be at least 8 characters long)";
			echo json_encode(array("error"=>$error_msg, "success"=>0));
			return false;
		}

		return true;
	}
	
	//if trhe user is changing password
	else if($mode=="change" || $mode=="login")
	{
		//Compare the new_password and new_password_again
		if($new_password!=$new_password_again)
		{
			$error_msg="Passwords don't match";
			echo json_encode(array("error"=>$error_msg, "success"=>0));
			return false;
		}
		//Check the length of the new_password
		if(strlen($new_password)<8)
		{
			//Error information is only provided to the user if he is changing the password
			if($mode=="change")
			{
				$error_msg="Password is too short (needs to be at least 8 characters long)";
				echo json_encode(array("error"=>$error_msg, "success"=>0));
			}
			return false;
		}
		//Get the hashed password and salt stored in the database for that user id
		try{
			$query="SELECT `password`, `salt` FROM `users` WHERE `id`=:uid";
			$query_params=array(":uid"=>$uid);
			$stmt=$db->prepare($query);
			$result=$stmt->execute($query_params);
		}
		catch(PDOException $ex)
		{
			$error_msg="Failed to run query: ".$ex->getMessage();
			echo json_encode(array("error"=>$error_msg, "success"=>0));
			return false;
		}

		$row=$stmt->fetch();

		//Hash the old_password concat with the salt
		for($round = 0; $round < 65537; $round++)
		{
			$old_password = hash('sha256', $old_password . $row["salt"]);
		}
		//Compare the hashed old_password and the hashed password in the database
		if($old_password!=$row["password"])
		{
			//Error information is only provided to the user if he is changing the password
			if($mode=="change")
			{
				$error_msg="Password entered is incorrent";
				echo json_encode(array("error"=>$error_msg, "success"=>0));
			}
			return false;
		}

		//return true
		return true;
	}
	else
	{
		return false;
	}
}




?>