
<?php require_once 'includes/cabecera.php'; ?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	<br/>
	<form action="addProducto_bknd.php" method="POST">
		<label for="idProducto">Id de producto:</label>
		<input type="number" name="idProducto" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idProducto') : ''; ?>
		

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>
		

		<label for="descripcion">Descripción:</label>
		<input type="text" name="descripcion" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		

		<label for="pvp">P.V.P.:</label>
		<input type="number" name="pvp" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'pvp') : ''; ?>


		<label for="stock">Stock:</label>
		<input type="number" name="stock" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'stock') : ''; ?>
	
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->