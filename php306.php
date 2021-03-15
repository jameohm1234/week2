<?php
    //The increment/decrement operators
    echo"The increment/decrement operators<hr />";
    $x = 100;
    $y = 50;
    
    if($x == 100 and $y == 50){
        echo "Hello world!(true)";
    }
    echo"<hr />";
?>

<?php
    $x = 100;
    $y = 50;

    if($x == 100 && $y == 50){
        echo "Thailand!(true)";
    }
    echo"<hr />";
?>

<?php
    $x = 100;
    $y = 50;

    if($x == 10 or $y == 80){
        echo "Mark Sakaberg(true)";
    }
    else{
        echo"false";
    }
    echo"<hr />";
?>

<?php
    $x = 100;
    $y = 50;

    if($x == 100 || $y == 80){
        echo "Steav(true)";
    }
    else{
        echo"false";
    }
    echo"<hr />";
?>

<?php
    $x = 100;

    if($x !== 90){
        echo "Jeff Festo(true)";
    }
    else{
        echo"false";
    }
    echo"<hr />";
?>