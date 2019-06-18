<?php 
	require_once("connection.php");
	$sql = "select * from student order by id desc";
	$result = mysqli_query($link,$sql) or die(mysqli_error($link));
	$response = array();
	$count = mysqli_num_rows($result);
	array_push($response,array("total"=>$count));
	while($row = mysqli_fetch_assoc($result))
	{
		$response[] = $row;
	}
	echo json_encode($response);
?>