<?php
/**@author: Ruann Campos
*@package: controllers
**/

/* Para se fazer o logout, é necessário colocar projeto_final/controllers/logout.php*/

session_start();

session_destroy();

header("location: ../index.php?sucess=session_ending");

?>