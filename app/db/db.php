<?php

require "connect.php";

function test($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

// Проверка выполнения запроса к БД;
function dbCheckErr($query){
	$errInfo = $query->errorInfo();
	if($errInfo[0] !== PDO::ERR_NONE){
		echo $errInfo[2];
		exit();
	}
	return true;
}

// Запрос на получение данных одной таблицы;
function selectAll($table){
	global $pdo;
	$sql = "SELECT * FROM $table";
	if(!empty($param)){
		$i = 0;
		foreach ($param as $key => $value){
			if(!is_numeric($value)){
				$value = "'" . $value . "'";
			}
			if($i === 0){
				$sql = $sql . " WHERE $key => $value";
			}else{
				$sql = $sql . " AND $key => $value";
			}
			$i++;
		}
	}

	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckErr($query);
	return $query->fetchAll();
}


	// Запрос на получение данных одной строки с выбранной таблицы;
function selectOne($table){
	global $pdo;
	$sql = "SELECT * FROM $table";
	if(!empty($param)){
		$i = 0;
		foreach ($param as $key => $value){
			if(!is_numeric($value)){
				$value = "'" . $value . "'";
			}
			if($i === 0){
				$sql = $sql . " WHERE $key => $value";
			}else{
				$sql = $sql . " AND $key => $value";
			}
			$i++;
		}
	}

	// $sql = $sql . " LIMIT 1";	
	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckErr($query);
	return $query->fetch();
}

$param = [
	'admin' => 1,
	'username' => 'Some'
];
test(selectOne('users'));
// test(selectAll('users'));

?>