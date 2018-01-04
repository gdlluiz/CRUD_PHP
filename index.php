<?php
# Muestra la salida de las vistas al usuario
#Manejara las peticiones del usuario al controlador

#Llamo al template
require_once "controllers/ControllerMVC.php";
require_once "models/PageLinks.php";
require_once "models/Crud.php";



$controller = new ControllerMVC();
$controller->template();

?>