/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

<?php 

    $arrayNumeri = [];

    for ( $i = 0 ; $i < 16 ; $i++) {

        $numeroRandom = rand(1,50);

        if (!in_array($numeroRandom,$arrayNumeri)) {
            array_push($arrayNumeri,$numeroRandom);
            echo "<br>";
            echo $numeroRandom; 
        }  
    }
?>


