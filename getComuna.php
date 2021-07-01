<?php
	require ('conexion.php');
	
	$id_region  = $_POST['id_region'];
	
	$queryC     = "SELECT id_comuna, comuna FROM comunas WHERE region_id = '$id_region' ORDER BY comuna";
	$resultadoC = $mysqli->query($queryC);
	
	$html       = "<option value='0'>Seleccionar Comuna</option>";
	
	while($rowM = $resultadoC->fetch_assoc())
	{
		$html.= "<option value='".$rowM['region_id']."'>".$rowM['comuna']."</option>";
	}

	echo $html;
    
?>		