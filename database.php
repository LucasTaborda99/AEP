<?php

try {
  $conn = new PDO("sqlite:". __DIR__ ."/database.db");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Conectado ao banco de dados";


// CRIAÇÃO DO BANCO DE DADOS
// 

// $sql = 'CREATE TABLE cliente (
//   id_cliente INTEGER PRIMARY KEY AUTOINCREMENT,
//   admin int,
//   nome char(100),
//   rg char(20),
//   cpf char(20),
//   dataNasc date,
//   email char(100),
//   cep int,
//   rua char(100),
//   numero int,
//   bairro char(100),
//   cidade char(100),
//   uf char(2),
//   senha char(100)
// );';

// $sql1 = "INSERT INTO  cliente (admin, nome, rg, cpf, dataNasc, email, cep, rua, numero, bairro, cidade, uf, senha) 
// VALUES (1, 'admin', 'admin', 'admin', '00000000', 'admin@admin.com', 0, 'admin', 0, 'admin', 'admin', 'ad', '123');";

// $sql2 = 'CREATE TABLE sala (
//   id_sala INTEGER PRIMARY KEY,
//   horario_disp1 datetime,
//   horario_disp2 datetime,
//   horario_disp3 datetime,
//   valor_ensaio int,
//   valor_gravacao int
// );

// CREATE TABLE agenda (
//   id_agenda INTEGER PRIMARY KEY AUTOINCREMENT,
//   cpf char(20),
//   id_sala INTEGER,
//   data date,
//   horario datetime,
//   tipo char(20),
//   valor int,
//   forma_pag char(100),
//   CONSTRAINT fk_cpf
//     FOREIGN KEY (cpf)
//     REFERENCES cliente (cpf)
//   CONSTRAINT fk_sala_id
//     FOREIGN KEY (id_sala)
//     REFERENCES sala (id_sala)
// );

// CREATE TABLE equipamento (
//   id_equipamento INTEGER PRIMARY KEY AUTOINCREMENT,
//   nome char(100),
//   marca char(100),
//   modelo char(100),
//   tipo char(100),
//   id_sala INTEGER,
//   CONSTRAINT fk_sala_id
//     FOREIGN KEY (id_sala)
//     REFERENCES sala (id_sala)
// );';

// $conn->exec($sql);
// $conn->exec($sql1);
// $conn->exec($sql2);

// 
// INSERT INTO  cliente (admin, nome, senha) VALUES (1, 'admin', 'admin');
// 

} catch(PDOException $e) {  
  echo "Falha ao conectar: " . $e->getMessage();
  // phpinfo();
}