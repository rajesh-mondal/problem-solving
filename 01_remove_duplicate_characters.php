<?php
    # Write your PHP code from here
    $line = trim(fgets(STDIN));

    $monitor = [];
    $output = "";
    for($i=0; $i<strlen($line); $i++){
        if($monitor[$line[$i]] == false){
            $monitor[$line[$i]] = true;
            $output = $output.$line[$i];
        }
    }

    print $output;
?>

<!-- Problem 1.
Write a program that removes duplicate characters from a given string, 
keeping only the first occurrence of each character. -->