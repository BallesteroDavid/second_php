<?php

echo "array.php";

$array = ["titi", "toto,", "tata", "tutu"];

//  faites un [] pour faire un tableau

// var_dump ($array);

// add titi au tableau

// $array[] = "tyty";
// var_dump ($array);
// uptade "tyty" par "toutou"

// $array[4] = "toutou";
// var_dump ($array);

// delete "toutou" de mon array

// unset($array[4]);
// var_dump ($array);

// comment savoir combien d'éléments comporte mon array
// $arrayCount = count($array);
// var_dump ($arrayCount);
// // affichage brut d'un array
// print_r($array);

// tableau associatif
// faire un array associatif d'un user avec comme éléments name, age, ville, hobbie

$user = [
    "name" => "David", 
    "age" => 27, 
    "ville" => "Madrid", 
    "hobbie" => "Wakeboard"
];
var_dump($user);

// afficher sur le client la phrase "je suis [name], j'ai [age]. je vie à [ville] et mon hobbie est [hobbie]".
$message = "Je suis {$user["name"]}, j'ai {$user["age"]}. Je vie à {$user["ville"]} et mon hobbie est {$user["hobbie"]}.";
echo $message;
