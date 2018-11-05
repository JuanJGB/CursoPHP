<?php

function valida_login($login, $senha){

    //Validar direto em um banco de dados
    $login_bd = 'JuanJGB';
    $senha_bd = '1234321';

    if ($login = $login_bd) {
       return true;
    }
       return false;
}
