<?php 

    //connect to database
    $conn = mysqli_connect('localhost', 'shaun', 'test123', 'ninja_pizza_php');

    //check connection
    if (!$conn) {
        # code...
        echo 'Connection error: ' . mysqli_connect_error();
    }



?>