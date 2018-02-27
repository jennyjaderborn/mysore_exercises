<?php
/*Skriv en funktion som gör om en array till en lista i HTML. Använd funktionen make_tag.

Exempel:

make_list( [1, 2] ) // "<ul> <li>1</li> <li>2</li> </ul>"*/


$list = array('blue', 'green', 'yellow', 'red');
make_list($list);

function make_list($list) {
    echo "<ul>";
    echo "<li>";
    echo implode("<li>", $list);
    echo "</ul>";

}