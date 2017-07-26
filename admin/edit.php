<?php
	require('..\models\logic.php');
	$article = R::load('article', $_GET['id']);
	if (isset($_POST['edit'])) {
		articles_edit();
	}
	require('..\views\edit.php');
?>