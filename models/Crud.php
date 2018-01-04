<?php
require_once "Connection.php";

	class Crud extends Connection{


		# REGISTRO CON EL USUARIO
		#-------------------------------------------

		public function userRegisterModel($data, $table){
			$stmt = Connection::connect()->prepare("INSERT INTO $table (name, password, email) VALUES(:name, :password, :email)");
			$stmt->bindParam(":name", $data["usuario"], PDO::PARAM_STR);
			$stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "success";
			}
			else{
				return "error";
			}
			$stmt->close();
		}


		# LOGIN DEL USUARIO
		#-------------------------------------------

		public function loginModel($data, $table){
			$stmt = Connection::connect()->prepare("SELECT name, password FROM $table WHERE name = :user");
			$stmt->bindParam(":user", $data["usuario"], PDO::PARAM_STR);
			if($stmt->execute()){
				return $stmt->fetch();
			}
			else{
				return "error";
			}
			$stmt->close();
		}

		# VISTA DE USUARIOS
		#-------------------------------------------

		public function userListModel($table){
			$stmt = Connection::connect()->prepare("SELECT * FROM $table");
			
			if($stmt->execute()){
				return $stmt->fetchAll();
			}
			else{
				return "error";
			}
			$stmt->close();
		}

			# EDITAR USUARIO
		#-------------------------------------------
		public function editUserModel($data, $table){
			
		}


	}

?>