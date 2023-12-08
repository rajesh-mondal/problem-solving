<?php
    # Write your PHP code from here
    fscanf( STDIN, "%s %s", $large, $small );

    $count = 0;
    for ( $i = 0; $i < strlen( $large ); $i++ ) {
        $match = true;
        for ( $j = 0; $j < strlen( $small ); $j++ ) {
            if ( $large[$i + $j] != $small[$j] ) {
                $match = false;
                break;
            }
        }
        if ( $match ) {
            $count++;
        }

    }
    print $count;
?>