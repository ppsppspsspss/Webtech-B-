<?php

require_once('project-model.php');
require_once('feature-model.php');
require_once('specification-model.php');


$prow = getAllProject();
$frow = getAllFeature();
$srow = getAllSpecification();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Feature/Specification to Project</title>
</head>
<body>
<form action="update-project-controller.php" method="post">
<table cellspacing="15" align="center">
        <tr>
            <td>
                Project: <br><select name="projectName">
                <?php
                if(mysqli_num_rows($prow)>0){
                while($pprow=mysqli_fetch_assoc($prow)){
                echo "<option value='" . $pprow['ProjectID'] . "'>" . $pprow['ProjectName'] . "</option>";
                }

                }
                ?>    
                </select><br><br>
                Specification: <br><select name="specification">
                <?php
                if(mysqli_num_rows($srow)>0){
                    while($ssrow=mysqli_fetch_assoc($srow)){
                echo "<option value='" . $ssrow['Specification'] . "'>" . $ssrow['Specification'] . "</option>";
                }
                }
                ?>    
                </select><br><br>
                Feature: <br><select name="featureName">
                <?php
                if(mysqli_num_rows($frow)>0){
                    while($ffrow=mysqli_fetch_assoc($frow)){
                echo "<option value='" . $ffrow['FeatureName'] . "'>" . $ffrow['FeatureName'] . "</option>";
                }
                }
                ?>    
                </select><br><br>
                <button name="submit">Add to Project</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>