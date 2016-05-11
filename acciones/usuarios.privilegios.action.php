<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			if($action == "traer_modulos_enlaces"){
					try{

							$sql = "select * from modulos";
							$table="";
							$resultado = $conn->prepare($sql);
							$resultado->execute();
							$label_single=0;
								while ($datos = $resultado->fetch()) {

										$modulo = $datos["id_modulo"];
										$table.= "<tr class='row' ><th>
													<p>
													<input value='".$datos["id_modulo"]."' id='single".$label_single."' type='checkbox' class='filled-in modulo' >
													<label for='single".$label_single."'>".$datos["nombre_modulo"]."</label>
													
													<p>
													</th></tr>";
										$label_single++;

										$sql = "select 	modulos.id_modulo,  
														enlaces.id_enlace, 
														enlaces.nombre_enlace, 
														enlaces.id_modulo 
										from modulos,enlaces 
										where 	modulos.id_modulo=enlaces.id_modulo and 
												modulos.id_modulo=:modulo";

										$resultado2 = $conn->prepare($sql);
										$resultado2->execute(array(
																":modulo" => $modulo
																));
										$enlace=0;
											
										while ($datos2 = $resultado2->fetch()) {

											if($enlace==0){
												$table.="<tr>";
											}

											$table.= "<th>
													<p>
													<input value='".$datos2["id_enlace"].",".$modulo."' id='single".$label_single."' type='checkbox' class='filled-in enlace' >
													<label for='single".$label_single."'>".$datos2["nombre_enlace"]."</label>

													<p>
													</th>";
											$enlace++;
											$label_single++;

											if($enlace==3){
												$table.="</tr>";
												$enlace=0;
											}
												 
										}
												$table.="</tr><tr><th><br><br></th></tr>";
								}
					}catch(PDOException $ex){
						echo "error";
					}
					echo $table;
					
			}

			if($action == "traer_ultimo_id"){
					try{

							$sql = "select * from usuarios order by id_usuario desc";
							
							$resultado = $conn->prepare($sql);
							$resultado->execute();
							$id=0;
								if ($datos = $resultado->fetch()) {
									$id = (int)$datos["id_usuario"];
								}
					}catch(PDOException $ex){
						echo "error";
					}
					echo $id+1;
					
			}


			if($action == "registro_usuario"){
					try{

						$sqlUsuario = $_POST["sqlUsuario"];
						$sqlModulos = $_POST["sqlModulos"];
						$sqlEnlaces = $_POST["sqlEnlaces"];

						$conn->beginTransaction();

						$resultadoUsuario = $conn->prepare($sqlUsuario);

						if ($resultadoUsuario->execute()) {
							$resultadoModulos = $conn->prepare($sqlModulos);

							if ($resultadoModulos->execute()) {
								$resultadoEnlaces = $conn->prepare($sqlEnlaces);
								if($resultadoEnlaces->execute()){
									$conn->commit();
									echo "<script>alert('Ingresado Con exito');window.location = 'listado.usuarios.php'</script>";
								}else{echo "mal ";}
								
							}else{echo "mal caasi";}
						}else{echo "mal final";}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "error";
					}
					
					
			}

	}