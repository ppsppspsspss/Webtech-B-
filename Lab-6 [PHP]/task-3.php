<!DOCTYPE html>
<html>
<head>
    <title>Task-3</title>
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
        $bPrice = $_POST['bPrice'];
        $sPrice = $_POST['sPrice'];
        if(isset($_POST['display'])) $display = 'yes';
        else $display = 'no';

      
        $sql = "UPDATE ProductInfo SET BuyingPrice = $bPrice, SellingPrice = $sPrice, Displayable = '$display' WHERE Name = '$name'";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "Product updated successfully.";
        } else {
            echo "Error updating product: ";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>

            <legend>EDIT PRODUCT</legend>
            Name:
            <input type="text" name="name" value="<?php echo $name; ?>" required><br>

            Buying Price:
            <input type="text" name="bPrice" value="<?php echo $bPrice; ?>" required><br>

            Selling Price:
            <input type="text" name="sPrice" value="<?php echo $sPrice; ?>" required><br>

            Displayable:
            <input type="checkbox" name="display" <?php if ($display == 'yes') echo "checked"; ?>><br>
            <input type="submit" value="Save">
        </fieldset>
    </form>
</body>
</html>