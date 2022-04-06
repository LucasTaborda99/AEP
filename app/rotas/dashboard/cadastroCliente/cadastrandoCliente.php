<?php include "banco.php"; ?>
  
                <?php
                $nome = $_POST['nome'];
                $endereco = $_POST['end'];
                $telefone = $_POST['tel'];
                $email = $_POST['email'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $estado = $_POST['estado'];
                $cidade = $_POST['cidade'];
                $sql = mysql_query("INSERT INTO cliente(nome, endereco, telefone, email, rg, cpf, estado, cidade) 
VALUES('$nome' , '$endereco' , '$telefone' , '$email' , '$rg' , '$cpf' , '$estado' , '$cidade')") or die(mysql_error());
              

                echo "<center><h3>Cadastro efetuado com sucesso !</center></h3>";
                header( "refresh:1;url=template.php?pag=cadastroCliente" );
                ?>
<?php include "template.php";?>
             