<form action="activity-movies.php" method="POST">
    <h3>vous pouvez saisie les valeurs pour obtenir les réalisateurs et leurs films</h3>
    <div>
        <label>Réalisateurs</label>
        <input type="text" name="num1" placeholder="nombre des réalisateurs" > 
    
    <label>Films</label>
    <input type="text" name="num2" placeholder="nombre des films" >

    <input type="submit" value="Submit">

    </div>
    <br>
</form>
<hr>
<br>

<?php

    
    $films_length=$_POST['num2'];
    $réalisateurs_length=$_POST['num1'];



    // les tableaux
    $réalisateurs=array("Steven Spielberg","Martin Scorsese","Quentin Tarantino","Christopher Nolan","Louis Leterrier");
    $films=array(
        "Steven Spielberg" =>["The Post", "Le pont des espions","Jurassic Park","Indiana Jones","Ready Player One"],
        "Martin Scorsese" =>["Le Loup de Wall Street", "Hugo","George Harrison: Living in the Material World","Shutter Island","Les Affranchis"],
        "Quentin Tarantino" =>["Reservoir Dogs","Pulp Fiction","Jackie Brown","Django Unchainedl","Once Upon a Time… in Hollywood"],
        "Christopher Nolan" =>["Quai","Dunkerque","The Dark Knight Rises","Inception","Interstellar"],
        "Louis Leterrier" =>["Danny the Dog","Transporter","Unleashed","Clash of the Titans","The Incredible Hulk"]
    );
    
    // l'opération
    if(isset($réalisateurs_length) && isset($films_length)){
        for($i=0; $i<$réalisateurs_length; $i++){
            echo "<h2>"."Les films de $réalisateurs[$i] :"."</h2>";
            echo "<br>";
            echo "<br>";
            for($z=0; $z<$films_length; $z++){
                echo $films[$réalisateurs[$i]][$z];
                echo "<br>";
            }
            echo"<hr>";
        };
    };
?>