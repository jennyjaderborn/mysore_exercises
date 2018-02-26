<?php

make_tag('h2', 'Hejsan');

function make_tag($tag, $text){
echo "<";
echo "$tag";
echo ">";
echo "$text";
echo "</";
echo "$tag";
echo ">";
}


?>