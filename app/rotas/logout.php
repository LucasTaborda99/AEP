<?php
<<<<<<< HEAD

	session_start();
	session_destroy();
	echo $twig->render('inicio.html', []);
=======
	session_start();
	session_destroy();
	header("Location: index.php");
?>
>>>>>>> 7a09ffd7a6c55254e507bb1f1206621377ee4001
