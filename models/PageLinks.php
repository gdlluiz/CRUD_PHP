<?php
	class PageLinks{

		#GENERACION DE VISTA
		#-------------------------------------------	
		public function linkToPagesModel($url){
			switch ($url) {
				case 'editar':
				case 'ingresar':
				case 'registro':
				case 'salir':
				case 'usuarios':
					# selecciono el modulo que se necesita
					$module = "views/modules/".$url.".php";
					break;
				case 'index':
					$module = "views/modules/registro.php";
					break;
				case 'ok':
					$module = "views/modules/registro.php";
					break;
				case 'fallo':
					$module = "views/modules/ingresar.php";
					break;
				default:
					# white list
					$module = "views/modules/registro.php";

					break;
			}
			return $module;
		}

		
		
	}
?>
