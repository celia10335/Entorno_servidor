<?php require_once 'includes/cabecera.php'; ?>
		

<div id="principal">
	 <h2> Productos </h2>

	 
	
	<table class="styled-table">
	 <tr>
	 <th>ID producto </th>
	 <th>Nombre </th>
	 <th>Descripción </th>
	 <th>P.V.P. </th>
	 <th>Stock </th>

	 </tr>
	 
	<?php 
		$productos = obtenerProductos($db);
		if(!empty($productos)){
		while($product = mysqli_fetch_assoc($productos)){
	?>
				  <tr>
	
					<td><?=$product['idProducto']?></td>
					<td><?=$product['nombre']?></td>
					<td><?=$product['descripcion']?></td>
					<td><?=$product['pvp']?></td>
					<td><?=$product['stock']?></td>				
					
				</tr>
				
	<?php
		} //Fin while
		} //Fin if
	?>
	
	</table>
	
</div> 



		</div>
		
	</body>
</html>
