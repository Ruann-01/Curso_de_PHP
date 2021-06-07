<?php
/**@author: Ruann Campos
*@package: principal
**/
    session_start();   
    if(isset($_SESSION[md5("user_data")])){
        header("location: admin.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Projeto Final</title>
<link href="stylesheet.css" rel="stylesheet">
<meta charset="utf-8"/>
</head>

<body>

<section>
    <form action="controllers/login.php" method="POST" class="caixa-menu">

        <h1>Login</h1>

        <input type="text" id="id_login" name="login" placeholder="Login" class="caixa-area" required><br>

        <input type="password" id="id_senha" name="senha" placeholder="Senha" class="caixa-area" required><br>

        <input type="submit" value="login" class="botao-envia"><br>

        <a href="esqueci.html">Esqueci a senha</a><br><br>
        Ainda não possui uma conta? 

        <a href="cadastra.html" class="botao-link">Cadastrar agora!</a><br>

    </form>
</section>

</body>
</html>