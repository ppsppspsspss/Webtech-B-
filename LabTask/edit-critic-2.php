<!DOCTYPE html>
<html>
<head>
    <title>Edit Critic</title>
</head>
<body>
    <?php
   
    $conn = mysqli_connect('localhost', 'root', '', 'LabTask');


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $id = $_GET['id'];
       
        $sql = "SELECT * FROM UserInfo WHERE ID = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);
            $id = $row["ID"];
            $fullname = $row["Fullname"];
            $username = $row["Username"];
            $country = $row["Country"];
            $phone = $row["Phone"];
            $gender = $row["Gender"];
            $email = $row["Email"];
            $dob = $row["DOB"];
            $password = $row["Password"];
            
        } else {
            echo "Critic not found.";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $id = $_POST["ID"];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $country = $_POST["country"];
            $phone = $_POST["phone"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            $password = $_POST["password"];

      
        $sql = "UPDATE UserInfo SET Fullname = $fullname, Username = $username, Country = '$country', Phone = '$phone', Gender = '$gender', Email = '$email', DOB = '$dob', Password = '$password' WHERE ID = $id";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "Critic Info Updated.";
        } else {
            echo "Error Updating Info: ";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>

            <input type="hidden" name="ID" value="<?php echo $id; ?>">

            <legend>Edit Critic</legend>
            Fullname::
            <input type="text" name="fullname" value="<?php echo $fullname; ?>" required><br>

            Username:
            <input type="text" name="username" value="<?php echo $username; ?>" required><br>

            Country:
            <input type="text" name="country" value="<?php echo $country; ?>" required><br>

            Phone:
            <input type="text" name="phone" value="<?php echo $phone; ?>" required><br>

            Gender:
            <input type="text" name="gender" value="<?php echo $gender; ?>" required><br>

            Email:
            <input type="text" name="email" value="<?php echo $email; ?>" required><br>

            Date Of Birth:
            <input type="text" name="dob" value="<?php echo $dob; ?>" required><br>

            Password:
            <input type="text" name="password" value="<?php echo $password; ?>" required><br>

            <input type="submit" value="Save">


        </fieldset>
    </form>
</body>
</html>