<?php
    # Write your PHP code from here
    fscanf( STDIN, "%d %d", $price, $discount );

    $discountAmount = ( $price * $discount / 100 );
    $finalPrice = $price - $discountAmount;
    print "Price: " . number_format( (float) $finalPrice, 2, '.', '' );
?>