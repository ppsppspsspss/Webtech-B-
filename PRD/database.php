<?php

function dbConnection(){

    $conn = mysqli_connect('localhost', 'root', '', 'PRD');
    return $conn;
    
}

?>