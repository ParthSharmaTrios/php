<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php  echo $_POST['user_name']   ?>'s Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
  <?php
		 
	
	
	if(isset($_POST['user_name']) || isset($_POST['user_age'])){
		
		$name = $_POST['user_name'];
		$age = $_POST['user_age'] ;
		$message= "";
		$class = "";
		
		
		if($age >= 19){
			$message = $name . " is Allowed to drink !";
			$class = "alert alert-success";
		}
		else{
			$message =  $name. " is Not Allowed";
			$class = "alert alert-danger";
		}
	}
	else{
		
		echo "No data passed!";
	}
	
	
?>

  
  
  
  
  
  
</head>
<body>

<div class="container">

	 <div class="<?php echo $class ?>">
		<?php echo $message ?>
	</div>
  
  
 
</div>

</body>
</html>
