<?php require_once 'includes/cabecera.php'; ?>
		

<div id="principal">
	 <h2> Resumen de pedidos </h2>

	
	<table class="styled-table">
	 <tr>
	 <th>ID pedido </th>
	 <th>Fecha de pedido </th>
	 <th>Total pedido </th>
	 <th>Cliente </th>

	 </tr>
	 
	<?php 
		$filaPedido = resumenPedidos($db);
		if(!empty($filaPedido)){
		while($fila = mysqli_fetch_assoc($filaPedido)){
	?>
				  <tr>
					
					<td><?=$fila['ID pedido']?></td>
					<td><?=$fila['Fecha de pedido']?></td>
					<td><?=$fila['Total pedido']?></td>
					<td><?=$fila['Cliente']?></td>
					
					
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
