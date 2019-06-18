<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		extract($_POST);
		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved";
		header('location: index.php');
	}

	if (isset($_POST['update'])) {
	extract($_POST);

	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: index.php');

    }
	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!";
	header('location: index.php');
		
	}
	$result= mysqli_query($db,"select * from info");
?>