<?php

    $réalisateurs=array("Steven Spielberg","Martin Scorsese","Quentin Tarantino","Christopher Nolan","Louis Leterrier");
    $films=array(
        "Steven Spielberg" =>["The Post", "Le pont des espions","Jurassic Park","Indiana Jones","Ready Player One"],
        "Martin Scorsese" =>["Le Loup de Wall Street", "Hugo","George Harrison: Living in the Material World","Shutter Island","Les Affranchis"],
        "Quentin Tarantino" =>["Reservoir Dogs","Pulp Fiction","Jackie Brown","Django Unchainedl","Once Upon a Time… in Hollywood"],
        "Christopher Nolan" =>["Quai","Dunkerque","The Dark Knight Rises","Inception","Interstellar"],
        "Louis Leterrier" =>["Danny the Dog","Transporter","Unleashed","Clash of the Titans","The Incredible Hulk"]
    );
    
    for($i=0; $i<sizeof($réalisateurs); $i++){
        echo "<h2>"."Les films de $réalisateurs[$i] :"."</h2>";
        echo "<br>";
        echo "<br>";
        for($z=0; $z<sizeof($films); $z++){
            echo $films[$réalisateurs[$i]][$z];
            echo "<br>";
        }
        echo"<hr>";
    };
?>