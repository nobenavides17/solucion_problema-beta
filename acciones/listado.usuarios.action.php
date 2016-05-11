<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			if($action == "datos_usuario_agregar_sucursal"){
					try{
						$id_usuario = $_POST["id_usuario"];
						$sql = "select * from usuarios where id_usuario=:id_usuario";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":id_usuario"=>$id_usuario));

						while($datos = $resultado->fetch()){
							$campos = array(
								"id_usuario" => $datos["id_usuario"],
								"username" => $datos["username"],
								"nombre" => $datos["nombre"]);
						}
						echo json_encode($campos,JSON_FORCE_OBJECT);

					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}

			if($action == "agregar_usuario_agregar_sucursal"){
					try{
						$username = $_POST["usuario"];
						$id_sucursal = $_POST["select_sucursal"];
						$sql = "insert into acceso values('',:id_sucursal,:username)";
						$conn->beginTransaction();
						$resultado = $conn->prepare($sql);
						$ingreso = $resultado->execute(array(":id_sucursal"=>$id_sucursal,
													":username"=>$username));

						if($ingreso){
							$conn->commit();
							echo "<script>alert('Usuario agregado con exito a sucursal.');window.location=listado.usuarios.php;</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			if($action == "datos_modificar_usuario"){
					try{
						$id_usuario = $_POST["id_usuario"];
						$sql = "select * from usuarios where id_usuario=:id_usuario";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":id_usuario"=>$id_usuario));

						while($datos = $resultado->fetch()){
							$campos = array(
								"id_usuario" => $datos["id_usuario"],
								"username" => $datos["username"],
								"nombre" => $datos["nombre"]);
						}
						echo json_encode($campos,JSON_FORCE_OBJECT);

					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}

			if($action == "modificar_usuario"){
					try{
						$username = $_POST["username"];
						$nombre = $_POST["nombre"];
						$password = $_POST["password"];
						$id_usuario = $_POST["id_usuario"];
						$conn->beginTransaction();
						if($password!=""){
							$sql = "update usuarios set username=:username, nombre=:nombre, password=:password where id_usuario=:id_usuario";
							$resultado = $conn->prepare($sql);
							$modificacion = $resultado->execute(array(":nombre"=>$nombre,
															":username"=>$username,
															":password"=>$password,
															":id_usuario"=>$id_usuario));
						}else{
							$sql = "update usuarios set username=:username, nombre=:nombre where id_usuario=:id_usuario";
							$resultado = $conn->prepare($sql);
							$modificacion = $resultado->execute(array(":nombre"=>$nombre,
															":username"=>$username,
															":id_usuario"=>$id_usuario));
						}
						
						

						if($modificacion){
							$conn->commit();
							echo "<script>alert('Usuario Modificado con exito.');window.location='listado.usuarios.php';</script>";
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			if($action == "detalles_usuario"){
					try{
						$username = $_POST["username"];
						$sql = "select  usuarios.nombre, usuarios.username, usuarios.id_usuario from usuarios  where  usuarios.id_usuario=:username limit 1";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":username"=> $username));
						$tabla = "";
						if($datos = $resultado->fetch()){
								$tabla.="<tr><th style='width:35%'>Username: </th><th>".$datos["username"]."</th></tr>";
								$tabla.="<tr><th>Nombre: </th><th>".$datos["nombre"]."</th></tr>";
								
								$user = $datos["username"];
								$sql2 = "select acceso.id_sucursal, acceso.username, usuarios.username, sucursales.id_sucursal, sucursales.nombre_sucursal from usuarios, acceso, sucursales where usuarios.username=acceso.username and acceso.id_sucursal=sucursales.id_sucursal and usuarios.username =:username ";
								$resultado2 = $conn->prepare($sql2);
								$resultado2->execute(array(":username"=>$user));
								
								$tabla.="<tr><th>Sucursales con acceso: </th><th></th></tr>";
								
									while($datos2 = $resultado2->fetch()){
									$tabla.="<tr><th> </th><th>".$datos2["nombre_sucursal"]."</th></tr>";
									}
								
						}
						echo $tabla;
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}
	}