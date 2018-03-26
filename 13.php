<?php

$number = 4.6;

float_to_string($number);

function float_to_string($number){
    echo (str_replace(".", ",", $number));
}

?>