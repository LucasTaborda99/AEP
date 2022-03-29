<?php 

$user = $_POST['user'];
<<<<<<< HEAD
$senha = $_POST['senha'];
=======
$senha = hash('sha256', $_POST['senha']);
>>>>>>> 38b89262071a71f3c6728662dbac4a9287bd1b62

$sql = "SELECT * FROM user WHERE user = '$user' and senha = '$senha';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
<<<<<<< HEAD
    $template = $twig->render('painel.html', [
=======
    $template = $twig->render('inicio.html', [
>>>>>>> 38b89262071a71f3c6728662dbac4a9287bd1b62
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