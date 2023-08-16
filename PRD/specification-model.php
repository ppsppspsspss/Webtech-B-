<?php

    require_once('database.php');

    $row;
    function addSpecification($specification, $screenDefinition, $userStory, $acceptanceCriteria, $wireframe){

        global $row;

        $con = dbConnection();
        $sql = "insert into Specification values('', '', '{$specification}' ,'{$screenDefinition}' ,'{$userStory}', '{$acceptanceCriteria}', '{$wireframe}')";

        if(mysqli_query($con, $sql)) return true;
        else return false;

    }

    function getSpecification($specification){

        $con = dbConnection();
        $sql = "SELECT * from Specification where Specification = '{$specification}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function getAllSpecification(){

        $con = dbConnection();
        $sql = "SELECT * from Specification";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function countSpecification()
    {
    global $id;
    $con = dbConnection();
    $sql = "SELECT COUNT(SpecificationID) AS count FROM Specification;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    return $count;
    }

    function searchSpecification($specification) {

        $con = dbConnection();
        $sql = "SELECT * FROM Specification WHERE Specification LIKE '%$specification%' ";
    
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function getSpecificationByID($projectID) {

        $con = dbConnection();
        $sql = "SELECT * FROM Specification WHERE ProjectID LIKE '%$projectID%'";
    
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function addSpecificationToProject($specificationID, $projectID){

        $con = dbConnection();
        $sql = "update Specification set ProjectID = '$projectID' where SpecificationID = '$specificationID';";
        if(mysqli_query($con,$sql)===true) return true;
        else return false; 

    }
    

?>