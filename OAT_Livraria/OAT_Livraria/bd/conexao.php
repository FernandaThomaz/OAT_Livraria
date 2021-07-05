<?php

$dsn = 'mysql:dbname=livraria;host=127.0.0.1;charset=utf8';
$user = 'root';
$password = 'root';

try{
  $conn = new PDO($dsn, $user, $password);
}catch (PDOException $e){
  die('DB Error: ' . $e->getMessage());
}

?>