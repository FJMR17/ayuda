<html>
<head>
	  <link href="seccionPago/seccionPago.css" rel="stylesheet" type="text/css" />
</head>
<section id="sectionleft">

				<h1 id="tituloh1">1. Datos Personales</h1>
				<br>
				<label>Nombre *</label>
				<input type="text" class="txtNombre" placeholder="Ingresa tu nombre  " />
				<br></br>
				<label>Apellido Paterno *</label>
				<input type="text" class="txtPaterno" placeholder="Ingresa tu apellido Paterno  " />
				<br></br>
				<label>Apellido Materno</label>
				<input type="text" class="txtMaterno" placeholder="Ingresa tu apellido Materno  " />
				<br></br>
				<label>Direccion</label>
				<input type="text" class="txtDireccion" placeholder="Ingresa tu direccion  " />
				<br></br>
				<label>Telefono</label>
				<input type="text" class="txtTelefono" placeholder="Ingresa tu telefono  " />
				<br></br>
				<label>Celular *</label>
				<input type="text" class="txtCelular" placeholder="Ingresa tu celular  " />
				<br></br>
				<label>E-mail *</label>
				<input type="text" class="txtEmail" placeholder="Ingresa tu e-mail  " />
				<br></br>

				<h1 id="tituloh1">2. Descripcion de pedido</h1>
				<br></br>
				<h3 id="tituloh1">Información sobre el pedido</h3>
				<br></br>
				<div align="center"><img src="seccionPago/arreglo.jpg" width="150"></div>
				<br></br>
				<h3 id="tituloh1">Desea agregar un mensaje personalizado en su tarjeta</h3>
				<br></br>
				<input id="cajaText" type="text" class="txtMsj" placeholder="        Escriba aqui su mensaje" />
				<br></br>

				<h1 id="tituloh1">3. Forma de pago</h1>
				<br>
				<label>Nombre en la tarjeta *</label>
				<input type="text" class="txtNombreT" placeholder="Ingresa el nombre que aparece en la tarjeta " />
				<br></br>
				<label>Tipo de Tarjeta*</label>
				<select>
						<option>Credito</option>
						<option>Debito</option>
				</select>			
				<br></br>
				<label>Numero de la tarjeta</label>
				<input type="num" class="numTarjeta" placeholder="Ingresa el numero " />
				<br></br>
				<label>Vigencia</label>
				<form action="" method="">
					<input type="date">
				</form>
				<br>
				<label>Numero de verificacion de la tarjeta</label>
				<input type="num" class="numVerificacion" placeholder="Ingresa el numero de verificacion " />
				<br></br>
				<br></br>

				<h1 id="tituloh1">4. Datos de envio</h1>
				<br>
				<label>Nombre *</label>
				<input type="text" class="txtNombreE" placeholder="Ingresa tu nombre  " />
				<br></br>
				<label>Apellido Paterno *</label>
				<input type="text" class="txtPaternoE" placeholder="Ingresa tu apellido Paterno  " />
				<br></br>
				<label>Apellido Materno</label>
				<input type="text" class="txtMaternoE" placeholder="Ingresa tu apellido Materno  " />
				<br></br>
				<label>Delegacion *</label>
				<input type="text" class="txtDelegacionE" placeholder="Ingresa tu direccion  " />
				<br></br>
				<label>Direccion *</label>
				<input type="text" class="txtDireccionE" placeholder="Ingresa tu direccion  " />
				<br></br>
				<label>Telefono </label>
				<input type="text" class="txtTelefono" placeholder="Ingresa tu telefono  " />
				<br></br>
				<label>Celular *</label>
				<input type="text" class="txtCelular" placeholder="Ingresa tu celular  " />
				<br></br>
				<label>E-mail *</label>
				<input type="text" class="txtEmail" placeholder="Ingresa tu e-mail  " />
				<br></br>
				<label>Seleccione la fecha de envio</label>
				<form action="" method="">
					<input type="date">
				</form>	
				<br></br>
				<br></br>
				<a id="boton" href="">CANCELAR</a>
				<a id="boton" href="">PAGAR</a>
	</section>
</html>