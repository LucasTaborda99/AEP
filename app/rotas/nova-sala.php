<?php

session_start();

if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('nova-sala.html', []);
} else {
    echo $twig->render('login.html', []);
}