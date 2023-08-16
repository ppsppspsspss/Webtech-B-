<?php

require_once('specification-model.php');

$row = null;

if(isset($_POST['submit'])){

    global $row;
    $specification = $_POST['specification'];

    $row = searchSpecification($specification);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Specification</title>
</head>
<body>
<form action="#" method="post">

Specification: <br><input type="text" name="specification" required><br><br>
<button name="submit">Search Specification</button><br><br>
<table width=100% align="center" border="1" cellspacing="0" cellspadding="15">
        <tr>
            <td>
                Specification
            </td>
            <td>
                Screen Definition
            </td>
            <td>
                User Story
            </td>
            <td>
                Acceptance Criteria
            </td>
            <td>
                Wireframe 
            </td>
        </tr>
        <?php
        if($row != null){
                if(mysqli_num_rows($row)>0){
                    while($prow=mysqli_fetch_assoc($row)){
                echo "<tr><td> {$prow['Specification']} </td>";
                echo "<td> {$prow['ScreenDefinition']} </td>";
                echo "<td> {$prow['UserStory']} </td>";
                echo "<td> {$prow['AcceptanceCriteria']} </td>";
                echo "<td> <img width= 50px src=\"{$prow['Wireframe']}\"></td></tr>";
                }
                }
            }
        ?>
</table>
</form>
</body>
</html>