<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;

echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;


$variavel = 'Agora sou uma string!';
echo '<br>';
var_dump($variavel);

$variavel = 7.8;
echo '<br>';
var_dump($variavel);

//Nomes Válidos
$var = 'válida';
$var2 = 'válida';
$VAR3 = 'válida';
$_var_4 = 'válida'; //mas não é legal
$vâr5 = 'válida';//mas não é legal
//$6var = 'inválida';
//$%var7 = 'inválida';
//$var8% = 'inválida;

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);