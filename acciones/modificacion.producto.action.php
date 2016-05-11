			
<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			

			

			if($action == "datos_producto"){
					try{
						$id_producto = $_POST["id_producto"];
						$sql = "select * from productos where id_producto=:id_producto";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":id_producto"=>$id_producto));

						while($datos = $resultado->fetch()){
							if($datos["codigo"]== ""){$codigo=$datos["id_producto"];}else{$codigo=$datos["codigo"];}
							$campos = array(
								"id_producto" => $datos["id_producto"],
								"codigo" => $codigo,
								"descripcion" => $datos["descripcion"],
								"presentacion" => $datos["presentacion"],
								"marca" => $datos["marca"],
								"color" => $datos["color"],
								"precio_1" => $datos["precio_1"],
								"precio_2" => $datos["precio_2"],
								"precio_3" => $datos["precio_3"],
								"precio_venta" => $datos["precio_venta"],
								"estado" => $datos["estado"]);
						}
						echo json_encode($campos,JSON_FORCE_OBJECT);

					}catch(PDOException $ex){
						echo "Error";
						exit;
					}
			}

			if($action == "modificar_producto"){
					try{
						$codigo = $_POST["codigo"];
						$descripcion = $_POST["descripcion"];
						$presentacion = $_POST["presentacion"];
						$marca = $_POST["marca"];
						$color = $_POST["color"];
						$precio_1 = $_POST["precio_1"];
						$precio_2 = $_POST["precio_2"];
						$precio_3 = $_POST["precio_3"];
						$precio_venta = $_POST["precio_venta"];
						$estado = $_POST["estado"];
						$id_producto = $_POST["id_producto"];

						$sql = "update  productos set codigo=:codigo,
															descripcion=:descripcion,
															presentacion=:presentacion,
															marca=:marca,
															color=:color,
															precio_1=:precio_1,
															precio_2=:precio_2,
															precio_3=:precio_3,
															precio_venta=:precio_venta,
															estado=:estado where id_producto=:id_producto";
						$conn->beginTransaction();
						$resultado = $conn->prepare($sql);
						$ingreso = $resultado->execute(array(":codigo"=>$codigo,
													":descripcion"=>$descripcion,
													":presentacion"=>$presentacion,
													":marca"=>$marca,
													":color"=>$color,
													":precio_1"=>$precio_1,
													":precio_2"=>$precio_2,
													":precio_3"=>$precio_3,
													":precio_venta"=>$precio_venta,
													":estado"=>$estado,
													":id_producto"=>$id_producto));

						if($ingreso){
							$conn->commit();
							echo "<script>alert('Producto Modificado con exito.');window.location='listado.productos.php';</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			
	}