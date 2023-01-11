
<?php require_once 'includes/cabecera.php'; ?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	<br/>
	<form action="guardacliente.php" method="POST">
		<label for="idCliente">Id de cliente:</label>
		<input type="number" name="idCliente" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idCliente') : ''; ?>
		

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
		

		<label for="apellido1">Primer apellido:</label>
		<input type="text" name="apellido1" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellido1') : ''; ?>
		

		<label for="apellido2">Segundo apellido:</label>
		<input type="text" name="apellido2" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellido2') : ''; ?>


		<label for="tlf">Teléfono móvil:</label>
		<input type="number" name="tlf" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'tlf') : ''; ?>
		
		
		<label for="e_mail">E-mail:</label>
		<input type="email" name="e_mail" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'e_mail') : ''; ?>
		
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->