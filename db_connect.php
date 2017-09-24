<?php 
//mysql接続確認
$dsn = 'mysql:dbname=seego;host=localhost';
$user = 'root';
$passward = '';
$dbh = new PDO($dsn,$user,$passward);
$dbh->query('set NAMES utf8');

 ?>