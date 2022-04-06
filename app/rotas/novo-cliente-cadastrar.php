<?php

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['dataNasc'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

$sql = "INSERT INTO cliente (nome, rg, cpf, dataNasc, email, cep, rua, numero, bairro, cidade, uf) 
        VALUES (:nome, :rg, :cpf, :dataNasc, :email, :cep, :rua, :numero, :bairro, :cidade, :uf);";

$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':rg', $rg);
$statement->bindParam(':cpf', $cpf);
$statement->bindParam(':dataNasc', $dataNasc);
$statement->bindParam(':email', $email);
$statement->bindParam(':cep', $cep);
$statement->bindParam(':rua', $rua);
$statement->bindParam(':numero', $numero);
$statement->bindParam(':bairro', $bairro);
$statement->bindParam(':cidade', $cidade);
$statement->bindParam(':uf', $uf);
$statement->execute();

echo $template = $twig->render('clientes.html', []);