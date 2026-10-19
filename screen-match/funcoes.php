<?php

function exibermensagemlancamento(int $ano): void
{
    if ($ano >= 2022) {
        echo "Essse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Essse filme ainda é novo\n";
    } else {
        echo "Essse filme não é um lançamento\n";
    }
}

function incluidoNoPlano(bool $planoPrime,int $anolancamento): bool {
 return $planoPrime || $anolancamento < 2020;

}
?>