<?php

$cpf = $_POST['cpf'];
$id_sala = $_POST['id_sala'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$forma_pag = $_POST['forma_pag'];

$sql = "INSERT INTO agenda (cpf, id_sala, data, horario, tipo, valor, forma_pag) 
        VALUES (:cpf, :id_sala, :data, :horario, :tipo, :valor, :forma_pag);";

$statement = $conn->prepare($sql);
$statement->bindParam(':cpf', $cpf);
$statement->bindParam(':id_sala', $id_sala);
$statement->bindParam(':data', $data);
$statement->bindParam(':horario', $horario);
$statement->bindParam(':tipo', $tipo);
$statement->bindParam(':valor', $valor);
$statement->bindParam(':forma_pag', $forma_pag);
$statement->execute();

echo $template = $twig->render('agendar.html', []);