<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/usuarios.privilegios.css">
<link rel="stylesheet" type="text/css" href="css/agregar.producto.css">

<script type="text/javascript" src="js/agregar.producto.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Registro de Producto</h5></center>

			<br>
			<a onclick='redireccion("listado.productos.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Lista de Productos</button></a>
			<br><br>
			<div id="datos-producto">
				<fieldset >
					<legend>Datos del Producto:</legend>
					<form id="form_add_producto">
						<div class="row">
							<div class="col-md-5 input-field">      
				                 <label for="username">Código</label>
				                 <input name="codigo" id="username" type="text" placeholder="Código" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-11 input-field">      
				                 <label for="username">Descripción</label>
				                 <input name="descripcion" id="username" type="text" placeholder="Descripción" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-5 input-field">      
				                 <label for="username">Presentación</label>
				                 <input name="presentacion" id="username" type="text" placeholder="Presentación" class="validate" required> 
		              		</div>
		              		<div class="col-md-3 input-field">      
				                 <label for="username">Marca</label>
				                 <input name="marca" id="username" type="text" placeholder="Marca" class="validate" required> 
		              		</div>
		              		<div class="col-md-3 input-field">      
				                 <label for="username">Color</label>
				                 <input name="color" id="color" type="text" placeholder="Color" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-4 input-field">      
				                 <label for="username">Precio 1</label>
				                 <input name="precio_1" id="precio_1" type="text" placeholder="Precio 1" class="validate" required> 
		              		</div>
		              		<div class="col-md-4 input-field">      
				                 <label for="username">Precio 2</label>
				                 <input name="precio_2" id="precio_2" type="text" placeholder="Precio 2" class="validate" required> 
		              		</div>
		              		<div class="col-md-3 input-field">      
				                 <label for="username">Precio 3</label>
				                 <input name="precio_3" id="precio_3" type="text" placeholder="Precio 3" class="validate" required> 
		              		</div>
						</div>
						<div class="row">
							<div class="col-md-7">      
				                 <label for="username">Precio venta:</label>
				                 <select class="form-control" name="precio_venta" id="precios"></select>
		              		</div>
		              		<div class="col-md-3 ">      
				                  <label for="username">Estado:</label>
				                 <select name="estado" class="form-control" id="estado">
				                 	<option value="Activo">Activo</option>
				                 	<option value="Desactivado">Desactivado</option>
				                 </select>
		              		</div>
						</div>
						<input name="action" type="hidden" value="agregar_producto"> 
		              	
					</form>
				</fieldset>
				
			</div>
			<br>
			
			<br><br>
			<div id="buttons">
				<center><a onclick="registroProducto();"><button  class="btn waves-effect waves-light waves-teal " type="submit">REGISTRAR PRODUCTO<i class="material-icons right">send</i></button></a>
</center>
				
			</div>
			
		</div>




<?php include("footer.php");?>