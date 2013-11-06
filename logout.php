<?php 
    if(isset($_SESSION['user']))
    {
    	// We remove the user's data from the session 
    	unset($_SESSION['user']); 
    	session_destroy();
    
    	// Two options:
    	// Redirect the user to the main page 
    	header("Location: index.php");
    	die("Redirecting to the homepage");
    	// OR sent a json response to the page
    	//echo json_encode(array("success"=>1));
    	
    }
    else 
    {
    	// Redirect the user to the main page
    	header("Location: index.php");
    	// OR sent a json response to the page
    	die("You are not signed in!");
    	//echo json_encode(array("success"=>0));
    }