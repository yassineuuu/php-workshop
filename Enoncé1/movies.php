<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Information about <?php if(isset($_GET['movie'])){echo htmlentities($_GET['movie']);}; ?>:</h1>
    <?php
    if(isset($_GET['actor'])){
        echo"Based on the input, here is the information so far: "."<br>";

        echo htmlentities($_GET['actor']);
    };

    if(isset($_GET['movie'])){
        echo " stared in the movie " . htmlentities($_GET['movie']);
    };
    if(isset($_GET['movie'])){
        echo " wich was realesed in " . htmlentities($_GET['year']);
        echo "<br>"."<br>"."<br>";
    };

?>


    <form action="movies.php" method="GET">
        <div>
            <label>movie name</label>
            <input type="text" name="movie">
        </div>
        <hr>
        <div>
            <label>actor name</label>
            <input type="text" name="actor">
        </div>
        <hr>
        <div>
            <label>release year</label>
            <input type="text" name="year">
        </div>
        <hr>

        <input type="submit" value="Submit">
    </form>
    
</body>
</html>