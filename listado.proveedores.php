<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/listado.sucursales.css">
<script type="text/javascript" src="js/listado.proveedores.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Listado de Proveedores</h5></center>

			<br>
			<a onclick='agregarProveedor()'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Agregar Proveedor</button></a>
			<br><br><table style="overflow-y: hidden;margin-top: 100px;z-index: 0;" id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		               		
						<th>NOMBRE</th>											
						<th >DIRECCION</th>
						<th >EMAIL</th>
						<th >TELEFONO</th>
						<th>ACCIONES</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		            	<th>NOMBRE</th>											
						<th >DIRECCION</th>
						<th >EMAIL</th>
						<th >TELEFONO</th>
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
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Agregar Proveedor</h4>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin " id="form_add_proveedor">
										<label class="lbl_unidad">Nombre de Proveedor:</label>
										<input placeholder="Nombre Sucursal"  required autofocus type="text" name="sucursal" id="sucursal">
										<label class="lbl_unidad">Dirección:</label>
										<input placeholder="Dirección"  required autofocus type="text" name="direccion" id="direccion">
										<label class="lbl_unidad">Teléfono:</label>
										<input placeholder="Teléfono"  required autofocus type="text" name="telefono" id="telefono">
										<label class="lbl_unidad">Email:</label>
										<input placeholder="Email"  required autofocus type="email" name="email" id="email">

										<input  type="hidden" name="action" id="action" value="agregar_proveedor">

							        </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cancelar</button>
							        <button id="agregar_proveedor" type="button" class="btn btn-primary">Guardar</button>
							      </div>
							    </div>
							  </div>
						</div> 


<div id="myModal-modificacion" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="cerrar close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Modificacion de Proveedor</h4>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin " id="form-mod-proveedor">
							        	<label class="lbl_unidad">Nombre de Proveedor:</label>
										<input placeholder="Nombre Sucursal"  required autofocus type="text" name="proveedor" id="mod-proveedor">
										<label class="lbl_unidad">Dirección:</label>
										<input placeholder="Dirección"  required autofocus type="text" name="direccion" id="mod-direccion">
										<label class="lbl_unidad">Teléfono:</label>
										<input placeholder="Teléfono"  required autofocus type="text" name="telefono" id="mod-telefono">
										<label class="lbl_unidad">Email:</label>
										<input placeholder="Email"  required autofocus type="email" name="email" id="mod-email">
										<input  type="hidden" name="id_proveedor" id="mod-id_proveedor">
										<input  type="hidden" name="action" id="action" value="modificar_proveedor">

							        	
							        	
							        </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cancelar</button>
							        <button id="modificar-proveedor" type="button" class="btn btn-primary">Guardar</button>
							      </div>
							    </div>
							  </div>
						</div> 




<?php include("footer.php");?>