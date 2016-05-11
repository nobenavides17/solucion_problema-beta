<?php  

session_start();
function index(){
	
			include("conex.php");
			include("seguridad.php");
			$id_usuario = $_SESSION["id_usuario"];
			try{

					$sql = "select modulos.id_modulo,
									modulos.nombre_modulo, 
									usuarios.id_usuario, 
									permisos_modulos.id_modulo,
									permisos_modulos.id_usuario 
							from usuarios, modulos,permisos_modulos 
							where 	modulos.id_modulo=permisos_modulos.id_modulo and 
									permisos_modulos.id_usuario=usuarios.id_usuario and 
									permisos_modulos.id_usuario=:id_usuario";

					$resultado = $conn->prepare($sql);
					$resultado->execute(array(
											":id_usuario" => $id_usuario
											));
					echo "<ul id='ul-primary'>";
					$menu ="";
						while ($datos = $resultado->fetch()) {

									 $modulo = $datos["id_modulo"];
									
									 
								$menu.= "<li><div class='btn-group div-ul'>";
								$menu.= "<button type='button' class='btn  dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".$datos["nombre_modulo"]."<span class='glyphicon glyphicon-chevron-down'></span></button>";
									 

									$sql = "select enlaces.id_enlace,
												enlaces.nombre_enlace,
												enlaces.href,
												enlaces.id_modulo,
												permisos_enlaces.id_enlace,
												permisos_enlaces.id_modulo, 
												permisos_enlaces.id_usuario,
												usuarios.id_usuario 
											from enlaces,permisos_enlaces,usuarios 
											where 	usuarios.id_usuario=permisos_enlaces.id_usuario  and 
													enlaces.id_enlace=permisos_enlaces.id_enlace and
													permisos_enlaces.id_modulo = :modulo and 
													usuarios.id_usuario=:id_usuario";

									$resultado2 = $conn->prepare($sql);
									$resultado2->execute(array(
															":id_usuario" => $id_usuario,
															":modulo" => $modulo
															));
									$menu.= "<ul class='dropdown-menu ul ul-interno' style='right: 0; left: auto;'>";
									while ($datos2 = $resultado2->fetch()) {
										$enlace = (string)$datos2["href"];
										$menu.="<li><a  onclick='redireccion(\"".$enlace."\")'>".$datos2["nombre_enlace"]."</a></li>";
										 
									}
									$menu.= "</ul>";
								$menu.= "</div></li>";
						}
						echo $menu;
					echo "</ul>";
			}catch(PDOException $ex){
				echo "error";
			}


}?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--////////////////////////////////// -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/dataTables.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="css/dash.css">
	<script type="text/javascript" src="js/dash.js"></script>

	<!--////////////////////////////////// -->
	<title>Dashboard</title>
</head>
<body>
	<div id="contenedor" class="container">
		<div id="navbar" class="navbar">
			<div style='float: right; font-size: 10px;' class="dropdown">
				  <button style=' font-size: 9px;' class="btn waves-effect waves-light red dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    <?php echo $_SESSION["nombre"]; ?>
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				   
				    <li role="separator" class="divider"></li>
				    <li><a onclick='redireccion("logout.php")'>Salir</a></li>
				  </ul>
			</div>
			<center><h4 style='margin-top: 1%;font-size: 25px;'>Sucursal <?php echo $_SESSION["sucursal"]; ?></h4></center>
		</div>
		<div id="panel-derecho">
			<div id="head-panel-derecho"><h4  style='margin-top: 10px;color:white;font-size: 25px;'>   EMPRESA LOGO</h4></div>
			<div id="user-panel-derecho">s</div>
			<?php 
			index();
			
			?>
		</div>
