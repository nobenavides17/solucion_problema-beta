<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			

			if($action == "agregar_sucursal"){
					try{
						$direccion = $_POST["direccion"];
						$telefono = $_POST["telefono"];
						$nombre = $_POST["sucursal"];
						$sql = "insert into sucursales values('',:nombre_sucursal,:direccion,:telefono)";
						$conn->beginTransaction();
						$resultado = $conn->prepare($sql);
						$ingreso = $resultado->execute(array(":nombre_sucursal"=>$nombre,
													":direccion"=>$direccion,
													":telefono"=>$telefono));

						if($ingreso){
							$conn->commit();
							echo "<script>alert('Sucursal agregada con exito.');window.location='listado.sucursales.php';</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			if($action == "datos_modificar_sucursal"){
					try{
						$id_sucursal = $_POST["id_sucursal"];
						$sql = "select * from sucursales where id_sucursal=:id_sucursal";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":id_sucursal"=>$id_sucursal));

						while($datos = $resultado->fetch()){
							$campos = array(
								"nombre_sucursal" => $datos["nombre_sucursal"],
								"telefono" => $datos["telefono"],
								"id_sucursal" => $datos["id_sucursal"],
								"direccion" => $datos["direccion"]);
						}
						echo json_encode($campos,JSON_FORCE_OBJECT);

					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}

			if($action == "modificar_sucursal"){
					try{
						$direccion = $_POST["direccion"];
						$telefono = $_POST["telefono"];
						$nombre = $_POST["sucursal"];
						$id_sucursal = $_POST["id_sucursal"];
						$sql = "update sucursales set nombre_sucursal=:nombre_sucursal,telefono=:telefono,direccion=:direccion where id_sucursal=:id_sucursal";
						$conn->beginTransaction();
						$resultado = $conn->prepare($sql);
						$ingreso = $resultado->execute(array(":nombre_sucursal"=>$nombre,
													":direccion"=>$direccion,
													":telefono"=>$telefono,
													":id_sucursal"=>$id_sucursal));

						if($ingreso){
							$conn->commit();
							echo "<script>alert('Sucursal Modificada con exito.');window.location='listado.sucursales.php';</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			
	}