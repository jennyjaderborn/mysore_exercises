<?php

make_tag('h2', 'Hejsan', "style='color:red'");

function make_tag($tag, $text, $inlineStyle){
echo "<";
echo "$tag";
echo " $inlineStyle";
echo ">";
echo "$text";
echo "</";
echo "$tag";
echo ">";
}
//<p style="color: red;">heeej</p>

?>