<?php
/**@author: Ruann Campos
*@package: controllers
**/
ini_set("display_erros", 1);

include_once dirname(__DIR__).'/models/config.php';
include_once dirname(__DIR__).'/models/class/Connect.class.php';
include_once dirname(__DIR__).'/models/class/Manager.class.php';

$manager = new Manager;

/*Toda a criação e estruturação do CRUD está disposta abaixo, com: adição, edição e delete*/

if(isset($_GET['action']) && $_GET['action'] == "delete"){
	$_POST['action'] = "delete";
}

	switch ($_POST['action']) {
		case 'add':
			unset($_POST['action']);
			$_POST['senha'] = sha1($_POST['senha']);
			$manager->insert_common("cadastro",$_POST, null);
			header("location: ".$project_index."/admin.php?op=manager-users");
		break;

		case 'edit':
			unset($_POST['action']);
			if($_POST['senha'] == ""){
				unset($_POST['senha']);
			}else{
				$_POST['senha'] = sha1($_POST['senha']);
			}

			$manager->update_common("cadastro", $_POST, ['id'=>$_POST['id']], null);
			header("location: ".$project_index."/admin.php?op=manager-users");
		break;


		case 'delete':
			$manager->delete_common("cadastro", ['id'=>$_GET['id']], null);
			header("location: ".$project_index."/admin.php?op=manager-users");			

		break;


	}

?>