<?php include "banco.php"; ?>
<?php include "session.php";?>
<html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8"/>
            <title>BACKTRACK | PROJECT </title>
            <link rel="stylesheet" href="../_css/estilo.css">
            <link rel="stylesheet" href="../_css/formularios.css">

        </head>
        <body>
            <div id="interface">
            
            <div id="admin">
            <?php echo '<span>Bem vindo '.$logado.'</span>'?>
            <a id="logout" type="button" href="../logout.php">Sair</a>
            
            </div>
                <a href="template.php"><header id="cabecalho"></header></a>
                <?php include "menu.php"; ?>
                <section id="conteudo">
                
                <?php include "switch.php"?>

                </section>


                <footer id="rodape">
                    <h3>Copyright &copy 2015 - by Carlos Eduardo</h3><br>
                </footer>
            </div> 
        </body> 
    </html>

