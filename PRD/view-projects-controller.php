<?php 

require_once('project-model.php');
require_once('project-domain-model.php');
require_once('specification-model.php');
require_once('feature-model.php');

$pid = $_GET['id'];
$prow = getProject($pid);
$did = $prow['DomainID'];
$drow = getDomainByID($did);
$sresult = getSpecificationByID($pid);
$fresult = getFeatureByID($pid);

$projectName = $prow['ProjectName'];
$domainName = $drow['DomainName'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Project</title>
</head>
<body>
<table align="center" width=50% border="1" cellspacing="0">
        <tr>
            <td colspan="5">
                Project Title: <?php echo $projectName; ?>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                Domain: <?php echo $domainName; ?>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                Feature:
            </td>
        </tr>
        <?php
            if(mysqli_num_rows($fresult)>0){
                    while($frow=mysqli_fetch_assoc($fresult)){
                echo "<tr><td colspan=\"5\">{$frow['FeatureName']} </td></tr>";
                }
            }
        ?>
        <?php
            if(mysqli_num_rows($sresult)>0){
                    while($srow=mysqli_fetch_assoc($sresult)){
                echo "<tr><td> {$srow['Specification']} </td>";
                echo "<td> {$srow['ScreenDefinition']} </td>";
                echo "<td> {$srow['UserStory']} </td>";
                echo "<td> {$srow['AcceptanceCriteria']} </td>";
                echo "<td> <img width= 50px src=\"{$srow['Wireframe']}\"></td></tr>";
                }
            }
        ?>
</table>
</body>
</html>