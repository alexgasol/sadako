<?php

	function DBConnection()
    {
    	// Datos de conexion de la base de datos
    	$DBName = 'dream_sadakoHTML';
	    $DBHost = '127.0.0.1';
	    $DBUser = 'dream_dream';
	    $DBPass = 'Dr34mpl4nn3r#';
	    // fin de datos de conexion
     
        $DBdsn = 'mysql:dbname='.$DBName.';host='.$DBHost;
 
        $DBConn;
        try {
            $DBConn = new PDO($DBdsn, $DBUser, $DBPass);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
         
        return $DBConn;
    }

?>