<?php include "../banco.php"; ?>
<?php include "../template.php"; ?>

                <?php
                $nome = $_POST['nome'];
                $telefone = $_POST['tel'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
				$user = $_POST['user'];
                $sql = mysql_query("INSERT INTO usuario(nome,telefone, email, senha, usuario) 
				VALUES('$nome' ,'$telefone' , '$email' , '$senha', '$user')") or die(mysql_error());
                echo "<center><p>Cadastro efetuado com sucesso</center></p>";
				session_destroy();
                ?>
           