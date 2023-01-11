<?php require_once 'includes/cabecera.php'; ?>
		

<div id="principal">
	 <h2> Clientes </h2>

	 
	
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
		$clientes = obtenerClientes($db);
		if(!empty($clientes)){
		while($cliente = mysqli_fetch_assoc($clientes)){
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
		} //Fin while
		} //Fin if
	?>
	
	</table>
	
</div> 



		</div>
		
	</body>
</html>
