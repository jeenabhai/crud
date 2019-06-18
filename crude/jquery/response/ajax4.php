<?php 	
	extract($_POST);
	require_once("connection.php");
	$sql = "select customerNumber,customerName,contactLastName,contactFirstName,phone,city,state,country from customers where customerName like '%$txtname%'";
	$result = mysqli_query($link,$sql) or die(mysqli_error($link));
	echo "<table border='2' align='center' width='100%' cellpadding=5>";
	echo "<tr><td>Sr No</td><td>Number</td><td>FirstName</td><td>Name</td><td>LastName</td><td>Phone</td><td>City</td><td>State</td><td>Country</td></tr>";
	$total = mysqli_num_rows($result);
	if($total==0)
	{
		echo "<tr><td colspan=9 align=center>No Record Found</td></tr>";
	}
	else 
	{
		$count=1;
		while($row = mysqli_fetch_assoc($result))
		{
			extract($row);
			echo "<tr><td>$count</td><td>$customerNumber</td><td>$contactFirstName</td><td>$customerName</td><td>$contactLastName</td><td>$phone</td><td>$city</td><td>$state</td><td>$country</td></tr>";
			$count++;
		}
	}
	echo "</table>";
?>