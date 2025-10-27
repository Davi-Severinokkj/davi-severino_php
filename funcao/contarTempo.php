<?php
function contarTempo(string $data):string
{
    $agora = strtotime(date(format: 'Y/m/d h:i:s'));
    $tempo = strtotime($data);

    echo ($agora);
    echo "<hr>";
    echo ($tempo);

    $diferenca = $agora - $tempo;
    echo "<hr>";
    echo ($diferenca);

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $segundos = round($diferenca / 3600);
    $horas = round($diferenca / 86400);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2600640);
    $anos = round($diferenca / 31207680);

    return true;

}
