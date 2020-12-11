<?php 
	$connect = mysqli_connect("127.0.0.1","root","","vka"); 
	$zapros_vstavit = "INSERT INTO users (phone,email,name,surname,city,education,password,avatar) VALUES(' " . $_POST["phone"] . "', '" . $_POST["email"] . "', '" . $_POST["name"] . "', '" . $_POST["surname"] . "', '" . $_POST["city"] . "', '" . $_POST["educ"] . "', '" . $_POST["pass"] . "', '" . $_POST["img"] . "')";
	$zapros_new = mysqli_query($connect,$zapros_vstavit);
	header("Location: i.php")
?>