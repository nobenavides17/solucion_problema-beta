<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/usuarios.privilegios.css">
<link rel="stylesheet" type="text/css" href="css/agregar.producto.css">

<script type="text/javascript" src="js/agregar.producto.inventario.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Agregar Productos a Inventario</h5></center>

			<br>
			<a onclick='redireccion("listado.productos.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Lista de Productos</button></a>
			<a onclick='redireccion("agregar.producto.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Agregar Producto</button></a>
			<br><br>
			<div id="datos-producto">
				<fieldset >
					<legend>Datos del Producto:</legend>
					<form id="form_add_producto">
						<div class="row">
							<div class="col-md-5 input-field">      
				                 <label for="username">Código</label>
				                 <input name="producto" id="producto" type="text" placeholder="Nombre del Producto" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-11 input-field">      
				                 <table id="listado">
				                 	<thead>
				                 		<tr>
				                 			<th>Codigo</th>
				                 			<th>Descripción</th>
				                 			<th>Marca</th>
				                 			<th>Presentación</th>
				                 			<th>Prec. Venta</th>
				                 			<th>Acción</th>
				                 		</tr>
				                 	</thead>
				                 	<tbody id="tbody">
				                 		
				                 	</tbody>
				                 </table>
		              		</div>
						</div>
						
						
						<input name="action" type="hidden" value="agregar_producto_inventario"> 
		              	
					</form>
				</fieldset>
				
			</div>
			<br>
			
			<br><br>
			<div id="buttons">
				<center><a onclick="ingresarProductos();"><button  class="btn waves-effect waves-light waves-teal " type="submit">REGISTRAR PRODUCTO<i class="material-icons right">send</i></button></a>
</center>
				
			</div>
			
		</div>




<?php include("footer.php");?>