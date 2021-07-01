<?php
	require ('conexion.php');
	
	$id_comuna = $_POST['cbx_comuna'];
	$sql       = "INSERT INTO datos (id_comuna) VALUES('$id_comuna')";
	$resultado = $mysqli->query($sql);
	
	if($resultado){
		echo "¡Domicilio registrado con éxito!";
		} 
		else {
		echo "Error al Registrar. Intente nuevamente.";
	}

?>

<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
	
		<title>Chile</title>

	</head>
	
	<body>

	<img src="css/5.gif" alt="gif"> 

	</body>
	
</html>