<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template Plantilla</title>
	<link rel="stylesheet" href="views/css/styles.css">
</head>
<body>
	<header>
		<h1>Logotipo</h1>
		<?php include "modules/navegacion.php" ?>
	</header>
	<section>
		<?php 
			$mvc = new ControllerMVC();
			$mvc-> linkToPagesController();
		?>

	</section>
</body>
</html> 