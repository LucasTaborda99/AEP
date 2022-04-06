<?php

session_start();

$sql = "SELECT * FROM cliente c INNER JOIN agenda a ON c.cpf = a.cpf ORDER BY a.data DESC;";

$statement = $conn->prepare($sql);
$statement->execute();

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);
$resultadoConsulta = $statement->fetchAll();

if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('agendar.html', [
        'agendar' => $resultadoConsulta,
    ]);
} else {
    echo $twig->render('login.html', []);
}