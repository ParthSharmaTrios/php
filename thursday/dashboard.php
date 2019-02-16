<?php
session_start();


	if(!isset($_SESSION['name'])){
		
		header('Location: login.html');
	}


	echo "<h1>This is Dashboard page</h1> ";
	
	echo "<h1>Welcome ". $_SESSION['name']."</h1>";


?>


<a href="logout.php">Logout</a>