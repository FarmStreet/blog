<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Зарегистрироваться</title>
		<link rel="stylesheet" href="../main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	</body>
		<div class="container">
			<h1>Зарегистрироваться</h1>
			<a style="color:green"><?=$attention?></a>
			<form method="post" action="">
				<label>Введите логин:<input type="text" name="login" value="<?=$data['login']?>" class="form-item" autofocus required></label><br>
				<label>Введите пароль:<input type="password" name="password" class="form-item" required></label><br>
				<label>Повторите пароль:<input type="password" name="password2" class="form-item" required></input></label><br>
				<label>Введите Email:<input type="email" name="email" value="<?=$data['email']?>" class="form-item" required></label><br>
				<label>Введите дату рождения:<input type="date" name="date" value="<?=$data['date']?>" class="form-item" required></input></label><br>
<!--				<label>Загрузите аватар(желательно):<input type="image" name="avarar" class="form-item"></input></label><br> -->
				<input type="submit" value="Зарегистрироваться" class="btn" name="save">
			</form>
		<a href="..\index.php">Вернуться</a>
		</div>
</html>