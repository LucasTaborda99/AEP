<?php

session_start();

$sql = "SELECT * FROM sala;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

$sql1 = "SELECT * FROM equipamento e INNER JOIN sala s ON s.id_sala = e.id_sala WHERE e.id_sala = 10;";

$statement = $conn->prepare($sql1);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta1 = $statement->fetchAll();

$sql2 = "SELECT * FROM cliente";

$statement = $conn->prepare($sql2);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta2 = $statement->fetchAll();


if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('novo-agendamento.html', [
        'salas' => $resultadoConsulta,
        'equipamentos' => $resultadoConsulta1,
        'clientes' => $resultadoConsulta2
    ]);
} else {
    echo $twig->render('login.html', []);
}