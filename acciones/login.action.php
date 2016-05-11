<?php 
include("../conex.php");
	if($_POST){

		$action = $_POST["action"];

			if($action == "selectSucursales"){
					try{
						$sql = "select * from sucursales";
						$resultado = $conn->prepare($sql);
						$resultado->execute();

						while($datos = $resultado->fetch()){
							echo "<option value='".$datos["id_sucursal"]."'>".$datos["nombre_sucursal"]." </option>";
						}
					}catch(PDOException $ex){
						echo "Error Al obtener las sucursales";
						exit;
					}
			}
	}