<?php

$db_type = "mysql";
$db_host = "localhost";
$db_name = "simple_hp";
$db_user = "itou";
$db_pass = "itou";
$dsn = "$db_type: host=$db_host; dbname=$db_name; charset=utf8";

// PDO接続
try{
	$pdo = new PDO($dsn, $db_user, $db_pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	print "接続しました。";
}catch(PDOException $Exception){
	die('接続エラー：'. $Exception->getMessage());
}

// DBに訪問者数の挿入処理
try{
	$sql = "INSERT INTO visitors () VALUES ()"; // auto_increment指定のtotal_visitorsを増やす
	$stmh = $pdo->prepare($sql);
	$stmh->execute();
}catch(PDOException $Exception){
	$pdo->rollBack();
	print "エラー：". $Exception->getMessage();
}