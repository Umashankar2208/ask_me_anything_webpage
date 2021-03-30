<?php	
	$name = $_GET['name'];
	 ?>

<!DOCTYPE html>
<html>

	<head>
	<title> HOME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
	body{
		background-color:mintcream;
		margin : 0%;
		width:100%;
	}	

	#div1{
		padding:2%;
		padding-top:0%;
		padding-bottom:0%;
		width:96%;
		background-color:gray;
	}
	
	p{
		font-family:"verdana";
		color:white;
		font-size:2.1vw;
		float:right;					
	}

	.example input[type=text]{
			padding : 0.65%;
			border : 1px solid grey;
			float : left;
			width : 30%;
			font-family: "Verdana";
			font-size: 1.25vw;
			background-color:#f1f1f1;
			border-right:none;
			margin-top:2%;
			
	}	
	.example button{
			padding : 0.65%;
			border : 1px solid grey;
			float : left;
			width : 10%;
			font-family: "Verdana";
			font-size: 1.25vw;
			background-color: #2196F3;
			border-right:none;
			margin-top:2%;
			color: white;
			border-left: none; 
			cursor: pointer;
	}
	.example::after {
			content: "";
			clear: both;
			display: table;
	}
	
	.example button:hover {
			background: #0b7dda;
	}	


			
ul {
  list-style-type: none;
  margin: 0%;
  width: 25%;
  background-color:thistle;
  position:fixed;
  height:100%;
  padding:0px;
  overflow: auto;
  }
li a {
  color: #000;
  display: block;
  text-decoration: none;
  font-family:"verdana";
  font-size: 1.5vw;
  padding-top:2%;
  padding-right:0%;
  padding-bottom:2%;
  padding-left:4%;  
}

li a.active {
  background-color: #555;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}

#iframe_a{
		margin:0px;
		border-radius: 2%;
		position : absolute;
		border:none;
		margin-left:25.1%;
		margin-top:0.1%
}

		


		
		
@media only screen and (max-width:720px) {

    #div1{
		padding:2%;
		padding-top:2%;
		padding-bottom:2%;
		width:96%;
		background-color:gray;
		position:relative;
	}
	
	p{
		font-family:"verdana";
		color:white;
		font-size:3.7vw;
		float:right;					
	}
    
    .example input[type=text]{
			padding : 1.5%;
			width : 35%;
			font-size: 3vw;
			margin-top:2%;
			
	}	
	.example button{
			padding : 1.5%;
			width : 10%;
			font-size: 3vw;
			margin-top:2%;
			}
	li a { 
  font-size: 3.5vw;}
  
    ul{
        width:32%;
    }

	#iframe_a{
		width:67%;
		height:87%;
		margin-bottom:2%;
		margin-left:32.5%;
		margin-top:0.1%
}

}
	</style>
	</head>
	<body>
	
	
	<div id="div1">
	<p>	<?php  echo strtoupper($name);?> </p>
	<form  class="example" method="post" action="Q1.php" target="iframe_a">	
	<input type="text" placeholder="Search.." name="search">
	<button type="submit"><i class="fa fa-search"></i></button>
	</form>	
	</div>		


	<ul>
	<li><a  href="home1.php" target="iframe_a">HOME</a></li>
	<li><a  href="qadd.php" target="iframe_a">ADD QUESTION</a></li>
	<li><a  href="questions.php" target="iframe_a">VIEW QUESTIONS</a></li>
	<li><a  href="info.php" target="iframe_a">INFO</a></li>
	<li><a 	href="loginform.php">SIGN OUT</a></li>
	</ul>

	<iframe id="iframe_a" height="85%" width="74.5%" src="home1.php" name="iframe_a"></iframe>

	
					
	</body>
</html>