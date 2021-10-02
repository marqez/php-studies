<div class="titulo">Valor vs Referência</div>
<?php
$variavel = 'valor inicial';
echo $variavel;

//Atribuiçãopor valor
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

//Atribuição por Referência
$variavelReferencia = &$varivel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";