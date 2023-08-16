<?php

require_once('feature-model.php');
require_once('specification-model.php');
require_once('project-model.php');

$projectID = $_POST['projectName'];
$specification = $_POST['specification'];
$featureName = $_POST['featureName'];

$srow = getSpecification($specification);
$frow = getFeature($featureName);

$specificationID = $srow['SpecificationID'];
$featureID = $frow['FeatureID'];

if(addFeatureToProject($featureID, $projectID) && addSpecificationToProject($specificationID, $projectID)) echo "Feature/Specification adding successful";
else echo "Feature/Specification adding failed";

?>