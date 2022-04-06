<?php 

session_start();

$cpf = $_POST['cpf'];
// $senha = hash('sha256', $_POST['senha']);
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente WHERE cpf = '$cpf' and senha = '$senha';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
    $template = $twig->render('dashboard.html', [
        $_SESSION['login'] = "Logado",
        $_SESSION['cpf'] = $_POST['cpf']
    ]);
} else {
    $template = $twig->render('login.html', [
        'ehErro'  => true
        // ehErro é o alert na tela que o login não validou! Usado com Block PHP
    ]);
}

$cpf = isset($_SESSION['cpf']);
$sql2 = "SELECT nome FROM agenda WHERE cpf = $cpf;";
$statement->execute();

$result2 = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta2 = $statement->fetchAll();
$_SESSION['nome'] = $resultadoConsulta2;



echo $template;

    // <?php
    // Session_start();
    // if (isset($_SESSION['erro'])){
    // echo $_SESSION['erro'];
    // }
