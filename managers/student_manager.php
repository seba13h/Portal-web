<?php 

	require_once realpath("config/connection/connection.php");

	class StudentManager{

		public static function findAllStudents(){
			$connection = Connection::open();
			$res = $connection->query("SELECT * FROM student ORDER BY curso ASC");

			return $res;			
		}

		public static function findStudentsByCurse($grade){
			$connection = Connection::open();
			$res = $connection->query("SELECT * FROM student WHERE curso='$grade' ORDER BY apellido ASC");

			return $res;			
		}

		public static function addStudent($rut, $names, $last_names, $grade){
			$connection = Connection::open();
			$res = $connection->statement(
				"INSERT INTO student(rut, nombre, apellido, curso)
				VALUES('$rut', '$names', '$last_names', '$grade')");

			return $rut;
		}

		public static function updateStudent($rut, $names, $last_names, $grade){
			$connection = Connection::open();
			$res = $connection->statement(
				"UPDATE student SET rut='$rut', nombre='$names', 
				apellido='$last_names', curso='$grade' WHERE rut='$rut'");

			return $rut;

		}

		public static function deleteStudent($rut){
			$connection = Connection::open();
			$res = $connection->statement("DELETE FROM student WHERE rut='$rut'");
		}

	}

?>