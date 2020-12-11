<?php 
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '', 'vka');
$query = mysqli_query($con, "SELECT * FROM users WHERE email='{$_POST['email']}' AND password='{$_POST['pass']}'");
$stroka = $query->fetch_assoc();
$num = mysqli_num_rows($query);
if($num>0){
	header("Location: account.php");
	$_SESSION["id"] = $stroka["id"];
} else{
	header("Location: error.php");;
}
?>
