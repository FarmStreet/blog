<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Войти</title>
		<link rel="stylesheet" href="../main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	</body>
		<div class="container">
			<h1>Войти</h1>
			<a style="color:green"><?=$attention?></a>
			<form method="post" action="">
				<label>Логин:<input type="text" name="login" class="form-item" autofocus required></label><br>
				<label>Пароль:<input type="password" name="password" class="form-item" required></label><br>
				<input type="submit" value="Войти" class="btn" name="save">
			</form>
		<a href="..\index.php">Вернуться</a>
		</div>
</html>