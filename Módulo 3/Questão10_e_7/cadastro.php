<!DOCTYPE html>
<html>
<head>
	<title>Cadastro PHP UTD ONLINE </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
					<h3>Cadastro de Produtos</h3><hr>
					<form action="cadastraProduto.php" method="POST">
					<label>Nome do Produto</label><br>
					<input type="text" class="form-control" name="nomeProduto" placeholder="Nome"><br><br>

					<label>Preço do Produto</label><br>
					<input type="text" class="form-control" name="precoProduto" placeholder="Preço"><br><br>

					<label>Código do Produto</label><br>
					<input type="text" class="form-control" name="codigoProduto" placeholder="Código"><br><br>

					<label>Quantidade do Produto</label><br>
					<input type="text" class="form-control" name="quantidadeProduto" placeholder="Quantidade"><br><br>

					<button class="btn btn-primary">Cadastrar Produto</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>	
</body>
</html>