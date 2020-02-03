<?php 
    $letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "W", "Z"];

    $l = count($letters) - 1; // Length table letter;
    $r = rand(0, $l); // Random number;
    
    echo $letters[$r];
?>