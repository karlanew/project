<?php

	$nom = $_POST ["nom"];
	$ap = $_POST ["ap"];
	$sexo = $_POST ["sexo"];
	$pais = $_POST ["pais"];
	$est = $_POST ["est"];
	$email = $_POST ["email"];

	echo "<h2>INFORMACION RECIBIDA</h2>";
	echo "<br>";
	echo "Nombre:". $nom;
	echo "<br>";
	echo "Apellido:". $ap;
	echo "<br>";
	echo "Sexo::". $sexo;
	echo "<br>";
	echo "País:". $pais;
	echo "<br>";
	echo "Estado:". $est;;
	echo "<br>";
	echo "Email:". $email;



?>
