<?php 

	include 'database.php';

	$id = $_POST['id'];

	$link->query("DELETE FROM person WHERE id = '".$id."'");