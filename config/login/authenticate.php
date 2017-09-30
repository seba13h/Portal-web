<?php

	$admin_receive = "MentalChaos";
	$passw_receive = "qwe";

	$login = AdminManager::findByUsernameAndPassword($admin_receive, $passw_receive);

	if($login!=null){
		session_start();
		$SESSION['name'] = $login->name;
		print_r( "Bienvenido ". $SESSION['name']);
	}

?>
