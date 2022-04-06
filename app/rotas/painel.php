<?php 

$user = $_POST['user'];
$senha = hash('sha256', $_POST['senha']);

$sql = "SELECT * FROM user WHERE user = '$user' and senha = '$senha';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
    $template = $twig->render('menu.html', [
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
    // 

    // Login está OK.