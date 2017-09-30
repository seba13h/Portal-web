<?php
	
	$databaseConfig = array(
	    "host" => "localhost",
	    "username" => "root",
	    "password" => "",
	    "db" => "mantenedor_alumnos"
	);

	Class Connection{

		private static $instance;
		private $db;

		private function __construct($host, $username, $password, $db){
			$this->db = new mysqli($host, $username, $password, $db);
		}

		public static function open(){
			if(self::$instance == null){
				$klass = __CLASS__;
				global $databaseConfig;
				self::$instance = new $klass(
					$databaseConfig['host'],
					$databaseConfig['username'],
					$databaseConfig['password'],
					$databaseConfig['db']
				);
				return self::$instance;
			}
		}

		public function query($query){
			$result = $this->db->query($query);
			$arr = array();

			while ($obj = $result->fetch_object()){
				$arr[] = $obj;
			}

			mysqli_free_result($result);
			return $arr;
		}

		public function statement($statement){
	        $this->db->query($statement);
	    }

	    public function __destruct(){
	        $this->db->close();
	    }

	}
?>
