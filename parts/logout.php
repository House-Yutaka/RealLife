<?php
	session_start();
	$_SESSION = array();
	session_destroy();
	$url = $_SERVER['HTTP_REFERER'];
  	header("Location: ".$url, true, 303);
?>