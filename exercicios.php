<?php
// echo"João Gime!\n";

// $nota=2;
// $nota +=3;
// $nota +=4;
// $media=$nota/3;
// echo"A média é $media\n";

########################################################
// $valorMetro =$argv[1]??0;
// $conversao=$valorMetro*100;
// echo"a conversão de m para cm é igual a: $conversao";
########################################################

// $ano=$argv[1]??0;
// if(($ano%4==0 && $ano%100!=0) || ($ano%400==0)){
//  echo"O ano é bissexto";}
// else{
//     echo"Este ano não é bissexto";
// }
########################################################

// $celsius=$argv[1]??0;
// $conversao =($celsius*1.8)+32;
// echo"o resultado da conversão é:$conversao";
########################################################

// for($i=1;$i<=5000000;$i++){
//     if($i%2==1){
//        echo"número ímpar $i\n";
//     }
// }

// $altura=$argv[1];
// $peso=$argv[2];


// $imc=$peso/($altura*$altura);
// echo"imc= $imc";
// if($imc<18.5){
//   echo"Você está abaixo do peso";
// }elseif($imc>=18.5 && $imc<=24.9){
//    echo"O seu peso é normal";
// }elseif($imc>=25 && $imc<=29){
//    echo"Você está sobrepeso";
// }elseif($imc>=30){
//     echo"Você está obeso";
// }

// $hora=$argv[1]??0;
// if($hora>=00 && $hora<=11){

//    echo"bom dia"; 
// }elseif($hora>=12 && $hora<=17){
//   echo"boa tarde!";

// }elseif($hora>=18 && $hora<=23){

//  echo"boa noite";
// }else{
//  echo"está hora não existe";
// }

// $numero=[1,2,3,4,4,5,6,7,9,0];
// $limpo=[];
// foreach($numero as $numeros){
//  if(in_array($numeros,$limpo)){
// }else{
//  $limpo[]=$numeros;
// }
// }

// $contaBancaria=[
//     // "saldo"=>5.400,

// ];
// var_dump($contaBancaria);
// $nomeFamiliare=["João",
// "Diney",
// "Manuela",
// "Dinis"];
// $nomeFamiliare[]="pp";
// var_dump($nomeFamiliare);

// $nota=[1,7,10,9,3,8];
//   foreach($nota as $notas){
//    if($notas>=6){
//     echo" A nota: $notas Aprovado"."\n";
//    }else{
//     echo" A nota: $notas Reprovado"."\n";
//    }

//   }


// $saldo=2000;
// $digitarOpcao=0;
// while($digitarOpcao!=4){

// $titularDaconta="João gime \n";
// echo"******************** \n";
// echo"Titular da conta: $titularDaconta \n";
// echo"Saldo actual $saldo; \n";
// echo"********************* \n";

// echo"1.Consultar Saldo\n";
// echo"2.Sacar Valor\n";
// echo"3.Depositar valor\n";
// echo"4.Sair\n";

// $digitarOpcao= (int) fgets(STDIN); 

// switch($digitarOpcao){

// case 1:
//    echo"O seu saldo é $saldo"."\n";
//    break;

//   case 2:
//     echo"Quanto deseja sacar?\n";
//     $sacarValor= (float) fgets(STDIN);
//     if($saldo>=$sacarValor){

//    echo"saque realizado como sucesso \n";
//        $saldo=$saldo-$sacarValor;
//   }else{
//   echo"Saldo insuficiente! \n";
//   }
//     break;

//   case 3: 
//     echo"Quanto deseja depositar?\n";
//      $deposito= (float)fgets(STDIN)."\n";
//     $saldo+=$deposito ."\n";
//      echo"depósito concluído com sucesso \n";
//     break;

//   case 4:
//     echo"Adeus\n";
//     break;

//   default :
//   echo"Opção inválida!\n";
//     break;  

// };


// }

// function imc( $peso, $altura){
// $imc=$peso/($altura*$altura);
// if($imc<18.5){
//   echo"Você está abaixo do peso";
// }elseif($imc>=18.5 && $imc<=24.9){
//    echo"O seu peso é normal";
// }elseif($imc>=25 && $imc<=29){
//    echo"Você está sobrepeso";
// }elseif($imc>=30){
//     echo"Você está obeso";
// }

// }

// imc(70,1.75);


// function conversao(float $celsius){

// $conversao=($celsius*1.8)+32;
//  echo"o resultado da conversão é:$conversao";


// }
// conversao(2);

// function soma(int $n1,int $n2,):int{
//          return $soma=$n1+$n2;

// }
// echo soma(1,2);

// $notas=[10,20,30,40];

// var_dump($notas);
// rsort($notas);
// echo "As maiores nota são: $notas[0],$notas[1],$notas[2]";


// $dados = "Vinicius Dias,1997,Programador";

// var_dump(explode(',',$dados));

echo phpversion();
?>