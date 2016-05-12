<?php

include("../conex.php");
	


		
					try{
						$sql = "select compras.id_producto,compras.id_proveedor,compras.cantidad,compras.num_factura,compras.id_sucursal,compras.cantidad,sucursales.id_sucursal,sucursales.nombre_sucursal,productos.id_producto,productos.codigo,productos.descripcion,productos.presentacion,productos.marca,proveedores.id_proveedor,proveedores.nombre_proveedor from proveedores,productos,sucursales,compras where compras.id_producto=productos.id_producto and sucursales.id_sucursal=compras.id_sucursal and proveedores.id_proveedor=compras.id_proveedor";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$tabla="";
						while($datos = $resultado->fetch()){
							
							$tabla.='{
												
												"FACTURA":"'.$datos["num_factura"].'",
												"CODIGO":"'.$datos["codigo"].'",
												"DESCRIPCION":"'.$datos["descripcion"].'-'.$datos["presentacion"].'",
												"MARCA":"'.$datos["marca"].'",
												"CANTIDAD":"'.$datos["cantidad"].'",
												"PROVEEDOR":"'.$datos["nombre_proveedor"].'",
												"SUCURSAL":"'.$datos["nombre_sucursal"].'",
												
												
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