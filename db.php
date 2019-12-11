<?php
    $db = mysqli_connect('localhost', 'root', '12345', 'my_work');

    if( $db ){
        // echo "Database connected";
    }
    else {
        echo "connection error";
    }

?>