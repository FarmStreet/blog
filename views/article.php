<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Мой первый блог</title>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<header>
		<?php
		require('models\articleHead.php');
		?>
		</header>
		<div class="container">
			<h1>Мой первый блог</h1>
			<div>
				<div class="article">
				<?php
				article_one();
				?>
				</div>
			</div>
			<a href="index.php">Вернуться на главную страницу</a>
			<footer>
				<p>Мой первый блог<br>Copyright &copy; 2015</p>
			</footer>
		</div>
	</body>
</html>