<?php 

	require_once('./config/connection/connection.php');

	class AdminManager{

		public static function allAdmin(){
			$connection = Connection::open();
			$res = $connection->query("SELECT * FROM admin");
			return $res;
		}


		public static function findByUsernameAndPassword($username, $password){
			$connection = Connection::open();
			$res = $connection->query(
				"SELECT * FROM admin WHERE name='$username' AND pass='$password'"
			);
			return $res[0] ? $res[0]:null;
		}

	}

?>
