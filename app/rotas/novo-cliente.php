<?php

session_start();

if (isset($_SESSION['login']) == "Logado") {
    echo $twig->render('novo-cliente.html', []);
} else {
    echo $twig->render('login.html', []);
}