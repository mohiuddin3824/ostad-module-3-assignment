<?php

$text = "The quick brown fox jumps over the lazy dog";
function myString( $text ){ 
    $text2 = strtolower($text);

    $search = "brown";
    $replace = "red";

    $replaceData = str_replace($search,$replace, $text2);
    echo $replaceData;
}
myString( $text );

