<?php

session_start();

$sql = "SELECT * FROM cliente c INNER JOIN agenda a ON c.cpf = a.cpf ORDER BY a.data DESC;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();


$sql1 = "SELECT count(valor) FROM agenda;";

$statement = $conn->prepare($sql1);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta1 = $statement->fetchAll();


$sql2 = "SELECT count(*) FROM agenda;";

$statement = $conn->prepare($sql2);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta2 = $statement->fetchAll();


$sql3 = "SELECT count(*) FROM cliente;";

$statement = $conn->prepare($sql3);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta3 = $statement->fetchAll();


if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('dashboard.html', [
        'agendar' => $resultadoConsulta,
        'nome' => "Gustavo",
        'cargo' => "Admin",
        'profile-photo' => "profile-photo",
        //'valorGanho' => $resultadoConsulta1,
        //'totalAgendamentos' => $resultadoConsulta2,
        //'totalClientes' => $resultadoConsulta3
    ]);
} else {
    echo $twig->render('login.html', []);
}