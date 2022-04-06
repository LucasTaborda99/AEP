<?php

	session_start();
	session_destroy();
	echo $twig->render('inicio.html', []);