<?php

	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$pwd = $_GET['password'];

	$servername = "localhost";
	$dbName  = "mysite";
	$userName = "root";
	$password =""; 
	
	$connection = new mysqli($servername, $userName , $password , $dbName);
	
	if($connection->connect_error){
		die( "Unable to connect to the db");
	}
	
	
	$sql_query = "INSERT INTO USERS (name, phone, email , password) 
		VALUES ('".$name."' ,'".$phone."', '".$email."' ,'".$pwd."' )";
		
		
		
	 
	if( $connection->query($sql_query)== true )
		echo "User Added !";
	else
		echo "There was some db error ";
		 
	
	$connection->close();
	
	






?>