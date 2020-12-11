<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','vka');
		$query = mysqli_query($con, "UPDATE users SET phone = '{$_GET["phone"]}', email = '{$_GET["email"]}', name = '{$_GET["name"]}', surname = '{$_GET["surname"]}', city = '{$_GET["city"]}', education = '{$_GET["educ"]}', password = '{$_GET["pass"]}' WHERE id = " .$_GET['id']. " ");
		header("Location: account.php")
?>