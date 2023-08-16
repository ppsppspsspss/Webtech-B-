<?php

require_once('project-domain-model.php');

$row = getAllDomain();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
</head>
<body>
<form action="create-project-controller.php" method="post">
<table cellspacing="15" align="center">
        <tr>
            <td>
                Project Name: <br><input type="text" name="projectName" required><br><br>
                Domain: <br><select name="domain">
                <?php
                if(mysqli_num_rows($row)>0){
                    while($prow=mysqli_fetch_assoc($row)){
                echo "<option value='" . $prow['DomainName'] . "'>" . $prow['DomainName'] . "</option>";
                }
                }
                ?>    
                </select><br><br>
                <button name="submit">Create Project</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>