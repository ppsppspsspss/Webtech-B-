<?php

    if(file_exists('login.php')) unlink('login.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Home</title>
</head>
<body>
<div>
<form action="transaction-controller.php" method="post">
<table id="loginPanel" cellspacing="15">
        <tr>
            <td>
                <font size="6">Transaction Form</font><br><br>
            </td>
        </tr>
        <tr>
            <td align="left">
                To <br><input type="text" name="to" required class="txtBox"><br><br>
                From <br><input type="text" name="from" required class="txtBox"><br><br>
                Amount <br><input type="text" name="amount" required class="txtBox" onkeyup="validateAmount()"><br><br>
                Signature <br><input type="text" name="signature" required class="txtBox"><br><br>
            </td>
        </tr>
        <tr>
            <td>
                <button class="btn" name="submit">Submit</button>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <a href="logout-controller.php">Log Out</a>
            </td>
        </tr>
    </table>
</form>
</div>
</body>
</html>