<?php

require_once('database.php');

function getAllDomain(){

        $con = dbConnection();
        $sql = "SELECT * from ProjectDomain";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getDomain($domainName){

        $con = dbConnection();
        $sql = "SELECT * from ProjectDomain where DomainName = '{$domainName}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function getDomainByID($domainID) {

        $con = dbConnection();
        $sql = "SELECT * FROM ProjectDomain WHERE DomainID LIKE '%$domainID%'";
    
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    
?>