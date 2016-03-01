<?php
include($_SERVER['DOCUMENT_ROOT']."/tcc-dev/globals.php");
include(DOMINIO_LOJA."/cliente/cadastro/PFisica.php");
include(DOMINIO_LOJA."/cliente/cadastro/PJuridica.php");
include(DOMINIO_LOJA."/cliente/cadastro/CadastraPessoa.php");
require_once(DOMINIO_LOJA."/cliente/cadastro/Pessoa.php");
//verifica se é fisica ou juridica e utiliza as classes do domínio para cadastrar

echo "<pre>";
print_r($_POST);
echo "</pre>";

if($_POST['tipo-pessoa'] == "fisica"){
	//include(INTERFACE_LOJA."/cliente/formCadastroPFisica");
	
}else{

}

?>