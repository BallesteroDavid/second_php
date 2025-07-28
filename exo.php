<?php
// me faire un tableau associatif d'élèves des résultats d'une course [nom / temps / place / date de naissance / sexe] (le tableau est range du meilleur temps au moins bon).

// affichez uniquement ceux qui ont un temps pair (à la seconde).

// affichez le temps moyen de tous les coureurs 

// affichez les participants par date de naissance décroissante

// affichez les participants hommes en vert et les femmes en blue

// $participants = [
//     11["nom" => "Alice Martin",     "temps" => "00:42:15", "date_naissance" => "1990-04-15", "sexe" => "F"],
//     6["nom" => "Jean Dupont",      "temps" => "00:39:50", "date_naissance" => "1985-08-30", "sexe" => "M"],
//     15["nom" => "Lucie Durant",     "temps" => "00:44:10", "date_naissance" => "1992-02-20", "sexe" => "F"],
//     3["nom" => "Marc Lefevre",     "temps" => "00:38:30", "date_naissance" => "1988-11-11", "sexe" => "M"],
//     20["nom" => "Sophie Bernard",   "temps" => "00:47:22", "date_naissance" => "1995-03-05", "sexe" => "F"],
//     7["nom" => "Antoine Petit",    "temps" => "00:40:05", "date_naissance" => "1991-06-14", "sexe" => "M"],
//     14["nom" => "Julie Faure",      "temps" => "00:43:33", "date_naissance" => "1994-10-21", "sexe" => "F"],
//     17["nom" => "Paul Morel",       "temps" => "00:45:15", "date_naissance" => "1987-07-09", "sexe" => "M"],
//     9["nom" => "Emma Thomas",      "temps" => "00:41:22", "date_naissance" => "1993-12-01", "sexe" => "F"],
//     4["nom" => "Louis Robert",     "temps" => "00:39:10", "date_naissance" => "1990-01-17", "sexe" => "M"],
//     18["nom" => "Manon Garcia",     "temps" => "00:46:40", "date_naissance" => "1996-09-25", "sexe" => "F"],
//     1["nom" => "Hugo Girard",      "temps" => "00:37:45", "date_naissance" => "1989-05-30", "sexe" => "M"],
//     13["nom" => "Camille Legrand",  "temps" => "00:43:01", "date_naissance" => "1991-08-10", "sexe" => "F"],
//     8["nom" => "Nathan Guerin",    "temps" => "00:40:45", "date_naissance" => "1993-04-18", "sexe" => "M"],
//     16["nom" => "Laura Blin",       "temps" => "00:44:55", "date_naissance" => "1997-07-13", "sexe" => "F"],
//     10["nom" => "Benoît Rolland",   "temps" => "00:41:55", "date_naissance" => "1986-02-02", "sexe" => "M"],
//     19["nom" => "Marine Lopez",     "temps" => "00:47:00", "date_naissance" => "1992-11-29", "sexe" => "F"],
//     2["nom" => "Romain Adam",      "temps" => "00:38:10", "date_naissance" => "1990-05-15", "sexe" => "M"],
//     12["nom" => "Clara Michon",     "temps" => "00:42:40", "date_naissance" => "1995-01-01", "sexe" => "F"],
//     5["nom" => "Thomas Delmas",    "temps" => "00:39:30", "date_naissance" => "1988-03-19", "sexe" => "M"],
// ];


