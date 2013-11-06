<?php 
//This file returns a response in json format:
//"success": 1 or 0
//"error": "error messages(seperated by commas)"
//"username": "blah"
//"email": "blah@blah"
//
//
//
//
//
//
//
    if(!empty($_POST)) 
    {
    	require("dbconnect.php");
    	
    	header('Content-Type: application/json');
    	
    	$error_msg="";
    	
    	if(count($ERRORS)!=0)
    	{
    	
    		foreach($ERRORS as $error)
    		{
    			$error_msg.=($error.",");
    		}
    		$error_msg=rtrim($error_msg, ",");
    		echo json_encode(array("error"=>$error_msg, "success"=>0));
    		die();
    	}
    	
    	$submitted_username = '';
        // This query retreives the user's information from the database using 
        // their username. 
        $query = " SELECT id, username, password, salt, email FROM users WHERE username = :username"; 
         
        // The parameter values 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try 
        { 
            // Execute the query against the database 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
        	$error_msg="Failed to run query: " . $ex->getMessage();
        	echo json_encode(array("error"=>$error_msg, "success"=>0));
        	die();
        } 
         
        // This variable tells us whether the user has successfully logged in or not. 
        // We initialize it to false, assuming they have not. 
        // If we determine that they have entered the right details, then we switch it to true. 
        $login_ok = false; 
         
        // Retrieve the user data from the database.  If $row is false, then the username 
        // they entered is not registered. 
        $user = $stmt->fetch(); 
        if($user) 
        { 
            // Using the password submitted by the user and the salt stored in the database, 
            // we now check to see whether the passwords match by hashing the submitted password 
            // and comparing it to the hashed version already stored in the database. 
            $check_password = hash('sha256', $_POST['password'] . $user['salt']); 
            for($round = 0; $round < 65536; $round++) 
            { 
                $check_password = hash('sha256', $check_password . $user['salt']); 
            } 
             
            if($check_password === $user['password']) 
            { 
                // If they do, then we flip this to true 
                $login_ok = true; 
            } 
        } 
         
        if($login_ok) 
        { 
            unset($user['salt']); 
            unset($user['password']);
            $_SESSION['user'] = $user; 
            
            echo json_encode(array("error"=>$error_msg, "success"=>1, "username"=>$user["username"], "email"=>$user["email"]));
            die(); 
        } 
        else 
        { 
            $error_msg="Login failed"
            echo(json_encode(array("error"=>$error_msg, "success"=>0))); 
           
        } 
    } 
     
?> 