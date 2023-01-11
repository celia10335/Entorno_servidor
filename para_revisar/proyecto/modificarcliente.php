
<?php require_once 'includes/cabecera.php'; ?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
<div id="buscarId">	

	<form action="buscarporid_bknd.php" method="POST">
 
		<p>Introduzca el id del cliente que se desea actualizar</p>

		<div class="m1">
			<div>
			<label for="idCliente">Id de cliente:</label>
		<input type="number" name="idCliente"  />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idCliente') : ''; ?>
			</div>
			<div>
			<input type="submit" value="Buscar" />
			</div>

		</div>

	</form>

</div>

<div id="cambiarDatos">

<?php
if (isset($_SESSION["clienteAModificar"])){
	echo 'Me ha llegado info de alguien';
	$cliente=$_SESSION["clienteAModificar"];
} else {
	$cliente['idCliente'] = "";
	$cliente['nombre'] = "";
	$cliente['apellido1']="";
	$cliente['apellido2']="";
	$cliente['tlf']="";
	$cliente['email']="";
}
?>


<form action="modif_cliente_bknd.php" method="POST">

		<input type="hidden" name="idCliente" value="<?=$cliente['idCliente']?>"/>
				
		<p>Introduzca los datos que desea actualizar</p>
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" value="<?=$cliente['nombre']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
		

		<label for="apellido1">Primer apellido:</label>
		<input type="text" name="apellido1" value="<?=$cliente['apellido1']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellido1') : ''; ?>
		

		<label for="apellido2">Segundo apellido:</label>
		<input type="text" name="apellido2" value="<?=$cliente['apellido2']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellido2') : ''; ?>


		<label for="tlf">Teléfono móvil:</label>
		<input type="number" name="tlf" value="<?=$cliente['tlf']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'tlf') : ''; ?>
		
		
		<label for="e_mail">E-mail:</label>
		<input type="email" name="e_mail" value="<?=$cliente['email']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'e_mail') : ''; ?>
		
		
		<input type="submit" value="Actualizar datos" />
	</form>

</div>

	
	<?php borrarErrores();
	

	//Borrar datos de la sesión
	if(isset($_SESSION['clienteAModificar'])){
		$_SESSION['clienteAModificar'] = null;
	}
	
	?>

</div> <!--fin principal-->