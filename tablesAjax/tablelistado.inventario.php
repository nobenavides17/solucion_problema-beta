<?php

include("../conex.php");
	


		
					try{
						$sql = "select inventario.id_producto,inventario.stock,inventario.precio_venta,productos.id_producto,productos.codigo,productos.descripcion,productos.presentacion,productos.marca from productos,inventario where inventario.id_producto=productos.id_producto";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$tabla="";
						while($datos = $resultado->fetch()){
							
							$tabla.='{
												
												"CODIGO":"'.$datos["codigo"].'",
												"DESCRIPCION":"'.$datos["descripcion"].'",
												"MARCA":"'.$datos["marca"].'",
												"PRESENTACION":"'.$datos["presentacion"].'",
												"STOCK":"'.$datos["stock"].'",
												"PRECIO":"'.$datos["precio_venta"].'",
												
												
												"ACCIONES":"<div class=\'btn-group\'><button type=\'button\' class=\'btn btn-2 waves-effect waves-teal  dropdown-toggle\' data-toggle=\'dropdown\' aria-haspopup=\'true\' aria-expanded=\'false\'>Acción</button><ul class=\'dropdown-menu ul\' style=\'right: 0; left: auto;\'><li><a onclick=\'detallesCompra('.$datos["id_producto"].');\'>Detalles Compra</a></li> <li><a onclick=\'borrar('.$datos["id_producto"].');\'>Borrar Compra</a></li></ul></div>"
											},';	
											
									}

									$tabla = substr($tabla,0, strlen($tabla) - 1);
									echo '{"data":['.$tabla.']}';


						
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
	



										
										

										
						

?>