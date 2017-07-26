<?php
session_start();
?>
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
			<a href="admin/index.php">Админ панель</a>
			<div>
				<div class="article">
				<?php
				page();
				article_many();
				?>
				</div>
			</div>
			<footer>
				<?php
				pageW();
				?>
				<p>Мой первый блог<br>Copyright &copy; 2015</p>
			</footer>
		</div>
	</body>
</html>