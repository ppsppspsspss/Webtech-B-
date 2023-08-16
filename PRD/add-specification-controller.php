<?php

require_once('specification-model.php');

$specification = $_POST['specification'];
$screenDefinition = $_POST['screenDefinition'];
$userStory = $_POST['userStory'];
$acceptanceCriteria = $_POST['acceptanceCriteria'];
$src = $_FILES['wireframe']['tmp_name'];

$fileName = 'images/'.$_FILES['wireframe']['name'];
$des = "images/".$_FILES['wireframe']['name'];
move_uploaded_file($src, $des);


if(addSpecification($specification, $screenDefinition, $userStory, $acceptanceCriteria, $fileName)) echo("Success! New specification has been created.");
else "Error! Could not add specification. Please try again.";

?>