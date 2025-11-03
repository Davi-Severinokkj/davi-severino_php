<?php

$meses = array();
$mes = [
    'Janeiro', 'Fevereiro',
    'Março', 'Abril',
    'Maio', 'Junho',
    'Julho', 'Agosto',
    'Setembro', 'Outubro',
    'Novembro', 'Dezembro'];

// IMPRIME AS CHAVES E O VALOR
echo 'CHAVE E VALOR'; echo '<br>';
foreach($mes as $key => $value){
    echo $key . ' - '. $value . '<br>';
}

echo '<hr>';
echo $mes [0];
echo '<hr>';
echo $mes [1];
echo '<hr>';
echo $mes [2];
echo '<hr>';
echo $mes [3];
echo '<hr>';
echo $mes [4];
echo '<hr>';
echo $mes [5];
echo '<hr>';
echo $mes [6];
echo '<hr>';
echo $mes [7];
echo '<hr>';
echo $mes [8];
echo '<hr>';
echo $mes [9];
echo '<hr>';
echo $mes [10];
echo '<hr>';
echo $mes [11];
echo '<hr>';
var_dump($mes);
echo '<hr>';

function dataAtual():string{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('m');
    $ano = date('Y');

    $nomeDosMeses  = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    $nomeDiasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
    $dataFormatada = $nomeDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses [$mes - 1] . ' de ' . $ano . '.';

    return $dataFormatada;
}
echo dataAtual();