<?php 
	
	require_once"connection.php";
	
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$contact_delete = "delete from contacts where contact_id = '$id'";

		$sql_contact_delete = $conn->query($contact_delete);

		header("Location: index.php");

	}
	
 ?>