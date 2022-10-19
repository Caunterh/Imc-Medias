<?php

$nome = $_GET['nome'];
$altura = $_GET['altura'];
$peso = $_GET['peso'];
$altura = str_replace(',', '.', $altura );
$peso = str_replace(',', '.', $peso);
$peso = floatval($peso);
$altura = floatval($altura);

function imc($peso, $altura){
$imc = $peso / ($altura * $altura);


if($imc <= 17){

    return number_format($imc, 2, '.', ''). "<br> Você esta muito abaixo do peso!";

} else if ($imc <= 18.49){
    return number_format($imc, 2, '.', ''). "<br>Abaixo do peso!";

} else if ($imc <= 24.99){
    return number_format($imc, 2, '.', ''). "<br>Peso normal";

} else if ($imc <= 29.99){
    return number_format($imc, 2, '.', ''). "<br>Acima do peso";

} else if ($imc <= 34.99){
    return number_format($imc, 2, '.', ''). "<br>Obesidade I";

}else if ($imc <= 39.99){
    return number_format($imc, 2, '.', ''). "<br>Obesidade II(SEVERA)";

}else if ($imc >= 40){
    return number_format($imc, 2, '.', ''). "<br>Obesidade III(Mórbida)";

}else if($imc = 0){
    return number_format($imc, 2, '.', ''). "<br>Invalido";

}

}
printf("Olá $nome, Seu IMC é: ".imc($peso, $altura));
 




?>