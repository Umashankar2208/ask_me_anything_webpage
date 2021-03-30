<?php
 
 if(isset($_POST["go"])){ 
   if(isset($_POST["name"]) && isset($_POST["pwd"])){

	$name = $_POST["name"]; 
	$pwd = $_POST["pwd"]; 

	$conn = mysqli_connect("localhost", "uma", "1234", "loginsystem");   
	   
	if (!$conn) {echo "Connection failed: ".mysqli_connect_error();}

	$sql = "SELECT * FROM users WHERE name=? AND pwd=?"; 
	$stmt = $conn->prepare($sql); 
	$stmt->bind_param("ss", $name,$pwd);
	$stmt->execute();
	
	if($result = $stmt->get_result()){

		$acc = mysqli_fetch_assoc($result);
		$row = mysqli_num_rows($result);
		
		if($row > 0){	
				$url = "HOME.php?name=".$name;
				header("Location: ".$url);
				exit();}
		else {
			header("Location: LOGINFORM.php?useracc=empty");
			exit();}				
		
		}
					
		mysqli_close($conn);	
	}
	}
?>

<!DOCTYPE html>
<html>

	<head>
	<title> LOGIN </title>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	
	
	body{
		background-color:white;
		margin:0%;
	}	
	
	
	form{
		background-color:teal;
		border-radius:2%;
		width:30%;
		margin-top:7%;
		margin-left:25.5%;
		padding-top:0%;
		padding-left:10%;
		padding-bottom:7%;
		padding-right:10%;
		font-family: "Verdana";
	}

	.label1{
	    margin-left:31.2%;
		margin-top:0%;
	    font-size:3.4vw;
	    color:white;
	}

	.textinput{
		padding:3%;
		width:95%;
		font-size : 1.3vw;
	}

	
	.label2{
		margin-left:24.5%;
		font-size:1.7vw;
		color:black;
	}

	.input{	
		margin-left:2%;
		width:47%;
		padding:2%;
		font-size : 1.3vw;
		background-color: #4CAF50;
		color: white;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		border: none;
		margin-top:8%;
	}
	
	.input1{
		width:47%;
		background-color: indianred;
	}
	
	.input:hover {
  		background-color: lightgreen;
 		color:white;
	}

	.input1:hover {
  		background-color: lightpink;
 		color: white;
	}

	
	@media only screen and (max-width:1000px) {
 
  	.input,.input1,.textinput {
    width:100%;
	font-size:3.5vw;
	margin:0%;
	  }
	.input1,.input{
		margin:2%;
	}
	form{
		margin-left:2%;
		width:76%;
		padding:10%;	
		padding-top:25%;
		padding-bottom:59%;	
	}

	
  	

	</style>
	</head>
		 
	<body>

  <form action="LOGINFORM.php" method="POST" ><br><br>
  <label class="label1"> LOGIN </label><br><br><br><br><br>
  <input class="textinput" type="text" name="name" placeholder="Your name.." ><br><br>  
  <input class="textinput" type="password"  name="pwd" minlength="8" placeholder="Your Password.."><br><br>
  <?php 
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if (strpos($fullUrl, "useracc=empty") == true){
	echo "<label class='label2'>User does not exist</label>";}
	?>
  <input class ="input" type="submit" value="GO" name="go" >  
  <input class = "input input1" type="submit" value="SIGN UP" name="signup"  formaction="/signup.php" >  	
  </form> 	
	
	

	</body>
	</html>

