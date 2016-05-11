<?php

include("../conex.php");
	


		
					try{
						$sql = "select * from sucursales";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$tabla="";
						while($datos = $resultado->fetch()){
							$tabla.='{
												
										
												"NOMBRE":"'.$datos["nombre_sucursal"].'",
												"DIRECCION":"'.$datos["direccion"].'",
												"TELEFONO":"'.$datos["telefono"].'",
												
												
												"ACCIONES":"<div class=\'btn-group\'><button type=\'button\' class=\'btn btn-2 waves-effect waves-teal  dropdown-toggle\' data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'>Acción</button><ul class=\'dropdown-menu ul\' style=\'right: 0; left: auto;\'><li><a onclick=\'modificarSucursal('.$datos["id_sucursal"].');\'>Modificar Sucursal</a></li> <li><a onclick=\'borrar('.$datos["id_sucursal"].');\'>Borrar</a></li></ul></div>"
											},';	
											
									}

									$tabla = substr($tabla,0, strlen($tabla) - 1);
									echo '{"data":['.$tabla.']}';


						
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
	



										
										

										
						

?>