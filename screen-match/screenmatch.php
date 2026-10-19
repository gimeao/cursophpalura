<?php

require __DIR__ ."/funcoes.php";

echo "Bem vindo(a) ao screen match cinema!\n";

$nomeFilme = "Top Gun - Maverick";

$anolancamento = 2022;

$quantidadeNota = $argc - 1;
$notas = [];

$somasDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}


$notaFilme = array_sum($notas)/$quantidadeNota;
$planoPrime = true;

$IncluidoNoPlano = incluidoNoPlano($planoPrime,$anolancamento);

echo "A nota do filme é " . $notaFilme . "\n";
echo "O nome do filme é: " . $nomeFilme . "\n";
echo "Ano de lançamento do filme: " . $anolancamento . "\n";

exibermensagemlancamento($anolancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    default => "Gênero desconhecido",
};

echo "O gênero do filme é :$genero\n";

$filme = [
    "nome" => "Thor:Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super herói",



];

echo " O ano do filme é " . $filme["ano"] . "\n";

var_dump($notas);
sort($notas);
var_dump($notas);
$maioNota=min($notas);
var_dump($maioNota);

var_dump($filme['nome']);
$posicaoDoispontos=strpos($filme['nome'],':');
var_dump($posicaoDoispontos);

var_dump(substr($filme['nome'],0,$posicaoDoispontos));

?>