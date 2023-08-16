<?php

require_once('project-model.php');
require_once('project-domain-model.php');

$row = null;

if(isset($_POST['submit'])){

    global $row;
    $domain = $_POST['domain'];
    $drow = getDomain($domain);

    $domainID = $drow['DomainID'];

    $row = searchProject($domainID);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Project</title>
</head>
<body>
<form action="#" method="post">

Domain: <br><input type="text" name="domain" required><br><br>
<button name="submit">Search Specification</button><br><br>
<table width=20% border="1" cellspacing="0" cellspadding="15">
        <tr>
            <td>
                Project Name
            </td>
        </tr>
        <?php
        if($row != null){
                if(mysqli_num_rows($row)>0){
                    while($prow=mysqli_fetch_assoc($row)){
                echo "<tr><td> {$prow['ProjectName']} </td>";
                }
                }
            }
        ?>
</table>
</form>
</body>
</html>