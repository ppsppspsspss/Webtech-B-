<?php

    require_once('database.php');

    $row;
    function createProject($projectName, $projectDomainID){

        global $row;

        $con = dbConnection();
        $sql = "insert into Project values('', '{$projectName}' ,'{$projectDomainID}')";

        if(mysqli_query($con, $sql)) return true;
        else return false;

    }
    function getAllProject(){

        $con = dbConnection();
        $sql = "SELECT * from Project";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function countProject()
    {
    global $id;
    $con = dbConnection();
    $sql = "SELECT COUNT(ProjectID) AS count FROM Project;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    return $count;
    }

    function searchProject($domainID) {

        $con = dbConnection();
        $sql = "SELECT * FROM Project WHERE DomainID LIKE '%$domainID%' ";
    
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getProject($projectID) {

        $con = dbConnection();
        $sql = "SELECT * FROM Project WHERE ProjectID LIKE '%$projectID%' ";
    
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

?>