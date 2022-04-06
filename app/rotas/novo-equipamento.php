<?php

session_start();

$sql = "SELECT * FROM sala;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('novo-equipamento.html', [
        'salas' => $resultadoConsulta
    ]);
} else {
    echo $twig->render('login.html', []);
}