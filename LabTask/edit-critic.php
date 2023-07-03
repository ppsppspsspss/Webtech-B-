<!DOCTYPE html>
<html>
<head>
    <title>Edit Critic</title>
</head>
<body>
    <?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'LabTask');

    $sql = "SELECT ID, Fullname, Email FROM UserInfo WHERE Role = 'Critic'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<fieldset><legend>Edit Critic</legend><table border=1 cellspacing=0 width = 20%>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["Fullname"];
            $email = $row["Email"];
            $id = $row["ID"];

            echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>
                        <a href=\"edit-critic-2.php?id=$id\">Edit</a> 
                    </td>
                </tr>";
        }
        echo "</table></fieldset>";
    } else {
        echo "No critics found.";
    }
    ?>
</body>
</html>