<?php
    # Write your PHP code from here
    fscanf( STDIN, "%d %d", $a, $b );

    if ( $a == 10 || $b == 10 || ( $a + $b ) == 10 ) {
        print "True";
    } else {
        print "False";
    }

?>