<!DOCTYPE html>
<html>
<head>
    <title>Task-2</title>
</head>
<body>
    <?php
    
    $conn = mysqli_connect('localhost:3308', 'root', '', 'LabTask');

    $sql = "SELECT Name, BuyingPrice, SellingPrice FROM ProductInfo WHERE Displayable = 'yes'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<fieldset><legend>DISPLAY</legend><table border=1 width = 20%>
                <tr>
                    <th>Name</th>
                    <th>Profit</th>
                    <th>Manage</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["Name"];
            $bPrice = $row["BuyingPrice"];
            $sPrice = $row["SellingPrice"];
            $profit = $sPrice - $bPrice;

            echo "<tr>
                    <td>$name</td>
                    <td>$profit</td>
                    <td>
                        <a href=\"task-3.php?id=$name\">Edit</a> |
                        <a href=\"task-4.php?id=$name\">Delete</a>
                    </td>
                </tr>";
        }
        echo "</table></fieldset>";
    } else {
        echo "No products found.";
    }
    ?>
</body>
</html>