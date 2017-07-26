<?php
	require('..\models\logic.php');
	if (isset($_POST['save'])) {
		articles_add();
	}
	require('..\views\add.php');
?>