<?php
function contarTempo(string $data):string
{
    $agora = strtotime(date(format: 'Y/m/d h:i:s'));
    $tempo = strtotime($data);

    echo ($agora);
    echo "<hr>";
    echo ($tempo);

    return true;

}
