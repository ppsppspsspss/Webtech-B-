<?php

function dbConnection(){

    $conn = mysqli_connect('localhost', 'root', '', 'TransactionValidationSystem');
    return $conn;
    
}

?>