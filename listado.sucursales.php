<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/listado.sucursales.css">
<script type="text/javascript" src="js/listado.sucursales.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Listado de Sucursales</h5></center>

			<br>
			<a onclick='agregarSucursal()'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Agregar Sucursal</button></a>
			<br><br><table style="overflow-y: hidden;margin-top: 100px;z-index: 0;" id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		               		
						<th>NOMBRE</th>											
						<th >DIRECCION</th>
						<th >TELEFONO</th>
						<th>ACCIONES</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		            	<th>NOMBRE</th>											
						<th >DIRECCION</th>
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
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Agregar Sucursal</h4>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin " id="form_add_sucursal">
										<label class="lbl_unidad">Nombre de Sucursal:</label>
										<input placeholder="Nombre Sucursal"  required autofocus type="text" name="sucursal" id="sucursal">
										<label class="lbl_unidad">Dirección:</label>
										<input placeholder="Dirección"  required autofocus type="text" name="direccion" id="direccion">
										<label class="lbl_unidad">Teléfono:</label>
										<input placeholder="Teléfono"  required autofocus type="text" name="telefono" id="telefono">

										<input  type="hidden" name="action" id="action" value="agregar_sucursal">

							        </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cancelar</button>
							        <button id="agregar_sucursal" type="button" class="btn btn-primary">Guardar</button>
							      </div>
							    </div>
							  </div>
						</div> 


<div id="myModal-modificacion" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="cerrar close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Modificacion de Sucursal</h4>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin " id="form-mod-sucursal">
							        	<label class="lbl_unidad">Nombre de Sucursal:</label>
										<input placeholder="Nombre Sucursal"  required autofocus type="text" name="sucursal" id="mod-sucursal">
										<label class="lbl_unidad">Dirección:</label>
										<input placeholder="Dirección"  required autofocus type="text" name="direccion" id="mod-direccion">
										<label class="lbl_unidad">Teléfono:</label>
										<input placeholder="Teléfono"  required autofocus type="text" name="telefono" id="mod-telefono">
										<input  type="hidden" name="id_sucursal" id="mod-id_sucursal">
										<input  type="hidden" name="action" id="action" value="modificar_sucursal">

							        	
							        	
							        </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cancelar</button>
							        <button id="modificar-sucursal" type="button" class="btn btn-primary">Guardar</button>
							      </div>
							    </div>
							  </div>
						</div> 




<?php include("footer.php");?>