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
			$stmt = Connection::connect()->prepare("SELECT * FROM $table WHERE id = :id");
			$stmt->bindParam(":id", $data, PDO::PARAM_INT);
			if($stmt->execute()){
				return $stmt->fetch();
			}
			else{
				return "error";
			}
			$stmt->close();
		}

		# ACTUALIZAR USUARIO
		#-------------------------------------------
		public function updateUserModel($data, $table){
			$stmt = Connection::connect()->prepare("UPDATE $table SET name = :name, password = :password, email= :email WHERE id = :id");
			$stmt->bindParam(":name", $data["user"], PDO::PARAM_STR);
			$stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
			if($stmt->execute()){
				return "success";
			}
			else{
				return "error";
			}
			$stmt->close();
			
		}

		# BORRAR USUARIO
		#-------------------------------------------

		public function deleteUserModel($data, $table){
			$stmt = Connection::connect()->prepare("DELETE FROM $table WHERE id = :id");
			$stmt->bindParam(":id", $data, PDO::PARAM_INT);
				if($stmt->execute()){
				return "success";
			}
			else{
				return "error";
			}
			$stmt->close();
			
		}
	}

?>