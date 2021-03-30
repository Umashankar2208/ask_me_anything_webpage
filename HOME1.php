<!DOCTYPE html>
<html>

	<head>
	<title> HOME </title>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
	
	
	#ani1{
	width : 10vw;
	height : 10vw;
	animation-name: ani1;
	border-radius: 50%;
	position : fixed;
	animation-duration: 4s;	
	animation-delay:1s;
	}
	@keyframes ani1 {
		0%  	{background-color:white; left:90%; top:2%;}
		50%     {background-color:tomato; left:0%; top:2%;}
		100%    {background-color:black; left:90%; top:2%;}
	}
	
	#ani2{
	width : 10vw;
	height : 10vw;
	animation-name: ani2;
	border-radius: 50%;
	position : fixed;
	animation-duration: 4s;	
	animation-delay:1s;
	}
	@keyframes ani2 {
		0%    {background-color:white; left:0%; top:27%;}
		50%  {background-color:aquamarine; left:90%; top:27%;}
		100% {background-color:black; left:0%; top:27%;}
	}
	
	#ani3{
	width : 10vw;
	height : 10vw;
	animation-name: ani3;
	border-radius: 50%;
	position : fixed;
	animation-duration: 4s;	
	animation-delay:1s;
	}
	@keyframes ani3 {
		0%  {background-color:white; left:90%; top:52%;}
		50%  {background-color:tomato; left:0%; top:52%;}
		100%    {background-color:black; left:90%; top:52%;}
	}
	
	#ani4{
	width : 10vw;
	height : 10vw;
	animation-name: ani4;
	border-radius: 50%;
	position : fixed;
	animation-duration: 4s;	
	animation-delay:1s;
	}
	@keyframes ani4 {
		0%    {background-color:white; left:0%; top:77%;}
		50%  {background-color:aquamarine; left:90%; top:77%;}
		100% {background-color:black; left:0%; top:77%;}
	}
	
	#ani5{
	border-radius: 20%;
	color:dodgerblue;
	font-family: "Verdana";
	font-size : 8vw;
	animation-name:p1;
	animation-delay:4s;
	animation-duration:2s;
	position : absolute;
	animation-fill-mode: forwards;
	visibility:hidden;
	margin-left:41%;
	margin-top:10%;
	}
	@keyframes p1 {
		0%    { color:white;}
		100%  { color:dodgerblue;visibility:visible;}
		
	}
	
	#ani6{
	border-radius: 20%;
	color:dodgerblue;
	font-family: "Verdana";
	font-size : 8vw;
	animation-name:ani6;
	animation-delay:4s;
	animation-duration:2s;
	position : absolute;
	animation-fill-mode: forwards;
	visibility:hidden;
	margin-left:43%;
	margin-top:20%;
	}
	@keyframes ani6 {
		0%    { color:white;}
		100%  { color:gold;visibility:visible;}
		
	}
	#ani7{
	border-radius: 20%;
	color:yellowgreen;
	font-family: "Verdana";
	font-size : 8vw;
	animation-name:ani7;
	animation-delay:4s;
	animation-duration:2s;
	position : absolute;
	animation-fill-mode: forwards;
	visibility:hidden;
	margin-left:25%;
	margin-top:30%;
	}
	@keyframes ani7 {
		0%    { color:white;}
		100%  { color:yellowgreen;visibility:visible;}
		
	}
	
	
	body{
		animation-name:body;
		animation-duration:4s;
		animation-fill-mode:forwards;
	}
	@keyframes body{
		0%{background-color:white;}
		100%{background-color:black;}
		
	}
	</style>
	</head>
	<body>
	<div id="ani1"></div>
	<div id="ani2"></div>
	<div id="ani3"></div>
	<div id="ani4"></div>
	<p id="ani5">ASK</p>
	<p id="ani6">ME</p>
	<p id="ani7">EVERYTHING</p>
	</body>
	</html>