<?php
	session_start();

	if(!isset($_SESSION['email'])){
		header('location: login.php');
	}
	
	include 'includes/header.php';
	include 'includes/footer.php';

?>          
