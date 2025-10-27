<?php


date_default_timezone_set('America/Sao_Paulo');

function saudacao():string
{
    $hora = date('H');
    if ($hora >= 0 && $hora < 5) {
        $saudacao = 'Boa madrugada!';
    } else if ($hora >= 6 && $hora < 10) {
        $saudacao = 'Bom dia!';
    } else if ($hora >= 11 && $hora < 17) {
        $saudacao = 'Boa tarde!';
    } else if ($hora >= 18 && $hora < 23) {
        $saudacao = 'Boa noite!';
    }

    return $saudacao;
}
?>