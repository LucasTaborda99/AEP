<?php 

session_start();


// $senha = hash('sha256', $_POST['senha']);
$email = $_POST['email'];

$sql = "SELECT * FROM cliente WHERE email = '$email';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
    $template = $twig->render('nova-senha.html', [
        $_SESSION['login'] = "Logado",
        $_SESSION['email'] = $_POST['email']
    ]);
} else {
    $template = $twig->render('login.html', [
        'ehErro'  => true
        // ehErro é o alert na tela que o login não validou! Usado com Block PHP
    ]);
}

echo $template;

    // <?php
    // Session_start();
    // if (isset($_SESSION['erro'])){
    // echo $_SESSION['erro'];
    // }