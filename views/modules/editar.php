<h1>EDITAR USUARIO</h1>

<form method="post">
	<input type="text" value="" name="user" required>
	<input type="text" value="" name="password" required>
	<input type="email" value="" name="email" required>
	<input type="submit" value="Actualizar">
</form>

<?php
$edit = new ControllerMVC();
$edit->editUserController();

?>