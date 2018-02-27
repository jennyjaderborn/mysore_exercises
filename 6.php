<?php


//Skriv en funktion som returnerar en array med slumptal. Använd rand för att göra slumptal. Hur många argument behöver funktionen?



function return_array(){
    
        $a = rand(1,15);
        $b = rand(1,15);
        $c = rand(1,15);
        $d = rand(1,15);
        $e = rand(1,15);
    
        return compact('a','b','c', 'd', 'e');
    }
    
    
    $my_array = return_array();
    print_r($my_array);
    echo "<br/>";
    echo "<br/>";
            
    //skriver ut arrayen
    foreach($my_array as $value){
        echo "$value" . " ";
    }
