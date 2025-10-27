<?php
function contarTempo(string $data):string
{
    $agora = strtotime(date(format: 'Y/m/d h:i:s'));
    $tempo = strtotime($data);



    echo ($agora);
    echo "<hr>";
    echo ("Data digitada" . $tempo);
    $diferenca = $agora - $tempo;
    echo ($tempo);
    echo "<hr>";
    echo ($diferenca);

    $segundos = $diferenca;
    $minutos = round($diferenca / 60); // um minuto tem 60 segundos.
    $horas = round($diferenca / 3600); // uma hora tem 60 minutos.
    $dias = round($diferenca / 86400); // um dia tem 24 horas.
    $semanas = round($diferenca / 604800); // uma semana tem 7 dias
    $meses = round($diferenca / 2419200); // um mês tem 4 semanas
    $anos = round($diferenca / 29030400); // um ano tem 12 meses

    return true;

}
