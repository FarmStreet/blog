<?php
	if ( isset($_GET['action']) )
		$action = $_GET['action'];
	else
		$action = "";

	if ( $action == "add" ) {
		header("location: add.php");
	}
	elseif ( $action == "edit" ) {
		header('location: edit.php?id='.$_GET['id'].'');
	}
	elseif ( $action == "delete" ) {
		articles_delete();
	}