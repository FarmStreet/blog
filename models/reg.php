<?php
	require('database.php');
	$data = $_POST;
	If ( isset($data['save']) ) {
		$errors = array();
		$date = substr($data['date'], 0, 4);
		if( trim($data['login']) == "" || strlen(trim($data['login'])) > 20 ) {
			$errors[] = 'Логин не должен быть длиннее 20 символов!';
		}

		if( trim($data['password']) == "" || strlen(trim($data['password'])) > 25 ) {
			$errors[] = 'Пароль не должен быть длиннее 25 символов!';
		}

		if( trim($data['email']) == "" || strlen(trim($data['email'])) > 30 ) {
			$errors[] = 'Email не должен быть длиннее 30 символов!';
		}

		if ( $date > date('Y') || $date < 1900 ) {
			$errors[] = 'Введите год рождения больше 1900 и меньше '.date('Y').'!';
		}

		if( !preg_match('|^[A-Z0-9]+$|i', trim($data['login'])) ) {
			$errors[] = 'Логин содержит недопустимые символы!';
		}

		if( !preg_match('|^[A-Z0-9]+$|i', trim($data['password'])) ) {
			$errors[] = 'Пароль содержит недопустимые символы!';
		}

		if( $data['date'] == "" ) {
			$errors[] = 'Введите дату рождения';
		}

		if( $data['password'] != $data['password2'] ) {
			$errors[] = 'Неверный повтор пароля!';
		}

		if( R::count('users', "email = ?", array($data['email'])) > 0 ) {
			$errors[] = 'Пользователь с данной почтой уже занят!';
		}

		if( R::count('users', "login = ?", array($data['login'])) > 0 ) {
			$errors[] = 'Пользователь с данным логином уже занят!';
		}

		if ( empty($errors) ) {
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			$user->email = $data['email'];
			$user->dateBirth = $data['date'];
//			$user->image = $data['image'];
			R::store($user);
			$attention = '<div style="color:green;">Вы успешно зарегистрированны!</div>';
		} else {
			$attention = '<div style="color:red;">'.array_shift($errors).'</div>';
		}
	}
?>