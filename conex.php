<?php
	$username="";
	$password="";
	$databasename="prueba_work";

	try {
			$conn = new PDO('mysql:host=localhost;dbname='.$databasename, $username , $password);
		}
		catch (PDOException $ex) {
			echo $ex->getMessage();
			exit;
		}	
?>
