<?php  

	// Pegando os dados de uma url
	/*$dados = file_get_contents("https://viacep.com.br/ws/".$_GET['cep']."/json/");
	$dados = json_decode($dados, true);
	
	foreach ($dados as $key => $value) {
		echo "$key -> $value <br>";
	}*/

	/*
	$cotacoes = json_decode(file_get_contents("https://economia.awesomeapi.com.br/json/daily/USD-BRL/?start_date=".$_GET['in']."&end_date=".$_GET['end']),true);

	//print_r($cotacoes);

	foreach ($cotacoes[0] as $key => $value) {
		echo "$key -> $value <br>";
	}
	*/

	// Buscando as despesas do sistema
	$despesas = file_get_contents("http://localhost/utdonline/AULA04/apis.php?receitas");

	print_r($despesas);
?>