<?php

include("../conex.php");
	


		
					try{
						$sql = "select * from usuarios";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$tabla="";
						while($datos = $resultado->fetch()){
							$tabla.='{
												
										
												"NOMBRE":"'.$datos["nombre"].'",
												"USERNAME":"'.$datos["username"].'",
												
												
												"ACCIONES":"<div class=\'btn-group\'><button type=\'button\' class=\'btn btn-2 waves-effect waves-teal  dropdown-toggle\' data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'>Acción</button><ul class=\'dropdown-menu ul\' style=\'right: 0; left: auto;\'><li><a onclick=\'asignarSucursal('.$datos["id_usuario"].');\'>Agregar a Sucursal</a></li> <li><a onclick=\'detallesUsuario('.$datos["id_usuario"].');\'>Detalles Usuario</a></li><li><a onclick=\'modificarUsuario('.$datos["id_usuario"].');\'>Modificar datos Usuario</a></li><li><a onclick=\'borrar('.$datos["id_usuario"].');\'>Borrar</a></li></ul></div>"
											},';	
											
									}

									$tabla = substr($tabla,0, strlen($tabla) - 1);
									echo '{"data":['.$tabla.']}';


						
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
	



										
										

										
						

?>