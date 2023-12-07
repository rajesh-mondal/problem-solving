<?php
    # Write your PHP code from here
    fscanf( STDIN, "%d %d %d", $wheels, $car_body, $figure );

    $max_car_from_wheels = floor( $wheels / 4 );
    $max_car_from_car_body = floor( $car_body / 1 );
    $max_car_from_figure = floor( $figure / 2 );

    print min( $max_car_from_wheels, $max_car_from_car_body, $max_car_from_figure );
?>