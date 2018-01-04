<?php

	session_start();
	if(!$_SESSION["validar"]){
		header("location:index.php?action=ingresar");

		#finalizo script
		exit();
	}
?>

<h1>USUARIOS</h1>
<table border="1">
	<thead>
		<tr>
			<th>Usuario</th>
			<th>Email</th>
			<th>Password</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
	$lista = new ControllerMVC();
	$lista->userListController();


?>
	</tbody>
</table>

