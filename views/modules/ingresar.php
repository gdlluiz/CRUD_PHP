<h1>INGRESAR</h1>
<form method="post">
	<input type="text" placeholder="Usuario" name="user" required>
	<input type="password" placeholder="Contraseña" name="password" required>
	<input type="submit" value="Ingresar">
</form>

<?php
	$ingreso = new ControllerMVC();
	$ingreso->loginController();

	if(isset($_GET["action"])){
		if($_GET["action"] == "fallo"){
			echo "Usuario o contraseña incorrecta";
		}
	}
?>