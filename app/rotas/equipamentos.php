<?php

session_start();

$sql = "SELECT * FROM equipamento";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('equipamentos.html', [
        'equipamentos' => $resultadoConsulta,
    ]);
} else {
    echo $twig->render('login.html', []);
}