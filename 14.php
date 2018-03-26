<?php

$min_array = array(200, 400, 500, 100, 400, 150);

sum($min_array);
avg($min_array);

function sum($min_array){
    echo (array_sum($min_array));
    echo "<br>";
}

    function avg($min_array) {
        echo (array_sum($min_array)/count($min_array));
    }
?>