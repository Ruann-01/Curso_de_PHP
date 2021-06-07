<?php
/**@author: Ruann Campos
*@package: controllers
**/
session_start();

session_destroy();

header("location: ../index.php?sucess=session_ending");

?>