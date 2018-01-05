<?php
	/**
	* Classe Controladora
	*/


	class ControllerMVC 
	{
		# LLAMADA A LA PLANTILLA
		#-------------------------------------------	
		public function template(){
			include "views/template.php";

		}


		# INTERACCION CON EL USUARIO
		#-------------------------------------------
		public function linkToPagesController(){
			if(isset($_GET["action"])){
				$urlController = $_GET["action"];
			}
			else{
				$urlController = "index";
			}

			$response = PageLinks::linkToPagesModel($urlController);
			include($response);
		}

		# REGISTRO DEL USUARIO
		#-------------------------------------------

		public function userRegisterController(){
			if(isset($_POST["user"])){
				$data = array("usuario"=>$_POST["user"], 
							"password"=>$_POST["password"], 
							"email"=>$_POST["email"]);
			
				$response = Crud::userRegisterModel($data, "usuarios");

				if($response == "success"){
					header("location:index.php?action=ok");
				}
			}

			
		}

		# LOGIN DEL USUARIO
		#-------------------------------------------

		public function loginController(){
			if(isset($_POST["user"])){
				$data = array("usuario"=>$_POST["user"], 
							"password"=>$_POST["password"]);

				$response = Crud::loginModel($data, "usuarios");
				
				if($response["name"] == $_POST["user"] &&  $response["password"] == $_POST["password"]){
					session_start();
					$_SESSION["validar"] = true;
					header("location:index.php?action=usuarios");
				}
				else{
					header("location:index.php?action=fallo");

				}
			}


		}
		# VISTA DE USUARIOS
		#-------------------------------------------
		public function userListController(){

			$response = Crud::userListModel("usuarios");

			foreach ($response as $row => $item) {
				echo '<tr>
					<td>'.$item["name"].'</td>
					<td>'.$item["email"].'</td>
					<td>'.$item["password"].'</td>
					<td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
					<td><a href="index.php?action=usuarios&idBorrar='.$item["id"].'"><button>Eliminar</button></a></td>
				</tr>';
			}
		}

		# EDITAR USUARIO
		#-------------------------------------------

		public function editUserController(){
			$data = $_GET["id"];
			$response = Crud::editUserModel($data, "usuarios");

			echo '	<input type="hidden" value="'.$response["id"].'" name="id" required>
					<input type="text" value="'.$response["name"].'" name="user" required>
					<input type="text" value="'.$response["password"].'" name="password" required>
					<input type="email" value="'.$response["email"].'" name="email" required>';
		}


		# ACTUALIZAR USUARIO
		#-------------------------------------------

		public function updateUserController(){
			if(isset($_POST["user"])){
				$data = array(	"id"=>$_POST["id"],
								"user"=>$_POST["user"],
								"password"=>$_POST["password"],
								"email"=>$_POST["email"]);
				$response = Crud::updateUserModel($data, "usuarios");

				if($response == "success"){
					header("location:index.php?action=cambio");

				}
				else{
					echo "Error al actualizar";
				}
			}
		}


		# BORRAR USUARIO
		#-------------------------------------------

		public function deleteUserController(){
			if(isset($_GET["idBorrar"])){
				$data = $_GET["idBorrar"];
				$response = Crud::deleteUserModel($data, "usuarios");

				if($response == "success"){
					header("location:index.php?action=usuarios");

				}
			}
		}

	}

	

?>