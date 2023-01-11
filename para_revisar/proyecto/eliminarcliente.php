
<?php require_once 'includes/cabecera.php'; ?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
	<br/>
	<form action="borracliente.php" method="POST">
		<label for="idCliente">ID de cliente a eliminar:</label>
		<input type="text" name="idCliente" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'idCliente') : ''; ?>
			
		<input type="submit" value="Eliminar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->