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

// Запись в таблицу БД;
function insert($table, $param){
	global $pdo;
	$i = 0;
	$coll = '';
	$mask = '';
	foreach($param as $key => $value){
		if($i === 0){
			$coll = $coll . "$key";
			$mask = $mask . "'" . "$value" . "'";
		}else{
			$coll = $coll . ", $key";
			$mask = $mask . ", '" . "$value" . "'";
		}
		$i++;
	}


	$sql = "INSERT INTO $table ($coll) VALUES ($mask)";

	// test($sql);
	// exit();

	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckErr($query);
}


// Обновление строки в БД;
function update($table, $id, $param){
	global $pdo;
	$i = 0;
	$str = '';
	foreach($param as $key => $value){
		if($i === 0){
			$str = $str . $key . " = '" . $value . "'";
		}else{
			$str = $str . ", " . $key . " = '" . $value . "'";
		}
		$i++;
	}


	$sql = "UPDATE $table SET $str WHERE id = $id";

	// test($sql);
	// exit();

	$query = $pdo->prepare($sql);
	$query->execute($parametr);
	dbCheckErr($query);
}

// Удаление из БД;
function delete($table, $id){
	global $pdo;

	$sql = "DELETE FROM $table WHERE id = $id";

	$query = $pdo->prepare($sql);
	$query->execute();
	dbCheckErr($query);
}

delete('users', 12)

?>