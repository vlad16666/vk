<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','vka');
		$query = mysqli_query($con, "SELECT * FROM users");
	 ?>

		 		


	<div class="col-7 mx-auto text-center pt-3">
		<form action="insert.php" method="POST">
			<input type="" name="phone" class="form-control col-7 mx-auto" placeholder="Телефон">
			<input name="email" class="form-control col-7 mx-auto mt-3" placeholder="email"></input>
			<input type="" name="name" class="form-control col-7 mx-auto mt-3" placeholder="Имя" >
			<input type="" name="surname" class="form-control col-7 mx-auto mt-3" placeholder="Фамилия"  >
			<input type="" name="city" class="form-control col-7 mx-auto mt-3" placeholder="Город">
			<input type="" name="educ" class="form-control col-7 mx-auto mt-3" placeholder="Образование">
			<input type="" name="pass" class="form-control col-7 mx-auto mt-3" placeholder="Пароль" >
			<input type="" name="img" class="form-control col-7 mx-auto mt-3" placeholder="Адрес картинки" >
			<button class="btn btn-primary col-7 mt-3 mx-auto">Сохранить изменения</button>
		</form>
	</div>
</body>
</html>
