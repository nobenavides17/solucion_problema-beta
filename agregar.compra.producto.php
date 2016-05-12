<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/usuarios.privilegios.css">
<link rel="stylesheet" type="text/css" href="css/agregar.producto.css">

<script type="text/javascript" src="js/agregar.compra.producto.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Agregar Compra de Producto</h5></center>

			<br>
			<a onclick='redireccion("listado.inventario.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Lista de Inventario</button></a>
			<br><br>
			<div id="datos-producto">
				<fieldset >
					<legend></legend>
					<form id="form_add_compra">
						<div class="row">
							<div class="col-md-5 input-field">      
				                 <label for="username">Fecha</label>
				                 <input name="fecha" id="fecha" type="text" placeholder="Fecha Compra" class="validate" required> 
		              		</div>
		              		<div class="col-md-5 input-field">      
				                 <label for="username">N° Factura</label>
				                 <input name="factura" id="factura" type="text" placeholder="N° Factura" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
		              		<div class="col-md-7">      
				                 <label for="username">Proveedor:</label>
				                 <select class="form-control" name="proveedor" id="proveedor"></select>
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-5 input-field">      
				                 <label for="username">Código</label>
				                 <input name="producto" id="producto" type="text" placeholder="Codigo del Producto" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-11 input-field">      
				                 <table id="listado">
				                 	<thead>
				                 		<tr>
				                 			<th>Codigo</th>
				                 			<th>Descripción</th>
				                 			<th>Stock</th>
				                 			<th>Prec. Venta</th>
				                 			<th>Prec. Compra</th>
				                 			<th>Cantidad</th>
				                 			<th>Subtotal</th>
				                 			<th>Acción</th>
				                 		</tr>
				                 	</thead>
				                 	<tbody id="tbody">
				                 		
				                 	</tbody>
				                 </table>
		              		</div>
						</div>
						
						
						<input name="action" type="hidden" value="ingreso_compra"> 
		              	
					</form>
				</fieldset>
				
			</div>
			<br>
			
			<br><br>
			<div id="buttons">
				<center><a onclick="comprarProductos();"><button  class="btn waves-effect waves-light waves-teal " type="submit">REGISTRAR COMPRA<i class="material-icons right">send</i></button></a>
</center>
				
			</div>
			
		</div>




<?php include("footer.php");?>