$participants = [

    [
        "name" => "Hugo Girard",
        "time" => 2265, 
        "birthday" => "1989-05-30",
        "gender" => "M"
    ],
    [
        "name" => "Romain Adam",   
        "time" => 2290, 
        "birthday" => "1990-05-15", 
        "gender" => "M"
    ],
    [
        "name" => "Marc Lefevre",  
        "time" => 2310, 
        "birthday" => "1988-11-11", 
        "gender" => "M"
    ],
    [
        "name" => "Louis Robert",  
        "time" => 2350, 
        "birthday" => "1990-01-17", 
        "gender" => "M"
    ],
    [
        "name" => "Thomas Delmas",    
        "time" => 2370, 
        "birthday" => "1988-03-19", 
        "gender" => "M"
    ],
    [   "name" => "Jean Dupont",      
        "time" => 2390, 
        "birthday" => "1985-08-30", 
        "gender" => "M"
    ],
    [
        "name" => "Antoine Petit",    
        "time" => 2405, 
        "birthday" => "1991-06-14", 
        "gender" => "M"
    ],
    [
        "name" => "Nathan Guerin",    
        "time" => 2445, 
        "birthday" => "1993-04-18", 
        "gender" => "M"
    ],
    [
        "name" => "Emma Thomas",      
        "time" => 2482, 
        "birthday" => "1993-12-01", 
        "gender" => "F"
    ],
    [
        "name" => "Benoît Rolland",   
        "time" => 2515, 
        "birthday" => "1986-02-02", 
        "gender" => "M"
    ],
    [
        "name" => "Alice Martin",     
        "time" => 2535, 
        "birthday" => "1990-04-15", 
        "gender" => "F"
    ],
    [
        "name" => "Clara Michon",     
        "time" => 2560, 
        "birthday" => "1995-01-01", 
        "gender" => "F"
    ],
    [
        "name" => "Camille Legrand",  
        "time" => 2581, 
        "birthday" => "1991-08-10", 
        "gender" => "F"
    ],
    [
        "name" => "Julie Faure",      
        "time" => 2613, 
        "birthday" => "1994-10-21", 
        "gender" => "F"
    ],
    [
        "name" => "Lucie Durant",     
        "time" => 2650, 
        "birthday" => "1992-02-20", 
        "gender" => "F"
    ],
    [
        "name" => "Laura Blin",       
        "time" => 2695, 
        "birthday" => "1997-07-13", 
        "gender" => "F"
    ],
    [
        "name" => "Paul Morel",       
        "time" => 2715, 
        "birthday" => "1987-07-09", 
        "gender" => "M"
    ],
    [
        "name" => "Manon Garcia",     
        "time" => 2800, 
        "birthday" => "1996-09-25", 
        "gender" => "F"
    ],
    [
        "name" => "Marine Lopez",     
        "time" => 2820, 
        "birthday" => "1992-11-29", 
        "gender" => "F"
    ],
    [
        "name" => "Sophie Bernard",   
        "time" => 2842, 
        "birthday" => "1995-03-05", 
        "gender" => "F"
    ]
];
// $nbrParticipants = count($participants);
// var_dump($nbrParticipants);
// $totalTime = 0;

// foreach($participants as $participant){
//     $secondes = substr($participant["time"], -2);
//     // $timeAvg = totalTime($participant["time"]);
//     if ($secondes % 2 === 0){
//         echo "$participant[name] $secondes" . "<br>";
//     }
// };

// foreach($participants as $participant){
//     $totalTime += $participant['time'];
//     echo "<br>";
// };
// var_dump($totalTime); 
// le temps total => $totalTime = (50633) en secondes
// on fait la moyenne, le temps total ($totalTime) de tout les participants diviser par le nombre de participant ($nbrParticipants)
// $moyenne = $totalTime / $nbrParticipants;
// var_dump($moyenne);

// round() => arrondir un nombre, $moyenne => moyenne temps, 2 => on garde 2 chiffres après la virgule
// les "." en PHP est l'opérateur de concaténation => sert à coller du texte ou des variables ensemble
// echo "La moyenne des temps est de " . round($moyenne, 2) . " secondes.";

// affichez les participants par date de naissance décroissante
// $birthday = array("birthday");
// // arsort($birthday);
// var_dump($birthday);
// foreach($birthday )
$birthday = $participant('birthday');
var_dump($birthday);
foreach($participants as $participant) {

}


