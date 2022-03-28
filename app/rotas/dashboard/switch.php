<?php

if (isset($_GET['pag'])) { 
switch ($_GET['pag']){ 


case 'cadastroCliente': 
include "../dashboard/cadastroCliente/cadastroCliente.php"; 
break; 

case 'cadastroUsuario': 
include "../dashboard/cadastroUsuario/cadastroUsuario.php"; 
break; 

case 'cadastroSala': 
include "../dashboard/cadastroSala/cadastroSala.php"; 
break; 

case 'cadastroEquipamento': 
include "../dashboard/cadastroEquipamento/cadastroEquipamento.php"; 
break; 
	}

} 

?> 