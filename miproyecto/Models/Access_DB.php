<?php
//----------------------------------------------------
// DB connection function
// Can be modified to use CONSTANTS defined in config.inc
// Jorge Perez Robles 30/11/2018
//----------------------------------------------------


function ConnectDB()
{
    $mysqli = new mysqli("localhost", 'iu2018', 'pass2018' , 'IU2018');
    	
	if ($mysqli->connect_errno) {
		include './MESSAGE_View.php';
		new MESSAGE("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error, './index.php');
		return false;
	}
	else{
		return $mysqli;
	}
}

?>
