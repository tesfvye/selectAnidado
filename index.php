<?php

	require('conexion.php');

	$query      = "SELECT id_region, region FROM regiones ORDER BY region";
	$resultado  = $mysqli->query($query);

?>

<html>

	<head>
	
		<title>Chile</title>
		<link rel="stylesheet" href="css/estilos.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8">
		
			$(document).ready(function(){
				$("#cbx_region").change(function () {
					$("#cbx_region option:selected").each(function () {
						id_region = $(this).val();
						$.post("getComuna.php", {id_region: id_region}, function(data){
							$("#cbx_comuna").html(data);
						});            
					});
				})
			});
		</script>
		
	</head>
	
	<body> 

    <h1>¿Donde Vives?</h1>



		<form id="combo" name="combo" action="guardar.php" method="POST">
            <div>Región: <select name="cbx_region" id="cbx_region">
				<option value="0">Seleccionar Región</option>
				<?php while($row = $resultado->fetch_assoc()) { ?>
					<option value="<?php echo $row['id_region']; ?>"><?php echo $row['region']; ?></option><?php } ?></select></div>
			<br>
			
			<div>Comuna: <select name="cbx_comuna" id="cbx_comuna"></select></div>
			<br>

			<input type="submit" id="enviar" name="enviar" value="Guardar" />

		</form>
        
	</body>

</html>
