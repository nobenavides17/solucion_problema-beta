<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/listado.usuarios.css">
<script type="text/javascript" src="js/listado.usuarios.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Listado de Usuarios</h5></center>

			<br>
			<a onclick='redireccion("usuarios.privilegios.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Agregar Usuario</button></a>
			<br><br><table style="overflow-y: hidden;margin-top: 100px;z-index: 0;" id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		               		
						<th>NOMBRE</th>											
						<th >USERNAME</th>
						<th>ACCIONES</th>
		            </tr>
		        </thead>
		        <tfoot>
		            <tr>
		              	
						<th>NOMBRE</th>											
						<th >USERNAME</th>
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
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Agregar Usuario a Sucursal</h4>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin " id="form_add_user_sucursal">
										<label class="lbl_unidad">Nombre de Usuario:</label>
										<input placeholder="Usuario"  required autofocus type="text" name="usuario" id="usuario">
										<input  type="hidden" name="id_usuario" id="id_usuario">
										<input  type="hidden" name="action" id="action" value="agregar_usuario_agregar_sucursal">

							        	
							        	<label class="lbl_unidad">Sucursal a Agregar:</label><br>
										<select class=" form-control" id="select_sucursal" required autofocus name="select_sucursal">
											
										</select>
							        </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cancelar</button>
							        <button id="agregar_user_sucursal" type="button" class="btn btn-primary">Guardar</button>
							      </div>
							    </div>
							  </div>
						</div> 


<div id="myModal-modificacion" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="cerrar close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Modificacion de Usuario</h4>
							      </div>
							      <div class="modal-body">
							        <form class="form-signin " id="form-mod-usuario">
							        	<label class="lbl_unidad">Username:</label>
										<input placeholder="Username"  required autofocus type="text" name="username" id="mod-username">
										<label class="lbl_unidad">Nombre:</label>
										<input placeholder="Usuario"  required autofocus type="text" name="nombre" id="mod-nombre">
										<label class="lbl_unidad">Password:</label>
										<input placeholder="Password"  required autofocus type="password" name="password" id="">
										<input  type="hidden" name="id_usuario" id="mod-id_usuario">
										<input  type="hidden" name="action" id="action" value="modificar_usuario">

							        	
							        	
							        </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cancelar</button>
							        <button id="modificar-usuario" type="button" class="btn btn-primary">Guardar</button>
							      </div>
							    </div>
							  </div>
						</div> 

<div id="myModal-detalles" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="cerrar close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" style="margin:auto; text-align: center;" id="myModalLabel">Detalles Usuario</h4>
							      </div>
							      <div class="modal-body">
							        <table class="table" id="detalles-usuario">
							        	
							        </table>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default cerrar" data-dismiss="modal" >Cerrar</button>
							      </div>
							    </div>
							  </div>
						</div> 


<?php include("footer.php");?>