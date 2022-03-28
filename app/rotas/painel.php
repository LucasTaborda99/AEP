<?php 

$user = $_POST['user'];
$senha = hash('sha256', $_POST['senha']);

$sql = "SELECT * FROM user WHERE user = '$user' and senha = '$senha';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
    $template = $twig->render('inicio.html', [
    ]);
} else {
    $template = $twig->render('404.html', [
        'ehErro'  => true
    ]);
}

echo $template;

    // <?php
    // Session_start();
    // if (isset($_SESSION['erro'])){
    // echo $_SESSION['erro'];
    // }
    // 