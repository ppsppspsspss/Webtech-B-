<?php

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $country = $_POST["country"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $role = "General User";

    $conn = mysqli_connect('localhost', 'root', '', 'LabTask');

    $sql = "insert into UserInfo values('', '{$fullname}', '{$username}', '{$country}', '{$phone}', '{$gender}', '{$email}', '{$dob}', '{$password}', '{$role}')";
    if(mysqli_query($conn, $sql) === true) echo "Account Creation Successful";

?>