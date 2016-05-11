<?php

include("../conex.php");
	


		
					try{
						$sql = "select * from productos";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$tabla="";
						while($datos = $resultado->fetch()){
							if($datos["estado"]== "Activo"){$funcion = "desahabilitarProducto";$texto="Desahabilitar Producto"; }elseif ($datos["estado"]== "Desactivado") {
								$funcion = "habilitarProducto";$texto="Habilitar Producto";
							}

							if($datos["codigo"]== ""){$codigo=$datos["id_producto"];}else{$codigo=$datos["codigo"];}
							$tabla.='{
												
										
												"CODIGO":"'.$codigo.'",
												"DESCRIPCION":"'.$datos["descripcion"].'",
												"MARCA":"'.$datos["marca"].'",
												"PRESENTACION":"'.$datos["presentacion"].'",
												
												
												"ACCIONES":"<div class=\'btn-group\'><button type=\'button\' class=\'btn btn-2 waves-effect waves-teal  dropdown-toggle\' data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'>Acción</button><ul class=\'dropdown-menu ul\' style=\'right: 0; left: auto;\'><li><a onclick=\'modificarProducto('.$datos["id_producto"].');\'>Modificar Producto</a></li><li><a onclick=\'detallesProducto('.$datos["id_producto"].');\'>Detalles Producto</a></li><li><a onclick=\''.$funcion.'('.$datos["id_producto"].');\'>'.$texto.'</a></li> <li><a onclick=\'borrar('.$datos["id_producto"].');\'>Borrar</a></li></ul></div>"
											},';	
											
									}

									$tabla = substr($tabla,0, strlen($tabla) - 1);
									echo '{"data":['.$tabla.']}';


						
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
	



										
										

										
						

?>