<?php

    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $country = "Bangladesh";
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $role = "Critic";

    $conn = mysqli_connect('localhost', 'root', '', 'LabTask');

    $sql = "insert into UserInfo values('', '{$fullname}', '{$username}', '{$country}', '{$phone}', '{$gender}', '{$email}', '{$dob}', '{$password}', '{$role}')";
    if(mysqli_query($conn, $sql) === true) echo "Critic Added Successfully";

?>