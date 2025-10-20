<style>
    body{
        background-color: coral;
    }
</style>
<?php

echo 'helo muito estranho<br>';
echo '<hr>';
print 'hello world';
echo '<hr>';
echo '<p style="color: blueviolet; font-family: Corbel, sans-serif;">o maravilhosamente estranho mundo de gumball</p>';
echo '<hr>';

$nome = 'Davi';
$sobrenome = 'Severino';
$nomeCompleto = $nome . ' ' . $sobrenome;
echo ($nomeCompleto);
echo '<hr>';
$cpf = '1234567890';
var_dump($nomeCompleto);
echo '<hr>';
var_dump($cpf);
echo '<hr>';

if($cpf == '31232231321231' or $cpf ==  '423423432243'){
    echo 'Esse cpf está esquisito';
}else{
    echo 'Com esse CPF mais R$14 você entra no cinema na terça!';
}

echo '<hr>';

function soma($peso, $altura){
    $imc = $peso / ($altura * $altura);
    return $imc;

    if($imc < 18.5){
        return $resultado = "abaixo do peso";
    }elseif ($imc > 18.5 && $imc <= 24.9){
        return $resultado = "no peso normal";
    }elseif ($imc > 24.9 && $imc <= 28.9){
        return $resultado = "sobrepeso";
    }elseif ($imc > 28.9 && $imc <= 30.9){
        return $resultado = "obeso";
    }
}

echo "Seu IMC é " . soma(65, 1.83) . " e você está com " . ".";