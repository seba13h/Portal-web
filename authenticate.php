<?php

	include_once("managers/admin_manager.php");

	$admin_receive = $_POST['name'];
	$passw_receive = $_POST['pass'];

	$login = AdminManager::findByUsernameAndPassword($admin_receive, $passw_receive);

	if($login!=null){
		session_start();
		$_SESSION['user_name'] = $login->name;
		// a qué pantalla va tras login
		header('Location: admin.php'); 		
	}else{
		$message = "usuario%20y%2Fo%20clave%20inv%C3%A1lidos";
		header('Location: login.php?message=' . $message);
	}

?>
