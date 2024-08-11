<?php 
	session_start();
	include("include/connection.php");
	$_SESSION['session'] = '' ;
	unset ($_SESSION['session']);
	header('location:index.php');
	exit;
?>