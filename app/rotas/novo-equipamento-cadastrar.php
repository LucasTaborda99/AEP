<?php

$id_sala = $_POST['id_sala'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO equipamento (id_sala, nome, marca, modelo, tipo) 
        VALUES (:id_sala, :nome, :marca, :modelo, :tipo);";

$statement = $conn->prepare($sql);
$statement->bindParam(':id_sala', $id_sala);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':marca', $marca);
$statement->bindParam(':modelo', $modelo);
$statement->bindParam(':tipo', $tipo);
$statement->execute();

echo $template = $twig->render('equipamentos.html', []);