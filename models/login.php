<?php
	session_start();
	$data = $_POST;	
	require('database.php');
	if ( isset($data['save']) ) {
		$errors = array();
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user ) {
			if ( password_verify($data['password'], $user->password) ) {
				$_SESSION['logged_user'] = $user;
				$attention = 'Вы авторизованы!';
			} else {
				$errors[] = 'Вы ввели неверный пароль!';
			}
		} else {
			$errors[] = 'Пользователя с таким логином не существует';
		}

		if ( ! empty($errors)) {
			$attention = '$errors[1]';
		}
		else {
			$attention = 'Вы успешно вошли!';
		}
	}
?>