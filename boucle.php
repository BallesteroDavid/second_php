<?php

//  tableau => si il y a plusieurs éléments,  bien mettre un "s" à la fin de la variable pour signaler qu'il y a plusieurs éléments

$classe = [
    "Naka ",
    "Will ",
    "tiBeauGoss ",
    "Olivier ", 
    "Brigitte "
];

foreach ($classe as $student) {
    echo $student;
}

// 1-faire un array qui contient les jours de la semaine et afficher pour chaque éléments éléments du tableau la phrase " à ce tour de boucle nous somme [jour]."

$days = [
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche"
];
foreach ($days as $day) {
    echo "à ce tour de boucle nous somme $day.";
};



// 2 - faire un tableau assiciatif de 5 articles (vêtements) avec le prix.
//      Afficher la phrase "ce [vet] coûte [prix] euros."

$clothes = [
    "Dress" => 35,
    "Socks" => 8,
    "Jean" => 40,
    "Tshirt" => 15,
    "Sweat" => 50
];
$total = 0;
$nbreArticle = 0;
$avg = 0;
foreach ($clothes as $clothe => $price) {
    $total = $total + $price;
    // ou
    // $total += $price;
    $nbreArticle = $nbreArticle + 1;
    // ou
    // $nbreArcticle++;
    // le prix moyen 
    // moyenne est égal à price 
    $avg = $total / $nbreArticle;

    echo "</br></br> $clothe coûte $price euros. Mon total est de : $total euros, ça fait $nbreArticle article dans mon panier.";

    if($nbreArticle != 1) {
        echo "ça me fait un prix moyen de $avg euros.";
    }
};

