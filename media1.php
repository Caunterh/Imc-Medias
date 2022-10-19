<?php 
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota1 = str_replace(',','.', $nota1);
$nota2 = str_replace(',','.', $nota2);
$nota1 = floatval($nota1);
$nota2 = floatval($nota2);

function imc ($nota1, $nota2){
    $nota3 = $nota1 + $nota2;
    $media = $nota3/2; 

if($media <= 4.0){
   return number_format($media, 2,)."<br>Você está reprovado!";  
}elseif($media < 6.0){
  return number_format($media, 2,)."<br>Você téra que fazer a prova final";
}elseif($media > 6){
    return number_format($media, 2,)."<br>Você está aprovado";
}
}
printf("Sua média é :".imc($nota1, $nota2));

?>
