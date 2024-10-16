<?php

include('../includes/header.php');

// Arrays é como uma lista 
//"como uma caixa que conseguimos colocar varias coisas dentro"

echo "<br>";

echo "<h2>Arrays em PHP</h2>";
echo '<p>Um ARRAY é uma estrutura de dados que permite armazenar múltiplos valores relacionados sob um único nome (em uma variável)</p>';

echo "<br><hr>";

echo '<h3>Array Indexado</h3>';
//  indice, precisa de uma variável indice. [] - indice; começa do 0;

$fruta = array("Maçã","Banana","Mamão","Melão","Pera","Uva");
$quantidade = count($fruta);


// mostra tds as frutas;
for($i = 0; $i < $quantidade; $i++ ){
    echo "{$fruta[$i]}<br>";
}

echo "<br><hr>";

echo '<h3>Array Associativo</h3>';
// indice vai ser o nome do valor que quer;

$idades = array("João" => 15,"Maria" => 17,"Mariana" => 18,"César" => 19);
echo $idades ["Mariana"];

echo "<br><br><hr>";

echo '<h3>Array Multidimensionais</h3>';
// tbm começa do zero; é separado em referências com varios "valores" dentro;

$alunos = array(
    "Nome" => array ("Pedro","Mariana","Maria","João"),
    "Sobrenome" => array ("Silva","Santos","Souza","Lima"),
    "Curso" => array ("Front-End","PHP","Java","JavaScript")
);

echo "Aluno: {$alunos["Nome"][2]} {$alunos["Sobrenome"][3]} - Curso: {$alunos["Curso"][0]}";

echo "<br><br><hr>";

include('../includes/footer.php');