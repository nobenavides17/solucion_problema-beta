<?php include("menu.php");?>

<link rel="stylesheet" type="text/css" href="css/usuarios.privilegios.css">
<script type="text/javascript" src="js/usuarios.privilegios.js"></script>
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



		<div id="contenido" class="card-panel">
			<center><h5>Modificacion de Permisos</h5></center>

			<br>
			<a onclick='redireccion("listado.usuarios.php")'><button class="btn waves-effect waves-teal"><i class="material-icons right">add</i>Lista de Usuarios</button></a>
			<br><br>
			<div id="datos-usuario">
				<fieldset >
					<legend>Datos Usuario:</legend>
					<form>
						<div class="input-field col s6">      
			                 <label for="username">Username</label>
			                 <input id="username" type="text" placeholder="Username" class="validate" required>          
		              	</div>
		              	<div class="input-field col s6">      
			                 <label for="nombre">Nombre</label>
			                 <input id="nombre" type="text" placeholder="Username" class="validate" required>          
		              	</div>
		              	
					</form>
				</fieldset>
				
			</div>
			<br>
			<fieldset>
				<legend>Modulos-Enlaces</legend>
				<div id="carga-modulos-enlaces">
					<table  class="table" id="table-modulos-enlaces">
						
					</table>
				</div>
			</fieldset>
			<br><br>
			<div id="buttons">
				<center><a onclick="registroUsuario();"><button  class="btn waves-effect waves-light waves-teal " type="submit">CAMBIAR PERMISOS<i class="material-icons right">send</i></button></a>
</center>
				
			</div>
			
		</div>




<?php include("footer.php");?>