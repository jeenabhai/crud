<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.mydiv 
	{
		border:1px solid black;
		width:150px;
		height:150px;
		background-color: antiquewhite;
		font-size: 2em;
		text-align: center;
		position: absolute;
		left:0px;
		top:100px;
	}
	
	td 
	{
		text-align: center;
	}
</style>
</head>
<body>
<?php
	$name = "mansi";
	echo "<font color='red'>$name</font>";
?>
<table width="100%" border="1">
	<tr>
		<Td><input type="button" id="btnanimate" value="Animate Div" /></Td>
		<Td><input type="button" id="btnchain" value="chaining" /></Td>
		<Td><input type="button" id="btnstop" value="Stop effecit" /></Td>
	</tr>
</table>
<hr/>
<div class="mydiv" id="first">
		The Easylearn academy
</div>
<script src="jquery.js" language="javascript" type="text/javascript"></script>
<script>
		$(document).ready(function(){
			var speed = 3000;
			$("#btnanimate").click(function(){
				//alert("hi");
				$("#first").animate({left:'1100px'},speed,function(){
					$("#first").animate({left:'0px'},speed);
				});
			});
			
			$("#btnchain").click(function(){
				$("#first").animate({left:'1200px'},speed).animate({top:'500px'},speed).animate({left:'0px'},speed).animate({top:'100px'},speed);
			});
			
			$("#btnstop").click(function(){
				$("#first").stop(true);
			});
			
		});
</script>
</body>
</html>






