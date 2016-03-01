<?php
//chamada para criação das variaveis globais
include("globals.php");
//chamada para quebra da URL em parâmetros
include(FISICO_ABS."/quebra-url.php");

//session_start();

//include(FISICO_ABS.'/loja/interface/estrutura/index.php');

if(!empty($_POST)){
	print_r($_SERVER);
	die();
}else{
	
}

/*echo '<pre>';
print_r($url_param);
echo '</pre>';*/

if($url_param[0] == "admin"){
	include(INTERFACE_ADMIN."/estrutura/index.php");
}else{
	include(INTERFACE_LOJA."/estrutura/index.php");
}

?>