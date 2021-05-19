<?php 
	#Recebendo os dados
	$dados = $_POST;

	#TRansformando o array em string
	$dados=implode(" - ", $dados);

	#Criar um arquivo txt
	$arquivo = fopen("produtos.txt", "a+");

	#Escrevendo os dados do produto no arquivo
	fwrite($arquivo, $dados."\n");

	#Fechar arquivo
	fclose($arquivo);

	#Redirecioar para a tabela com a listagem 
	header("location: ListaProdutos.php");
 ?>