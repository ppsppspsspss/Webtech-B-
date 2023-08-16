<?php

require_once('feature-model.php');

$featureName = $_POST['featureName'];

if(addFeature($featureName)) echo("Success! New feature has been created.");
else "Error! Could not add feature. Please try again.";

?>