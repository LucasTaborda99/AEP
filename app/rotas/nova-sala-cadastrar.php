<?php

$id_sala = $_POST['id_sala'];
$horario_disp1 = $_POST['horario_disp1'];
$horario_disp2 = $_POST['horario_disp2'];
$horario_disp3 = $_POST['horario_disp3'];
$valor_ensaio = $_POST['valor_ensaio'];
$valor_gravacao = $_POST['valor_gravacao'];

$sql = "INSERT INTO sala (id_sala, horario_disp1, horario_disp2, horario_disp3, valor_ensaio, valor_gravacao) 
        VALUES (:id_sala, :horario_disp1, :horario_disp2, :horario_disp3, :valor_ensaio, :valor_gravacao);";

$statement = $conn->prepare($sql);
$statement->bindParam(':id_sala', $id_sala);
$statement->bindParam(':horario_disp1', $horario_disp1);
$statement->bindParam(':horario_disp2', $horario_disp2);
$statement->bindParam(':horario_disp3', $horario_disp3);
$statement->bindParam(':valor_ensaio', $valor_ensaio);
$statement->bindParam(':valor_gravacao', $valor_gravacao);
$statement->execute();

echo $template = $twig->render('salas.html', []);