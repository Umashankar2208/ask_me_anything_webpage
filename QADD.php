	<?php	
    $servername = "localhost";
    $username = "uma";
    $password = "1234";
    $databaseName = "loginsystem";
	$quecon = $_POST['quecon'];
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	$conn = mysqli_connect($servername, $username, $password, $databaseName);   
	if (mysqli_connect_errno()) {
	echo "Connection failed: " . mysqli_connect_error();
}
	$sql1 = "SELECT * FROM ques WHERE con=?"; 
	$stmt1 = $conn->prepare($sql1); 
	$stmt1->bind_param("s", $quecon);
	$stmt1->execute();
	if($result = $stmt1->get_result()){
		$acc = mysqli_fetch_assoc($result);
		$row = mysqli_num_rows($result);
		if($row > 0){	
		
		}	
		else{
		$sql2 = "UPDATE ques SET con = ? WHERE id = 24;"; 
		$stmt2 = $conn->prepare($sql2); 
		$stmt2->bind_param("s", $quecon);
		$stmt2->execute();	
		}		
		}
		}
	mysqli_close($conn);
	?>

<!DOCTYPE html>
<html>

	<head>
	<title> HOME</title>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	

#p1{
	font-family: "Verdana";
	font-size : 23px;
	color:white;
	animation-name:p1;
	animation-duration:3s;
	position : absolute;
	animation-fill-mode: forwards;
	padding : 30px;
	visibility:hidden;
	margin:0;
	width:100%;
	}
	@keyframes p1 {
		0%    { left:0%;  top:0%; background-color:#f1f1f1;}
		100%  { left:0%;  top:0%; ;visibility:visible;background-color:indianred;}
		
	}
	
		
	form{
		background-color:teal;
		padding-top:10px;
		padding-left:50px;
		padding-bottom:10px;		
		margin:0px;
		width:90%;
		border-radius: 10px;
		animation-name: form;
		animation-duration:3s;
		position : absolute;
		animation-fill-mode: forwards;	
		visibility:hidden;
		}		
	@keyframes form
	{
			0%  {left:0px;top:90px;background-color:#f1f1f1;}
			100%{visibility:visible;left:0px;top:90px;background-color:tiel;}
	
	}
	textarea {
  width: 80%;
  height:300px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
  background-color:lightgreen;
  margin-left:10%;
}
	
.add[type=submit] {  
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius:4px;
  cursor: pointer;
  background-color: #4CAF50;
  font-family:"verdana";
  width:20%;
  margin-left:38%
  
}

.add[type=submit]:hover {
		background-color: #45a049;
	}

	
	body{		
	border:0;
	overflow: hidden;
	animation-name:body;
	animation-duration:3s;
	position : absolute;
	animation-fill-mode: forwards;
	visibility:hidden;
	margin:0;
	width:100%;
	}
	@keyframes body {
		0%    { background-color:#f1f1f1; }
		100%  { visibility:visible; background-color:teal;}
		
	}
	
	
	
	</style>
	</head>
	<body>

	<p id="p1">
	ADD A QUESTION : 
	</p>
	
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
	<textarea rows="4" cols="50" name="quecon" onfocus="this.value=''" >Enter question here...</textarea><br><br>
	<input class = "add" type="submit" value="ADD" name="go"  >
	</form>	
	
	
	
	</body>
	
</html>