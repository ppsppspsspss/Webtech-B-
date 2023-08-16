<?php 

require_once('user-info-model.php');

$username = $_POST['username'];
$password = $_POST['password'];
$status = login($username, $password);

if ($status != false) {
    if ($status['Role'] == "Analyst") header('location: analyst-home.php');
    else if ($status['Role'] == "Administrator") header('location: admin-home.php');
} else {
    echo "Could not sign-in. Invalid login credentials.";
}

?>
