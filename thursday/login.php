<?php


	$email = $_GET['email'];
	$pass = $_GET['pwd'];

	define('SERVERNAME','localhost');
	$dbName  = "mysite";
	$userName = "root";
	$password =""; 
	
	$connection = new mysqli(SERVERNAME, $userName , $password , $dbName);
	
	if($connection->connect_error){
		die( "Unable to connect to the db");
	}
	
	
	$sql_query = "SELECT * FROM USERS WHERE email = '$email'  AND password= '$pass'";
	
		
		

	$result = $connection->query($sql_query);
	
	
	if($result->num_rows > 0){
		
		session_start();
		
		while($data = $result->fetch_assoc()){
			
			
			
			$_SESSION["name"] = $data["name"];
			$_SESSION["userEmail"] = $data["email"];
			
			
		
			header('Location: dashboard.php');
			
		}
		
	}
	else
		echo "<h1> Login FAILED</h1>";
	
		
	 
	
	
	
	
		 
	
	$connection->close();
	
	







?>