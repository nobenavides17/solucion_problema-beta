<?php include("menu.php");?>

<script type="text/javascript" src="js/listado.inventario.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  	  <link rel="stylesheet" href="css/listado.productos.css">




		<div id="contenido" class="card-panel">
			<center><h5>Productos en Inventario</h5></center>

			<br>
			<a onclick='redireccion("agregar.producto.inventario.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Agregar producto a Inventario</button></a>
			<br><br><table style="overflow-y: hidden;margin-top: 100px;z-index: 0;" id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		               	<th>CODIGO</th>											
						<th >DESCRIPCIÓN</th>
						<th >MARCA</th>
						<th>PRESENTACIÓN</th>
						<th>STOCK</th>
						<th>PRECIO</th>
						<th>ACCIONES</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		            	<th>CODIGO</th>											
						<th >DESCRIPCIÓN</th>
						<th >MARCA</th>
						<th>PRESENTACIÓN</th>
						<th>STOCK</th>
						<th>PRECIO</th>
						<th>ACCIONES</th>
		            </tr>
		        </tfoot>
    		</table>
		</div>


<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="cerrar close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Detalles Producto</h4>
							      </div>
							      <div class="modal-body">
							        
								<table id="detalles_producto" class="table"></table>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >CERRAR</button>
							      </div>
							    </div>
							  </div>
						</div> 




<?php include("footer.php");?>