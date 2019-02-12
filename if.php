<?php

		
		 
	
	
	if(isset($_POST['user_name']) || isset($_POST['user_age'])){
		
		$name = $_POST['user_name'];
		$age = $_POST['user_age'] ; 
		
		if($age >= 19)
			echo $name . " is Allowed to drink !";
		else
			echo $name. " is Not Allowed";
		
	}
	else{
		
		echo "No data passed!";
	}
	
	
?>