<html >
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>LA FLOR FELIZ</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script src="inicio/tabla.js"></script>
</head>

<body>
<div id="wrap">
<div id="header">
<h1 id="sitename"><a href="index.php">La Flor Feliz</a></h1>
</div>
<div id="page"><div class="inner_copy"></div>
<?php include("menu.php"); ?>



<p>


<?php

$titulo = "Mi carrito";

?>
	<div id="derecha">
		<h1>Productos seleccionados</h1>
	
		<div class='text-border'>
		<?php
			
			/*MOSTRAR Carro*/
			echo "<table border=0 cellspacing=0 cellpadding=0 width='500'>";
				echo "<tr>";
					echo "<td align='left'>Nombre del producto</td>";
					echo "<td align='left'>Precio</td>";
					echo "<td align='right'><a href='#'>Seleccionar</a></td>";
				echo "</tr>";
				
				echo "<tr>
					<td colspan='5'><hr></td>
				     </tr>";
				echo "<tr>";
					echo "<td align='right' colspan='4'><b><br>Total = $$$ </b></td>";
				echo "</tr>";
				
				//BOTON COMPRAR
				echo "<tr>";
				echo "<td align='right' colspan='5'>
						<a href='comprar.php'><input type='button' value='finalizar compra' /></a>
				</td>";
				echo "</tr>";
				
				echo "</table>";
		
		?>
		</div> <!-- Cierro text-border -->
	</div> <!-- Cierro derecha -->

<?php
?>
</body>
</html>