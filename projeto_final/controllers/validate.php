<?php
/**@author: Ruann Campos
*@package: controllers
**/
function validate_options(){
	if(!isset($_GET['op'])){
		return false;
	}	

	include_once dirname(__DIR__).'/models/class/Connect.class.php';
	include_once dirname(__DIR__).'/models/class/Manager.class.php';

	switch ($_GET['op']) {
		case 'manager-users':
			$manager = new Manager;
			$users = $manager->select_common("cadastro",null,null,null);
			include_once $GLOBALS['project_path'].'/views/users/manager-users.html';
			break;

		case 'insert-user':
			include_once $GLOBALS['project_path'].'/views/users/insert-user.html';
			break;

		case 'edit-user':
			$manager = new Manager;
			$user = $manager->select_common("cadastro",null,['id'=>$_GET['id']],null);	
			include_once $GLOBALS['project_path'].'/views/users/edit-user.html';		
			break;
	}
}

?>