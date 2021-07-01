<?php
	require ('conexion.php');

	$resultado  = $mysqli->query($query);
	$row        = $resultado->fetch_array();
	$region     = $row['id_region'];
	$comuna     = $row['id_comuna'];
	
	$queryR     = "SELECT id_region, region FROM regiones ORDER BY region";
	$resultadoR = $mysqli->query($queryR);
	
	$queryC     = "SELECT id_comuna, comuna FROM comunas WHERE id_region = '$id_region' ORDER BY comuna";
	$resultadoC = $mysqli->query($queryC);

?>
