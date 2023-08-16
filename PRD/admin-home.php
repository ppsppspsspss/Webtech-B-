<?php

require_once('feature-model.php');
require_once('user-info-model.php');
require_once('specification-model.php');
require_once('project-model.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <p align="right"><a href="login.html">Log Out</a>&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <table cellspacing="15" align="center">
        <tr>
            <td>
                Total Number of Specifications <?php echo " ".countSpecification()?><br><br>
                Total Number of Features <?php echo " ".countFeature()?><br><br>
                Total Number of Projects <?php echo " ".countProject()?><br><br>
                Total Number of Analysts <?php echo " ".countAnalyst()?><br><br>
                <a href="view-projects.php">View All Projects</a><br><br>
                <a href="search-project.php">Search Project</a><br><br>
            </td>
        </tr>
    </table>
</body>
</html>