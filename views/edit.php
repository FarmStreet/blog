<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Отредактировать статью</title>
		<link rel="stylesheet" href="../main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
	</body>
		<div class="admin-table">
			<h1>Отредактировать статью</h1>
			<a style="color:green"><?=$attention?></a>
			<form class="admin-table" method="post" action="">
				<label>Название<input type="text" name="title" class="form-item" value='<?=$article->title?>' autofocus required></label><br>
				<label>Дата<input type="date" name="date" class="form-item" value="<?=$article->date?>" required></label><br>
				<label>Содержание<input type="text" name="content" class="form-item" value="<?=$article->content?>" required></label><br>
				<input type="submit" value="Редактировать" class="btn" name="edit">
			</form>
		<a href="../admin/index.php">Вернуться</a>
		</div>
</html>