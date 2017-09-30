<?php 
	
	require_once("managers/student_manager.php");
	
	$rut = $_GET['rut'];

	StudentManager::deleteStudent($rut);
	$response = array(
		"rut"=>$rut,
	);

	header("Content-type: application/json");
	echo json_encode($response);

	header('Location: admin.php');

?>