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
}catch(PDOException $Exception){
  die('接続エラー：'. $Exception->getMessage());
}

// DBに訪問者数の更新処理
try{
  $visitors_num = DB::table('visitors')->where('id', 1)->value('total_visitors');
  if( $visitors_num == NULL ){
    $visitors_num = 1;
    $sql = "INSERT INTO visitors (total_visitors) VALUES ($visitors_num)";
  }else{
    $visitors_num++;
    $sql = "UPDATE visitors SET total_visitors = ". $visitors_num. " WHERE id = 1";
  }
  $stmh = $pdo->prepare($sql);
  $stmh->execute();
}catch(PDOException $Exception){
  $pdo->rollBack();
  print "エラー：". $Exception->getMessage();
}