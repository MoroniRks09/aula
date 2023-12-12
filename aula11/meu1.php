<?php


$sexo = [
    "Masculino",
    "Feminino"             
];

$nome_masculino = [
    "José",
    "Hian",
    "Diogo",
    "Caio",
    "Joao",
    "Gustavo",
    "Eric",
    "Marco"
];

$nome_feminino = [
    "Alana",
    "Duda",
    "Gabriela",
    "Emily",
    "Giovana",
    "Maria",
    "Joana",
    "Mirela"
];

$sobrenomes = [
    "Barbosa",
    "Alves",
    "Almeida",
    "Oliveira",
    "Santana",
    "Batista",
    "Borges",
    "Campos"
];

$idade_minima = 18;

$idade_maxima = 75;

$min = 0;

$index_sexo = rand(0, count($sexo) -1);
$index_masculino = rand(0,count($nome_masculino)-1);
$index_feminino =  rand(0,count($nome_feminino)-1);
$index_sobrenome = rand(0,count($sobrenomes)-1);
$valor_da_idade = rand(18,75);

if($sexo == "Masculino"){
    $nome = $nome_masculino[$index_masculino]; 
}else{
    $nome = $nome_feminino[$index_feminino];

}
$sobre = $sobrenomes[
    $index_sobrenome 
];

$nome_aleatorio = [
     "nome" => "$nome $sobrenome",
     "sexo" => "$index_sexo", 
    "idade" => $valor_da_idade
];

var_dump($nome_aleatorio);















































?> 