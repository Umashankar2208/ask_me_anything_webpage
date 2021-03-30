<!DOCTYPE html>
<html>

	<head>
	<title> ACCOUNT </title>
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
		0%    { left:0%;  top:0%; 	background-color:#f1f1f1;}
		100%  { left:0%;  top:0%; ;visibility:visible;	background-color:indianred;}
		
	}
	
	
	body {		
	border:0;
	overflow:hidden;
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
	SIGN OUT
	</p>
		
	</body>
	
</html>