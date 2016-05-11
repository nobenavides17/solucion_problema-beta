<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			

			

			if($action == "detalles_producto"){
					try{
						$id_producto = $_POST["id_producto"];
						$sql = "select * from productos where id_producto=:id_producto";
						$resultado = $conn->prepare($sql);
						$resultado->execute(array(":id_producto"=>$id_producto));
						$tabla = "";

						while($datos = $resultado->fetch()){
							if($datos["codigo"]== ""){$codigo=$datos["id_producto"];}else{$codigo=$datos["codigo"];}
							$tabla.= "<tr><th style='width:35%;'>CODIGO</th><th>".$codigo."</th></tr>";
							$tabla.= "<tr><th>DESCRIPCION</th><th>".$datos["descripcion"]."</th></tr>";
							$tabla.= "<tr><th>PRESENTACION</th><th>".$datos["presentacion"]."</th></tr>";
							$tabla.= "<tr><th>MARCA</th><th>".$datos["marca"]."</th></tr>";
							$tabla.= "<tr><th>COLOR</th><th>".$datos["color"]."</th></tr>";
							$tabla.= "<tr><th>PRECIO 1</th><th>".$datos["precio_1"]."</th></tr>";
							$tabla.= "<tr><th>PRECIO 2</th><th>".$datos["precio_2"]."</th></tr>";
							$tabla.= "<tr><th>PRECIO 3</th><th>".$datos["precio_3"]."</th></tr>";
							$tabla.= "<tr><th>PRECIO VENTA</th><th>".$datos["precio_venta"]."</th></tr>";
							$tabla.= "<tr><th>ESTADO</th><th>".$datos["estado"]."</th></tr>";
						}
						echo $tabla;

					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}

			

			
	}