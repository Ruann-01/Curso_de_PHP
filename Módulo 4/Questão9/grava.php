<?php
include_once 'Conexao.php';

$curso = $_POST['curso'];

$query = "INSERT INTO cursos(curso) VALUES('$curso')";

$return = mysqli_query($conn, $query);

if($return){
	header("location: meuCadastro.php");
}else{
	echo "Erro";
}

?>