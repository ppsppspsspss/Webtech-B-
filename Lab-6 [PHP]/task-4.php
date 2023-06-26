<!DOCTYPE html>
<html>
<head>
    <title>Task-4</title>
</head>
<body>
    <?php
    
    $conn = mysqli_connect('localhost:3308', 'root', '', 'LabTask');


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $name = $_GET['id'];
        
        $sql = "SELECT * FROM ProductInfo WHERE Name = '$name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);
            $name = $row["Name"];
            $bPrice = $row["BuyingPrice"];
            $sPrice = $row["SellingPrice"];
            $display = $row["Displayable"];

        } else {
            echo "Product not found.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];

        $sql = "DELETE FROM ProductInfo WHERE Name = '$name'";

        if (mysqli_query($conn, $sql) === TRUE) {

            echo "Product deleted successfully.";

        } else {
            echo "Error deleting product";
        }
    }

    ?>

    <fieldset>
        <legend>DELETE PRODUCT</legend>

        Name:
        <?php echo isset($name) ? $name : ""; ?><br><br>

        Buying Price:
        <?php echo isset($bPrice) ? $bPrice : ""; ?><br><br>

        Selling Price:
        <?php echo isset($sPrice) ? $sPrice : ""; ?><br><br>

        Displayable:
        <?php echo isset($display) ? ($display == 'yes' ? "Yes" : "No") : ""; ?><br><br>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="submit" value="Delete">
            <input type="hidden" name="name" value="<?php echo isset($name) ? $name : ""; ?>">

        </form>
    </fieldset>
</body>
</html>