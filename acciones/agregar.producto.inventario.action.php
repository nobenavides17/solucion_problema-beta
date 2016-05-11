			
<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			

			if($action == "traer_fila"){
					try{
						$codigo = $_POST["codigo"];
						
						$sql = "select * from productos where codigo=:codigo";
						
						$resultado = $conn->prepare($sql);
						 $resultado->execute(array(":codigo"=>$codigo));
						 $fila ="";
						if($datos = $resultado->fetch()) {
							$fila.= "<tr><th>".$datos["codigo"]."<input type='hidden' id='id_producto' value='".$datos["id_producto"]."'></th>";
							$fila.= "<th>".$datos["descripcion"]."<input type='hidden' id='descripcion' value='".$datos["descripcion"]."'></th>";
							$fila.= "<th>".$datos["presentacion"]."<input type='hidden' id='codigo' value='".$datos["codigo"]."'></th>";
							$fila.= "<th>".$datos["marca"]."</th>";
							$fila.= "<th style='width:11%;'><select id='select_precio' class='form-control'>";
							$fila.= "<option value='".$datos["precio_1"]."'>".$datos["precio_1"]."</option>";
							$fila.= "<option value='".$datos["precio_2"]."'>".$datos["precio_2"]."</option>";
							$fila.= "<option value='".$datos["precio_3"]."'>".$datos["precio_3"]."</option>";
							$fila.= "</select></th>";
							$fila.= "<th>accion</th></tr>";
						}
						echo $fila;
					}catch(PDOException $ex){
						echo "Error";
						exit;
					}
			}

			if($action == "ingreso_inventario"){
					try{
						$id_producto = $_POST["id_producto"];
						$precio_venta = $_POST["precio_venta"];

						$sql1= "select inventario.id_producto from inventario where inventario.id_producto=$id_producto";
						$rows = $conn->prepare($sql1);
						$resultado1 = $rows->execute();
						
						if($datos =$rows->fetch() ){
							echo "False";
						}else{
							$sql = "insert into inventario  values('','$id_producto',0,'$precio_venta');";
							$conn->beginTransaction();
							$resultado = $conn->prepare($sql);
							$ingreso = $resultado->execute();

							if($ingreso){
								$conn->commit();
								echo "True";
							}else{
								echo "False";
							}
						}

					}catch(PDOException $ex){
						$conn->rollBack();
						echo "Error";
						exit;
					}
			}

			
			
	}

	