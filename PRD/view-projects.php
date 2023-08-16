<?php

require_once('project-model.php');

$result = getAllProject();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Project</title>
</head>
<body>
<table width=15% border="1" cellspacing="0" cellspadding="15">
        <tr>
            <td>
                Project Name
            </td>
            <td>
                Action
            </td>
        </tr>
        <?php
            if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td> {$row['ProjectName']} </td>";
                echo "<td> <a href=\"view-projects-controller.php?id={$row['ProjectID']}\"><button>Show Details</button></a></td></tr>";
                }
            }
        ?>
</table>
</body>
</html>