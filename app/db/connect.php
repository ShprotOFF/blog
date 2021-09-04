<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'Имя базы данных';
$db_user = 'Имя пользователя базы данных';
$db_pwd = 'Пароль пользователя базы данных';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
	$pdo = new PDO(
		"$driver:host=$host;dbname=$db_name;charset=$charset",
		$db_user, $db_pwd, $options
	);
} catch (PDOException $i){
	die("Ошибка подключения к базе данных");
}

?>