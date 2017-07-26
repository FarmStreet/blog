<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Добавить статью</title>
		<link rel="stylesheet" href="../main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	</body>
		<div class="container">
			<h1>Добавить статью</h1>
			<a style="color:green"><?=$attention?></a>
			<form method="post" action="">
				<label>Название<input type="text" name="title" class="form-item" autofocus required></label><br>
				<label>Дата<input type="date" name="date" class="form-item" required></label><br>
				<label>Содержание<textarea name="content" class="form-item" required></textarea></label><br>
				<input type="submit" value="Добавить" class="btn" name="save">
			</form>
		<a href="../admin/index.php">Вернуться</a>
		</div>
</html>