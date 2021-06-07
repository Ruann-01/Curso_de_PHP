<?php
/**@author: Ruann Campos
*@package: principal
**/
function insert($table, $dados){
	global $conn;

	$campos = implode("`, `",array_keys($dados));
	$valores = implode("', '",$dados);

	$query = "INSERT INTO $table (`$campos`) VALUES ('$valores');";

	$return = mysqli_query($conn, $query);

	if($return){
		header("location: index.html");
	}else{
		echo "Ocorreu algum problema no cadastro, tente novamente!";
	}

}


?>