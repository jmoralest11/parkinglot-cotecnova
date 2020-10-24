<?php
	
	$conexion = mysqli_connect('localhost', 'root', '', 'parkinglot');

	mysqli_query($conexion, "SET NAMES 'utf8'");

	if($conexion->connect_error){
        echo $conexion->connect_error;
    }

	$sql = "SELECT cupos FROM parking";

	$results = mysqli_query($conexion, $sql);

	while($result = mysqli_fetch_assoc($results)){
		echo "<p>" . $result['cupos'] . "</p>";
	}

?>