<?php

if($url_param[0] == ""){
	include(INTERFACE_LOJA."/estrutura/cabecalho/cabecalhoTeste.html");
}
if($url_param[0] == "cadastro"){
	//include(INTERFACE_LOJA."/cliente/formCadastroPFisica");
	include(INTERFACE_LOJA."/cliente/formCadastro.html");
	include(INTERFACE_LOJA."/cliente/validaForm.js");
}

?>