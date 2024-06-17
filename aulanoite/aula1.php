<?php

echo "<h1>Hello World</h1>";

$nome = "Carol";
$anoNasc = 2005;
$idade = 2024 - $anoNasc;
$peso = 54.3;
$altura = 1.67;
$imc = $peso / pow($altura,2);
$ehCasado = True;

if($idade>=18){
    echo "$nome você é maior de idade";
 }else{
    echo "$nome você é menor de idade";   
}

if($imc < 18.5){
    echo"<br>$nome kd vc?";
}else if($imc >=18.5 && $imc < 24.9){
    echo"<br>$nome tá lindão";
}else if($imc >=25 && $imc < 29.9){
    echo"<br>$nome para de comer rolha de poço";
}else if($imc >=30 && $imc< 34.9){
    echo"<br>$nome tá exagerando chupeta de baleia";
}else if($imc >=35 && $imc < 39.9){
    echo"<br>$nome Se mudar o telefone de bolso, muda de DDD";
}else{
    echo"Thais Carla";
}

$op = 6;
switch ($op) {
    case 1;
    echo "<br>Domingo";
    break;
    case 2;
    echo "<br>Segunda-feira";
    break;
    case 3;
    echo "<br>Terça-feira";
    break;
    case 4;
    echo "<br>Quarta-feira";
    break;
    case 5;
    echo "<br>Quinta-feira";
    break;
    case 6;
    echo "<br>Sexta-feira";
    break;
    case 7;
    echo "<br>Sábado";
    default;
    echo "<br> Dia da semana inválida";
}

$cont = 1;
while($cont <= 10){
    echo "<br>$cont <br>";
    $cont++;
}
echo"<br>";

for($i=1; $i<=10; $i++){
    echo " <p style='border:1px solid black;'>Numero: $i </p>";
}

while($cont <= 10){
    echo "<br>$cont <br>";
}

echo "<br>Boa noite, $nome";
echo '<br>Boa noite, $nome aspas simples';
echo '<br>Boa noite ' .$nome . ' seja bem vindo';
echo "<br>$nome hoje teremos aula fica esperto $nome";
echo "<br>$nome nascido em $anoNasc tem $idade anos";