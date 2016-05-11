			
<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			

			if($action == "agregar_proveedor"){
					try{
						$direccion = $_POST["direccion"];
						$telefono = $_POST["telefono"];
						$nombre = $_POST["sucursal"];
						$email = $_POST["email"];
						$sql = "insert into proveedores values('',:nombre_proveedor,:direccion,:telefono,:email)";
						$conn->beginTransaction();
						$resultado = $conn->prepare($sql);
						$ingreso = $resultado->execute(array(":nombre_proveedor"=>$nombre,
													":direccion"=>$direccion,
													":email"=>$email,
													":telefono"=>$telefono));

						if($ingreso){
							$conn->commit();
							echo "<script>alert('Proveedor agregado con exito.');window.location='listado.proveedores.php';</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			if($action == "datos_modificar_proveedor"){
					try{
						$id_proveedor = $_POST["id_proveedor"];
						$sql = "select * from proveedores where id_proveedor=:id_proveedor";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":id_proveedor"=>$id_proveedor));

						while($datos = $resultado->fetch()){
							$campos = array(
								"nombre_proveedor" => $datos["nombre_proveedor"],
								"telefono" => $datos["telefono"],
								"email" => $datos["email"],
								"id_proveedor" => $datos["id_proveedor"],
								"direccion" => $datos["direccion"]);
						}
						echo json_encode($campos,JSON_FORCE_OBJECT);

					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}

			if($action == "modificar_proveedor"){
					try{
						$direccion = $_POST["direccion"];
						$email = $_POST["email"];
						$telefono = $_POST["telefono"];
						$nombre_proveedor = $_POST["proveedor"];
						$id_proveedor = $_POST["id_proveedor"];
						$sql = "update proveedores set email=:email,nombre_proveedor=:nombre_proveedor,telefono=:telefono,direccion=:direccion where id_proveedor=:id_proveedor";
						$conn->beginTransaction();
						$resultado = $conn->prepare($sql);
						$ingreso = $resultado->execute(array(":nombre_proveedor"=>$nombre_proveedor,
													":direccion"=>$direccion,
													":telefono"=>$telefono,
													":email"=>$email,
													":id_proveedor"=>$id_proveedor));

						if($ingreso){
							$conn->commit();
							echo "<script>alert('Proveedor Modificado con exito.');window.location='listado.proveedores.php';</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			
	}