<?php


// Função que calcula média


function media($n1, $n2, $n3, $n4)
{
    $media = $n1 + $n2 + $n3 + $n4 / 4;
    return $media;
}
echo '<hr>';
echo 'A sua média é ' . media(21, 23, 17, 15);
echo '<hr>';

$alunos[0] ["nome"] = "Alice";
$alunos[0] ["nota"] = media(1, 2, 7, 3);

$alunos[1] ["nome"] = "Bob";
$alunos[1] ["nota"] = media(3, 3, 1, 3);

$alunos[2] ["nome"] = "John";
$alunos[2] ["nota"] = media(2, 4, 7, 4);

$alunos[3] ["nome"] = "Mary";
$alunos[3] ["nota"] = media(4, 7, 7, 6);

$alunos[4] ["nome"] = "Jim";
$alunos[4] ["nota"] = media(5, 6, 7, 4);

for ($i = 0; $i < count($alunos); $i++) {
    echo 'Nome do aluno: ' . $alunos[$i]["nome"] . '<br> Nota: ' . $alunos[$i]["nota"] . '<br><br>'; ;
}