
<?php require_once 'includes/cabecera.php';

?>	

<!-- CAJA PRINCIPAL -->
<div id="principal">
	
<div id="buscarId">	

	<form action="#" method="POST">
 
		<p>Introduzca tipo de producto a buscar (falda, bllusa...)</p>

		<div class="m1">
			<div>
		<label for="nombre">Tipo de prenda:</label>
		<input type="text" name="nombre"  />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'nombre') : ''; ?>

		<label for="pvp_min">Precio mínimo:</label>
		<input type="num" name="pvp_min"  />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'pvp_min') : ''; ?>
			
	
		<label for="pvp_max">Precio máximo:</label>
		<input type="num" name="pvp_max"  />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'pvp_max') : ''; ?>
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
 <th>idProducto </th>
 <th>Nombre </th>
 <th>Descripción </th>
 <th>P.V.P. </th>
 <th>Stock </th>

 </tr>
 
<?php 

	$nombre = $_POST['nombre'];
	$pvp_min = $_POST['pvp_min'];
	$pvp_max = $_POST['pvp_max'];
	
 

 $sql = "SELECT * from producto where nombre like '%$nombre%' and pvp between '$pvp_min' and '$pvp_max';";
      
 $consultaProducto = mysqli_query($db, $sql);

 $resultado = [];
 
 if($consultaProducto && mysqli_num_rows($consultaProducto) == 1) {
	 $resultado = $consultaProducto;

 } else {

	$_SESSION["errores_entrada"] = $errores;
	var_dump($_SESSION);

 }


	if(!empty($consultaProducto)){
	while($producto = mysqli_fetch_assoc($resultado)){
?>
			  <tr>
				
				<td><?=$producto['idProducto']?></td>
				<td><?=$producto['nombre']?></td>
				<td><?=$producto['descripcion']?></td>
				<td><?=$producto['pvp']?></td>
				<td><?=$producto['stock']?></td>
				
				
			</tr>
			
<?php
	} //Fin while
	} //Fin if
?>

</table>
	
</div> 


	<?php borrarErrores();
	

	//Borrar datos de la sesión
	if(isset($_SESSION['productoPorNombre'])){
		$_SESSION['productoPorNombre'] = null;
	}
	
	?>

</div> <!--fin principal-->