<?php 

$user = $_POST['user'];
<<<<<<< HEAD
$senha = hash('sha256', $_POST['senha']);
=======
<<<<<<< HEAD
$senha = $_POST['senha'];
=======
$senha = hash('sha256', $_POST['senha']);
>>>>>>> 38b89262071a71f3c6728662dbac4a9287bd1b62
>>>>>>> 7a09ffd7a6c55254e507bb1f1206621377ee4001

$sql = "SELECT * FROM user WHERE user = '$user' and senha = '$senha';";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

if (count($resultadoConsulta) == 1) {
<<<<<<< HEAD
    $template = $twig->render('menu.html', [
    ]);
} else {
    $template = $twig->render('login.html', [
        'ehErro'  => true
        // ehErro é o alert na tela que o login não validou! Usado com Block PHP
=======
<<<<<<< HEAD
    $template = $twig->render('painel.html', [
=======
    $template = $twig->render('inicio.html', [
>>>>>>> 38b89262071a71f3c6728662dbac4a9287bd1b62
    ]);
} else {
    $template = $twig->render('404.html', [
        'ehErro'  => true
>>>>>>> 7a09ffd7a6c55254e507bb1f1206621377ee4001
    ]);
}

echo $template;

    // <?php
    // Session_start();
    // if (isset($_SESSION['erro'])){
    // echo $_SESSION['erro'];
    // }
<<<<<<< HEAD
    // 

    // Login está OK.
=======
    // 
>>>>>>> 7a09ffd7a6c55254e507bb1f1206621377ee4001
