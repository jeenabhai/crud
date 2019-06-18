<?php 
	define(SERVERNAME,"localhost");
	define(USERNAME,"root");
	define(PASSWORD,"");
	define(DATABASENAME,"jjj");

	$link = mysqli_connect(SERVERNAME,USERNAME,PASSWORD) or die(mysqli_error($link));
	mysqli_select_db($link,DATABASENAME);
?>