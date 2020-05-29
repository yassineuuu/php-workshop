<?php
    $info=[
        "name" => "yassine",
        "weightKg" => 62,
        "heightCm" =>164
    ];
    $heightM = $info["heightCm"]*0.01;
    $heightCar =$heightM*$heightM;


    echo "Mr.Mme ".$info["name"]." le résultats de l'IMC est le suivant:\n";
    echo "<br>";
    echo "la hauteur en mètres: $heightM \n"; 
    echo "<br>";
    echo "la hauteur en mètres au carré: $heightCar \n";
    echo "<br>";
    echo "Donc l' IMC est: ". $info["weightKg"]/$heightCar
    
?>