<?php 
session_start();

include("conex.php");

	if($_GET){
		$id_producto_modificar = $_GET["id"];
		$_SESSION["id_producto_modificar"] = $id_producto_modificar;
		echo "<script>window.location='modificacion.producto.php';</script>";


	}


try{

	$user = $_POST["user"];

	$pass = $_POST["pass"];
	$sucursal = $_POST["sucursal"];

	$sql = "select 	usuarios.id_usuario,
					usuarios.nombre,
					usuarios.username, 
					usuarios.password, 
					acceso.id_sucursal, 
					acceso.username,
					sucursales.id_sucursal,
					sucursales.nombre_sucursal,
					sucursales.direccion,
					sucursales.telefono
			from usuarios, acceso,sucursales 
			where 	usuarios.username=acceso.username and 
					usuarios.username = :username and 
					usuarios.password=:pass and
					acceso.id_sucursal=sucursales.id_sucursal and 
					acceso.id_sucursal=:sucursal ";
	$resultado = $conn->prepare($sql);
    $resultado->execute(array(
									":username" => $user,
									":pass" => $pass,
									":sucursal" => $sucursal
										));
	if($datos = $resultado->fetch()){
		$_SESSION["user"] = $user;
		$_SESSION["nombre"] = $datos["nombre"];
		$_SESSION["sucursal"] = $datos["nombre_sucursal"];
		$_SESSION["id_usuario"] = $datos["id_usuario"];
		
		echo "<script>window.location='dash.php'</script>";
	}else{
		echo "<script>alert('Puede que este usuario no esté registrado en esta sucursal, revise bien sus datos.');</script>";
		echo "<script>window.location='login.php';</script>";
	}


}catch(PDOException $error){
	echo "Error";
}
