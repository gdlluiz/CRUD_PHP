<h1>REGISTRO</h1>
<form method="post" onsubmit="return validarRegistro()">
	<label for="user">Usuario</label>
	<input type="text" placeholder="Max 6 caracteres" name="user" id="usuario" required>
	
	<label for="password">Contraseña</label>
	<input type="password" placeholder="Minimo 8 caracteres, incluir numero(s) y mayuscula" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" id="password" required>
	
	<label for="email">Correo</label>
	<input type="email" placeholder="usuario@mail.com" name="email" id="email" required>

	<p style="text-align: center"><input type="checkbox" id="terms"><a href="#">Acepto terminos y condiciones</a></p>
	
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