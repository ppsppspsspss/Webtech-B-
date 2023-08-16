<?php

    require_once('database.php');

    $row;
    function addFeature($featureName){

        global $row;

        $con = dbConnection();
        $sql = "insert into Feature values('', '{$featureName}', '')";

        if(mysqli_query($con, $sql)) return true;
        else return false;

    }

    function getFeature($featureName){

        $con = dbConnection();
        $sql = "SELECT * from Feature where FeatureName = '{$featureName}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function getAllFeature(){

        $con = dbConnection();
        $sql = "SELECT * from Feature";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function countFeature()
    {
    global $id;
    $con = dbConnection();
    $sql = "SELECT COUNT(FeatureID) AS count FROM Feature;";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];
    return $count;
    }

    function getFeatureByID($projectID) {

        $con = dbConnection();
        $sql = "SELECT * FROM Feature WHERE ProjectID LIKE '%$projectID%' ";
    
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function addFeatureToProject($featureID, $projectID){

        $con = dbConnection();
        $sql = "update Feature set ProjectID = '$projectID' where FeatureID = '$featureID';";
        if(mysqli_query($con,$sql)===true) return true;
        else return false; 

    }

?>