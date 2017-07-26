<?php
require('rb.php');
$db = R::setup('mysql:host=127.0.0.1;dbname=Blog',
        'root','');
If ( !R::testConnection() ) 
{
	exit('Нет подключения к базе данных!');
}