<?php
if ( !isset($_SESSION['logged_user']) ) 
{
	echo '<a class="pravo" href="..\reg.php">Зарегистрироваться</a>';
	echo '<br>';
	echo '<a class="pravo" href="..\login.php">Войти</a>';
}
else 
{
	echo 'Здравствуйте, <a href="..\profile.php">'.$_SESSION['logged_user']->login.'</a>';
	echo '<br><a href="..\models\logout.php">Выйти<a/>';
}
?>