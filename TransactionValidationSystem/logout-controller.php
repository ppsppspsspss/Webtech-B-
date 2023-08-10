<?php

session_start();
session_destroy();
setcookie("id", "", time()-1, "/");

header("location:sign-in.html");

?>