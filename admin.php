<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	include_once("managers/student_manager.php");
	require_once("config/no_url.php");
    $students = StudentManager::findAllStudents("");
	include_once("templates/admin_tpl.php");
?>
