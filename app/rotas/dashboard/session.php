<?php
    session_start();
    if (!isset($_SESSION['user']) == true && (!isset($_SESSION['senha']) == true)) {
    
    unset($_SESSION['user']);
    unset($_SESSION['senha']);
    header("Location:../index.php");
    
} 
	$logado = $_SESSION['user'];

?>