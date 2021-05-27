<?php  

	include_once 'Connect.class.php';
	include_once 'Manager.class.php';

	$manager = new Manager;

	if(isset($_GET['ativos'])){		
		$curso = $manager->select_common("cursos",null,['status'=>"Ativo"], null);
		echo json_encode($curso);
		
	}

	if(isset($_GET['inativos'])){		
		$curso = $manager->select_common("cursos",null,['status'=>"Inativo"], null);
		echo json_encode($curso);
	}

?>