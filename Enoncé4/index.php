<!-- Factoriel -->

<form action="index.php" method="POST">
    <h2>Factoriel</h2>
    <input type="text" name="num" placeholder="Tap a number" autofocus>
    <input type="submit" value="Factoriel">
</form>



<?php
    function Factoriel($a){
        if($a==0) return 1; else return $a*Factoriel($a-1);
    };

    if(isset($_POST['num'])){
        echo Factoriel($_POST['num']);
    };

?>
<hr>

<!-- Somme -->

<form action="index.php" method="POST">
    <h2>Somme</h2>
    <input type="text" name="num1" placeholder="Tap a number" > +
    <input type="text" name="num2" placeholder="Tap a number" >
    <input type="submit" value="Sum">
</form>
<?php

    function Sum($a, $b){
        return $a+$b;
    };

    if(isset($_POST['num1']) && isset($_POST['num2'])){
        echo Sum($_POST['num1'], $_POST['num2']);
    };

?>
<hr>
<!-- Nombre premier ou non -->

<form action="index.php" method="POST">
    <h2>Evaluation de Num</h2>
    <input type="text" name="number" placeholder="Tap a number">
    <input type="submit" value="Evaluate">
</form>

<?php

    function Evaluate($number){
        if ($number == 1) 
        return 0; 
          
        for ($i = 2; $i <= sqrt($number); $i++){ 
            if ($number % $i == 0) 
                return 0; 
        } 
        return 1; 
    
    };
    if(isset($_POST["number"])){
    echo "<h3>Is the number prime?</h3><br>";
    $op = Evaluate($_POST["number"]); 
    
    if ($op == 1) 
        echo "true"; 
    else
        echo "false";
    };

?>
<hr>

<!-- Perform Operation  -->
