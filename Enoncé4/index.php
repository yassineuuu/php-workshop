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
<?php
    // somme function
    function somme($a, $b){
        return $a+$b;
    };

    // factoriel function
    function factorielle($a){
        if($a==0) return 1; else return $a*Factoriel($a-1);
    };

    //number is prime function
    function nombre_premier($a){
        $int=$a;
        function evaluer($int){
            if ($int == 1) 
            return 0; 
              
            for ($i = 2; $i <= sqrt($int); $i++){ 
                if ($int % $i == 0) 
                    return 0; 
            } 
            return 1; 
        
        };
        
        echo "<h3>Is $int prime?</h3><br>";
        $op = Evaluate($int); 
        
        if ($op == 1) 
            echo "true"; 
        else
            echo "false";
        };
    

    // Callback function
    function performOperation($abc, $a=0, $b=0){
       echo call_user_func($abc, $a, $b);
    }

    // try and change the first parametre to (factorielle/somme/nombre_premier) and tap a number as a second parametre
    // if you chosed (somme) make sure to tap the 2 numbers you want to sum =>ex "echo performOperation('somme',9,1)" the output of that should be 10
    
    echo performOperation('nombre_premier',9);
?>
