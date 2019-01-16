<!--Jorge Perez Robles 30/11/2018 aqui se hace el codigo necesario para desconectar al usuario de la pagina
-->
<?php

session_start();
session_destroy();
header('Location:../index.php');

?>
