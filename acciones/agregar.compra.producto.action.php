			
<?php 
session_start();
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			

			if($action == "traer_fila"){
					try{
						$codigo = $_POST["codigo"];
						 $idrow=rand(1,10000000000000);
						$sql = "select productos.id_producto,
						productos.codigo,
						productos.descripcion,
						productos.presentacion,
						productos.marca,
						productos.estado,
						inventario.id_producto,
						inventario.stock,
						inventario.precio_venta 
						from inventario, productos 
						where productos.estado='Activo' and
						 productos.id_producto=inventario.id_producto and  
						 codigo like :codigo ";
						
						$resultado = $conn->prepare($sql);
						 $resultado->execute(array(":codigo"=>$codigo));
						 $fila ="";

						if($datos = $resultado->fetch()) {
							$fila.= "<tr id='$idrow'><th>".$datos["codigo"]."<input type='hidden' id='id_producto' value='".$datos["id_producto"]."'></th>";
							$fila.= "<th>".$datos["descripcion"]."</th>";
							$fila.= "<th>".$datos["stock"]."</th>";
							$fila.= "<th>$".$datos["precio_venta"]."</th>";
							$fila.= "<th style='width:10%;'><input onkeyup='subtotal($idrow)' class='form-control' type='number' name='precio_compra' id='precio_compra' placeholder='Precio'></th>";
							$fila.= "<th style='width:10%;'><input onkeyup='subtotal($idrow)' class='form-control' type='number' name='cantidad' id='cantidad' placeholder='Cant.'></th>";
							$fila.= "<th style='width:10%;'><p id='p' ></p></th>";
							
							
							$fila.= "<th><a onclick='borrarFila($idrow)'>Borrar</a></th></tr>";
						}
						echo $fila;
					}catch(PDOException $ex){
						echo "Error";
						exit;
					}
			}

			if($action == "ingreso_compra"){
					try{
						$id_producto = $_POST["id_producto"];
						$cantidad = $_POST["cantidad"];
						$precio_unitario = $_POST["precio_unitario"];
						$id_proveedor = $_POST["id_proveedor"];
						$fecha = $_POST["fecha"];
						$num_factura = $_POST["num_factura"];
						$subtotal = $_POST["subtotal"];
						
							$sql = "insert into compras  values('',:id_producto,
																	:id_proveedor,
																	:precio_unitario,
																	:cantidad,
																	:fecha,
																	
																	:num_factura,
																	:id_sucursal,
																	:subtotal,'');";
							$conn->beginTransaction();
							$resultado = $conn->prepare($sql);
							$ingreso = $resultado->execute(array(":id_producto"=>$id_producto,
																	":id_proveedor"=>$id_proveedor,
																	":precio_unitario"=>$precio_unitario,
																	":cantidad"=>$cantidad,
																	":fecha"=>$fecha,
																	":num_factura"=>$num_factura,
																	":subtotal"=>$subtotal,
																	":id_sucursal"=>$_SESSION["id_sucursal"]));

							if($ingreso){
								$sql2 = "select inventario.stock from inventario where id_producto=:id_producto";
								$resultado2 = $conn->prepare($sql2);
								$resultado2->execute(array(":id_producto"=>$id_producto));
								if($datos = $resultado2->fetch()){
									$stock = (int)$datos["stock"];
									$nuevo_stock = $stock+(int)$cantidad;
									$sql3 = "update inventario set stock=:stock where id_producto=:id_producto";
									$resultado3 = $conn->prepare($sql3);
									$actualizar_stock = $resultado3->execute(array(":id_producto"=>$id_producto,
																					":stock"=>$nuevo_stock));
									if ($actualizar_stock) {
										$conn->commit();
										echo "Producto agregado a Comprar Exitosamente.";
									}else{echo "false2";}
								}else{echo "false1";}
								
							}else{
								print_r( $resultado->errorInfo());
							}
						

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			if($action == "datos_proveedores"){
					try{
						
						$sql = "select * from proveedores ";
						$resultado = $conn->prepare($sql);
						$resultado->execute();
						$option="";

						while($datos = $resultado->fetch()){
							$option.="<option value='".$datos["id_proveedor"]."'>".$datos["nombre_proveedor"]."</option>";
						}
						echo $option;
					}catch(PDOException $ex){
						echo "Error";
						exit;
					}
			}

			
			
	}

	