<?php
	include '../database.php';
	include '../function.php';
	
	$db = new Database();
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM categories WHERE id='$id'";
		$run = $db->delete($query);
	}
	
?>