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