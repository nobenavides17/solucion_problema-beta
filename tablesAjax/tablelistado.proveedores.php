<?php

include("../conex.php");
	


		
					try{
						$sql = "select * from proveedores";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$tabla="";
						while($datos = $resultado->fetch()){
							$tabla.='{
												
										
												"NOMBRE":"'.$datos["nombre_proveedor"].'",
												"DIRECCION":"'.$datos["direccion"].'",
												"EMAIL":"'.$datos["email"].'",
												"TELEFONO":"'.$datos["telefono"].'",
												
												
												"ACCIONES":"<div class=\'btn-group\'><button type=\'button\' class=\'btn btn-2 waves-effect waves-teal  dropdown-toggle\' data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'>Acción</button><ul class=\'dropdown-menu ul\' style=\'right: 0; left: auto;\'><li><a onclick=\'modificarProveedor('.$datos["id_proveedor"].');\'>Modificar Proveedor</a></li> <li><a onclick=\'borrar('.$datos["id_proveedor"].');\'>Borrar</a></li></ul></div>"
											},';	
											
									}

									$tabla = substr($tabla,0, strlen($tabla) - 1);
									echo '{"data":['.$tabla.']}';


						
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
	



										
										

										
						

?>