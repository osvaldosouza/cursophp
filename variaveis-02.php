<?php
$nome = "Osvaldo";
$site = 'www.delmoro.com.br';

$ano = 1973;
$salario = 5500.99;
$bloqueado = false;
//dados compostos exemplo de array
$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];
echo "<br/>";
echo $frutas[0];
echo "<br/>";
echo $frutas[1];
echo "<br/>";
//dados compostos expemplos de objetos
$nascimento = new DateTime();
//echo $nascimento;
//tipos de dados especiais resources
$arquivo = fopen("variaveis-01.php", "r");

//var_dump($arquivo);
$nulo = NULL;  //variavel nula ausencia de valor
$vazio = "";  // variavel foi iniciada e esta reservada na memoria


?>

