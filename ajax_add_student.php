<?php 
	
	require_once("managers/student_manager.php");

	$names = $_POST['nombres'];
	$last_names = $_POST['apellidos'];
	$grade = $_POST['curso'];
	$rut = $_POST['rut'];

	StudentManager::addStudent($rut, $names, $last_names, $grade);
	$response = array(
		"rut"=>$rut,
		"names"=>$names,
		"lastNames"=>$last_names,
		"grade"=>$grade
	);

	header("Content-type: application/json");
	echo json_encode($response);

?>