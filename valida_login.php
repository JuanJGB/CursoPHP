<?php
require_once("funcoes_valida_login.php");
$login_user = $_POST['login'];
$senha_user = $_POST['senha'];


$usuario_validado = valida_login($login_user,$login_user);

if ($usuario_validado){
    echo "Acesso Lierado ";
}else {

    echo "Acesso Negado";
}

