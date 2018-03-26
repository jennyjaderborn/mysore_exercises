<?php
$day = "TISDAG";

$day = strtolower($day);
returnNumber($day);

function returnNumber($day){
    if($day == "måndag"){
        echo "1";
    }
    else if($day == "tisdag"){
        echo "2";
    }
    else if($day == "onsdag"){
        echo "3";
    }
    else if($day == "torsdag"){
        echo "4";
    }
    else if($day == "fredag"){
        echo "5";
    }
    else if($day == "lördag"){
        echo "6";
    }
    else if($day == "söndag"){
        echo "7";
    }

}

/*Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.

Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.*/

?>