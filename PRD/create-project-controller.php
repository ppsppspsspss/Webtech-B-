<?php

require_once('project-model.php');
require_once('project-domain-model.php');

$projectName = $_POST['projectName'];
$domain = $_POST['domain'];

$row = getDomain($domain);

$domainID = $row['DomainID'];

if(createProject($projectName, $domainID)) echo "Project creation successful";
else echo "Project creation failed";

?>