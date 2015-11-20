<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="inicio/tabla.css" rel="stylesheet" type="text/css">
	<script src="inicio/tabla.js"></script>
</head>
<body>





<!-- Inicio de codigo en PHP -->
	<?php

	include("bd/conexion.php");	  
	$NuevaConexion = new BD;
	$NuevaConexion->Conexion(); 
	$NuevaConexion->Consulta("SELECT * FROM arreglo");
	$Resultado = $NuevaConexion->getResultado();
	$NuevaConexion->cerrarConexion();

			echo '<br></br>';
			echo '<table id="tabla">';		

	for ($i=0; $i<3 ; $i++){  

   			echo "<tr>";

	   	for ($j=0; $j<3 ; $j++) { 

	   		$row = mysql_fetch_row($Resultado);
			echo "<td id='celda'><img id='imagen' src='$row[3]'>";
			echo "<br>$row[1]";
			echo "<br>$row[2]";
			echo "<br><button type='submit' 
					  name='carrito' 
					  id='$row[0]' 
				      onclick='agregar_carrito(this.id)'>
				      Agregar a Carrito</button></td>";	 				  		   	
		}
			echo '</tr>';
	}	 
			echo '</table>';
	?>
<!-- Final de codigo en PHP -->
	<br>
	<br>
	<div id="armaArre"> ARMA TU ARREGLO </div>
</body>
</html>

