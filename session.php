<?php
session_start();

if (!isset($_SESSION['login']) || ($_SESSION['pass'] == '')) {
	header("location:index.php");
	exit();
	
}

?>
