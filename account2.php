<?php 
	$img_direct = "img/";//папку куда их загружать
	$img_name = $img_direct . basename($_FILES["avatarka"]["name"]);//путь куда сохранится файл сполным назваием
	$upload = move_uploaded_file($_FILES["avatarka"]["tmp_name"], $img_name);
	$con = mysqli_connect('127.0.0.1', 'root', '', 'vka');
	if ($upload==true) {
		$query = mysqli_query($con,"UPDATE users SET avatar='{$img_name}' WHERE id = {$_POST['id']}	");
		header("Location: account.php");
	}
 ?>