<?php

    require_once('database.php');

    $row;
    function login($username, $password){

        global $row;

        $con = dbConnection();
        $sql = "select * from UserInfo where Username ='{$username}' and Password ='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1) 
        {
        $row = mysqli_fetch_assoc($result);
        return $row;
        }
        else return false;

    }

?>