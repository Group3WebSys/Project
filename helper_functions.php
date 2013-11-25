<?php 
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