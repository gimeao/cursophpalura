<?php

echo"Bem vindo(a) ao screen match cinema!\n";

$nomeFilme = "Top Gun - Maverick";

$anolancamento = 2022; 

$quantidadeNota=$argc-1;
$notas= [];

$somasDeNotas=0;

for($contador=1;$contador < $argc; $contador++){
     $notas[] = (float) $argv[$contador];
}


$notaFilme = array_sum($notas)/$quantidadeNota;
$planoPrime = true;

$IncluidoNoPlano = $planoPrime || $anolancamento<2020;

echo "A nota do filme é ".$notaFilme."\n";
echo"O nome do filme é: ".$nomeFilme."\n";
echo "Ano de lançamento do filme: ".$anolancamento."\n";

if ($anolancamento >= 2022){
    echo"Essse filme é um lançamento\n";
}elseif($anolancamento>2020 && $anolancamento<=2022){
    echo"Essse filme ainda é novo\n";
}else{
    echo"Essse filme não é um lançamento\n";
}

$genero = match($nomeFilme){
     "Top Gun - Maverick"=>"ação",
      default=>"Gênero desconhecido",
};

echo"O gênero do filme é :$genero\n";

$filme =[
    "nome"=>"Thor:Ragnarok",
     "ano"=>2021,
     "nota"=>7.8,
     "genero"=>"super herói",



];
    echo" o nome do filme é " .$filme["nome"];

?>
