<?php  

	include_once 'Connect.class.php';
	include_once 'Manager.class.php';

	$manager = new Manager;

	if(isset($_GET['cursos'])){		
		$curso = $manager->select_common("cursos",null,['cod_curso'=>"1"], null);
		echo json_encode($curso);
		
	}

	if(isset($_GET['cursos'])){		
		$curso = $manager->select_common("cursos",null,['cod_curso'=>"2"], null);
		echo json_encode($curso);
	}

	if(isset($_GET['cursos'])){		
		$curso = $manager->select_common("cursos",null,['cod_curso'=>"3"], null);
		echo json_encode($curso);
	}

	if(isset($_GET['cursos'])){		
		$curso = $manager->select_common("cursos",null,['cod_curso'=>"4"], null);
		echo json_encode($curso);
	}

?>