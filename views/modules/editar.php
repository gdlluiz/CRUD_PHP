<?php

	session_start();
	if(!$_SESSION["validar"]){
		header("location:index.php?action=ingresar");

		#finalizo script
		exit();
	}
?>

<h1>EDITAR USUARIO</h1>

<form method="post">
<?php
$edit = new ControllerMVC();
$edit->editUserController();
$edit->updateUserController();
?>
<input type="submit" value="Actualizar">
</form>

