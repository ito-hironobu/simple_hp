<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
	<title>伊藤の部屋</title>
	<script type="text/javascript" src="./jquery/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="./jquery/jquery.cookie.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/arrangement.css">
	<script type="text/javascript" src="./js/flash.js"></script>
	<script type="text/javascript" src="./js/counter.js"></script>
</head>

<body onLoad="disp(); counter();">

	<h1><div id="ito"></div></h1>
	<?php
	try{
		$pdo = new PDO('mysql:host=localhost; dbname=simple_hp; charset=utf8', 'itou', 'itou');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		print "接続しました。";
	}catch(PDOException $Exception){
		die('接続エラー：'. $Exception->getMessage());
	}
	?>
	<div id="counter"></div>

</body>
</html>
