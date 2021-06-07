<?php
/**@author: Ruann Campos
*@package: principal
**/
include_once 'models/config.php';
include_once 'controllers/validate.php';
include_once 'views/template.html';


function page_content(){
	validate_options();
}


?>