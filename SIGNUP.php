<?php

$username = $_POST['username'];
$conn = new mysqli("localhost","uma","1234","loginsystem");

if ($conn->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "Select name from users where name = '$username'";
$result = $conn->query($sql);


if($result->num_rows == 0){
	echo "hello";
}
else
{
	
}
$conn->close();
?>


<!DOCTYPE html>
<html>

	<head>
	<title> Sign Up </title>
	<link rel="stylesheet" type="text/css" href="style2.css" >
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	</head>
	
	<body>
	
		
	<form action="/.php">
	
  <input type="text" name="username" placeholder = "Your name..." ><br>
  
  <input type="email" id="email" name="email" placeholder="Your email...">
  
  <input type="submit" value="Submit">
  
	</form> 
	
	</body>
	
</html>