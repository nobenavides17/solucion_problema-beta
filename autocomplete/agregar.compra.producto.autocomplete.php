<?php
include("../conex.php");
$nombre = $_GET['term'];


	try{
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
						 codigo like :dato ";
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