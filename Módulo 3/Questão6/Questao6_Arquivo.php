<?php 
	#Recebendo os dados
	$dados = $_GET;

	#TRansformando o array em string
	$dados=implode(" - ", $dados);

	#Criar um arquivo txt
	$arquivo = fopen("usuarios.txt", "a+");

	#Escrevendo os dados do produto no arquivo
	fwrite($arquivo, $dados."\n");

	#Fechar arquivo
	fclose($arquivo);

 ?>