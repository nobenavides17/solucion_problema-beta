<?php
include("../conex.php");
$nombre = $_GET['term'];


	try{
		$sql = "select * from productos where estado='Activo' and  codigo like :dato ";
		$resultado = $conn->prepare($sql);
		 $resultado->execute(array(":dato"=> "%".$nombre."%"));

			while($datos = $resultado->fetch()){
				$cadena = "(".$datos["codigo"].") ".$datos["descripcion"]."-".$datos["marca"]."-".$datos["presentacion"];
				$availableTags[]= $cadena;			
			}	
		
			
		
	}catch(PDOException $ex){
		echo "Error";
		exit;
	}
	





    echo json_encode($availableTags);
?>