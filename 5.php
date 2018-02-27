<?php

newLine("Det snöar ute.\nOch det är kallt.");


function newLine($text) {
    echo nl2br("$text");
    return $text;
}

