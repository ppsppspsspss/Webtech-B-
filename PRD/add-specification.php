<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Specification</title>
</head>
<body>
<form action="add-specification-controller.php" method="post" enctype="multipart/form-data">
<table cellspacing="15" align="center">
        <tr>
            <td>
                Specification: <br><input type="text" name="specification" required><br><br>
                Screen Definition: <br><input type="text" name="screenDefinition" required><br><br>
                User Story: <br><input type="text" name="userStory" required><br><br>
                Acceptance Criteria: <br><input type="text" name="acceptanceCriteria" required><br><br>
                Wireframe: <br><br><input type="file" name="wireframe" required><br><br><br>
                <button name="submit">Add Specification</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>