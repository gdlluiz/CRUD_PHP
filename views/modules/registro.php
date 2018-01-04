<h1>REGISTRO</h1>
<form method="post">
	<input type="text" placeholder="Usuario" name="user" required>
	<input type="password" placeholder="Contraseña" name="password" required>
	<input type="email" placeholder="usuario@mail.com" name="email" required>
	<input type="submit" value="Registar">
</form>

<?php
	$registo = new ControllerMVC();
	$registo->userRegisterController();
	if(isset($_GET["action"])){
		if($_GET["action"] == "ok"){
		echo "Registro  exitoso";
	}
	}
	
?>