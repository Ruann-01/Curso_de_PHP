<?php
/**@author: Ruann Campos
*@package: controllers
**/
ini_set("display_erros", 1);

include_once dirname(__DIR__).'/models/class/Connect.class.php';
include_once dirname(__DIR__).'/models/class/Manager.class.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$manager = new Manager;

$log = $manager->select_common("cadastro",null,['login'=>$login], "LIMIT 1");

if(!$log){
	header("location: ../index.php?error=user_not_found");
}elseif($log[0]['senha'] != sha1($senha)){
	header("location: ../index.php?error=password_incorrect");
}else{
	session_start();
	$_SESSION[md5("user_data")] = $log[0];
	header("location: ../index.php");
}


?>