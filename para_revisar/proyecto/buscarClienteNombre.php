
<?php require_once 'includes/cabecera.php';

?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
<div id="buscarId">	

	<form action="buscarClienteNombre_bknd.php" method="POST">
	
 
		<p>Introduzca el nombre y primer apellido del cliente</p>

		<div class="m1">
			<div>
		<label for="nombre">Nombre de cliente:</label>
		<input type="text" name="nombre"  />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

		<label for="apellido1">Primer apellido:</label>
		<input type="text" name="apellido1"  />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'apellido1') : ''; ?>
			</div>
			<div>
			<input type="submit" value="Buscar" />
			</div>

		</div>

	</form>


<div>

<h2> Resultado </h2>
	
<table class="styled-table">
 <tr>
 <th>idCliente </th>
 <th>Nombre </th>
 <th>Primer apellido </th>
 <th>Segundo apellido </th>
 <th>Teléfono </th>
 <th>E-mail </th>

 </tr>
 
<?php 

	if (isset($_SESSION["clientePorNombre"])) {
		$cliente =  $_SESSION['clientePorNombre'];
	
	} else {
		$cliente['idCliente'] = "";
		$cliente['nombre'] = "";
		$cliente['apellido1']="";
		$cliente['apellido2']="";
		$cliente['tlf']="";
		$cliente['email']="";
	}

	if(!empty($cliente)){


?>
			  <tr>
				
				<td><?=$cliente['idCliente']?></td>
				<td><?=$cliente['nombre']?></td>
				<td><?=$cliente['apellido1']?></td>
				<td><?=$cliente['apellido2']?></td>
				<td><?=$cliente['tlf']?></td>
				<td><?=$cliente['email']?></td>
				
				
			</tr>
			
<?php
	
	} //Fin if
?>

</table>
	
</div> 

	<?php borrarErrores();
	
	//Borrar datos de la sesión
	if(isset($_SESSION['clientePorNombre'])){
		$_SESSION['clientePorNombre'] = null;
	}
	
	?>

</div> <!--fin principal-->