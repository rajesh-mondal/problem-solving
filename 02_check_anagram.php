<?php
    # Write your PHP code from here
    $line = trim( fgets( STDIN ) );

    $monitor = [];
    $output = "";
    for ( $i = 0; $i < strlen( $line ); $i++ ) {
        if ( $monitor[$line[$i]] == false ) {
            $monitor[$line[$i]] = true;
            $output = $output . $line[$i];
        }
    }

print $output;
?>